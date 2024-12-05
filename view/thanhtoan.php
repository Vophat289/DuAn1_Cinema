<?php
// process_payment.php (This script will handle the form submission)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $confirm1 = isset($_POST['confirm1']) ? 'Yes' : 'No';
    $confirm2 = isset($_POST['confirm2']) ? 'Yes' : 'No';
    $discount = $_POST['discount'];

    // Process the payment here (e.g., integrating with a payment gateway)

    // For now, just display the data
    echo "Thanh Toán Thành Công<br>";
    echo "Họ và tên: $name<br>";
    echo "Số điện thoại: $phone<br>";
    echo "Email: $email<br>";
    echo "Xác nhận độ tuổi: $confirm1<br>";
    echo "Đồng ý điều khoản: $confirm2<br>";
    echo "Mã giảm giá: $discount<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thanh Toán</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/thanhtoan.css">
</head>

<body>
    <div class="payment-container">
        <h2 class="title">Thanh Toán</h2>
        <div class="payment-wrapper">
            <!-- Bên trái: Form -->
            <div class="form-section">
                <form method="POST" action="">
                    <label for="name">Họ và Tên<br>
                        <input type="text" id="name" name="name" placeholder="Điền họ và tên" required>
                    </label>

                    <label for="phone">Số Điện Thoại<br>
                        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                    </label>

                    <label for="email">Email<br>
                        <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
                    </label>

                    <div class="checkbox">
                        <div>
                            <input type="checkbox" id="confirm1" name="confirm1">
                            <label for="confirm1">Đảm bảo mua vé đúng với độ tuổi quy định</label>
                        </div>
                        <div>
                            <input type="checkbox" id="confirm2" name="confirm2">
                            <label for="confirm2">Đồng ý với điều khoản của Phim Rạp</label>
                        </div>
                    </div>

            </div>

            <!-- Bên phải: Thông tin chi tiết -->
            <div class="details-section">
                <h3 class="movie-title">Hai Muối</h3>
                <img src="https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/h/a/hai_mu_i_-_payoff_poster_-_kh_i_chi_u_30082024.jpg"
                    alt="Hình ảnh phim Hai Muối" class="movie-image"> <!-- Hình ảnh thêm vào -->
                <p>
                    Địa Chỉ: 30 Đ. Tân Thắng, Sơn Kỳ, Tân Phú, Hồ Chí Minh <br>
                    Số Vé: 1 Người Lớn <br>
                    Thời Gian: Thứ 7 ngày 21/9 | 21:45 <br>
                    Phòng Chiếu: A01 <br>
                    Giá Vé: 75,000 VNĐ <br>
                    Tổng Tiền: 75,000 VNĐ <br>
                    Trạng Thái: Đã thanh toán
                </p>
            </div>

        </div>

        <!-- Phần các nút thanh toán -->
        <div class="payment-methods">
            <button class="momo">
                Thanh Toán Qua MOMO <img src="momo-icon.png" alt="MOMO">
            </button>
            <button class="visa">
                Thanh Toán Qua Thẻ Quốc Tế <img src="visa-icon.png" alt="VISA">
            </button>
            <button class="napas">
                Thanh Toán Qua Thẻ Nội Địa <img src="napas-icon.png" alt="NAPAS">
            </button>
            <div class="discount-code">
                <select id="discount" name="discount">
                    <option value="none">Chọn mã giảm giá</option>
                    <option value="discount1">Mã giảm giá 1</option>
                    <option value="discount2">Mã giảm giá 2</option>
                    <option value="discount3">Mã giảm giá 3</option>
                </select>
            </div>
        </div>

        <!-- Nút thanh toán chính -->
        <button class="pay-now" type="submit">Thanh Toán</button>
        </form>
    </div>
</body>

</html>
