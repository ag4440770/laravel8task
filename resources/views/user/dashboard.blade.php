@extends('user/layout')
@section('page_title', 'Dashboard')
@section('container')
<div class="row">
    <h1>Dashboard</h1>   
</div>
<div class="row m-t-30">
	<div class="col-lg-12 p-0">
		<div class="table-responsive m-b-40">
			<h2>Welcome {{session()->get('USER_NAME')}}, You are logged in at ({{$login_at}})</h2>
		</div>
	</div>
</div>
@endsection
 
