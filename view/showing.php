<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim Sắp Chiếu</title>
    <link rel="stylesheet" href="../css/showing.css">
</head>
<body>

    <!-- Thanh điều hướng -->
        <div class="navbar">
            <div class="navbar-logo">
                <img src="../img/logo.png" alt="Logo">
            </div>
            <div class="navbar-menu">
                <a href="#" class="btn-yellow">ĐẶT VÉ NGAY</a>
                <a href="#" class="btn-purple">ĐẶT BẮP NƯỚC</a>
                <input type="text" class="search-bar" placeholder="Tìm phim, rạp... ">
            </div>
            <div class="navbar-login">
                <a href="login.php">Đăng Nhập</a>
            </div>
            
        </div>

    <!-- Tiêu đề -->
    <h1>Phim Sắp Chiếu</h1>

    <!-- Danh sách phim -->
    <div class="movies-grid">
        <?php
        // Giả sử đây là dữ liệu các phim
        $movies = [
            ["title" => "Ba Đêm Kinh Hoàng", "image" => "../img/ba_dem_kinh_hoang_.jpg", "trailer" => "https://www.youtube.com/watch?v=xXVtZpw2s6s"],
            ["title" => "Chiêu Hồn Vong Nhi", "image" => "../img/chieuhonvongnhi.jpg", "trailer" => "https://www.youtube.com/watch?v=auV7ult9YD0"],
            ["title" => "Cám", "image" => "../img/cam.jpg", "trailer" => "https://www.youtube.com/watch?v=_8qUFEmPQbc"],
            ["title" => "Robot Hoang Dã", "image" => "../img/robot.jpg", "trailer" => "https://www.youtube.com/watch?v=2l8_FNIBWLM"],
            ["title" => "Joker", "image" => "../img/joker.jpg", "trailer" => "https://www.youtube.com/watch?v=gxWLZoMT2MU"],
            ["title" => "Hai Muối", "image" => "../img/haimuoi.jpg", "trailer" => "https://www.youtube.com/watch?v=MjxPoqCvvVs"],
            ["title" => "Cậu Bé Cá Heo", "image" => "../img/caubecaheo.jpg", "trailer" => "https://www.youtube.com/watch?v=hCmAntZAK2I"],
            ["title" => "Bảo Bối Của Ông", "image" => "../img/baoboicuaong.jpg", "trailer" => "https://www.youtube.com/watch?v=6KxlC1Bt3C4"],
            ["title" => "Shin: Nhật Kí Khủng Long", "image" => "../img/shin.jpg", "trailer" => "https://www.youtube.com/watch?v=5ugNOvwNycw"],
            ["title" => "Transformers One", "image" => "../img/transformers.jpg", "trailer" => "https://www.youtube.com/watch?v=WLqCKr2h1BI"],
            ["title" => "Thần Dược", "image" => "../img/thanduoc.jpg", "trailer" => "https://www.youtube.com/watch?v=zBIDSp17AOo"],
            ["title" => "Đố Anh Còng Được Tôi", "image" => "../img/doanhcongduoctoi.jpg", "trailer" => "https://www.youtube.com/watch?v=JgUWVooKSrA"],
            ["title" => "Học Viện Anh Hùng: You're Next", "image" => "../img/hoc-vien-anh-hung.webp", "trailer" => "https://www.youtube.com/watch?v=O_JcwpDergM"],
            ["title" => "Trêu Rồi Yêu", "image" => "../img/takagi.jpg", "trailer" => "https://www.youtube.com/watch?v=JeRfRVNi28w"],
            ["title" => "Hẹn Hò Với Sát Nhân", "image" => "../img/hen_ho_voi_sat_nhan.jpg", "trailer" => "https://www.youtube.com/watch?v=pbuqe1unXDA"],
            ["title" => "Mộ Đom Đóm", "image" => "../img/modomdom.jpg", "trailer" => "https://www.youtube.com/watch?v=CpcQcKIDYFs"],
            // Thêm phim khác
        ];

        foreach ($movies as $movie) {
            echo "
            <div class='movie-item'>
                <img src='{$movie['image']}' alt='{$movie['title']}'>
                <div class='movie-info'>
                    <h3>{$movie['title']}</h3>
                </div>
                <div class='movie-actions'>
                    <a href='{$movie['trailer']}' class='btn-red-small'>Xem Trailer</a>
                    <a href='#' class='btn-yellow-small'>Tìm Hiểu Thêm</a>
                </div>
            </div>
            ";
        }
        ?>
    </div>

    <div class="footer">
    <div class="footer-content">
        <!-- Logo -->
        <div class="footer-logo">
            <img src="../img/logo.png" alt="Glide Cinema Logo">

        </div>

        <!-- Các cột liên kết -->
        <div class="footer-links">
            <div>
                <h3>Tài Khoản</h3>
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
                <h3>Thông Tin</h3>
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
        <a href="#"><img src="../img/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="../img/youtube.png" alt="YouTube"></a>
        <a href="#"><img src="../img/gmail.webp" alt="Email"></a>
        <a href="#"><img src="../img/zalo.png" alt="Zalo"></a>
        <a href="#"><img src="../img/tiktok.png" alt="TikTok"></a>
    </div>
</div>

</body>
</html>
