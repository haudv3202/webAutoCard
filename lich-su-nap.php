<?php
include(__DIR__ . "/api/config.php");

session_start(); // bắt đầu session để lấy thông tin tài khoản đã đăng nhập

if (!isset($_SESSION['username'])) { // nếu tài khoản chưa đăng nhập, chuyển hướng người dùng đến trang đăng nhập
    header("Location:/login.php");
    exit();
}

$username = $_SESSION['username'];

// Sử dụng prepared statements
$stmt = $conn->prepare("SELECT * FROM `trans_log` WHERE name=? AND status != 0");
$stmt->bind_param("s", $username);
$stmt->execute();

// Xử lý kết quả
$result = $stmt->get_result();// Lấy thông tin các giao dịch đã hoàn thành (status = 1, 2 hoặc 3) của tài khoản đã đăng nhập
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Tài khoản</th><th>Loại thẻ</th><th>Số serial</th><th>Mã pin</th><th>Mệnh giá</th><th>Trạng thái</th><th>Thời gian</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['seri'] . "</td>";
        echo "<td>" . $row['pin'] . "</td>";
        echo "<td>" . number_format($row['amount']) . "</td>";
        echo "<td>";
        switch ($row['status']) {
            case 1:
                echo "Thành công";
                break;
            case 2:
                echo "Thất bại";
                break;
            case 3:
                echo "Sai mệnh giá";
                break;
            default:
                echo "Chưa xác định";
        }
        echo "<td>" . date('Y-m-d H:i:s', strtotime($row['date'])) . "</td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}
?>