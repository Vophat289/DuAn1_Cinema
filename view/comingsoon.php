<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim Sắp Chiếu</title>
    <style>
   /* Toàn bộ giao diện */
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
    box-shadow: 0 0 10px rgba(255, 215, 0, 0.6); /* Bóng vàng sáng */
    background-color: whitesmoke; /* Nền đậm hơn */
}

.search-bar::placeholder {
    color: #888; /* Màu placeholder nhạt hơn */
    font-style: Arial; /* Kiểu chữ nghiêng */
}

/* Tiêu đề chính */
h1 {
    text-align: center;
    margin: 40px 0 20px;
    font-size: 28px;
    color: #fff;
    font-weight: bold;
}

/* Grid phim */
.movies-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding: 10px 40px;
}

.movie-item {
    background-color: black;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.movie-item:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 20px rgba(255, 255, 255, 0.5);
}

.movie-item img {
    width: 100%;
    margin-bottom: 10px;
    height: 300px;
}

.movie-info h3 {
    font-size: 16px;
    margin-bottom: 5px;
    color: #fff;
}

.movie-info p {
    font-size: 14px;
    color: #aaa;
}

.movie-actions a {
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 30px;
    margin: 5px;
    font-size: 12px;
    font-weight: bold;
    display: inline-block;
}

.btn-yellow-small {
    background-color: gold;
    color: black;
}

.btn-yellow-small:hover {
    background-color: orange;
}
.movie-actions .btn-red-small {
    background: none; /* Bỏ khung nền */
    color: #fff; /* Màu chữ mặc định */
    text-decoration: none; /* Bỏ gạch chân mặc định */
    font-size: 14px;
    font-weight: bold;
    transition: color 0.3s ease, transform 0.2s ease, text-decoration 0.3s ease;
    padding: 0; /* Bỏ padding */
}

/* Hover: Đổi màu, xuất hiện gạch chân, và hiệu ứng nổi */
.movie-actions .btn-red-small:hover {
    color: red; /* Đổi thành màu đỏ khi hover */
    text-decoration: underline; /* Thêm gạch chân */
    transform: scale(1.1); /* Hiệu ứng nổi */
}


.movie-item .btn-yellow-small:first-child {
    margin-right: 10px;
}

/* Footer */
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
                <img src="../img/2.png" alt="Logo">
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
            ["title" => "DOMINO: Lối Thoát Cuối Cùng", "image" => "../img/loithoatcuoicung.jpg", "trailer" => "#"],
            ["title" => "Quỷ Ăn Tạng 2", "image" => "../img/quy-an-tang-2.jpg", "trailer" => "#"],
            ["title" => "VENOM: Kèo Cuối", "image" => "../img/venom.jpg", "trailer" => "#"],
            ["title" => "An Lạc", "image" => "../img/anlac.jpg", "trailer" => "#"],
            ["title" => "Trò Chơi Nhân Tính", "image" => "../img/trochoinhantinh.jpg", "trailer" => "#"],
            ["title" => "Mật Mã Đỏ", "image" => "../img/redone.jpg", "trailer" => "#"],
            ["title" => "Phá Tổ Quỷ", "image" => "../img/pha-to-quy.webp", "trailer" => "#"],
            ["title" => "Tính Hiệu Cầu Cứu", "image" => "../img/tinhieucaucuu.jpg", "trailer" => "#"],
            ["title" => "Biệt Đội HotGirl", "image" => "../img/bietdoihotgirl.jpg", "trailer" => "#"],
            ["title" => "Võ Sĩ Giác Đấu II", "image" => "../img/GLADIATOR_II.jpg", "trailer" => "#"],
            ["title" => "Hành Trình Của MOANA 2", "image" => "../img/moana-2.webp", "trailer" => "#"],
            ["title" => "KRAVEN - Thợ Săn Thủ Lĩnh", "image" => "../img/thosanthulinh.jpg", "trailer" => "#"],
            ["title" => "Ngày Xưa Có Một Chuyện Tình", "image" => "../img/ngay-xua-co-1-chuyen-tinh.jpg", "trailer" => "#"],
            ["title" => "Địa Đạo: Mặt Trời Trong Bóng Tối", "image" => "../img/Diadao2024.jpg", "trailer" => "#"],
            ["title" => "Công Tử Bạc Liêu", "image" => "../img/contubaclieu.jpg", "trailer" => "#"],
            ["title" => "Linh Miêu: Quỷ Nhập Tràng", "image" => "../img/linhmieu.jpg", "trailer" => "#"],
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
        <a href="#"><img src="../img/hinh8.png" alt="Facebook"></a>
        <a href="#"><img src="../img/hinh11.png" alt="YouTube"></a>
        <a href="#"><img src="../img/email-icon.png" alt="Email"></a>
        <a href="#"><img src="../img/hinh9.png" alt="Zalo"></a>
        <a href="#"><img src="../img/tiktok-icon.png" alt="TikTok"></a>
    </div>
</div>

</body>
</html>
