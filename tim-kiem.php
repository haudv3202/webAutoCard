<?php
include_once 'head.php';
include_once 'css/head.php';
?>
<form action="" method="post">
<input style="height: 50px; border-radius: 15px; font-weight: bold;" name="search" type="text" class="form-control mt-1" placeholder="Tên nhân vật" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
<div class="text-center mt-1">
                        <button class="btn btn-lg btn-dark btn-block" style="border-radius: 10px;width: 100%; height: 50px;" type="submit" name="submit">Tìm kiếm</button>
                    </div>
</form>
<?php
$servername='127.0.0.1';
$username='root'; // User mặc định là root
$password='khanhnguyen';
$dbname = "dat99"; // Cơ sở dữ liệu
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die('Không thể kết nối Database:' .mysql_error());
}

    if(ISSET($_POST['submit'])){
        $keyword = $_POST['search'];
?>
<div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
<div>
    <div class="container color-forum pt-2">
        <div class="row">
            <div class="col">
                <h6 class="text-center">THÔNG TIN NHÂN VẬT</h6>
                <table class="table table-borderless text-center">
                    <tbody>
                        <tr>
                            <th>Nhân vật</th>
                            <th>Sức Mạnh</th>
                            <th>Đệ Tử</th>
                            <th>Hành Tinh</th>
                        </tr>
                    <tbody>
    <?php

        $query = mysqli_query($conn, "SELECT name,gender,JSON_EXTRACT(player.data_point, '$[1]') AS suc_manh,JSON_EXTRACT(player.pet, '$[1]') AS detu_sm FROM `player` WHERE `name` LIKE '%$keyword%' ORDER BY `name`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
                                               if ($fetch['gender'] == 0) {
                                            $hanh_tinh = "Trái đất";
                                        } elseif ($fetch['gender'] == 1) {
                                            $hanh_tinh = "Namec";
                                        } elseif ($fetch['gender'] == 2) {
                                            $hanh_tinh = "Xayda";
                                            }
                                    $sucmanh = $fetch['suc_manh'];
        $suc_manh = "";
                                    if ($sucmanh > 1000000000) {
                                                $suc_manh = number_format($sucmanh / 1000000000, 1,',', '') . ' tỷ';
                 }
                 elseif ($sucmanh > 1000000) {
                                                $suc_manh = number_format($sucmanh / 1000000, 1, '.', '') . ' Triệu';
                                            } elseif ($sucmanh >= 1000) {
                                                $suc_manh = number_format($sucmanh / 1000, 1, '.', '') . ' k';
                                            }  
                                              $detu = $fetch['detu_sm'];

                                        if ($detu != '') {
                                            if ($detu > 1000000000) {
                                                $de_tu = number_format($detu / 1000000000, 1, '.', '') . ' tỷ';
                                            } elseif ($detu > 1000000) {
                                                $de_tu = number_format($detu / 1000000, 1, '.', '') . ' Triệu';
                                            } elseif ($detu >= 1000) {
                                                $de_tu = number_format($detu / 1000, 1, '.', '') . ' k';
                                            } else {
                                                $de_tu = number_format($detu, 0, ',', '');
                                            }
                                        } else {
                                            $de_tu = 'không có';
                                        }        
       echo '</td>
                                    <td>' . $fetch['name'] . '';
                                    echo '</td>
                                    <td>
                                    '.  $suc_manh . '';
                                    echo '</td>
                                    <td>
                                    '.  $de_tu . '';
                                    echo '</td>
                                    <td>
                                    '.  $hanh_tinh . '';
                       ?>
    <?php
        }
    ?>
</div>
<?php
    }
?>