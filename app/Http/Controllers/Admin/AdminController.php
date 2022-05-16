<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Crypt;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        } 
        return view('admin.login');
    }
    public function auth(Request $request)
    {
        $email      = $request->post('email');
        $password   = $request->post('password');

        $result = Admin::where(['email'=>$email])->first();
		
        if($result){
			if($result->role == 'admin'){
				if(Hash::check($request->post('password'),$result->password)){					
					$request->session()->put('ADMIN_LOGIN',true);
					$request->session()->put('ADMIN_ID',$result->id);
					return redirect('admin/dashboard');
				}else{
					$request->session()->flash('error', 'Please enter valid login details');
					return redirect('login');  
				}
			}else if($result->role == 'user'){
				$db_pwd 	= Crypt::decrypt($result->password);
				if($db_pwd==$request->password){					
					$request->session()->put('USER_LOGIN',true);
					$request->session()->put('USER_ID',$result->id);
					$request->session()->put('USER_NAME',$result->name);
					
					DB::table('admins')
					->where('id', $result->id)
					->update(['login_at' => Carbon::now()->toDateTimeString(), 'ip_address' => $request->getClientIp(), 'user_agent' => $_SERVER['HTTP_USER_AGENT']]);
										
					return redirect('user/dashboard');
				}else{
					$request->session()->flash('error', 'Please enter valid login details user');
					return redirect('login');  
				}
			}				            
        }else{
            $request->session()->flash('error', 'Please enter correct password.');
            return redirect('login'); 
        }       
    }

    public function dashboard()
    {
		$result['users']= DB::table('admins')
									->where(['role'=>'user'])
									->get(); 
									
        return view('admin.dashboard',$result);
    }
	
	/* public function updatepassword()
    {
        $r = Admin::find(1);
        $r->password=Hash::make('admin');
        $r->save();
    }  */
	
	
	public function register(Request $request)
    {
        return view('admin.register');
    }
	
	public function registration(Request $request)
    {
        $valid = Validator::make($request->all(),[
			"name" 		=>'required',
			"email" 	=>'required|email|unique:admins,email',
			"password" 	=>'required',
		]);  
		if($valid->passes()){
			$arr = [
				"name" 		=> $request->name,
				"email" 	=> $request->email,
				"role" 		=> 'user',
				"password" 	=> Crypt::encrypt($request->password),
				"created_at"=> date('Y-m-d h:i:s'),
				"updated_at"=> date('Y-m-d h:i:s')
			];
			$query = DB::table('admins')->insert($arr);
			if($query){
				$request->session()->flash('success', 'Your registration successfully.');
                return redirect('register'); 
			}
		}else{
			$request->session()->flash('error', $valid->messages()->first());
			return redirect('register'); 
		}
    }
	
	public function userdashboard()
    {	
		$result['loginat']= DB::table('admins')
								->select('login_at')
								->where(['id'=>session()->get('USER_ID')])
								->get();
		$result['login_at'] = $result['loginat'][0]->login_at;							
        return view('user.dashboard',$result); 
    } 
	
	public function logout(Request $request) 
	{
		
		DB::table('admins')
					->where('id', session()->get('USER_ID'))
					->update(['logout_at' => Carbon::now()->toDateTimeString()]);
					
		session()->forget('USER_LOGIN');
		session()->forget('USER_ID');
		session()->forget('FRONT_USER_NAME');
		session()->forget('USER_NAME');
		return redirect('login');
		
	}
	
	
	
	public function userlist(Request $request)
	{		
		return $userslist = DB::table('admins')
									->where(['role'=>'user'])
									->get(); 
	}
	
}
