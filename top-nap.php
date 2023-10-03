<?php
include_once 'set.php';
include_once 'connect.php';
include('head.php');
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
    <div class="container color-forum pt-2">
        <div class="row">
            <div class="col">
                <h6 class="text-center">BẢNG XẾP HẠNG ĐUA TOP NGỌC RỒNG TAGON</h6>
                <table class="table table-borderless text-center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Nhân Vật</th>
                            <th>Tổng Nạp</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <?php
                        include 'connect.php';

                        $query = "SELECT player.name, SUM(account.tongnap) AS tongnap FROM account JOIN player ON account.id = player.account_id GROUP BY player.name ORDER BY tongnap DESC LIMIT 10";
                        $result = $conn->query($query);
                        $stt = 1;
                        if (!$result) {
                            echo 'Lỗi truy vấn SQL: ' . mysqli_error($conn);
                        } else if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                           <tr>
                           <td>' . $stt . '</td>
                           <td>' . $row['name'] . '</td>
                           <td>' . number_format($row['tongnap'], 0, ',') . 'đ</td>
                           </tr>
                           ';
                                $stt++;
                            }
                        } else {
                            echo '<div class="alert alert-success">Máy Chủ 1 chưa có thông kê bảng xếp hạng!';
                        }

                        // Đóng kết nối
                        $conn->close();
                        ?>
                    </tbody>
                </table>
                <div class="text-right">
                    <small>Cập nhật lúc:
                        <?php echo date('H:i d/m/Y'); ?>
                    </small>
                </div>
            </div>
        </div>
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