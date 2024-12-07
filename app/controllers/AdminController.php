<?php
class AdminController extends Controller
{

    public function dashboard()
    {
        // Lấy dữ liệu thống kê vé theo tháng
        $monthlySales = $this->model('ticket')->getMonthlySales();

        // Lấy thống kê vé bán hàng ngày
        $ticketSales = $this->model('ticket')->getDailySales();
        // Tổng số phim
        $totalMovies = $this->model('movie')->count();

        // Tổng số phòng
        // $totalRooms = $this->model('room')->count();

        // Tổng số ghế
        // $totalSeats = $this->model('seat')->getTotalSeats();
        
        // Top 6 phim doanh thu cao nhất
        $topMovies = $this->model('ticket')->getTopMovies();

        // Hiển thị dữ liệu trên dashboard
        $this->view('admin/dashboard', [
            'monthlySales' => $monthlySales,
            'ticketSales' => $ticketSales,
            'totalMovies' => $totalMovies->fetch_assoc()['total_movies'],
            // 'totalRooms' => $totalRooms->fetch_assoc()['total_rooms'],
            // 'totalSeats' => $totalSeats,
            'topMovies' => $topMovies
        ]);
    }
    public function movielist()
    {
        // Lấy tất cả các bản ghi phim
        $movies = $this->model('movie')->getAllMovies(); // Phương thức lấy tất cả phim từ model
        // Kiểm tra xem có dữ liệu hay không
        if ($movies) {
            // Nếu có dữ liệu, truyền vào view
            return $this->view('admin/movielist', ['movies' => $movies]);
        } else {
            // Nếu không có dữ liệu, truyền vào view với giá trị rỗng
            return $this->view('admin/movielist', ['movies' => []]);
        }
    }
    public function moviedestroy($id)
{
    // Kết nối đến cơ sở dữ liệu
    $model = $this->model('movie');

    // Gọi phương thức để xóa phim
    $result = $model->deleteMovie($id);

    if ($result) {
        // Nếu xóa thành công, có thể thêm thông báo thành công và điều hướng
        $_SESSION['message'] = "Phim đã được xóa thành công!";
        header("Location: " . route('admin/movielist')); // Điều hướng đến danh sách phim
    } else {
        // Nếu có lỗi xảy ra, có thể thêm thông báo lỗi
        $_SESSION['error'] = "Có lỗi xảy ra khi xóa phim!";
        header("Location: " . route('admin/movielist')); // Điều hướng đến danh sách phim
    }
}
public function editMovie($id_phim)
{
    // Khởi tạo mô hình phim
    $movieModel = $this->model('movie');

    // Kiểm tra xem có dữ liệu POST hay không
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $files = $_FILES['hinhanh'];
        $input = $_POST;

        // Lấy thông tin phim cũ
        $currentMovie = $movieModel->getMovieById($id_phim);

        // Tạo dữ liệu cho bản ghi phim mới
        $data = [
            'atenphim' => $input['atenphim'],
            'nsx' => $input['nsx'],
            'thoiluong' => $input['thoiluong'],
            'quocgia' => $input['quocgia'][0], // Giả sử quốc gia chỉ chọn 1
            'theloai' => implode(',', $input['theloai']), // Chuyển mảng thành chuỗi
            'daodien' => $input['daodien'],
            'dienvien' => $input['dienvien'],
            'ngaykhoichieu' => $input['ngaykhoichieu'],
            'trailer' => $input['trailer'],
            'noidung' => $input['noidung'],
            'giave' => $input['giave'],
        ];

        // Kiểm tra nếu có hình ảnh mới được tải lên
        if ($files['error'] == 0) {
            // Tạo tên ngẫu nhiên cho file ảnh
            $tenFile = uniqid() . '.' . strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
            $destination = __DIR__ . '/../../public/imgs/' . $tenFile;

            // Di chuyển file ảnh vào thư mục đích
            if (move_uploaded_file($files['tmp_name'], $destination)) {
                $data['hinhanh'] = $tenFile; // Cập nhật tên file hình ảnh mới
            } else {
                $message = "<p style=\"color: red;\">Failed to upload new image</p>";
            }
        } else {
            // Nếu không có hình ảnh mới, giữ lại hình ảnh cũ
            $data['hinhanh'] = null;
        }

        // Gọi phương thức chỉnh sửa phim vào cơ sở dữ liệu
        $result = $movieModel->editMovie($id_phim, $data); // Thay "edit" bằng phương thức tương ứng trong model

        if ($result) {
            redirect('/admin/movielist');
            $message = "<p style=\"color: green;\">Edit successfully</p>";
        } else {
            $message = "<p style=\"color: red;\">Edit Failed</p>";
        }

        // Hiển thị kết quả
        return $this->view('admin/edit_movie', ['message' => $message, 'movie' => $data]);
    }

