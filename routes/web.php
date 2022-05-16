<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login',[AdminController::class,'index']);
Route::post('login/auth',[AdminController::class,'auth'])->name('login.auth'); 

Route::get('register',[AdminController::class,'register']);
Route::post('registration',[AdminController::class,'registration'])->name('registration');  


/*ADMIN MIDDLEWARE ROUTE*/
Route::group(['middleware'=>'admin_auth'], function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    //Make password decrypt
    //Route::get('admin/updatepassword',[AdminController::class,'updatepassword']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout sucessfully');
        return redirect('login');
    });
}); 
/*ADMIN MIDDLEWARE ROUTE*/


/*USER MIDDLEWARE ROUTE*/
Route::group(['middleware'=>'user_auth'], function(){
	Route::get('user/dashboard',[AdminController::class,'userdashboard']);	
	Route::get('user/logout',[AdminController::class,'logout']);	
	/* Route::get('user/logout',function(){
		session()->forget('USER_LOGIN');
		session()->forget('USER_ID');
		session()->forget('FRONT_USER_NAME');
		session()->forget('USER_NAME');
		return redirect('login');
	}); */
});
/*USER MIDDLEWARE ROUTE*/

