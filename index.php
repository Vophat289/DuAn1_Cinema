<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Banner images array
$banners = [
    [
        'image' => 'view/img/kungfupanda-banner-1.png',
        'alt' => 'Kung Fu Panda',
        'title' => 'Kung Fu Panda',
        'release_date' => '16.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-linhmieu.jpg',
        'alt' => 'Linh Miêu',
        'title' => 'Linh Miêu',
        'release_date' => '10.11.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-venom.jpg',
        'alt' => 'Venom',
        'title' => 'Venom',
        'release_date' => '20.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-wicked.jpg',
        'alt' => 'Wicked',
        'title' => 'Wicked',
        'release_date' => '20.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-ngayxuacomotchuyen.jpg',
        'alt' => 'Ngày Xưa Có Một Chuyện',
        'title' => 'Ngày Xưa Có Một Chuyện',
        'release_date' => '20.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-cuoixuyenbiengioi.jpg',
        'alt' => 'Cười Xuyên Biên Giới',
        'title' => 'Cười Xuyên Biên Giới',
        'release_date' => '20.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    [
        'image' => 'view/img/banner-matmado.jpg',
        'alt' => 'Mật Mã Đỏ',
        'title' => 'Mật Mã Đỏ',
        'release_date' => '20.12.2024',
        'button_text' => 'Đặt vé ngay',
    ],
    

];
?>

<!-- PHIM SẮP CHIẾU -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glide Cinema</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: white;
        }
        /*Thanh nav */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000;
    color: #fff;
}

/* Thanh điều hướng */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 40px;
    background-color: #111;
    height: 100px;
}

.navbar-logo img {
    height: 150px;
    width: 150px;
    left: 10px; 
}

.navbar-menu {
    display: flex;
    align-items: center;
    gap: 20px;
}

.navbar-menu a {
    text-decoration: none;
    padding: 12px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
}

/* Hiệu ứng hover cho tất cả các nút */
button, a {
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
}

button:hover, a:hover {
    transform: scale(1.1);
}

/* Navbar - Nút Đặt vé ngay và Đặt bắp nước */
.btn-yellow {
    background-color: gold;
    color: black;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 10px;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-yellow:hover {
    background-color: orange;
    transform: scale(1.1);
}

.btn-purple {
    background-color: purple;
    color: white;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 10px;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-purple:hover {
    background-color: darkviolet;
    transform: scale(1.1);
}


.btn-yellow-small {
    background-color: gold;
    color: black;
    font-weight: bold;
}

.btn-yellow-small:hover {
    background-color: gold;
    transform: scale(1.1);
}
.navbar-login a {
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    margin-right: 30px;
    font-weight: normal; /* Chữ bình thường mặc định */
    transition: all 0.1s ease; /* Thêm hiệu ứng chuyển đổi mượt */
}

/* Hiệu ứng hover */
.navbar-login a:hover {
    transform: scale(1.5); /* Phóng to nhẹ */
    font-weight: bold; /* Chữ đậm hơn */
    color: white; /* Đổi màu chữ thành vàng */
}

.search-bar {
    width: 300px; /* Độ rộng của thanh tìm kiếm */
    padding: 10px 15px; /* Khoảng cách bên trong */
    font-size: 14px; /* Cỡ chữ */
    border: 2px solid #444; /* Viền ban đầu */
    border-radius: 25px; /* Bo tròn góc */
    background-color: whitesmoke; /* Nền của thanh */
    color: black; /* Màu chữ */
    outline: none; /* Bỏ khung mặc định khi focus */
    transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Hiệu ứng chuyển */
}

/* Khi người dùng hover vào thanh tìm kiếm */
.search-bar:hover {
    border-color: #555; /* Thay đổi màu viền */
    box-shadow: 0 0 8px rgba(255, 255, 255, 0.3); /* Hiệu ứng bóng sáng */
}

.search-bar:focus {
    border-color: white; /* Viền vàng khi nhập liệu */ 
    background-color: whitesmoke; /* Nền đậm hơn */
}

.search-bar::placeholder {
    color: #888; /* Màu placeholder nhạt hơn */
    font-style: Arial; /* Kiểu chữ nghiêng */
}
        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: #000;
        }

        .header img {
            height: 50px;
        }

        .header .nav-links {
            display: flex;
            align-items: center;
        }

        .header .nav-links a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-yellow {
            background-color: yellow;
            color: black;
        }

        .btn-purple {
            background-color: purple;
            color: white;
        }

        .search-bar {
            background: #222;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            color: white;
            font-size: 14px;
        }

        .search-bar::placeholder {
            color: #aaa;
        }

         /* Phần banner */
         .banner {
            position: relative;
             /* overflow: hidden;    */
            height: 550px;
            background-color: #000;
        }
        

        .banner-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
           
        }

        .banner-images img {
            min-width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Mũi tên chuyển banner */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 10;
        }

        .nav-arrow.left {
            left: 20px;
        }

        .nav-arrow.right {
            right: 20px;
        }

        .nav-arrow:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        /* Nội dung banner */
        .banner-content {
            position: absolute;
            bottom: 50px;
            left: 50px;
            color: white;
        }

        .banner-content h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .banner-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn {
            background: yellow;
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .movie-container-wrapper {
    position: relative;
    overflow: hidden;
}
/* Movie Section Styles */
.movies {
    padding: 20px 40px;
    text-align: center;
    display: block; /* Đảm bảo phần "Phim Đang Chiếu" hiển thị */
}

.movies h2 {
    font-size: 2rem;
    color: white;
    margin-bottom: 20px;
}

.movie-container-wrapper {
    position: relative;
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
}

.movie-container {
    display: flex;
    gap: 20px;
    transition: transform 0.5s ease-in-out;
}

.movie {
    flex: 0 0 20%;
    padding: 10px;
    text-align: center;
}

.movie img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.movie img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(255, 255, 255, 0.5);
}

