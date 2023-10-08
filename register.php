<?php
include_once 'set.php';
$_title = "NRO TEA - Đăng Ký";
include_once 'head.php';
$_alert = null;
if ($_login == null) 
{
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        
        if($password == $repassword) {
            $password = password_hash($password, PASSWORD_BCRYPT); // Hash the password
            $user = _fetch("SELECT * FROM account WHERE username = ?", [$username]);
            if($user)
            {
                echo '
                <script type="text/javascript">
                
                $(document).ready(function(){
                
                  swal({
                        title: "Thất bại",
                        text: "Tài khoản này đã tồn tại, vui lòng chọn tài khoản khác!",
                        type: "error",
                        confirmButtonText: "OK",
                  })
                });
                
                </script>
                ';
            }else
            {
                _insert('account', ['username' => $username, 'password' => $password]);
                echo '
                <script type="text/javascript">
                
                $(document).ready(function(){
                
                  swal({
                        title: "Thành công",
                        text: "Đăng kí thành công!!",
                        type: "success",
                        confirmButtonText: "OK",
                  })
                });
                
                </script>
                ';
            }
        }
        else
        {
            echo '
            <script type="text/javascript">
            
            $(document).ready(function(){
            
              swal({
                    title: "Thất bại",
                    text: "Hai mật khẩu không khớp nhau, vui lòng kiểm tra lại!",
                    type: "error",
                    confirmButtonText: "OK",
              })
            });
            
            </script>
            ';
        }
    }
} 
else 
{
    header('location:/user.php');
}
?>
<!-- ... (phần HTML của bạn) -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-6eafeb38-8cab-408e-bc0a-651aa2ca60f2@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-370d601e-6f57-4b01-891c-462b6f59c504@mhtml.blink" />
        

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
<body>
  <div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
<?php echo $_alert; ?>
                <form class="text-center col-lg-5 col-md-10" style="margin: auto;" method="post" action="register.php">
                    <h1 class="h3 mb-3 font-weight-normal">Đăng ký</h1>
                    <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="username" required="" autofocus="" type="text" class="form-control mt-1" placeholder="Tên tài khoản">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="password" required="" type="password" class="form-control mt-1" placeholder="Mật khẩu">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="repassword" required="" type="password" class="form-control mt-1" placeholder="Nhập lại mật khẩu">
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
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                    <div class="text-center mt-1">
                        <button class="btn btn-lg btn-dark btn-block" style="border-radius: 10px;width: 100%; height: 50px;" type="submit" name="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
            <!-- footer -->
<footer class="mt-1">
    
    
    <div class="text-center mt-1">
       <b style="font-size:13px;" class="text-white">Tham gia cộng đồng giao lưu game với chúng tớ.</b>
       <br>
       <a href="https://www.nrohades.com/register" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findondiscord.png" style="max-width:100px" class="mt-1"></a>
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
