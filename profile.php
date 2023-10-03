<?php
include_once 'head.php';
include_once 'connect.php';
include_once 'set.php';
if($_login == null) {header("location:/user");}
$_active = isset($_active) ? $_active : null;
$_tcoin = isset($_tcoin) ? $_tcoin : 0;
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-271ddbc3-ce60-4d7a-8d92-82821ff21b18@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-ea0be5a5-040a-428f-916a-d848a7e575d6@mhtml.blink" />
        

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


<?php
                                                  $sql = "SELECT player.name, player.gender,player.clan_id_sv1,JSON_EXTRACT(player.data_task, '$[0]') AS data_task, JSON_EXTRACT(player.data_point, '$[1]') AS suc_manh, account.admin, account.tichdiem FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                  
 if (isset($row['data_task'])) {
                                $data_task = $row['data_task'];
                                $clan = $row['clan_id_sv1'];
                                $sucmanh = $row['suc_manh'];
                                $sql2 = "SELECT clan_sv1.name FROM clan_sv1 INNER JOIN account ON clan_sv1.id = $clan WHERE account.username='$_username'";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            if ($clan < 0) {
    $bang = "không có bang hội";
    } elseif ($clan == 0) {
    $bang = "không có bang hội";
} else {
    $bang = $row2['name'];
}
                  $suc_manh = "";
                                    if ($sucmanh > 1000000000) {
                                                $suc_manh = number_format($sucmanh / 1000000000, 1,',', '') . ' tỷ';
                 }
                 elseif ($sucmanh > 1000000) {
                                                $suc_manh = number_format($sucmanh / 1000000, 1, '.', '') . ' Triệu';
                                            } elseif ($sucmanh >= 1000) {
                                                $suc_manh = number_format($sucmanh / 1000, 1, '.', '') . ' k';
                                                
                                $nhiemvu = "";
                                    if ($data_task == 0) {
   $nhiemvu = "Nhiệm vụ đầu tiên";
   }
   }                                  if ($data_task == 1) {
   $nhiemvu = "Nhiệm vụ tập luyện";
                                        }
                                        if ($data_task == 2) {
   $nhiemvu = "Nhiệm vụ tìm thức ăn";
                                        }
                                        if ($data_task == 3) {
   $nhiemvu = "Tìm kiếm sao băng";
                                        }
                                        if ($data_task == 4) {
   $nhiemvu = "Nhiệm vụ khó khăn";
                                        }
                                        if ($data_task == 5) {
   $nhiemvu = "Nhiệm vụ gia tăng sức mạnh";
                                        }
                                        if ($data_task == 6) {
   $nhiemvu = "Nhiệm vụ trò chuyện";
                                        }
                                           if ($data_task == 7) {
   $nhiemvu = "Nhiệm vụ giải cứu";
                                        }
                                        if ($data_task == 8) {
   $nhiemvu = "Nhiệm vụ ân nhân xuất sắc";
                                        }
                                        if ($data_task == 9) {
   $nhiemvu = "Nhiệm vụ tiên học lễ";
                                        }
                                        if ($data_task == 10) {
   $nhiemvu = "Nhiệm vụ học phí";
                                        }
                                        if ($data_task == 11) {
   $nhiemvu = "Nhiệm vụ kết giao";
                                        }
                                        if ($data_task == 12) {
   $nhiemvu = "Nhiệm vụ xin phép";
                                        }
                                        if ($data_task == 13) {
   $nhiemvu = "Nhiệm vụ gia nhập bang hội";
                                        }
                                        if ($data_task == 14) {
   $nhiemvu = "Nhiệm vụ bang hội lần 1";
                                        }
                                        if ($data_task == 15) {
   $nhiemvu = "Nhiệm vụ bang hội lần 2";
                                        }
                                        if ($data_task == 16) {
   $nhiemvu = "Tiêu diệt quái vật";
                                        }
                                        if ($data_task == 17) {
   $nhiemvu = "Nhiệm vụ giúp đỡ Cui";
                                        }
                                        if ($data_task == 18) {
   $nhiemvu = "Nhiệm vụ bất khả thi";
                                        }
                                           if ($data_task == 19) {
   $nhiemvu = "Nhiệm vụ chạm trán đệ tử";
                                        }
                                        if ($data_task == 20) {
   $nhiemvu = "Nhiệm vụ Tiểu Đội Sát Thủ";
                                        }
                                        if ($data_task == 21) {
   $nhiemvu = "Nhiệm vụ chạm trán Fide đại ca";
                                        }
                                        if ($data_task == 22) {
   $nhiemvu = "Nhiệm vụ chạm trán Rôbốt sát thủ lần 1";
                                        }
                                        if ($data_task == 23) {
   $nhiemvu = "Nhiệm vụ chạm trán Rôbốt sát thủ lần 2";
                                        }
                                        if ($data_task == 24) {
   $nhiemvu = "Nhiệm vụ giải cứu thị trấn Ginder";
                                        }
                                          if ($data_task == 25) {
   $nhiemvu = "Tiêu Diệt Xên Đi Mấy Em";
                                        }
                                        if ($data_task == 26) {
   $nhiemvu = "Tiêu Diệt Xên Đi Mấy Em";
                                        }
                                        if ($data_task == 27) {
   $nhiemvu = "Kết Bạn Nhìu Niềm Vui";
                                        }
                                        if ($data_task == 28) {
   $nhiemvu = "Săn Xên Bên Võ Đài Nhé";
                                        }
                                        if ($data_task == 29) {
   $nhiemvu = "Qua Cold Nhé";
                                        }
                                        if ($data_task == 30) {
   $nhiemvu = "Pem Chết Cụ Tụi Doraemon Đi";
                                        }
                                           if ($data_task == 31) {
   $nhiemvu = "Nhiệm Vụ Hơi Khó Nhé Nên Sẽ Có Nhiều Em Kẹt Ở Đây";
                                        }
                                        if ($data_task == 32) {
   $nhiemvu = "Đã Hoàn Thành Hết Nhiệm Vụ";
                                        }
                            // Hiển thị ảnh đại diện và tên người dùng
                            echo '<div class="col-md-9 pb-3 pt-2">
            <h5>Tài khoản</h5>
                        <table class="table">
                <tbody>
                       
                    <tr>
                        <th scope="row">Tên Nhân Vật</th>
                        <th>' . $row['name'] . '</div></th>
                    </tr>';
                    echo '
                <tbody>
                       
                    <tr>
                        <th scope="row">Nhiệm Vụ</th>
                        <th>' . $nhiemvu . '</div></th>
                    </tr>';            
                     echo '
                <tbody>
                       
                    <tr>
                        <th scope="row">Sức Mạnh</th>
                        <th>' . $suc_manh . '</div></th>
                    </tr>';         
                    echo '
                <tbody>
                       
                    <tr>
                        <th scope="row">clan</th>
                        <th>' . $bang . '</div></th>
                    </tr>';         
                         }   
                        ?>