.movie h3 {
    font-size: 1rem;
    color: white;
    margin-top: 10px;
    text-transform: uppercase;
    font-weight: bold;
}


/* Navigation Arrows */
.nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 10;
    transition:  0.3s ease;
}

.nav-arrow.left {
    left: 10px;
}

.nav-arrow.right {
    right: 10px;
}

.nav-arrow:hover {
    background: rgba(255, 255, 255, 0.8);
}

/* "Xem Thêm" Button */
.movies .see-more {
    margin-top: 20px;
    display: inline-block;
    text-decoration: none;
    background-color: red;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.movies .see-more:hover {
    background-color: darkred;
    transform: scale(1.1);
}
/* nút button trailer & đặt vé */
/* Container cho hai nút */
.movie-buttons {
    display: flex;
    gap: 10px; /* Khoảng cách giữa các nút */
    align-items: center;
    margin-top: 10px; /* Khoảng cách trên */
}

/* Nút "Xem Trailer" */
.trailer-button {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
    font-size: 14px;
    font-weight: bold;
    background: transparent;
    border: none;
    cursor: pointer;
    gap: 5px; /* Khoảng cách giữa biểu tượng và text */
    position: relative; /* Để tạo gạch chân hiệu ứng */
    transition: transform 0.2s ease, color 0.2s ease;
}

.trailer-button .play-icon {
    display: inline-block;
    font-size: 16px;
    color: white; /* Màu của biểu tượng phát */
}

.trailer-button::after {
    content: '';
    position: absolute;
    bottom: -2px; /* Gạch chân sát bên dưới chữ */
    left: 0;
    width: 0; /* Gạch chân ẩn mặc định */
    height: 2px;
    background: red;
    transition: width 0.3s ease; /* Hiệu ứng kéo dài gạch chân */
}
.trailer-button:hover::after {
    width: 100%; /* Gạch chân trải dài khi hover */
}
/* Hiệu ứng khi hover vào "Xem Trailer" */
.trailer-button:hover {
    transform: scale(1.1);
    color: red; /* Đổi màu chữ khi hover */
}

/* Nút "Đặt Vé" */
.book-button {
    background-color: #ffc107; /* Màu vàng */
    color: black;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    text-align: center;
}

/* Hiệu ứng khi hover vào "Đặt Vé" */
.book-button:hover {
    background-color: #e6a700; /* Màu vàng đậm hơn */
    transform: scale(1.1);
}
/* PHIM SẮP CHIẾU */
.upcoming-movies {
    text-align: center;
    margin: 50px 0;
    color: white;
}

.upcoming-movies h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: white;
}

.movie-slider-wrapper {
    position: relative;
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
}

.movie-slider {
    display: flex;
    gap: 20px;
    transition: transform 0.5s ease-in-out;
}

.movie-item {
    flex: 0 0 25%;
    text-align: center;
}

