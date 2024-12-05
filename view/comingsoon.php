<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim Sắp Chiếu</title>
    <link rel="stylesheet" href="../css/comingsoon.css">
</head>
<body>
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

    <h1>Phim Sắp Chiếu</h1>
    <div class="movies-grid">
        <?php
        $movies = [
            ["title" => "DOMINO: Lối Thoát Cuối Cùng", "image" => "../img/loithoatcuoicung.jpg", "trailer" => "https://www.youtube.com/watch?v=f2FCeOxiEbo"],
            ["title" => "Quỷ Ăn Tạng 2", "image" => "../img/quy-an-tang-2.jpg", "trailer" => "https://www.youtube.com/watch?v=xVVZvSybaEc"],
            ["title" => "VENOM: Kèo Cuối", "image" => "../img/venom.jpg", "trailer" => "https://www.youtube.com/watch?v=I1q-jmvPNn0"],
            ["title" => "An Lạc", "image" => "../img/anlac.jpg", "trailer" => "https://www.youtube.com/watch?v=e5d99hQeY6k"],
            ["title" => "Trò Chơi Nhân Tính", "image" => "../img/trochoinhantinh.jpg", "trailer" => "https://www.youtube.com/watch?v=KvmVQpkv4Pw"],
            ["title" => "Mật Mã Đỏ", "image" => "../img/redone.jpg", "trailer" => "https://www.youtube.com/watch?v=2T_mKyH17mY"],
            ["title" => "Phá Tổ Quỷ", "image" => "../img/pha-to-quy.webp", "trailer" => "#"],
            ["title" => "Tính Hiệu Cầu Cứu", "image" => "../img/tinhieucaucuu.jpg", "trailer" => "https://www.youtube.com/watch?v=C4TA8A2WLrw"],
            ["title" => "Biệt Đội HotGirl", "image" => "../img/bietdoihotgirl.jpg", "trailer" => "https://www.youtube.com/watch?v=GCxopxk_BwY"],
            ["title" => "Võ Sĩ Giác Đấu II", "image" => "../img/GLADIATOR_II.jpg", "trailer" => "https://www.youtube.com/watch?v=R4AFSgUGEEs"],
            ["title" => "Hành Trình Của MOANA 2", "image" => "../img/moana-2.webp", "trailer" => "https://www.youtube.com/watch?v=B6WjBuyT9JI"],
            ["title" => "KRAVEN - Thợ Săn Thủ Lĩnh", "image" => "../img/thosanthulinh.jpg", "trailer" => "https://www.youtube.com/watch?v=VMBuRU2meqo"],
            ["title" => "Ngày Xưa Có Một Chuyện Tình", "image" => "../img/ngay-xua-co-1-chuyen-tinh.jpg", "trailer" => "https://www.youtube.com/watch?v=qaeHlk0OXec"],
            ["title" => "Địa Đạo: Mặt Trời Trong Bóng Tối", "image" => "../img/Diadao2024.jpg", "trailer" => "https://www.youtube.com/watch?v=4Fhs9-B9IHo"],
            ["title" => "Công Tử Bạc Liêu", "image" => "../img/contubaclieu.jpg", "trailer" => "https://www.youtube.com/watch?v=7oVbS8zQxQ0"],
            ["title" => "Linh Miêu: Quỷ Nhập Tràng", "image" => "../img/linhmieu.jpg", "trailer" => "https://www.youtube.com/watch?v=8l4crgVt36Y"],
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
        <div class="footer-logo">
            <img src="../img/logo.png" alt="Glide Cinema Logo">
        </div>

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
