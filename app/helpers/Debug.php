<?php

function dd($data)
{
    // Kiểm tra kiểu dữ liệu
    if (is_array($data) || is_object($data)) {
        echo '<pre>'; // Thêm thẻ <pre> để dễ đọc
        print_r($data); // Hiển thị thông tin biến
        echo '</pre>';
    } else {
        var_dump($data); // Sử dụng var_dump cho các kiểu dữ liệu khác
    }
    
    die(); // Dừng thực thi
}
function asset_($path)
{
    // Trả về đường dẫn đầy đủ
    return ASSETS_URL_ROOT . '/public/' .  $path ;
}
function route($path) {
    // Đảm bảo ASSETS_URL_ROOT không kết thúc bằng /
    $baseUrl = rtrim(ASSETS_URL_ROOT, '/');

    // Đảm bảo $path bắt đầu bằng /
    $formattedPath = ltrim($path, '/');

    // Kết hợp base URL với path đã xử lý
    return $baseUrl . '/' . $formattedPath;
}