.movie-item img {
    width: 100%;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.movie-item img:hover {
    transform: scale(1.05);
}

.movie-item h3 {
    font-size: 1rem;
    margin: 10px 0;
    color: white;
    text-transform: uppercase;
}

.movie-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.trailer-button, .info-button {
    display: flex;
    align-items: center;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    transition: transform 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
}

.trailer-button {
    background-color: transparent;
    color: white;
}

.trailer-button .play-icon {
    margin-right: 5px;
    color: white;
}

.trailer-button:hover {
    color: red;
    transform: scale(1.05);
}

.info-button {
    background-color: #ffc107;
    color: black;
}

.info-button:hover {
    background-color: #e6a700;
    transform: scale(1.05);
}

/* Nút điều hướng */
.slider-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.5);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 10;
    transition: background-color 0.3s ease;
}

.slider-nav.left {
    left: 10px;
}

.slider-nav.right {
    right: 10px;
}

.slider-nav:hover {
    background-color: rgba(255, 255, 255, 0.8);
}

.see-more-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: red;
    color: white;
    text-transform: uppercase;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-decoration: none;
}

.see-more-button:hover {
    background-color: darkred;
    transform: scale(1.05);
}




        /* Promotions Section */
        .promotions {
            padding: 20px 40px;
            background: #111;
            margin-top: 40px;
        }

        .promotions .promo-container {
            display: flex;
            justify-content: space-between;
        }

        .promotions img {
            width: 32%;
            border-radius: 10px;
        }

        /* Footer Section */
       /* Toàn bộ footer */
.footer {
    background-color: black;
    padding: 40px 20px;
    color: white;
}

/* Flexbox cho nội dung footer */
.footer-content {
    display: flex;
    justify-content: space-between; /* Giãn đều giữa các cột */
    flex-wrap: wrap; /* Đảm bảo xuống dòng trên màn hình nhỏ */
    gap: 20px; /* Khoảng cách giữa các cột */
    max-width: 1200px;
    margin: 0 auto;
    align-items: center; /* Căn giữa logo theo chiều dọc */
}

/* Logo */
.footer-logo {
    display: flex;
    align-items: center; /* Logo và text căn giữa theo chiều dọc */
    gap: 15px; /* Khoảng cách giữa logo và chữ */
    flex: 0 0 20%; /* Logo chiếm 20% chiều rộng */
    
}

.footer-logo img {
    width: 17.5rem; /* Kích thước logo */
    margin-bottom: 10rem;
}



.footer-logo p {
    font-size: 0.9rem;
    color: #aaa;
}

/* Các cột liên kết */
.footer-links {
    display: flex;
    gap: 30px; /* Khoảng cách giữa các cột */
    flex: 0 0 75%; /* Các cột chiếm 75% chiều rộng */
    flex-wrap: wrap; /* Đảm bảo xuống dòng khi không đủ chỗ */
}

.footer-links div {
    flex: 1; /* Các cột đều nhau */
    min-width: 150px; /* Kích thước tối thiểu của mỗi cột */
}

