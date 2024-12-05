<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập & Đăng Ký</title>
    <link rel="stylesheet" href="../css/login.css">
    <body>
    <!-- Thanh điều hướng -->
    <div class="navbar">
        <div class="navbar-logo">
            <img src="../img/logo.png" alt="Logo">
        </div>
        <div class="navbar-menu">
            <a href="#" class="btn-yellow">ĐẶT VÉ NGAY</a>
            <a href="#" class="btn-purple">ĐẶT BẮP NƯỚC</a>
            <input type="text" class="search-bar" placeholder="Tìm phim, rạp...">
        </div>
        <div class="navbar-login">
            <a href="#">Đăng Nhập</a>
        </div>
    </div>

    <!-- Tabs Đăng Nhập & Đăng Ký -->
    <div class="auth-container">
        <div class="auth-tabs">
            <button class="tab active" onclick="switchTab('login-form')">Đăng Nhập</button>
            <button class="tab" onclick="switchTab('register-form')">Đăng Ký</button>
        </div>

        <!-- Form Đăng Nhập -->
        <div class="auth-form active" id="login-form">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Tài khoản, Email hoặc SĐT</label>
                    <input type="text" id="username" name="username" placeholder="Nhập tài khoản của bạn">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn">
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox" name="remember"> Lưu mật khẩu đăng nhập
                    </label>
                    <a href="#" class="forgot-password">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
            </form>
            <div class="divider">HOẶC</div>
            <button class="btn btn-facebook">Đăng Nhập bằng Facebook</button>
            <button class="btn btn-google">Đăng Nhập bằng Google</button>
        </div>

        <!-- Form Đăng Ký -->
        <div class="auth-form" id="register-form">
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="fullname">Họ và Tên</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Điền họ và tên">
                </div>
                <div class="form-group">
                    <label for="birthday">Ngày Sinh</label>
                    <input type="date" id="birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại</label>
                    <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group">
                    <label for="username">Tên Đăng Nhập</label>
                    <input type="text" id="username" name="username" placeholder="Điền tên đăng nhập">
                </div>
                <div class="form-group">
                    <label for="id_card">CCCD/CMND</label>
                    <input type="text" id="id_card" name="id_card" placeholder="Số CCCD/CMND">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Nhập email của bạn">
                </div>
                <div class="form-group">
                    <label for="password">Mật Khẩu</label>
                    <input type="password" id="password" name="password" placeholder="Điền mật khẩu">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Xác Nhận Mật Khẩu</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Xác nhận mật khẩu">
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="terms"> Tôi đồng ý với điều khoản sử dụng
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Đăng Ký</button>
            </form>
        </div>
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
        <a href="#"><img src="../img/facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="../img/youtube-icon.png" alt="YouTube"></a>
        <a href="#"><img src="../img/email-icon.png" alt="Email"></a>
        <a href="#"><img src="../img/zalo-icon.png" alt="Zalo"></a>
        <a href="#"><img src="../img/tiktok-icon.png" alt="TikTok"></a>
    </div>
</div>
</body>
</html>
<script>
    function switchTab(tabId) {
        document.querySelectorAll('.auth-form').forEach((form) => {
            form.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active');

        document.querySelectorAll('.auth-tabs .tab').forEach((tab) => {
            tab.classList.remove('active');
        });
        document.querySelector(`.auth-tabs .tab[onclick="switchTab('${tabId}')"]`).classList.add('active');
    }

    // Mặc định hiển thị tab Đăng Nhập
    switchTab('login-form');
</script>
