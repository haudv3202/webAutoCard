<?php
include_once 'set.php';
include_once 'connect.php';
include_once 'maychu.php';
include 'head.php';
if ($_login === null) {
    // Chưa đăng nhập, chuyển hướng đến trang khác bằng JavaScript
    echo '<script>window.location.href = "login.php";</script>';
    exit(); // Đảm bảo dừng thực thi code sau khi chuyển hướng
}


?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-188275e1-8502-4336-b791-1fe6d34924e1@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-c772084a-70cb-44d6-8408-7c4f4a6c6acf@mhtml.blink" />
        

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
    <div class="container color-forum pt-1 pb-1">
        <div class="row">
            <div class="col"> <a href="dien-dan" style="color: white">Quay lại diễn đàn</a> </div>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h4>GIỚI THIỆU NGƯỜI CHƠI MỚI</h4><br>
                <?php if ($_login === null) { ?>
                    <p>Bạn chưa đăng nhập? Hãy đăng nhập để dùng được chức năng này</p>
                <?php } else { ?>
                    <b class="text-danger">Cư dân đã giới thiệu được :
                    </b>
                    <b>
                        <?php echo $_gioithieu; ?> Người
                    </b>
                    <br><br>
                    <b> Link Giới Thiệu:</b>
                    <b>
                        <style>

                            #notification {
                                font-size: 12px;
                            }

                            a {
                                text-decoration: none;
                            }

                            a:hover {
                                text-decoration: none;
                            }
                        </style>
                    </b>
                    <a href="<?php echo $link_server ?>/dang-ky.php?ref=<?php echo $_SESSION['id'] ?>"
                        onclick="copyLink(event)">
                        <span style="color: black;">
                            <?php echo $link_server ?>/register.php?ref=
                            <?php echo $_SESSION['id'] ?>
                        </span>
                    </a>
                    <br>
                    <br>
                    <div id="notification"></div>
                    <script>
                        function copyLink(event) {
                            event.preventDefault(); // Ngăn chặn chuyển hướng khi nhấp vào liên kết

                            var link = event.target.innerText; // Lấy đường dẫn từ liên kết
                            navigator.clipboard.writeText(link)
                          // Sao chép đường dẫn vào clipboard
                                .then(function () {
                                    // Sao chép thành công
                                    document.getElementById("notification").innerText = "Bạn đã sao chép liên kết giới thiệu thành công!";
                                })
                                .catch(function (error) {
                                    // Sao chép thất bại
                                    console.error(error);
                                    document.getElementById("notification").innerText = "Có lỗi xảy ra khi sao chép liên kết giới thiệu.";
                                });
                        }
                    </script>
                    </b>
                    <br>
                    <br>
                    <?php if ($_gioithieu > 0) { ?>
                        <span class="text-danger"><strong>
                                Số Điểm Giới Thiệu Là
                                <?php echo $_gioithieu; ?> Người Bạn Nhận Được :
                            </strong></span><br>
                        #<b><span>
                                <?php echo ($_gioithieu == 1) ? '5,000 VNĐ' :
                                    (($_gioithieu == 2) ? '10,000 VNĐ' :
                                        '15,000 VNĐ'); ?>
                            </span></b><br>
                        <?php
                    }
                    ?>
                    <br>
                    <br>
                    <b class="text text-danger">Phổ Biến Luật Sự Kiện: </b><br>
                    <b>- Đây là Link riêng của mỗi cư dân Light
                        <br>
                        - Người chơi phải đăng ký thành công mới được tính điểm
                        <br>
                        - Chỉ tính điểm với người chơi mới, tối đa là 3 người chơi mới
                        <br>
                        <br>
                        <span style="color:red"><strong>Quan Trọng : <span style="color:212529">
                            </strong></span>
                        </span>
                        <br>
                        <b>- Các cư dân lưu ý không <span style="color:red">spam</span> để tránh làm phiền người chơi
                            khác
                            <br>
                            - Mỗi tài khoản chỉ đạt được <span style="color:red">3 Điểm</span> thôi và phần quà sẽ gửi
                            vào <span style="color:red">hành trang</span> của cư dân khi
                            đạt đủ số điểm tích luỹ
                            <br>
                            - Khi cư dân đạt đủ <span style="color:red">1-3 Điểm</span> tích luỹ thì sẽ hiển thị nút <span
                                style="color:red">Đổi Quà</span>
                            <br>
                            <br>
                            <?php
                            // Các giá trị mốc quà và điểm tương ứng
                            $moc_qua = [
                                1 => [
                                    'diem' => 1,
                                    'gia_tri' => 50000
                                ],
                                2 => [
                                    'diem' => 2,
                                    'gia_tri' => 10000
                                ],
                                3 => [
                                    'diem' => 3,
                                    'gia_tri' => 15000
                                ]
                            ];

                            // Kiểm tra xem người chơi có điểm tích luỹ hay không
                            if ($_gioithieu > 0) {
                                // Kiểm tra xem điểm tích luỹ nằm trong mốc quà nào
                                if (array_key_exists($_gioithieu, $moc_qua)) {
                                    $moc = $moc_qua[$_gioithieu];
                                    $diem_moc = $moc['diem'];
                                    $gia_tri_moc = $moc['gia_tri'];

                                    // Kiểm tra xem người chơi đã nhấn nút "Đổi Quà" hay chưa
                                    if (isset($_POST['doi_qua'])) {
                                        // Thêm giá trị của mốc quà vào cột "vnd"
                                        $_coin += $gia_tri_moc;

                                        // Thực hiện trừ điểm tích luỹ tương ứng với mốc đó
                                        $_gioithieu -= $diem_moc;

                                        $coin = $_coin;
                                        $gioithieu =  $_gioithieu;
                                        $userId = $_SESSION[id];

// Sử dụng prepared statements với placeholders
                                        $sql = "UPDATE account SET balance = ?, gioithieu = ? WHERE id = ?";
                                        $stmt = $conn->prepare($sql);

// Bind giá trị với các placeholders
                                        $stmt->bind_param("sss", $coin, $gioithieu, $userId);

// Thực hiện truy vấn SQL sử dụng mysqli_query()
                                        if ($stmt->execute()) {
                                            echo "Đổi quà thành công!";
                                        } else {
                                            echo "Lỗi cập nhật cơ sở dữ liệu: " . $stmt->error;
                                        }

// Đóng statement sau khi sử dụng
                                        $stmt->close();
                                    }
                                }
                            }
                            ?>


                            <!-- Hiển thị nút "Đổi Quà" nếu người chơi có điểm tích luỹ -->
                            <?php if ($_gioithieu > 0): ?>
                                <form method="POST">
                                    <input class="btn btn-sm btn-main form-control" type="submit" name="doi_qua"
                                        value="Đổi Quà">
                                </form>
                            <?php endif;
                } ?>
            </div>
        </div>
    </div>
    <div class="border-secondary border-top">
    </div>
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
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/main.js"></script>
</body><!-- Bootstrap core JavaScript -->

</html>
<!--
# SOURCE WEBSITE NGOCRONGSAO CREATED BY NGUYEN DUC KIEN
# GITHUB: @NTDUCKIEN
# ZALO: 0981374169
# NGOCRONGSAO VERSION 1.0
 -->
     <div class="text-center mt-1">
       <b style="font-size:13px;" class="text-white">Tham gia cộng đồng giao lưu game với chúng tớ.</b>
       <br>
       <a href="https://www.nrohades.com/charge" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findondiscord.png" style="max-width:100px" class="mt-1"></a>
       <a href="https://www.facebook.com/groups/ngocronghades" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findonfb.png" style="max-width:100px" class="mt-1"></a>
   </div>
    <div class="text-center text-white">
        Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
        Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
    </div>
</footer>        </div>
    
</body></html>