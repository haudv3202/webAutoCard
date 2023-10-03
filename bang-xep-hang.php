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
<body>
    <style>
        th,
        td {
            white-space: nowrap;
            padding: 2px 4px !important;
            font-size: 11px;
        }
    </style>
    <div class="container color-forum pt-2">
        <div class="row">
            <div class="col">
                <h6 class="text-center">BẢNG XẾP HẠNG ĐUA TOP NGỌC RỒNG TAGON</h6>
                <table class="table table-borderless text-center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Nhân vật</th>
                            <th>Sức Mạnh</th>
                            <th>Đệ Tử</th>
                            <th>Hành Tinh</th>
                            <th>Tổng</th>
                        </tr>
                    <tbody>
                        <?php
                        $countTop = 1;
                        $data = mysqli_query($config, "SELECT name, gender, 
    CASE 
        WHEN gender = 1 THEN CAST(JSON_UNQUOTE(JSON_EXTRACT(data_point, '$[1]')) AS SIGNED)
        WHEN gender = 2 THEN CAST(JSON_UNQUOTE(JSON_EXTRACT(data_point, '$[1]')) AS SIGNED)
        ELSE CAST(JSON_UNQUOTE(JSON_EXTRACT(data_point, '$[1]')) AS SIGNED)
    END AS second_value,
    SUBSTRING_INDEX(SUBSTRING_INDEX(JSON_UNQUOTE(JSON_EXTRACT(pet, '$[1]')), ',', 2), ',', -1) AS detu_sm,
    CAST(JSON_UNQUOTE(JSON_EXTRACT(data_point, '$[1]')) AS SIGNED) + CAST(COALESCE(SUBSTRING_INDEX(SUBSTRING_INDEX(JSON_UNQUOTE(JSON_EXTRACT(pet, '$[1]')), ',', 2), ',', -1), '0') AS SIGNED) AS tongdiem
FROM player
ORDER BY tongdiem DESC
LIMIT 10;");
                        if (mysqli_num_rows($data) > 0) { // Check the number of returned results
                            while ($row = mysqli_fetch_array($data)) {
                                ?>
                                <tr class="top_<?php echo $countTop; ?>">
                                    <td>
                                        <?php echo $countTop++; ?>
                                    </td>
                                    <td>
                                        <?php echo htmlspecialchars($row['name']); ?>
                                    </td>
                                    <td>
                                        <?php
                                        $value = $row['second_value'];

                                        if ($value != '') {
                                            if ($value > 1000000000) {
                                                echo number_format($value / 1000000000, 1, '.', '') . ' tỷ';
                                            } elseif ($value > 1000000) {
                                                echo number_format($value / 1000000, 1, '.', '') . ' Triệu';
                                            } elseif ($value >= 1000) {
                                                echo number_format($value / 1000, 1, '.', '') . ' k';
                                            } else {
                                                echo number_format($value, 0, ',', '');
                                            }
                                        } else {
                                            echo 'Không có chỉ số sức mạnh';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $value = $row['detu_sm'];

                                        if ($value != '') {
                                            if ($value > 1000000000) {
                                                echo number_format($value / 1000000000, 1, '.', '') . ' tỷ';
                                            } elseif ($value > 1000000) {
                                                echo number_format($value / 1000000, 1, '.', '') . ' Triệu';
                                            } elseif ($value >= 1000) {
                                                echo number_format($value / 1000, 1, '.', '') . ' k';
                                            } else {
                                                echo number_format($value, 0, ',', '');
                                            }
                                        } else {
                                            echo 'Không đệ tử';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['gender'] == 0) {
                                            echo "Trái đất";
                                        } elseif ($row['gender'] == 1) {
                                            echo "Namec";
                                        } elseif ($row['gender'] == 2) {
                                            echo "Xayda";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $total = $row['tongdiem'];

                                        if ($total > 1000000000) {
                                            echo number_format($total / 1000000000, 1, '.', '') . ' tỷ';
                                        } elseif ($total > 1000000) {
                                            echo number_format($total / 1000000, 1, '.', '') . ' Triệu';
                                        } elseif ($total >= 1000) {
                                            echo number_format($total / 1000, 1, '.', '') . ' k';
                                        } else {
                                            echo number_format($total, 0, ',', '');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo 'Máy Chủ 1 chưa có thông kê bảng xếp hạng!';
                        }
                        ?>


                    </tbody>
                </table>
                <script>
                    // Cập nhật tự động sau mỗi 3 giây
                    setInterval(function () {
                        $.ajax({
                            url: location.href, // URL hiện tại
                            success: function (result) {
                                var leaderboardTable = $(result).find('#leaderboard-table'); // Tìm bảng xếp hạng trong HTML mới nhận được
                                $('#leaderboard-table').html(leaderboardTable.html()); // Cập nhật HTML của bảng xếp hạng
                            }
                        });
                    }, 3000);
                </script>
                <div class="text-right">
                    <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');

                    // Thực hiện truy vấn để lấy thời gian cập nhật từ cột data_point trong bảng player
                    $updateTimeQuery = mysqli_query($config, "SELECT data_point, pet FROM player");
                    $lastUpdate = null;

                    while ($row = mysqli_fetch_assoc($updateTimeQuery)) {
                        $dataPoint = json_decode($row['data_point'], true);
                        $pet = json_decode($row['pet'], true);

                        if (isset($dataPoint[1]) && $dataPoint[1] !== null) {
                            $updateTime = strtotime($dataPoint[1]);
                            if ($updateTime !== false && ($lastUpdate === null || $updateTime > $lastUpdate)) {
                                $lastUpdate = $updateTime;
                            }
                        }

                        if (isset($pet[1]) && $pet[1] !== null) {
                            $petValue = intval($pet[1]);
                            // Thực hiện các tính toán khác với giá trị pet
                            // Ví dụ:
                            // $totalPet = $petValue * 2;
                            // echo "Giá trị pet: " . $totalPet;
                        }
                    }

                    if ($lastUpdate !== null) {
                        $formattedLastUpdate = date('H:i d/m/Y', $lastUpdate);
                        echo '<small>Cập nhật lúc: ' . $formattedLastUpdate . '</small>';
                    } else {
                        echo '<small>Chưa có dữ liệu cập nhật.</small>';
                    }

                    ?>
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