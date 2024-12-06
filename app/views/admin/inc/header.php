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
	<svg width="126" height="23" viewBox="0 0 126 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.2441 22H13.7178V12.7568H5.23633V22H0.695312V0.583984H5.23633V8.97754H13.7178V0.583984H18.2441V22ZM43.1025 11.2627C43.1025 14.8076 42.2236 17.5322 40.4658 19.4365C38.708 21.3408 36.1885 22.293 32.9072 22.293C29.626 22.293 27.1064 21.3408 25.3486 19.4365C23.5908 17.5322 22.7119 14.7979 22.7119 11.2334C22.7119 7.66895 23.5908 4.94922 25.3486 3.07422C27.1162 1.18945 29.6455 0.24707 32.9365 0.24707C36.2275 0.24707 38.7422 1.19434 40.4805 3.08887C42.2285 4.9834 43.1025 7.70801 43.1025 11.2627ZM27.4727 11.2627C27.4727 13.6553 27.9268 15.457 28.835 16.668C29.7432 17.8789 31.1006 18.4844 32.9072 18.4844C36.5303 18.4844 38.3418 16.0771 38.3418 11.2627C38.3418 6.43848 36.54 4.02637 32.9365 4.02637C31.1299 4.02637 29.7676 4.63672 28.8496 5.85742C27.9316 7.06836 27.4727 8.87012 27.4727 11.2627ZM55.8027 22H51.2617V4.36328H45.4463V0.583984H61.6182V4.36328H55.8027V22Z" fill="#F9AB00"/>
<path d="M69.3818 22H64.9141V0.583984H77.1895V4.30469H69.3818V9.82715H76.6475V13.5332H69.3818V22ZM81.3789 22V0.583984H85.9199V18.25H94.6064V22H81.3789ZM98.3418 22V0.583984H102.883V22H98.3418ZM125.588 22H120.402L115.422 13.8994L110.441 22H105.578L112.683 10.9551L106.032 0.583984H111.042L115.656 8.28906L120.183 0.583984H125.075L118.352 11.2041L125.588 22Z" fill="white"/>
</svg>

    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="img/user.svg" alt="">
        </div>
        <div class="sidebar__user-title">
            <?php if (isset($_SESSION['user'])): ?>
                <?php 
                    $user = $_SESSION['user']; 
                    $roleText = ($user['role'] == 0) ? 'Admin' : (($user['role'] == 2) ? 'Staff' : 'User');
                ?>
                <span><?= $roleText ?></span>
                <p><?= htmlspecialchars($user['username']) ?></p>
            <?php else: ?>
                <span>Guest</span>
            <?php endif; ?>
        </div>
        <button class="sidebar__user-btn" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icon ion-ios-log-out"></i>
        </button>

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

            <li class="sidebar__nav-item">
                <a href="#" class="sidebar__nav-link">
                    <i class="icon ion-ios-film"></i> <span>Danh mục</span>
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
                    <?php if ($user['role'] != 2): ?>
                        <li><a href="user_create.php"><i class="icon ion-ios-people"></i> <span>Thêm người dùng</span></a></li>
                    <?php endif; ?>
                    <li><a href="user_list.php"><i class="icon ion-ios-people"></i> <span>Danh sách người dùng</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">
        © HOTFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a>
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
