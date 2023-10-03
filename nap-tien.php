<?php
include('set.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start(); //khởi động phiên làm việc
}

$_alert = null;
$_title = "NRO FIDE - Thanh Toán";
include_once 'head.php';
include_once 'css/head.php';
include_once('connect.php');
if ($_login == null) {
    header("location:/login.php");
}
?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="cid:css-2b492019-be94-473a-be78-a2ee301de826@mhtml.blink" />
    <link rel="stylesheet" type="text/css" href="cid:css-7645ee23-5a6f-41cc-bcc5-3e094bcf7b4b@mhtml.blink" />


    <title>Ngọc Rồng Hades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://www.nrohades.com/assets/images/icon/icon.ico">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquery -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- mycss -->
<link rel="stylesheet" href="./css/style.css">

    <!-- myjs -->
    <!--<script src="js/tet.js"></script>-->

    <!-- bootstrap -->

</head>

<body class="body-bg">


    <div class="p-1 mt-1 alert alert-danger" style="background: #a69eff91; border-radius: 7px; border: 1px solid #d3087d; box-shadow: 0 0 15px #d3087d;">

        <div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
            <div class="card p-4">
                <div class="card-header"><b>Nạp tiền</b><br>
                    <b class="badge" style="background-color: #83009f;">Tỉ giá quy đổi: 1.000VNĐ = 1000 Coin</b>
                </div>
                <div class="col-md-9 pb-3 pt-2">
                    <form method="POST" action="#" id="myform">
                        <tbody>

                            <label for="pwd"><b>Tài Khoản:</b></label><br>
                            <input type="text" class="form-control mt-1" style="background-color: #DCDCDC; font-weight: bold; color: #696969" name="username" value="<?php echo $_username; ?>
" readonly required>

                            <label for="pwd"><b>Loại thẻ:</b></label>
                            <select class="form-control mt-1" name="card_type" required="" style="border-radius: 7px; box-shadow: 0px 0px 5px red">
                                <option value="">Chọn loại thẻ</option>
                                <?php
                                $cdurl = curl_init("https://thesieutoc.net/card_info.php");
                                curl_setopt($cdurl, CURLOPT_FAILONERROR, true);
                                curl_setopt($cdurl, CURLOPT_FOLLOWLOCATION, true);
                                curl_setopt($cdurl, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($cdurl, CURLOPT_CAINFO, __DIR__ . '/api/curl-ca-bundle.crt');
                                curl_setopt($cdurl, CURLOPT_CAPATH, __DIR__ . '/api/curl-ca-bundle.crt');
                                $obj = json_decode(curl_exec($cdurl), true);
                                curl_close($cdurl);
                                $length = count($obj);
                                for ($i = 0; $i < $length; $i++) {
                                    if ($obj[$i]['status'] == 1) {
                                        echo '<option value="' . $obj[$i]['name'] . '">' . $obj[$i]['name'] . ' (' . $obj[$i]['chietkhau'] . '%)</option> ';
                                    }
                                }
                                ?>
                            </select>
                            <label><b>Mệnh giá thẻ:</b></label>
                            <select class="form-control mt-1" name="card_amount" required="" style="border-radius: 7px; box-shadow: 0px 0px 5px red">
                                <option value="">Chọn mệnh giá</option>
                                <option value="10000">10.000</option>
                                <option value="20000">20.000</option>
                                <option value="30000">30.000 </option>
                                <option value="50000">50.000</option>
                                <option value="100000">100.000</option>
                                <option value="200000">200.000</option>
                                <option value="300000">300.000</option>
                                <option value="500000">500.000</option>
                                <option value="1000000">1.000.000</option>
                            </select>
                            <label><b>Seri thẻ:</b></label>
                            <input type="text" class="form-control mt-1" name="serial" placeholder="Seri thẻ" required="" style="border-radius: 7px; box-shadow: 0px 0px 5px red">
                            <label><b>Mã thẻ:</b></label>
                            <input type="text" class="form-control mt-1" name="pin" placeholder="Mã thẻ" required="" style="border-radius: 7px; box-shadow: 0px 0px 5px red">
                            </br>
                            <button type="submit" class="btn btn-action text-white" name="submit" style="border-radius: 7px;">NẠP NGAY</button>

                        </tbody>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            var lastSubmitTime = 0;
                            $("#myform").submit(function(e) {
                                Swal.fire(
                                    'Trạng thái!',
                                    'Gửi thẻ thành công.',
                                    'success'
                                )
                                e.preventDefault();

                                var now = new Date().getTime();
                                if (now - lastSubmitTime < 10000) { // 10000 milliseconds = 10 seconds
                                    swal('Thông báo', 'Vui lòng đợi ít nhất 10 giây trước khi nạp tiếp', 'error');
                                    return false;
                                }
                                lastSubmitTime = now;

                                $.ajax({
                                    url: "./ajax/card.php",
                                    type: 'post',
                                    data: $("#myform").serialize(),
                                    success: function(data) {
                                        $("#status").html(data);
                                        document.getElementById("myform").reset();
                                        $("#load_hs").load("./ajax/history.php");
                                    }
                                });
                            });

                        });
                    </script>
                    <p class="mt-3" style="font-size:13px; font-weight:bold;"><b class="text-info">(*) Lưu ý:</b>
                        <br>- Sai mệnh giá sẽ mất thẻ, vui lòng kiểm tra kỹ trước khi gửi
                        <br>- Bạn có thể nạp thẻ mà không cần thoát game
                        <br>- Khi nạp thành công, tiền sẽ tự động được cộng vào tài khoản bạn vui lòng load lại trang để kiểm tra
                        <br>- Nếu 5p không thấy cộng vui lòng ib ad để kt nhé
                    </p>



                    <div class="table-responsive">
                        <table class="table table-bordered text-white" style="background:#905291;">
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="mt-1">
                <div id="status"></div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
                <!-- Code made in tui 127.0.0.1 -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        </div>
        </main>
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
        </footer>
    </div>

</body>

</html>