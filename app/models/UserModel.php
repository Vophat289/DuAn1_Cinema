<?php
class UserModel extends Database
{
    /**
     * Lấy thông tin người dùng dựa trên email.
     *
     * @return array|false Trả về thông tin người dùng nếu tìm thấy, ngược lại trả về false.
     */
    public function getUserByEmail($email)
    {
        // Kết nối cơ sở dữ liệu

        // Escaping chuỗi để chống SQL Injection

        // Truy vấn lấy thông tin người dùng
        $sql = "SELECT * FROM tbusers WHERE email = '$email'";
        $result = $this->select($sql);

        if ($result && $result->num_rows > 0) {
            // Trả về thông tin người dùng dưới dạng mảng kết hợp
            return $result->fetch_assoc();
        }

        // Không tìm thấy người dùng
        return false;
    }
    public function createUser($name, $email, $password)
    {
        // Escaping chuỗi để chống SQL Injection
        
        // Truy vấn chèn người dùng mới
        $sql = "INSERT INTO tbusers (username, email, password) VALUES ('$name', '$email', '$password')";

        // Thực thi truy vấn
        return $this->insert($sql);
    }
}