.footer-links h3 {
    font-size: 1rem;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.footer-links a {
    color: #aaa;
    text-decoration: none;
    font-size: 0.9rem;
    display: block;
    margin-bottom: 5px;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: white;
}

/* Biểu tượng mạng xã hội */
.footer-social {
    margin-top: 30px;
    display: flex;
    gap: 15px;
    justify-content: center;
}

.footer-social a img {
    width: 30px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.footer-social a:hover img {
    transform: scale(1.1);
    opacity: 0.8;
}


    </style>
</head>
<body>
    <!-- Thanh điều hướng -->
    <div class="navbar">
            <div class="navbar-logo">
                <img src="view/img/2.png" alt="Logo">
            </div>
            <div class="navbar-menu">
                <a href="#" class="btn-yellow">ĐẶT VÉ NGAY</a>
                <a href="#" class="btn-purple">ĐẶT BẮP NƯỚC</a>
                <input type="text" class="search-bar" placeholder="Tìm phim, rạp... ">
            </div>
            <div class="navbar-login">
                <a href="#">Đăng Nhập</a>
            </div>
            
        </div>

     <!-- Banner -->
     <div class="banner">
        <div class="banner-images" id="bannerImages">
            <?php foreach ($banners as $banner): ?>
                <div class="banner-slide">
                    <img src="<?= $banner['image'] ?>" alt="<?= $banner['alt'] ?>">
                    <!-- <div class="banner-content">
                        <h2><?= $banner['title'] ?></h2>
                        <p>Dự kiến khởi chiếu: <?= $banner['release_date'] ?></p>
                        <a href="#" class="btn"><?= $banner['button_text'] ?></a>
                    </div> -->
                </div>
            <?php endforeach; ?>
        </div>


        <div class="movies">
    <h2>Phim Đang Chiếu</h2>
    <div class="movie-container-wrapper">
        <div class="movie-container" id="movieContainer">
            <?php
            $movies = [
                ['title' => 'Cười Xuyên Biên Giới', 'image' => 'view/img/poster-cuoixuyenbiengioi.jpg'],
                ['title' => 'Đôi Bạn Học Yêu', 'image' => 'view/img/poster-doibanhocyeu.jpeg'],
                ['title' => 'RED ONE: Mật Mã Đỏ', 'image' => 'view/img/poster-matmado.jpg'],
                ['title' => 'TEE YOD: Quỷ Ăn Tạng 2', 'image' => 'view/img/poster-quyantang.jpg'],
                ['title' => 'VENOM: Kèo Cuối', 'image' => 'view/img/poster-venom.jpg'],
                ['title' => 'Ngày Xưa Có Một Chuyện Tình', 'image' => 'view/img/poster-ngayxuacomotchuyen.jpg'],
                ['title' => 'Công Chúa Nổi Loạn', 'image' => 'view/img/poster-congchuanoiloan.jpg'],
                ['title' => 'Võ Sĩ Giác Đấu', 'image' => 'view/img/poster-vosigiacdau.jpg'],
            ];

            if (empty($movies)) {
                echo '<p style="color: white; font-size: 1.2rem;">Hiện chưa có phim nào đang chiếu.</p>';
            } else {
                foreach ($movies as $movie): ?>
                    <div class="movie">
                        <img src="<?= $movie['image'] ?>" alt="<?= $movie['title'] ?>">
                        <h3><?= $movie['title'] ?></h3>
                        <div class="movie-buttons">
                            <a href="#" class="trailer-button">
                                <span class="play-icon">▶</span> Xem Trailer
                            </a>
                            <a href="#" class="book-button">
                                Đặt Vé
                            </a>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>
        <div class="nav-arrow left" onclick="moveMovieSlide(-1)">‹</div>
        <div class="nav-arrow right" onclick="moveMovieSlide(1)">›</div>
    </div>
    <a href="#" class="see-more">Xem Thêm</a>
</div>

<div class="upcoming-movies">
    <h2>Phim Sắp Chiếu</h2>
    <div class="movie-slider-wrapper">
        <div class="movie-slider" id="upcomingMoviesSlider">
            <?php foreach ($upcomingMovies as $movie): ?>
                <div class="movie-item">
                    <img src="<?= $movie['image'] ?>" alt="<?= $movie['title'] ?>">
                    <h3><?= $movie['title'] ?></h3>
                    <div class="movie-buttons">
                        <a href="<?= $movie['trailer_link'] ?>" class="trailer-button">
                            <span class="play-icon">▶</span> Xem Trailer
                        </a>
                        <a href="<?= $movie['info_link'] ?>" class="info-button">Tìm Hiểu Thêm</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Nút điều hướng -->
        <div class="slider-nav left" onclick="moveSlider(-1)">‹</div>
        <div class="slider-nav right" onclick="moveSlider(1)">›</div>
    </div>
    <a href="#" class="see-more-button">Xem Thêm</a>
</div>

<?php
// Danh sách phim sắp chiếu
$upcomingMovies = [
    [
        'title' => 'Chiến Địa Tử Thi',
        'image' => 'view/img/poster-chiendiatuthi.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'Công Tử Bạc Liêu',
        'image' => 'view/img/pter-congtubaclieu.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'MUFASA: Vua Sư Tử',
        'image' => 'view/img/poster-mufasa.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'Nhím SONIC 3',
        'image' => 'view/img/poster-sonic.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'CAPTAIN AMERICA: Brave New World',
        'image' => 'view/img/poster-captain.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'KRAVEN: Thợ Săn Thủ Lĩnh',
        'image' => 'view/img/poster-kraven.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'Bộ Tứ Báo Thủ',
        'image' => 'view/img/poster-bo4baothu.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
    [
        'title' => 'Nhà Gia Tiên',
        'image' => 'view/img/poster-nhagiatien.jpg',
        'trailer_link' => '#',
        'info_link' => '#'
    ],
];
?>


    <!-- Promotions Section -->
    <div class="promotions">
        <h2>Chương Trình Khuyến Mãi</h2>
        <div class="promo-container">
            <!-- <img src="promo1.jpg" alt="Promo 1">
            <img src="promo2.jpg" alt="Promo 2">
            <img src="promo3.jpg" alt="Promo 3"> -->
        </div>
    </div>

    

<!-- FOOTER -->
    <div class="footer">
        <div class="footer-content">
            <!-- Logo -->
            <div class="footer-logo">
                <img src="view/img/2.png" alt="Glide Cinema Logo">

            </div>

            <!-- Các cột liên kết -->
            <div class="footer-links">
                <div>
                    <h3>TÀI KHOẢN</h3>
                    <a href="#">Đăng nhập</a>
                    <a href="#">Đăng ký</a>
                    <a href="#">Membership</a>
                </div>
                <div>
                    <h3>Thuê Sự Kiện</h3>
                    <a href="#">Thuê rạp</a>
                    <a href="#">Các loại hình cho thuê khác</a>
                </div>
                <div>
                    <h3>Xem Phim</h3>
                    <a href="#">Phim đang chiếu</a>
                    <a href="#">Phim sắp chiếu</a>
                    <a href="#">Suất chiếu đặc biệt</a>
                </div>
                <div>
                    <h3>JET HOANG</h3>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Liên hệ</a>
                    <a href="#">Tuyển dụng</a>
                </div>
                <div>
                    <h3>Hệ Thống Rạp</h3>
                    <a href="#">Phim rạp Hai Bà Trưng (TP.HCM)</a>
                    <a href="#">Phim rạp sinh viên (Bình Dương)</a>
                    <a href="#">Phim rạp AEON Tân Phú</a>
                    <a href="#">Phim rạp AEON Nguyễn Văn Linh</a>
                    <a href="#">Phim rạp CoopMart Nguyễn Ánh Thủ</a>
                    <a href="#">Phim rạp CoopMart Hiệp Thành</a>
                    <a href="#">Phim rạp CoopMart Tô Ký</a>
                </div>
            </div>
        </div>

        <!-- Biểu tượng mạng xã hội -->
        <div class="footer-social">
            <a href="#"><img src="view/img/facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="view/img/youtube-icon.png" alt="YouTube"></a>
            <a href="#"><img src="view/img/email-icon.png" alt="Email"></a>
            <a href="#"><img src="view/img/zalo-icon.png" alt="Zalo"></a>
            <a href="#"><img src="view/img/tiktok-icon.png" alt="TikTok"></a>
        </div>
    </div>


    <script>
        // JavaScript nhỏ gọn để chuyển đổi slide
        let currentIndex = 0;

        function moveSlide(direction) {
            const bannerImages = document.getElementById('bannerImages');
            const slider = document.getElementById('upcomingMoviesSlider');
            const slides = bannerImages.children;
            const totalSlides = slides.length;

            currentIndex += direction;
            if (currentIndex < 0) currentIndex = totalSlides - 1;
            if (currentIndex >= totalSlides) currentIndex = 0;

            bannerImages.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(() => {
            moveSlide(1);
        }, 5000);

        
        let currentMovieIndex = 0;

function moveMovieSlide(direction) {
    const movieContainer = document.getElementById('movieContainer');
    const movies = movieContainer.children;
    const totalMovies = movies.length;
    const movieWidth = movies[0].offsetWidth + 20; // 20px là khoảng cách giữa các phim

    currentMovieIndex += direction;

    if (currentMovieIndex < 0) {
        currentMovieIndex = totalMovies - 5; // Hiển thị 5 phim cùng lúc
    }

    if (currentMovieIndex > totalMovies - 5) {
        currentMovieIndex = 0;
    }

    const offset = -currentMovieIndex * movieWidth;
    movieContainer.style.transform = `translateX(${offset}px)`;
}

// PHIM SẮP CHIẾU
// let currentIndex = 0;

// function moveSlider(direction) {
//     const slider = document.getElementById('upcomingMoviesSlider');
//     const items = slider.children;
//     const totalItems = items.length;
//     const itemWidth = items[0].offsetWidth + 20; // 20px là khoảng cách giữa các item

//     currentIndex += direction;

//     if (currentIndex < 0) {
//         currentIndex = totalItems - 4; // Hiển thị 4 phim mỗi lần
//     } else if (currentIndex > totalItems - 4) {
//         currentIndex = 0;
//     }

//     const offset = -currentIndex * itemWidth;
//     slider.style.transform = `translateX(${offset}px)`;
// }



    </script>
</body>
</html>
>>>>>>> Nhanh_Test
