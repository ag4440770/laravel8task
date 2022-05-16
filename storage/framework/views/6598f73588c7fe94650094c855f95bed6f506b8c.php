<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $__env->yieldContent('page_title'); ?></title>
    <link href="<?php echo e(asset('admin_assets/css/font-face.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('admin_assets/css/theme.css')); ?>" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo e(asset('admin_assets/images/icon/logo.png')); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a href="<?php echo e(url('admin/dashboard')); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a href="<?php echo e(url('admin/dashboard')); ?> ">
                                <i class="fas fa-list-alt"></i>Other Pages</a> 
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('admin_assets/images/icon/logo.png')); ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a href="<?php echo e(url('admin/dashboard')); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a href="<?php echo e(url('admin/dashboard')); ?> ">
                                <i class="fas fa-list-alt"></i>Other Pages</a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Welcome Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo e(url('admin/logout')); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php $__env->startSection('container'); ?>
                        <?php echo $__env->yieldSection(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    
    <script src="<?php echo e(asset('admin_assets/vendor/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/vendor/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/vendor/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/js/main.js')); ?>"></script>
</body>
</html>
<!-- end document--><?php /**PATH D:\xampp\htdocs\laravel8_Task\resources\views/admin/layout.blade.php ENDPATH**/ ?>