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


    public function get()
    {
         
        // Lấy tất cả các phim từ model
        $movies = $this->model('movie')->getAllMovies();
        // Truyền dữ liệu vào view
        $this->view('frontend/index', ['movies' => $movies]);
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

public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Kiểm tra phương thức POST
        // Lấy dữ liệu từ form đăng nhập
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if (empty($email) || empty($password)) {
            // Báo lỗi nếu thiếu thông tin
            $error = "Vui lòng điền đầy đủ thông tin.";
            return $this->view('frontend/login', ['error' => $error]);
        }

        // Kiểm tra thông tin đăng nhập
        $user = $this->model('user')->getUserByEmail($email);

        if ($user) {
            // Kiểm tra xem người dùng có bị khóa hay không
            if ($user['is_blocked']) {
                // Nếu người dùng bị khóa, chuyển hướng đến trang blocked
                return $this->view('frontend/blocked' );

                exit;
            }

            // So sánh với hash
            if ($password == $user['password']) {
                // Đăng nhập thành công, lưu thông tin người dùng vào phiên
                $_SESSION = [
                    'user_id' => $user['id_user'],
                    'username' => $user['username'],
                    'avatar' => $user['avatar'],
                    'email' => $user['email'],
                    'sdt' => $user['sdt'],
                    'role' => $user['role'],
                ];

                redirect('/');
                exit;
            } else {
                // Đăng nhập thất bại
                $error = "Thông tin đăng nhập không chính xác.";
                return $this->view('frontend/login', ['error' => $error]);
            }
        } else {
            // Không tìm thấy người dùng
            $error = "Thông tin đăng nhập không chính xác.";
            return $this->view('frontend/login', ['error' => $error]);
        }
    }

    // Hiển thị form đăng nhập (mặc định cho phương thức GET)
    return $this->view('frontend/login');
}


    
   

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Kiểm tra phương thức POST
            // Lấy dữ liệu từ form đăng ký
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
    
            // Kiểm tra dữ liệu nhập vào
            if (empty($name) || empty($email) || empty($password)) {
                $error = "Vui lòng điền đầy đủ thông tin.";
                return $this->view('frontend/register', ['error' => $error]);
            }
    
            // Kiểm tra xem email đã tồn tại chưa
            if ($this->model('user')->getUserByEmail($email)) {
                $error = "Email đã tồn tại.";
                return $this->view('frontend/register', ['error' => $error]);
            }
    
            // Lưu thông tin người dùng vào cơ sở dữ liệu
            $this->model('user')->createUser($name, $email, $password);
    
            // Đăng ký thành công, chuyển đến trang đăng nhập
            return $this->view('frontend/login', ['success' => "Đăng ký thành công! Hãy đăng nhập."]);
        }
    
        // Hiển thị form đăng ký (mặc định cho phương thức GET)
        return $this->view('frontend/register');
    }
    
}
