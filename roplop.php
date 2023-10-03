<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"><html>
    <head>
		<meta name="viewport" content="width=device-width,maximum-scale=1,user-scalable=no"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://ninjaschool.vn/css/template.css" type="text/css" />		
		<link rel="shortcut icon" href='http://27.0.14.78/dl/image/iconninja32.png' type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://ninjaschool.vn/images/logo256.png" />
		<meta name="description" content="Website chính thức của Ngọc Rồng Tea!"/>

    </head>   
    <body>
        <div class="body_body">
			<div style="line-height: 3px;
    font-size: 10px;
    padding-right: 5px;
       padding-bottom: 6px;">
			<img height=12 src="http://ninjaschool.vn/12.png" style="vertical-align: middle;"/> 
			<span style="vertical-align: middle;">Trò chơi dành cho người chơi 12 tuổi trở lên. Chơi quá 180 phút mỗi ngày sẽ có hại cho sức khỏe
			</span>
			</div>
            <div class="left_top"></div><div class="bg_top"><div class="right_top"></div></div>
            <div class="body-content">
            	<div class="bg-content2">
                
<div class="a" align="center"><a href="http://ninjafree.site/"><img src="http://ninjaschool.vn/images/logo.png" /></a></div>
</tr>
</table>
							</div> <div class="bg-content">  
							<p style="color:red"><a href="./bxh.php">Xem Tổng Nick Trên Máy Chủ</a></p>
<?php
include './archive/connect.php';
if (!$connect)
    exit(0);
$title_page = "Đăng kí tài khoản";
include './archive/head.php';
$error = '';

if ($_POST) {
    $uname = str_replace(" ", "",$_POST['uname']);
    $passw = str_replace(" ", "",$_POST['passw']);
    $repassw = $_POST['repassw'];
    
    $sql = "SELECT `username` FROM `user` WHERE `username` = '". $conn->real_escape_string($uname) ."'; ";
    
    if ($uname == NULL || $passw == NULL || $repassw == NULL) 
        $error = 'Vui lòng điền đủ thông tin!.';
    else if (!preg_match('/^[a-zA-Z0-9]+$/',$uname.$passw))
        $error = 'Tài khoản mật khẩu không cho phép ký tự đặc biệt!.';
    else if ($passw != $repassw)
        $error = 'Mật khẩu phải khớp khi nhập lại!.';
    else if (strlen($uname) < 5 || strlen($uname) > 12 || strlen($passw) < 1 || strlen($passw) > 40)
        $error = 'Tài khoản phải từ 5 đến 12 mật khẩu phải từ 1 đến 40 ký tự!.';
    else if ($conn->query($sql)->num_rows > 0)
        $error = '<div class="error">Tên tài khoản đã tồn tại!.</div>';
    else {
        
        $sql = "INSERT INTO `user` (`username`,`password`,`lock`) VALUES ('". $uname ."','". $passw ."',0)";
        if ($conn->query($sql)) 
                $error = 'Đăng ký thành công!!!!';
        else
            $error = 'Đăng ký không thành công!.';
    }
} 

echo $error."\n<br />";
echo '
    <form action="" method="post">
        <table width="100%">
            <tr>
                <td>Tài khoản:</td>
                <td><input type="text" name="uname" id="uname" maxlength="15" /></td>
            </tr>
<tr>
            
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="passw" id="passw" /></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu:</td>
                <td><input type="password" name="repassw" id="repassw" /></td>
            </tr>
            <tr>
                <td>Xác nhận: <img width="100" height="30" src="/captcha" /></td>
                <td><input type=text" name="captcha" id="captcha" maxlength="5" /></td>
            </tr>
        </table>
        <br />
        <input type="submit" name="submit" value="Đăng kí" />
';
?>
