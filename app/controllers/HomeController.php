<?php
class HomeController extends Controller
{
    public function buyTicket()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy thông tin từ form
        $movieId = $_POST['movie_id'] ?? null;
        $ticketType = $_POST['ticket_type'] ?? null;
        // $showTime = $_POST['show_time'] ?? null;
        $ticketPrice = $_POST['ticketPrice'] ?? null;
        // $seatCount = $_POST['seat_count'] ?? 1; // Mặc định là 1 nếu không có giá trị
        // Kiểm tra dữ liệu hợp lệ
        if (!$movieId || !$ticketType  <= 0) {
            // Xử lý lỗi, có thể chuyển hướng về trang trước đó và hiển thị thông báo lỗi
            return "Thông tin không hợp lệ.";
        }

        // Lưu thông tin mua vé vào cơ sở dữ liệu
        $this->model('ticketnew')->createTicketPurchase($movieId, $ticketType, $ticketPrice , );

        // Chuyển hướng hoặc hiển thị thông báo thành công
            header('Location: ' . route('')); // Thay đổi route theo nhu cầu
            exit;

    }

    // Nếu không phải POST, có thể chuyển hướng về trang khác
    header('Location: ' . route('')); // Thay đổi route theo nhu cầu
    exit;
}
    public function movie_detail($id) {
        // Giả sử bạn có một hàm để lấy phim theo ID
        $movie = $this->model('movie')->getMovieById($id);
        // Kiểm tra nếu phim tồn tại
        if (!$movie) {
            // Xử lý khi không tìm thấy phim (ví dụ: hiển thị thông báo lỗi)
            return "Phim không tồn tại.";
        }

        // Trả về thông tin chi tiết phim (có thể render một view)
        return $this->view('frontend/movie_detail', ['movie' => $movie, 'movie_id' =>$id]);
    }
    public function getProducts()
    {
    }
    public function logout()
{
    // Hủy session
    session_start();
    session_unset(); // Xóa tất cả các biến trong session
    session_destroy(); // Hủy session
    
    // Chuyển hướng về trang chủ hoặc trang đăng nhập
    header('Location: ' . route('login'));
    exit;
}
}