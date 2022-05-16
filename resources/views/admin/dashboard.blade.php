@extends('admin/layout')
@section('page_title', 'Dashboard')
@section('container')
<div class="row">
    <h1>Audit Logs</h1>   
</div>
<div class="row m-t-30">
	<div class="col-lg-12 p-0">
		<div class="table-responsive m-b-40">
			<table class="table table-borderless table-data3">
				<thead>
					<tr>
						<th>Authenticable Type</th>
						<th>Authenticable ID</th>
						<th>Ip address</th>
						<th>user agent</th>
						<th>login at</th>
						<th>logout at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $list)
						<tr>
							<td>App\{{$list->role}}</td>
							<td>{{$list->id}}</td>
							<td>{{$list->ip_address}}</td>
							<td>{{$list->user_agent}}</td>
							<td>{{$list->login_at}}</td>
							<td>{{$list->logout_at}}</td>
							<td>
								<i class="fa fa-pencil"></i>
								<i class="fa-regular fa-xmark"></i>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
 
