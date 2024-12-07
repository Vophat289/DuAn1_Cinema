<?php
class MovieModel extends Database
{
    public function count()
    {
        $sql = "SELECT COUNT(*) AS total_movies FROM tbphim";
        return $this->select($sql);
    }
    public function addMovie($data, $img)
{
    $atenphim = $data['atenphim'];
    $nsx = $data['nsx'];
    $thoiluong = $data['thoiluong'];
    $quocgia = $data['quocgia'];
    $theloai = $data['theloai'];
    $daodien = $data['daodien'];
    $dienvien = $data['dienvien'];
    $ngaykhoichieu = $data['ngaykhoichieu'];
    $trailer = $data['trailer'];
    $noidung = $data['noidung'];
    $giave = $data['giave'];

    // Sử dụng mysqli_escape_string để bảo vệ dữ liệu
    $atenphim = mysqli_escape_string($this->link, $atenphim);
    $nsx = mysqli_escape_string($this->link, $nsx);
    $thoiluong = mysqli_escape_string($this->link, $thoiluong);
    $quocgia = mysqli_escape_string($this->link, $quocgia);
    $theloai = mysqli_escape_string($this->link, $theloai);
    $daodien = mysqli_escape_string($this->link, $daodien);
    $dienvien = mysqli_escape_string($this->link, $dienvien);
    $ngaykhoichieu = mysqli_escape_string($this->link, $ngaykhoichieu);
    $trailer = mysqli_escape_string($this->link, $trailer);
    $noidung = mysqli_escape_string($this->link, $noidung);
    $giave = mysqli_escape_string($this->link, $giave);

    // Câu lệnh SQL để thêm phim
    $sql = "INSERT INTO tbphim (hinhanh, atenphim, nsx, thoiluong, quocgia, theloai, daodien, dienvien, ngaykhoichieu, trailer, noidung, giave)
            VALUES ('$img', '$atenphim', '$nsx', '$thoiluong', '$quocgia', '$theloai', '$daodien', '$dienvien', '$ngaykhoichieu', '$trailer', '$noidung', '$giave')";
    
    // Thực hiện câu lệnh
    $result = $this->insert($sql);
    return $result ? $result : false;
}
public function getAllMovies()
{
    $sql = "SELECT * FROM tbphim"; // Đảm bảo tên bảng là chính xác
    $result = mysqli_query($this->link, $sql);
    
    if ($result) {
        $movies = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $movies[] = $row; // Lưu từng hàng vào mảng
        }
        return $movies; // Trả về mảng các bản ghi
    } else {
        return false; // Nếu có lỗi, trả về false
    }
}
public function deleteMovie($id)
{
    $id = mysqli_escape_string($this->link, $id); // Xử lý an toàn ID
    $sql = "DELETE FROM tbphim WHERE id_phim = '$id'"; // Đảm bảo tên bảng là chính xác
    return mysqli_query($this->link, $sql);
}
public function getMovieById($id_phim)
{
    $id_phim = mysqli_escape_string($this->link, $id_phim); // Bảo vệ chống SQL Injection
    $sql = "SELECT * FROM tbphim WHERE id_phim = '$id_phim'";
    $result = mysqli_query($this->link, $sql);

    if ($result) {
        return mysqli_fetch_assoc($result); // Trả về thông tin phim dưới dạng mảng liên kết
    } else {
        return false; // Trả về false nếu không tìm thấy phim
    }
}

public function editMovie($id, $data) {
    // Sử dụng mysqli_escape_string để bảo mật dữ liệu đầu vào
    $atenphim = mysqli_escape_string($this->link, $data['atenphim']);
    $nsx = mysqli_escape_string($this->link, $data['nsx']);
    $thoiluong = mysqli_escape_string($this->link, $data['thoiluong']);
    $quocgia = mysqli_escape_string($this->link, $data['quocgia']);
    $theloai = mysqli_escape_string($this->link, $data['theloai']);
    $daodien = mysqli_escape_string($this->link, $data['daodien']);
    $dienvien = mysqli_escape_string($this->link, $data['dienvien']);
    $ngaykhoichieu = mysqli_escape_string($this->link, $data['ngaykhoichieu']);
    $trailer = mysqli_escape_string($this->link, $data['trailer']);
    $noidung = mysqli_escape_string($this->link, $data['noidung']);
    $giave = mysqli_escape_string($this->link, $data['giave']);
    // Nếu có hình ảnh mới, xử lý upload hình ảnh ở đây
 
    if (!empty($data['hinhanh'])) {
            $hinhanh = $data['hinhanh'];
            // Cập nhật thông tin phim trong cơ sở dữ liệu
            $query = "UPDATE tbphim SET atenphim='$atenphim', nsx='$nsx', thoiluong='$thoiluong', quocgia='$quocgia', theloai='$theloai', daodien='$daodien', dienvien='$dienvien', ngaykhoichieu='$ngaykhoichieu', trailer='$trailer', noidung='$noidung', giave='$giave', hinhanh='$hinhanh' WHERE id_phim=$id";
        } else {
            // Nếu không upload được hình ảnh mới, chỉ cập nhật các thông tin khác
            $query = "UPDATE tbphim SET atenphim='$atenphim', nsx='$nsx', thoiluong='$thoiluong', quocgia='$quocgia', theloai='$theloai', daodien='$daodien', dienvien='$dienvien', ngaykhoichieu='$ngaykhoichieu', trailer='$trailer', noidung='$noidung', giave='$giave' WHERE id_phim=$id";
        }

    // Thực thi truy vấn
    return mysqli_query($this->link, $query);
}

}
