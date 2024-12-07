<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home Page | Vodi - Responsive Website Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../favicon.ico">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/font-awesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/dzsparallaxer/dzsparallaxer.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/cubeportfolio/css/cubeportfolio.min.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/aos/dist/aos.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/slick-carousel/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?php echo asset_('client/vendor/fancybox/dist/jquery.fancybox.css') ?>">

    <link rel="stylesheet" href="<?php echo asset_('client/css/theme.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>

<body>

    <header id="header" class="header left-aligned-navbar" data-hs-header-options="{
            &quot;fixMoment&quot;: 1000,
            &quot;fixEffect&quot;: &quot;slide&quot;
        }">
        <div class="header-section shadow-soft">
            <div id="logoAndNav" class="container-fluid px-md-5">

                <nav class="js-mega-menu navbar navbar-expand-xl py-0 position-static justify-content-start">

                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle mr-2"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>


                    <div class="hs-unfold d-none d-xl-block">
                        <a class="js-hs-unfold-invoker mr-4" href="javascript:;" data-hs-unfold-options="{
                                &quot;target&quot;: &quot;#sidebarContent&quot;,
                                &quot;type&quot;: &quot;css-animation&quot;,
                                &quot;animationIn&quot;: &quot;fadeInLeft&quot;,
                                &quot;animationOut&quot;: &quot;fadeOutLeft&quot;,
                                &quot;hasOverlay&quot;: &quot;rgba(55, 125, 255, 0.1)&quot;,
                                &quot;smartPositionOff&quot;: true
                            }"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" style="fill: #97979f;">
                                <path
                                    d="M0 13L0 11.4 16 11.4 16 13 0 13ZM0 5.7L16 5.7 16 7.3 0 7.3 0 5.7ZM0 0L16 0 16 1.6 0 1.6 0 0Z">
                                </path>
                            </svg>
                        </a>
                    </div>


                    <a class="navbar-brand w-auto mr-xl-5 mr-wd-8" href="<?php echo route(''); ?>" aria-label="Vodi">
                        <svg version="1.1" width="103" height="40px">
                            <linearGradient id="vodi-gr" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0" style="stop-color:#2A4999"></stop>
                                <stop offset="1" style="stop-color:#2C9CD4"></stop>
                            </linearGradient>
                            <g class="vodi-gr">
                                <path class="vodi-svg0"
                                    d="M72.8,12.7c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,3,74.7,1.4,77,1.4c2.3,0,4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                                c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                                c0.7,0,1.4,0.2,2.1,0.3C71.3,12.2,72,12.4,72.8,12.7z M67.8,19.8c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3
                                c2.8,0,5.2-2.4,5.2-5.2C73,22.2,70.6,19.8,67.8,19.8z
                                M39.9,38.6c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4c7.5,0,13.4,6,13.4,13.5
                                C53.4,32.6,47.4,38.6,39.9,38.6z M39.9,30.6c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5c-3.2,0-5.6,2.2-5.6,5.4
                                C34.4,28.2,36.7,30.6,39.9,30.6z
                                M14.6,27c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                                c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                                c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.8,12.9,22.7,14.6,27z
                                M90.9,25.1c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                                c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,20,90.9,22.1,90.9,25.1
                                C90.9,25.1,90.9,25.1,90.9,25.1z
                                M90.2,4.7L86,2.3c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.4,91.5,5.5,90.2,4.7z"></path>
                            </g>
                        </svg>
                    </a>



                    <div class="d-flex align-items-center ml-auto">
                        <form class="d-none d-xl-block">
                            <label class="sr-only">Search</label>
                            <div class="input-group">
                                <input type="email"
                                    class="search-form-control form-control py-2 pl-4 min-width-250 rounded-pill"
                                    name="email" id="searchproduct-item" placeholder="Search..." aria-label="Search..."
                                    aria-describedby="searchProduct1" required>
                                <div class="input-group-append position-absolute top-0 bottom-0 right-0  z-index-4">
                                    <button class="d-flex py-2 px-3 border-0 bg-transparent align-items-center"
                                        type="button" id="searchProduct1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            style="fill: #656565;">
                                            <path
                                                d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="d-inline-flex ml-md-5">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <li class="col d-xl-none position-static px-2">

                                    <div class="hs-unfold mr-2 position-static">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary"
                                            href="javascript:;" data-hs-unfold-options="{
                                                &quot;target&quot;: &quot;#searchClassic&quot;,
                                                &quot;type&quot;: &quot;css-animation&quot;,
                                                &quot;animationIn&quot;: &quot;slideInUp&quot;
                                            }">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                                <path
                                                    d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div id="searchClassic"
                                            class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0 right-0 left-0 mt-n2">
                                            <form class="input-group input-group-sm input-group-merge">
                                                <input type="text" class="form-control search-form-control rounded-pill"
                                                    placeholder="Search..." aria-label="Search...">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </li>
                                <li class="col pr-xl-0 px-2 px-sm-3">

                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker dropdown-nav-link dropdown-toggle py-4 position-relative d-flex align-items-center"
                                            href="javascript:;" data-hs-unfold-options="{
            &quot;target&quot;: &quot;#basicDropdownHover&quot;,
            &quot;type&quot;: &quot;css-animation&quot;,
            &quot;event&quot;: &quot;click&quot;
        }">
                                            <img src="client/img/1920x600/user.png" width="32" height="32" alt="Image" />
                                        </a>
                                        <div id="basicDropdownHover" class="hs-unfold-content dropdown-menu my-account-dropdown">
                                            <?php if (isset($_SESSION['user_id'])): ?>
                                                <!-- Nếu đã đăng nhập -->
                                                <span class="dropdown-item">Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                                <a class="dropdown-item" href="<?php echo route('logout'); ?>">Đăng xuất</a>
                                            <?php else: ?>
                                                <!-- Nếu chưa đăng nhập -->
                                                <a class="dropdown-item" href="<?php echo route('login'); ?>">Đăng nhập</a>
                                                <a class="dropdown-item" href="<?php echo route('register'); ?>">Đăng ký</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>


    <main id="content">
    <div class="bg-gray-1100 pb-5 space-bottom-lg-2">
    <div class="container px-md-6">
        <nav aria-label="breadcrumb" class="position-relative">
            <ol class="breadcrumb dark font-size-1">
                <li class="breadcrumb-item"><a href="<?php echo route('home'); ?>" class="text-gray-1300">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo htmlspecialchars($data['movie']['atenphim']); ?></li>
            </ol>
        </nav>
    </div>

    <section class="pb-xl-3 mb-xl-1">
        <div class="mb-3 pb-1">
            <div class="position-relative">
                <div class="bg-img-hero h-464rem bg-single-player" style="background-image: url('<?php echo asset_('/imgs/' . $data['movie']['hinhanh']) ?>');background-size:  ;">
                    <div class="container px-md-6 space-top-2">
                        <div class="pt-7 mt-1">
                            <h2 class="text-white display-8 mb-4 pb-1"><?php echo htmlspecialchars($data['movie']['atenphim']); ?></h2>
                            <div class="d-flex flex-column flex-md-row">
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center w-180rem h-52rem mb-3 mb-md-0" data-toggle="modal" data-target="#trailerModal" tabindex="0">WATCH NOW</a>
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center w-180rem h-52rem mb-3 mb-md-0" style=" margin-left: 1.5rem;" data-toggle="modal" data-target="#ticketModal">MUA PHIM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketModalLabel">Thông Tin Mua Phim - <?php echo htmlspecialchars($data['movie']['atenphim']); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="ticketPurchaseForm" action="<?php echo route('buyTicket/'. $data['movie_id']); ?>" method="POST" onsubmit="return confirmPurchase(event);">
            <input type="hidden" id="movieId" name="movie_id" value="<?php echo htmlspecialchars($data['movie_id']); ?>">
    
    <div class="form-group">
        <label for="ticketType">Loại Gói</label>
        <select id="ticketType" name="ticket_type" class="form-control">
            <option value="Pre">Premium</option>
        </select>
    </div>
    
    
    <div class="form-group">    
        <label for="ticketPrice">Giá</label>
        <input type="text" id="ticketPrice" name="ticketPrice" value="<?php echo htmlspecialchars($data['movie']['giave']); ?>" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label for="ticketType">Phương Thức Thanh Toán</label>
        <select id="ticketType" name="ticket_type" class="form-control">
            <option value="Pre">Zalo Pay</option>
            <option value="Pre">Momo</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Thanh Toán</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmPurchase(event) {
    // Ngăn chặn hành động gửi biểu mẫu mặc định
    event.preventDefault();
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

if (!isLoggedIn) {
    // Hiển thị thông báo yêu cầu đăng nhập
    Swal.fire({
        title: 'Bạn cần đăng nhập!',
        text: 'Vui lòng đăng nhập để tiếp tục mua gói.',
        icon: 'warning',
        confirmButtonText: 'Đăng nhập ngay',
        showCancelButton: true,
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.isConfirmed) {
            // Chuyển hướng đến trang đăng nhập
            window.location.href = "<?php echo route('login'); ?>";
        }
    });
    return false; // Dừng hành động gửi biểu mẫu
}

    // Hiển thị SweetAlert trước khi gửi biểu mẫu
   new Swal({
        title: "Mua gói thành công!",
        text: "Cảm ơn bạn đã mua gói.",
        icon: "success",
        buttons: {
            cancel: "Hủy",
            confirm: {
                text: "Đồng ý",
                value: true,
            },
        },

    }).then((result) => {
        if (result.isConfirmed) {
            // Gửi biểu mẫu nếu người dùng xác nhận
            document.getElementById("ticketPurchaseForm").submit();
            window.location.href = "<?php echo route(''); ?>";
        } else {
            // Hủy bỏ hành động gửi
            return false;
        }
    });
}
</script>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="trailerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trailerModalLabel"><?php echo htmlspecialchars($data['movie']['atenphim']); ?> - Trailer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="position-relative min-h-270rem mb-2d">
                    <iframe width="100%" height="415" src="<?php echo htmlspecialchars($data['movie']['trailer']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="container px-md-6">
            <div class="d-md-flex align-items-center justify-content-between mb-4 pb-1">
                <div>
                    <h6 class="font-size-24 text-white font-weight-semi-bold font-secondary mb-3 mb-md-1"><?php echo htmlspecialchars($data['movie']['atenphim']); ?></h6>
                    <ul class="list-unstyled nav nav-meta font-secondary mb-6 pb-1 overflow-auto overflow-md-hidden flex-nowrap flex-md-wrap">
                        <li class="text-gray-1300 flex-shrink-0 flex-shrink-md-1"><?php echo htmlspecialchars(date("Y", strtotime($data['movie']['nsx']))); ?></li>
                        <li class="text-gray-1300 flex-shrink-0 flex-shrink-md-1"><?php echo htmlspecialchars(gmdate("H:i", $data['movie']['thoiluong'] * 60)); ?></li> <!-- Thay đổi thời gian -->
                        <li class="text-gray-1300 flex-shrink-0 flex-shrink-md-1">PG-</li>
                        <li class="text-gray-1300 flex-shrink-0 flex-shrink-md-1">
                            <a href="#" class="text-gray-1300"><?php echo htmlspecialchars($data['movie']['theloai']); ?></a>
                        </li>
                    </ul>
                    <p class="mb-md-0 text-white " style="max-width: 70%;"><?php echo htmlspecialchars($data['movie']['noidung']); ?></p>
                </div>
                <div>
                    <div class="d-flex mb-7">
                        <div class="d-flex">
                            <div>
                                <i class="fas fa-star text-primary font-size-42"></i>
                            </div>
                            <div class="text-lh-1 ml-1">
                                <div class="text-primary font-size-24 font-weight-semi-bold"> 4.5/5 </div>
                                <span class="text-gray-1300 font-size-12">1 Vote</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ml-5 text-gray-1300">
                            <div>
                                <i class="far fa-heart font-size-30"></i>
                            </div>
                            <a href="#" class="text-gray-1300 ml-2">+ Playlist</a>
                        </div>
                    </div>
                    <div class="text-white">Tags:
                            <a href="#"><?php echo $data['movie']['theloai']; ?></a>
                    </div>
                    <div class="text-white">             <p class="text-white font-weight-semi-bold">Giá phim: <span class="text-primary"><?php echo htmlspecialchars($data['movie']['giave']); ?> VNĐ</span></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    </main>



    <footer class>
        <div class="bg-gray-4000">
            <div class="container px-md-5">
                <div class="d-flex flex-wrap align-items-center pt-6 pb-3d border-bottom mb-7 border-gray-4100">
                    <a href="<?php echo route(''); ?>" class="mb-4 mb-md-0 mr-auto">
                        <svg version="1.1" width="103" height="40px">
                            <g style="fill: #ffffff;">
                                <path class="vodi-stream0" d="M72.8,12.5c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,2.8,74.7,1.2,77,1.2s4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                                c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                                c0.7,0,1.4,0.2,2.1,0.3C71.3,12,72,12.2,72.8,12.5z M67.8,19.6c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3c2.8,0,5.2-2.4,5.2-5.2
                                C73,22,70.6,19.6,67.8,19.6z"></path>
                                <path class="vodi-stream0" d="M39.9,38.4c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4s13.4,6,13.4,13.5
                                C53.4,32.4,47.4,38.4,39.9,38.4z M39.9,30.4c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5s-5.6,2.2-5.6,5.4
                                C34.4,28,36.7,30.4,39.9,30.4z"></path>
                                <path class="vodi-stream0"
                                    d="M14.6,26.8c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                                c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                                c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.6,12.9,22.5,14.6,26.8z">
                                </path>
                                <path class="vodi-stream0" d="M90.9,24.9c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                                c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,19.8,90.9,21.9,90.9,24.9
                                L90.9,24.9z"></path>
                                <path style="fill: #51C9F0;"
                                    d="M90.2,4.5L86,2.1c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.2,91.5,5.3,90.2,4.5z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <ul class="list-unstyled mx-n3 mb-0 d-flex flex-wrap align-items-center">
                        <li class="px-3">
                            <a href="#" class="text-gray-1300 d-flex flex-wrap align-items-center"><i class="fab fa-facebook-f" style='font-size:24px'></i>
                             <span class="ml-2">Facebook</span></a>
                        </li>
                        <li class="px-3">
                            <a href="#" class="text-gray-1300 d-flex flex-wrap align-items-center"><i class='fab fa-instagram' style='font-size:24px'>
                        </i><span class="ml-2">Instagram</span></a>
                        </li>
                        <li class="px-3">
                            <a href="#" class="text-gray-1300 d-flex flex-wrap align-items-center"><i class="fab fa-google" style='font-size:24px'></i>
                             <span class="ml-2">Google</span></a>
                        </li>
                    </ul>
                </div>
                <div class="row pb-5">
                    <div class="col-md mb-5 mb-md-0">
                        <h4 class="font-size-18 font-weight-medium mb-4 text-gray-4200">Movie Categories</h4>
                        <ul class="column-count-2 v2 list-unstyled mb-0">
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Action</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Adventure</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Animation</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Comedy</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Crime</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Drama</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Fantacy</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Horror</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Mystrey</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Romance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mb-5 mb-md-0">
                        <h4 class="font-size-18 font-weight-medium mb-4 text-gray-4200">TV Series</h4>
                        <ul class="column-count-2 v2 list-unstyled mb-0">
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Valentine Day</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Underrated Comedies</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Scary TV Series</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Best 2020 Documentaries</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Classic Shows</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Big TV Premieres</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Reality TV Shows</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Original Shows</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Suprise of the Year Shows</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="#">Top 10 TV Shows</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-5 mb-md-0 border-left border-gray-4100">
                        <div class="ml-1">
                            <h4 class="font-size-18 font-weight-medium mb-4 text-gray-4200">Support</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="py-1d">
                                    <a class="h-g-white" href="#">My Account</a>
                                </li>
                                <li class="py-1d">
                                    <a class="h-g-white" href="#">FAQ</a>
                                </li>
                                <li class="py-1d">
                                    <a class="h-g-white" href="#">Watch on TV</a>
                                </li>
                                <li class="py-1d">
                                    <a class="h-g-white" href="#">Help Center</a>
                                </li>
                                <li class="py-1d">
                                    <a class="h-g-white" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-4300">
            <div class="container px-md-5">
                <div class="text-center d-md-flex flex-wrap align-items-center py-3">
                    <div class="font-size-13 text-gray-1300 mb-2 mb-md-0">Copyright © 2024
                    </div>
                    <a href="#" class="font-size-13 h-g-white ml-md-auto">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="<?php echo asset_('client/vendor/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/jquery-migrate/dist/jquery-migrate.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?php echo asset_('client/vendor/hs-header/dist/hs-header.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-go-to/dist/hs-go-to.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-unfold/dist/hs-unfold.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-show-animation/dist/hs-show-animation.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/hs-counter/dist/hs-counter.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/appear.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/jquery-validation/dist/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/dzsparallaxer/dzsparallaxer.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/aos/dist/aos.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/slick-carousel/slick/slick.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/fancybox/dist/jquery.fancybox.min.js') ?>"></script>
    <script src="<?php echo asset_('client/vendor/jquery-countdown/dist/jquery.countdown.min.js') ?>"></script>

    <script src="<?php echo asset_('client/js/hs.core.js') ?>"></script>
    <script src="<?php echo asset_('client/js/hs.validation.js') ?>"></script>
    <script src="<?php echo asset_('client/js/hs.cubeportfolio.js') ?>"></script>
    <script src="<?php echo asset_('client/js/hs.slick-carousel.js') ?>"></script>
    <script src="<?php echo asset_('client/js/hs.fancybox.js') ?>"></script>
    <script src="<?php echo asset_('client/js/hs.countdown.js') ?>"></script>

    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of counter
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });

            // initialization of sticky block
            var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

            // initialization of cubeportfolio
            $('.cbp').each(function() {
                var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    layoutMode: 'grid',
                    filters: '#filterControls',
                    displayTypeSpeed: 0
                });
            });

            $('.cbp').on('initComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('filterComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('pluginResize.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();
            });

            // animated scroll to cbp container
            $('#cbpStickyFilter').on('click', '.cbp-filter-item', function(e) {
                $('html, body').stop().animate({
                    scrollTop: $('#demoExamplesSection').offset().top
                }, 200);
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/polifills.js"><\/script>');
    </script>
</body>

</html>