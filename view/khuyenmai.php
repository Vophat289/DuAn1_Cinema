<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glide Cinema</title>
    <link rel="stylesheet" href="../css/khuyenmai.css">
</head>
<body>

<!-- Thanh điều hướng -->
<div class="navbar">
            <div class="navbar-logo">
            <img src="../img/2.png" alt="Glide Cinema Logo">
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

    <!-- Chương Trình Khuyến Mãi -->
    
    <!-- Promotion 1 -->
    <div class="promotion-container">
    <h1 style="text-align: center; margin-top: 20px;">Chương Trình Khuyến Mãi</h1>
    <div class="promotion-grid">
        <?php
        // Danh sách chương trình khuyến mãi
        $promotions = [
            ["img" => "../img/anh1.png", "title" => "C'Student - 45K", "description" => "Ưu đãi cho học sinh/sinh viên..."],
            ["img" => "../img/anh2.png", "title" => "Happy Hour - 45K", "description" => "Xem phim trước 10h sáng..."],
            ["img" => "../img/anh3.png", "title" => "Ưu đãi 3D", "description" => "Giảm giá vé 3D chỉ còn 55K..."],
            ["img" => "../img/anh4.png", "title" => "Combo Ưu Đãi", "description" => "Combo bắp nước giá rẻ..."],
            ["img" => "../img/anh3.png", "title" => "Ưu đãi 3D", "description" => "Giảm giá vé 3D chỉ còn 55K..."],
            ["img" => "../img/anh4.png", "title" => "Combo Ưu Đãi", "description" => "Combo bắp nước giá rẻ..."],
            
            // Thêm nhiều chương trình khuyến mãi khác nếu cần
        ];

        // Hiển thị từng chương trình
        foreach ($promotions as $promo) {
            echo '
                <div class="promotion-item">
                    <img src="' . $promo["img"] . '" alt="' . $promo["title"] . '">
                    <h3>' . $promo["title"] . '</h3>
                    <p>' . $promo["description"] . '</p>
                    <a href="#" class="btn-primary">Đặt Vé Ngay</a>
                </div>
            ';
        }
        ?>
    </div>
</div>

        <!-- Thêm các chương trình khuyến mãi khác tại đây -->
    </div>

    <div class="footer">
    <div class="footer-content">
        <!-- Logo -->
        <div class="footer-logo">
            <img src="../img/2.png" alt="Glide Cinema Logo">

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
        <a href="#"><img src="../img/anh8.png" alt="Facebook"></a>
        <a href="#"><img src="../img/anh11.png" alt="YouTube"></a>
        <a href="#"><img src="../img/anh7.png" alt="Email"></a>
        <a href="#"><img src="../img/anh9.png" alt="Zalo"></a>
        <a href="#"><img src="../img/anh10.png" alt="TikTok"></a>
    </div>
</div>
</body>
</html>
