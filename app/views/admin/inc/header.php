<?php
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
<!-- CSS -->
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/bootstrap-reboot.min.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/bootstrap-grid.min.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/magnific-popup.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/jquery.mCustomScrollbar.min.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/select2.min.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/ionicons.min.css')?>">
<link rel="stylesheet" href="<?php echo asset_('/admin_/css/admin.css')?>">



	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Dashboard</title>

</head>
<body>
<div class="sidebar">
    <!-- sidebar logo -->
    <a href="<?php echo route('admin/dashboard'); ?>" class="sidebar__logo">
	<img src="../client/img/1920x600/logo.png" width="500px" height="150" alt="Description of image">
</>

    </a>
    <!-- end sidebar logo -->

        <!-- sidebar user -->
        <div class="sidebar__user">
            <div class="sidebar__user-title">
                <?php if (isset($_SESSION['user'])): ?>
                <?php else: ?>
                    <span>Admin</span>
                <?php endif; ?>
            </div>

            <form id="logout-form" action="logout.php" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="<?= htmlspecialchars($_SESSION['_token']) ?>">
            </form>
        </div>
        <!-- end sidebar user -->

    <!-- sidebar nav -->
    <div class="sidebar__nav-wrap">
        <ul class="sidebar__nav">
            <li class="sidebar__nav-item">
                <a href="<?php echo route('admin/dashboard'); ?>" class="sidebar__nav-link sidebar__nav-link--active">
                    <i class="icon ion-ios-keypad"></i> <span>Thống kê</span>
                </a>
            </li>

           

            <!-- collapse -->
            <li class="sidebar__nav-item">
                <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                    <i class="icon ion-ios-copy"></i> <span>Danh sách phim</span> <i class="icon ion-md-arrow-dropdown"></i>
                </a>

                <ul class="collapse sidebar__menu" id="collapseMenu">
                <li><a href="<?php echo route('admin/addmovie'); ?>">Thêm phim</a></li>

                    <li><a href="<?php echo route('admin/movielist'); ?>">Danh sách</a></li>
                </ul>
            </li>
            
            <!-- Similar structure for other collapsible sections -->
            <li class="sidebar__nav-item">
                <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="false" aria-controls="collapseUsers">
                    <i class="icon ion-ios-people"></i> <span>Tài khoản người dùng</span> <i class="icon ion-md-arrow-dropdown"></i>
                </a>

                <ul class="collapse sidebar__menu" id="collapseUsers">
                    <!-- <?php if ($user['role'] != 2): ?>
                        <li><a href="user_create.php"><i class="icon ion-ios-people"></i> <span>Thêm người dùng</span></a></li>
                    <?php endif; ?> -->
                    <li><a href="<?php echo route('admin/customerlist'); ?>"><i class="icon ion-ios-people"></i> <span>Danh sách người dùng</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">
        © FPT POLY, 2024. <br>Create by Nhóm 2</a>
    </div>
    <!-- end sidebar copyright -->
</div>

    <script src="<?php echo asset_('/admin_/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/jquery.mousewheel.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/jquery.mCustomScrollbar.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/select2.min.js')?>"></script>
    <script src="<?php echo asset_('/admin_/js/admin.js')?>"></script>

</body>
</html>
