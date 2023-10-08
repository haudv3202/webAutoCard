<?php
include_once 'set.php';
include_once 'head.php';

$_title = "Ngọc Rồng Light - Đăng Nhập";
if ($_login === null) {
    if (isset($_POST['username'])) {

        $username = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));

        // Check if input contains invalid characters
        if (!ctype_alnum($username)) {
            echo '
					<script type="text/javascript">
					
					$(document).ready(function(){
					
					  swal({
							title: "Thất bại",
							text: "Tên đăng nhập chỉ được chứa kí tự và số!",
							type: "error",
							confirmButtonText: "OK",
					  })
					});
					
					</script>
					';
        } else {
            $select = _fetch("SELECT * FROM account WHERE username=?", [$username]);

            if ($select != null && $select['password'] == $password) {
                // Kiểm tra xem tài khoản có nhân vật hay chưa dựa trên ID tài khoản
                $account_id = $select['id'];
                $result = _fetch("SELECT * FROM player WHERE account_id=?", [$account_id]);

                if ($result != null) {
                    $_SESSION['account'] = $username;
                    $_SESSION['id'] = $select['id'];
                    header('location:index.php');
                } else {
                   echo '
					<script type="text/javascript">
					
					$(document).ready(function(){
					
					  swal({
							title: "Thất bại",
							text: "Tài khoản này chưa tạo nhân vật!",
							type: "error",
							confirmButtonText: "OK",
					  })
					});
					
					</script>
					';
                }
            } else {
                echo '
					<script type="text/javascript">
					
					$(document).ready(function(){
					
					  swal({
							title: "Thất bại",
							text: "Tên đăng nhập hoặc mật khẩu không hợp lệ, vui lòng kiểm tra lại!",
							type: "error",
							confirmButtonText: "OK",
					  })
					});
					
					</script>
					';
            }
        }

    } elseif (isset($_POST['submit'])) {
        $_alert = '<div class="text-danger pb-2 font-weight-bold">Vui lòng nhập tên đăng nhập và mật khẩu!</div>';
    }
} else {
    header("location:/");
}
?>

<!-- Your HTML content here -->


<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-f9157133-ca3f-4414-89e3-e012be8b7e90@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-e0646869-274c-43a6-8928-7898a9c9a8aa@mhtml.blink" />
        

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
                <form class="text-center col-lg-5 col-md-10" style="margin: auto;" method="post" action="login.php">
                    <h1 class="h3 mb-3 font-weight-normal">Đăng Nhập</h1>
                    <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="username" type="text" class="form-control mt-1" placeholder="Tên tài khoản" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="password" type="password" class="form-control mt-1" placeholder="Mật khẩu">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <div class="row">
                        <div class="col-7">
                            <input style="height: 50px; border-radius: 15px; font-weight: bold;" type="text" class="form-control mt-1" name="captcha" placeholder="Nhập captcha">
                        </div>
                        <div class="col-5">
                            <img src="https://www.nrohades.com/utils/captcha.php" class="mt-1" style="width: 100%; height: 50px;border-radius: 15px;" alt="Captcha">
                        </div>
                    </div>
                        <?php
                        if (!empty($_alert)) {
                            echo $_alert;
                        }
                        ?>
                                             <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <div class="text-center mt-1">
                        <button class="btn btn-lg btn-dark btn-block" style="border-radius: 10px;width: 100%; height: 50px;" type="submit" name="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
            <!-- footer -->
<footer class="mt-1">
    
    
    <div class="text-center mt-1">
       <b style="font-size:13px;" class="text-white">Tham gia cộng đồng giao lưu game với chúng tớ.</b>
       <br>
       <a href="https://www.nrohades.com/login" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findondiscord.png" style="max-width:100px" class="mt-1"></a>
       <a href="https://www.facebook.com/groups/ngocronghades" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findonfb.png" style="max-width:100px" class="mt-1"></a>
   </div>
    <div class="text-center text-white">
        Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
        Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
    </div>
</footer>        </div>
    
</body></html>
<style>
        .form-signin {
                width: 100%;
                max-width: 400px;
                padding: 15px;
                margin: 0 auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }
    </style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>
		<?php
include_once 'end.php';
?>
</div>
