<?php
// Kết nối đến cơ sở dữ liệu MySQL
$server = "localhost";
$user= "root";
$password = "";
$dbName = "quanlysach";

$conn = new mysqli($servername, $username_db, $password_db, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin từ form đăng nhập
$username = $_POST['user'];
$password = $_POST['pass'];

// Truy vấn thông tin người dùng từ cơ sở dữ liệu
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Đăng nhập thành công
    echo "<font color='blue'>WELCOME TO, $username</font>";
} else {
    // Đăng nhập thất bại
    echo "<font color='red'>Username hoặc password không chính xác, vui lòng đăng nhập lại</font>";
}

// Đóng kết nối
$conn->close();
?>
