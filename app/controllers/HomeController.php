<?php
class HomeController extends Controller
{



    public function get()
    {
         
        // Lấy tất cả các phim từ model
        $movies = $this->model('movie')->getAllMovies();
        // Truyền dữ liệu vào view
        $this->view('frontend/index', ['movies' => $movies]);
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
