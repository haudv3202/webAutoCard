<?php
$username = "root"; // Khai báo username
$password = "khanhnguyen";      // Khai báo password
$server   = "127.0.0.1";   // Khai báo server
$dbname   = "nro_acc";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$title = "";
$date = "";
$description = "";
$content = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["title"])) { $title = $_POST['title']; }
    if(isset($_POST["date"])) { $date = $_POST['date']; }
    if(isset($_POST["description"])) { $description = $_POST['description']; }
    if(isset($_POST["content"])) { $content = $_POST['content']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO bai_dang (title, date, description, content)
    VALUES ('$title', '$date', '$description', '$content')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>
