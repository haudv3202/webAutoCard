<?php
include_once 'set.php';
include_once 'connect.php';
include('head.php');
if ($_login === null) {
    // Chưa đăng nhập, chuyển hướng đến trang khác bằng JavaScript
    echo '<script>window.location.href = "login.php";</script>';
    exit(); // Đảm bảo dừng thực thi code sau khi chuyển hướng
}
$_alert = '';
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-4a69fd02-5af0-4dbf-8333-28bcfa2c9516@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-f558bca0-3aa0-4818-b313-d6ff6bde9abb@mhtml.blink" />
        

<title>Ngọc Rồng Hades</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://www.nrohades.com/assets/images/icon/icon.ico">


<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jquery -->


<!-- mycss -->
<link rel="stylesheet" href="./css/style.css">

<!-- myjs -->
<!--<script src="js/tet.js"></script>-->

<!-- bootstrap -->

    </head>
<div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
<body> 
                <?php if($_login === null) { ?>
                    <p>Bạn chưa đăng nhập? hãy đăng nhập để sử dụng chức năng này</p>
                    <?php } else  ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="alert alert-danger" style="border-radius: 7px;">
                    <form method="POST" action="https://www.nrohades.com/post-topic.php">
                        <b>Tiêu đề</b>
                        <input type="text" class=" form-control" style="border-radius: 7px;" placeholder="Tiêu đề (không quá 75 ký tự)" required="" autofocus="" name="tieude">
                        <br>

                        <b>Nội dung</b>
                        <textarea class="form-control" style="border-radius: 7px;" name="noidung" id="noidung" cols="30" rows="10" placeholder="Nội dung (không được quá 256 ký tự)"></textarea>
                         <?php
                        $query = "SELECT account.*, account.admin FROM account LEFT JOIN player ON player.account_id = account.id";
                        $result = mysqli_query($conn, $query);

                        if ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        </select>
                        <label>Chọn ảnh:</label>
                        <input class="form-control" type="file" name="image[]" id="image" multiple>

                        <div id="submit-error" class="alert alert-danger mt-2" style="display: none;"></div>
                    </div>

                    <button class="btn btn-action text-white m-1" type="submit">ĐĂNG BÀI</button>
                </form>
                <script>
                    const form = document.querySelector('form');
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const submitError = form.querySelector('#submit-error');

                    form.addEventListener('submit', (event) => {
                        const titleLength = document.getElementById('tieude').value.trim().length;
                        const contentLength = document.getElementById('noidung').value.trim().length;

                        if (titleLength < 1 || contentLength < 1) {
                            event.preventDefault();

                            submitError.innerHTML = '<strong>Lỗi:</strong> Tiêu đề và nội dung phải có ít nhất 5 ký tự!';
                            submitError.style.display = 'block';
                            submitBtn.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                        
                    });
                </script>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src=" assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/main.js"></script>
</body><!-- Bootstrap core JavaScript -->

</html>
<!--
# SOURCE WEBSITE NGOCRONGSAO CREATED BY NGUYEN DUC KIEN
# GITHUB: @NTDUCKIEN
# ZALO: 0981374169
# NGOCRONGSAO VERSION 1.0
 -->
<div class="py-3">
    <div class="table-responsive">
        <?php
        include_once 'set.php';

        // Lấy dữ liệu từ form sử dụng phương thức POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy giá trị của tiêu đề và nội dung bài viết
            $tieude = htmlspecialchars($_POST["tieude"]);
            $noidung = htmlspecialchars($_POST["noidung"]);

            if (isset($_POST['username'])) {
                $_username = $_POST['username'];
            }
            $sql = "SELECT player.name FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $_name = $row['name'];

            // Kiểm tra nếu có tệp tin ảnh được tải lên
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {
                $image_files = $_FILES['image'];
                $total_files = count($image_files['name']);

                $image_names = array(); // Mảng để lưu trữ tên tệp tin ảnh
                $upload_directory = "uploads/"; // Thư mục lưu trữ ảnh
        
                for ($i = 0; $i < $total_files; $i++) {
                    $image_filename = $image_files['name'][$i];
                    $image_tmp = $image_files['tmp_name'][$i];

                    $targetFile = $upload_directory . basename($image_filename);

                    // Di chuyển tệp tin ảnh vào thư mục lưu trữ
                    move_uploaded_file($image_tmp, $targetFile);

                    // Thêm tên tệp tin vào mảng
                    $image_names[] = basename($image_filename);
                }

                // Chuyển đổi mảng thành chuỗi JSON
                $image_names_json = json_encode($image_names);

                // Lưu dữ liệu (bao gồm username và danh sách tên tệp tin ảnh) vào cơ sở dữ liệu bằng câu lệnh INSERT INTO
                $sql = "INSERT INTO posts (tieude, noidung, image, username) VALUES ('$tieude', '$noidung','$image_names_json', '$_name')";
            } else {
                // Nếu không có tệp tin ảnh được tải lên, lưu dữ liệu (bao gồm username) vào cơ sở dữ liệu bằng câu lệnh INSERT INTO
                $sql = "INSERT INTO posts (tieude, noidung, username) VALUES ('$tieude', '$noidung', '$_name')";
            }

            if (mysqli_query($conn, $sql)) {
                // Lấy số điểm tích lũy hiện tại của người dùng
                $sql_select = "SELECT a.tichdiem FROM account a INNER JOIN player p ON a.id = p.account_id WHERE p.name = '$_name'";
                $result_select = mysqli_query($conn, $sql_select);
                $row_select = mysqli_fetch_assoc($result_select);
                $tichdiem = $row_select['tichdiem'];

                // Cập nhật giá trị tichdiem trong bảng account
                $sql_update = "UPDATE account SET tichdiem = ($tichdiem + 1) WHERE id = (SELECT account_id FROM player WHERE name = '$_name')";
                mysqli_query($conn, $sql_update);

                echo "Bài viết đã được đăng thành công.";
                // header("Location: baiviet.php");
                // exit;
            } else {
                echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Đóng kết nối với cơ sở dữ liệu
        mysqli_close($conn);
        ?>
    </div>
    <div class="border-secondary border-top"></div>
    <div class="container pt-4 pb-4 text-white">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <div style="font-size: 13px" class="text-dark">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
