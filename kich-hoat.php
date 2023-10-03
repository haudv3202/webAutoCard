<?php
   include_once 'set.php';
   include_once 'head.php';
   ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng Tea</title>
<link rel="icon" href="assets/images/nro.png" type="image/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #f44336;
        border-color: #f44336;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }

    .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
    .copy-text{
        cursor: pointer;
    }
</style><body>
<div class="container py-3">
<main>
<div class="row">
<div class="col-2 pl-0 pr-0">
<div class="text-center">
<img src="assets/images/avatar/avatar1.png" style="border-color:red; width: 50px; height: 50px;"><br>
<div class="mt-2"></div>
<b class="text text-danger mt-5">ADMIN</b>
<dd class="author-name mb-0">
<img src="assets/images/gacon.gif" width="25" height="15"> <b style="color:#ff0000"><small>[Admin]</small></b>
</dd>
<dd class="author-name mb-0">
<span style="color:red; font-size: 90%">♥</span>
</dd>
</div>
</div>
<div class="col-10 pl-0">
<div class="alert alert-success">
<div class="row pl-2">
<span style="font-size: 10px">Đăng ngày 17-11-2022</span>
</div>
<div class="row pl-2">
<b class="text text-danger" style="font-size: 18px;"> Hướng Dẫn Mở Thành Viên Ngọc Rồng Tea Với 20.000đ </b>
</div>
<p>Thân chào các <span style="color:#3498db"><strong>Chiến binh,</strong></span></p>
<p>Hôm nay mình sẽ hướng dẫn anh em mở thành viên tại <span style="color:#e83e8c"><strong>Ngọc Rồng Tea</strong></span> </p>
<span style="color:#dc3545"><strong>
Người chơi đăng kí có thể vào game trải nghiệm bình thường tuy nhiên sẽ bị giới hạn một số tính năng.<br>
Mở thành viên Jr người chơi sẽ được rất nhiều quyền lợi :</span><br>
<span style="color:#343a40;">
- Mở Tính Năng Giao Dịch<br>
- Mở Tính Năng Chat Kênh Thế Giới<br>
- Mở Tính Năng Thách Đấu<br>
</strong></span>
<hr>
<b class="text text-danger" style="font-size: 30px;"> Hướng Dẫn Trong Game </b><br>
<span style="color:#212529"><strong>Bước 1 : Nạp Qua Ví Momo, Thẻ Ngân Hàng</strong></span><br>
Hiện tại Ngọc Rồng Tea chỉ hỗ trợ nạp qua Ví Momo, Thẻ Ngân Hàng <br>
<a href="login.php"><b class="text-primary"> Nạp Tại Đây </b></a><br>
<b class="text text-danger">Lưu ý :</b></br>
- Nạp Qua Ví Momo, Thẻ Ngân Hàng hãy đọc kĩ hướng dẫn <b>
- Sai nội dung, tên tài khoản không hỗ trợ<br>
- Gặp lỗi ib page để được hỗ trợ<br>
<span style="color:#212529"><strong>Bước 2 : Kiểm Tra Số Dư</strong></span></br>
Sau khi nạp tiền các bạn có thể kiểm tra số dư
<a href="profile.php"><b class="text-primary"> Tại Đây </b></a></br>
Hoặc có thể gặp NPC tại nhà ở mỗi hành tinh để kiểm tra</br>
NPC > Nạp Tiền > Số tiền sẽ hiển thị như ảnh
<center><img width="100%" src="assets/images/huongdan/huongdan4.png"></center></br>
<span style="color:#212529"><strong>Bước 3 : Kích Hoạt Tài Khoản</strong></span></br>
Sau khi nạp tiền vào tài khoản các bạn vào NPC tại nhà ở các làng để mở thành viên.</br>
<center><img width="100%" src="assets/images/huongdan/mothanhvien.png"></center></br>
Sau đó có thể kích hoạt và trải nghiệm game .
<center><img width="100%" src="assets/images/huongdan/mothanhvien1.png"></center></br>
<b class="text text-danger" style="font-size: 30px;"> Hướng Dẫn Trên Website </b><br>
<span style="color:#212529"><strong>Bước 1 : Nạp Qua Ví Momo, Thẻ Ngân Hàng</strong></span><br>
Hiện tại Ngọc Rồng Tea chỉ hỗ trợ nạp qua Ví Momo, Thẻ Ngân Hàng <br>
<a href="login.php"><b class="text-primary"> Nạp Tại Đây </b></a><br>
<b class="text text-danger">Lưu ý :</b></br>
- Nạp Qua Ví Momo, Thẻ Ngân Hàng hãy đọc kĩ hướng dẫn <b>
- Sai nội dung, tên tài khoản không hỗ trợ<br>
- Gặp lỗi ib page để được hỗ trợ<br>
<span style="color:#212529"><strong>Bước 2 : Kiểm Tra Số Dư</strong></span></br>
Sau khi nạp tiền các bạn có thể kiểm tra số dư
<a href="profile.php"><b class="text-primary"> Tại Đây </b></a></br>
<span style="color:#212529"><strong>Bước 3 : Kích Hoạt Tài Khoản</strong></span></br>
Sau khi nạp tiền vào tài khoản các bạn hãy nhấn vào: <a href="/active.php">Mở Thành Viên</a><br>
Sau khi mở thành viên bạn có thể Giao dịch, Chat thế giới, Thách đấu
<div class="row pl-2 pt-2">
<a href="index.html">
<b class="text-primary">
<i class="fa fa-chevron-left"></i>
Trở lại
</b>
</a>
</div>
</div>
</div>
</div>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appd620.js?_=1668687100"></script>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="text-center">
Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
</div>
</footer>
</div>