    // Nếu không có POST request, lấy thông tin phim cũ và hiển thị form
    $currentMovie = $movieModel->getMovieById($id_phim);
    return $this->view('admin/edit_movie', ['movie' => $currentMovie]);
}

    public function addMovie()
    {
        // Lấy danh sách thể loại và quốc gia
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $files = $_FILES['hinhanh'];
            $input = $_POST;
            // Tạo tên ngẫu nhiên cho file ảnh
            $tenFile = uniqid() . '.' . strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
            $quocgia = $input['quocgia'][0]; // Giả sử quốc gia chỉ chọn 1
            $theloai = implode(',', $input['theloai']); // Chuyển mảng thành chuỗi
    
            // Đường dẫn lưu trữ file ảnh
            $destination = __DIR__ . '/../../public/imgs/' . $tenFile;
    
            // Di chuyển file ảnh vào thư mục đích
            if (move_uploaded_file($files['tmp_name'], $destination)) {
                // Tạo dữ liệu cho bản ghi phim mới
                $data = [
                    'atenphim' =>  $input['atenphim'],
                    'nsx' =>  $input['nsx'],
                    'thoiluong' =>  $input['thoiluong'],
                    'quocgia' =>  $quocgia,
                    'theloai' =>  $theloai,
                    'daodien' =>  $input['daodien'],
                    'dienvien' =>  $input['dienvien'],
                    'ngaykhoichieu' =>  $input['ngaykhoichieu'],
                    'trailer' =>  $input['trailer'],
                    'noidung' =>  $input['noidung'],
                    'giave' =>  $input['giave'],
                    'hinhanh' => $tenFile
                ];
    
                // Gọi phương thức thêm phim vào cơ sở dữ liệu
                $result = $this->model('movie')->addMovie($data, $tenFile); // Thay "add" bằng phương thức tương ứng trong model
    
                if ($result) {
                    redirect('/admin/movielist');
                    $message = "<p style=\"color: green;\">Add successfully</p>";
                } else {
                    $message = "<p style=\"color: red;\">Add Failed</p>";
                }
            } else {
                $message = "<p style=\"color: red;\">Failed to upload image</p>";
            }
    
            // Hiển thị kết quả
            return $this->view('admin/addmovie', ['message' => $message, ]);
        }
    
        // Nếu không có POST request, hiển thị form
        $this->view('admin/addmovie' );
    }
    
    public function table()
    {
        //if authed -> go to dashboard
        //if submit form -> check -> home 
        $this->view('admin/table');
    }
    // public function login()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $result = $this->model('admin')->login($_POST['UserName'], $_POST['Password']);
    //         //if authed -> go to dashboard
    //         if ($result) {

    //             Session::set('admin_login', 'authed');
    //             Session::set('admin_name', $result['FullName']);
    //             Session::set('admin_img',  $result['Image']);
    //             // redirect('/admin');
    //         } else {
    //             echo "Wrong pass";
    //         }
    //         //if submit form -> check -> home 
    //         $this->view('admin/login');
    //     }
    //     $this->view('admin/login');
    // }
    public function logout()
    {
        Session::destroy();
        $this->view('admin/login');
    }
  
    public function addproduct()
    {
        // handle all method, ->view
        //isset POST update
        $c_data =  $this->model('category')->getAll();
        $b_data =  $this->model('brand')->getAll();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $files = $_FILES['filepond'];
            $files_string = array();
            $tags = array();
            foreach ($_POST['Tag'] as $key => $name) {
                array_push($tags, $name);
            }
            $_POST['Tag'] = implode(', ', $tags);
            foreach ($files['name'] as $key => $name) {
                if ($files['error'][$key] == 0) {
                    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                    $filename = uniqid() . '.' . $ext;
                    $destination = __DIR__ . '/../../public/imgs/' . $filename;
                    array_push($files_string, $filename);
                    move_uploaded_file($files['tmp_name'][$key], $destination);
                }
            }
            $first_element = array_shift($files_string);
            $files_string  = implode(', ', $files_string);
            if ($_POST['Name'] == '' || $_POST['Price'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('admin/addproduct', ['result' =>  $result]);
            } else {
                $result = $this->model('product')->addproduct($_POST, $first_element,  $files_string);
                if ($result) {
                    $result = "<p style=\"color: green;\">Add successfully</p>";
                    return  $this->view('admin/addproduct', ['result' =>  $result]);
                } else {
                    $result = "<p style=\"color: red;\">Add Failed</p>";
                    return  $this->view('admin/addproduct', ['result' =>  $result]);
                }
            }
        }


        $this->view('admin/addproduct', ['c_data' => $c_data, 'b_data' => $b_data]);
    }
    public function updateproduct()

    {
        $mess = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tags = array();
            foreach ($_POST['Tag'] as $key => $name) {
                array_push($tags, $name);
            }
            $_POST['Tag'] = implode(', ', $tags);
            if ($_FILES['filepond']['name'][0] == '') {
                $result = $this->model('product')->updateProduct($_POST);
                if ($result) {
                    $mess = "<p style=\"color: green;\">Update successfully</p>";
                } else {
                    $mess = "<p style=\"color: red;\">Update Failed</p>";
                }
            } else {
                echo "no upload";
                // handle file name
                $ext = strtolower(pathinfo($_FILES['filepond']['name'][0], PATHINFO_EXTENSION));
                $filename = uniqid() . '.' . $ext;
                $destination = __DIR__ . '/../../public/imgs/' . $filename;
                move_uploaded_file($_FILES['filepond']['tmp_name'][0], $destination);
                $result = $this->model('product')->updateProduct($_POST, $filename);
                if ($result) {
                    $mess = "<p style=\"color: green;\">Update successfully</p>";
                } else {
                    $mess = "<p style=\"color: red;\">Update Failed</p>";
                }
            }
        }
        if (isset($_GET['id']) && $_GET['id'] != null) {
            $c_data =  $this->model('category')->getAll();
            $b_data =  $this->model('brand')->getAll();
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('product')->getById($id);
            //return object -> assoc_array
            if ($result) {
                $this->view('admin/updateproduct', ['product_data' => $result, 'c_data' => $c_data, 'b_data' => $b_data, 'mess' => $mess]);
            }
        }
    }
    public function delproduct()
    {
        if (isset($_GET['delid']) && $_GET['delid'] != null) {
            // id != '';
            $id = $_GET['delid'];
            $result = $this->model('product')->del($id);
            //return object -> assoc_array
            // if ($result) {
            //      .
            self::productlist();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function productlist()
    {
        $model = $this->model('product');
        $result = $model->getAllProductsAdmin();
        if ($result) {
            $this->view('admin/productlist', ['products' => $result]);
        } else {
            $this->view('admin/productlist', ['products' => '']);
        }
        // handle all method del, get, update, ->view
        //isset POST update
    }
    public function categorylist()
    {
        $result =  $this->model('category')->getAll();
        if ($result) {
            $this->view('admin/categorylist', ['category' => $result]);
        } else {
            $this->view('admin/categorylist', ['category' => '']);
        }


        // handle all method del, get, update, ->view
        //isset POST update
    }
    public function addcategory()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $files = $_FILES['filepond'];
            $ext = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
            $filename = uniqid() . '.' . $ext;
            $destination = __DIR__ . '/../../public/imgs/' . $filename;
            move_uploaded_file($files['tmp_name'], $destination);
            echo "file have uploaded" . $filename;
            if ($_POST['Name'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('admin/addcategory', ['result' =>  $result]);
            } else {
                $result = $this->model('category')->add($_POST, $filename);
                if ($result) {
                    $result = "<p style=\"color: green;\">Add successfully</p>";
                    return  $this->view('admin/addcategory', ['result' =>  $result]);
                } else {
                    $result = "<p style=\"color: red;\">Add Failed</p>";
                    return  $this->view('admin/addcategory', ['result' =>  $result]);
                }
            }
        }
        $this->view('admin/addcategory');



        // handle all method del, get, update, ->view
        //isset POST update
    }
    public function updatecategory()

    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $_GET['id'];
            if ($_FILES['filepond']['name'] != '') {
                $files = $_FILES['filepond'];
                $ext = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
                $filename = uniqid() . '.' . $ext;
                $destination = __DIR__ . '/../../public/imgs/' . $filename;
                move_uploaded_file($files['tmp_name'], $destination);
                $this->model('category')->updateOne($_POST, $filename);
            } else {
                $this->model('category')->updateOne($_POST);
            }
        }
        if (isset($_GET['id']) && $_GET['id'] != null) {
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('category')->getById($id);
            if ($result) {

                $this->view('admin/updatecategory', ['c_data' => $result]);
            } else {
                redirect('/admin/categorylist');
            }
        } else {
            redirect('/admin');
        }
    }
    public function delcategory()
    {
        if (isset($_GET['delid']) && $_GET['delid'] != null) {
            // id != '';
            $id = $_GET['delid'];
            $result = $this->model('category')->delOne($id);
            //return object -> assoc_array
            // if ($result) {
            self::categorylist();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function brandlist()
    {
        $result =  $this->model('brand')->getAll();
        if ($result) {
            $this->view('admin/brandlist', ['brand' => $result]);
        } else {
            $this->view('admin/brandlist', ['brand' => '']);
        }
    }
    public function addbrand()
    {
        $c_data =  $this->model('category')->getAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $files = $_FILES['filepond'];
            $ext = strtolower(pathinfo($files['name'], PATHINFO_EXTENSION));
            $filename = uniqid() . '.' . $ext;
            $destination = __DIR__ . '/../../public/imgs/' . $filename;
            move_uploaded_file($files['tmp_name'], $destination);
            if ($_POST['Name'] == '' || $_POST['CateID'] == '') {
                $result = "<p style=\"color: red;\">All fields must be not empty</p>";
                return  $this->view('admin/addbrand', ['result' =>  $result, 'c_data' => $c_data]);
            } else {
                $result = $this->model('brand')->add($_POST, $filename);
                if ($result) {
                    $result = "<p style=\"color: green;\">Add successfully</p>";
                    return  $this->view('admin/addbrand', ['result' =>  $result, 'c_data' => $c_data]);
                } else {
                    $result = "<p style=\"color: red;\">Add Failed</p>";
                    return  $this->view('admin/addbrand', ['result' =>  $result, 'c_data' => $c_data]);
                }
            }
        }
        $this->view('admin/addbrand', ['c_data' => $c_data]);
    }
    public function delbrand()
    {
        if (isset($_GET['delid']) && $_GET['delid'] != null) {
            // id != '';
            $id = $_GET['delid'];
            $result = $this->model('brand')->del($id);
            //return object -> assoc_array
            // if ($result) {
            //      .
            self::brandlist();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function blockUser($id)
    {
        if ($this->model('customer')->blockUser($id)) {
            $_SESSION['success'] = 'Người dùng đã được chặn thành công.';
        } else {
            $_SESSION['error'] = 'Có lỗi xảy ra trong quá trình chặn người dùng.';
        }
    
        // Chuyển hướng về trang danh sách người dùng
        header('Location: ' . route('admin/customerlist'));
        exit;
    }
    
    public function reviews()
    {

        // handle all method del, get, update, ->view
        //isset POST update
        $this->view('admin/reviews');
    }
    public function customerlist()
    {
        $result =  $this->model('customer')->getAll();
        if ($result) {
            $this->view('admin/customerlist', ['customer' => $result]);
        } else {
            $this->view('admin/customerlist', ['customer' => '']);
        }
    }
    public function delcustomer()
    {
        if (isset($_GET['delid']) && $_GET['delid'] != null) {
            // id != '';
            $id = $_GET['delid'];
            $result = $this->model('customer')->del($id);
            //return object -> assoc_array
            // if ($result) {
            //      .
            self::customerlist();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function orders()
    {
        $result =  $this->model('orders')->getAll();
        if ($result) {
            $this->view('admin/orders', ['orders' => $result]);
        } else {
            $this->view('admin/orders', ['orders' => '']);
        }
    }

    public function ordersconfirm()
    {
        if (isset($_GET['id']) && $_GET['id'] != null) {
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('orders')->confirm($id);
            //return object -> assoc_array
            // if ($result) {
            //      .
            self::orders();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function orderscancle()
    {
        if (isset($_GET['id']) && $_GET['id'] != null) {
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('orders')->cancle($id);
            //return object -> assoc_array
            // if ($result) {
            //      .
            self::orders();
            // }
        } else {
            redirect('/admin');
        }
    }
    public function orderdetail()
    {
        if (isset($_GET['id']) && $_GET['id'] != null) {
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('orderdetail')->get($id);
            if ($result) {
                $this->view('admin/orderdetail', ['orderdetail' => $result]);
            } else {
                $this->view('admin/orderdetail', ['orderdetail' => '']);
            }
            // }
        } else {
            redirect('/admin');
        }
    }
    public function contacts()
    {
        $result = $this->model('contact')->getAll();

        $this->view('admin/contact', ['contact' => $result]);
    }
    public function slidelist()
    {

        $result = $this->model('slide')->getAll();

        $this->view('admin/slidelist', ['slide' => $result]);
    }
    public function delslide()
    {
        if (isset($_GET['delid']) && $_GET['delid'] != null) {
            // id != '';
            $id = $_GET['delid'];
            $result = $this->model('slide')->del($id);

            self::slidelist();
        } else {
            redirect('/admin');
        }
    }
    public function addslide()
    {
        if (isset($_GET['id']) && $_GET['id'] != null) {
            // id != '';
            $id = $_GET['id'];
            $result = $this->model('slide')->add($id);

            self::slidelist();
        } else {
            redirect('/admin');
        }
    }
}
