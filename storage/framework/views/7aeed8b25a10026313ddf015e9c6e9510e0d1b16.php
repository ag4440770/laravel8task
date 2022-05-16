<?php $__env->startSection('page_title', 'Dashboard'); ?>
<?php $__env->startSection('container'); ?>
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
					<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td>App\<?php echo e($list->role); ?></td>
							<td><?php echo e($list->id); ?></td>
							<td><?php echo e($list->ip_address); ?></td>
							<td><?php echo e($list->user_agent); ?></td>
							<td><?php echo e($list->login_at); ?></td>
							<td><?php echo e($list->logout_at); ?></td>
							<td>
								<i class="fa fa-pencil"></i>
								<i class="fa-regular fa-xmark"></i>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel8_Task\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>