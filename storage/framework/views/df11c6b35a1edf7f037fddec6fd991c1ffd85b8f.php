<?php $__env->startSection('page_title', 'Dashboard'); ?>
<?php $__env->startSection('container'); ?>
<div class="row">
    <h1>Dashboard</h1>   
</div>
<div class="row m-t-30">
	<div class="col-lg-12 p-0">
		<div class="table-responsive m-b-40">
			<h2>Welcome <?php echo e(session()->get('USER_NAME')); ?>, You are logged in at (<?php echo e($login_at); ?>)</h2>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel8_Task\resources\views/user/dashboard.blade.php ENDPATH**/ ?>