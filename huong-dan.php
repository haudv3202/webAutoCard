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
<div class="container py-3"><main>
<div class="row">
<div class="col-2 pl-0 pr-0">
<div class="text-center">
<img src="assets/images/avatar/avatar1.png" style="border-color:red; width: 50px; height: 50px;"><br>
<div class="mt-2"></div>
<b class="text text-danger mt-5">ADMIN</b><br> <b style="color:#ff0000"><small>[Admin]</small></b>
</div>
</div>
<div class="col-10 pl-0">
<div class="alert alert-success">
<div class="row pl-2">
<span style="font-size: 10px">Đăng ngày 17-11-2022</span>
</div>
<div class="row pl-2">
<b class="text text-danger" style="font-size: 18px;"> Hướng Dẫn Nạp Thẻ Và Quy Đổi Qua Thỏi Vàng</b>
</div>
<p>Thân chào các <span style="color:#3498db"><strong>Chiến binh,</strong></span></p>
<p>Hôm nay mình sẽ hướng dẫn anh em quy đổi từ VND thành Thỏi Vàng Tại <span style="color:#e83e8c"><strong>Ngọc Rồng Tea</strong></span> </p>
<span style="color:#212529"><strong>Bước 1 : Nạp Thẻ</strong></span></br>
Hiện tại Ngọc Rồng Tea chỉ hỗ trợ nạp qua Ví Momo, Thẻ Ngân Hàng</br>
<a href="nap-tien"><b class="text-primary"> Nạp Tại Đây </b></a></br>
<b class="text text-danger">Lưu ý :</b></br>
- Khi chuyển khoản vui lòng xem kĩ hướng dẫn<br>
- Sai cú pháp, tên tài khoản không được hỗ trợ<br>
- Gặp lỗi ib page để được hỗ trợ<br>
<span style="color:#212529"><strong>Bước 2 : Kiểm Tra Số Dư</strong></span></br>
Sau khi nạp tiền các bạn có thể kiểm tra số dư
<a href="profile.php"><b class="text-primary"> Tại Đây </b></a></br>
  Hoặc có thể gặp NPC tại <b>Đảo Kame</b> để kiểm tra</br>
NPC Satan > Nhận Thỏi Vàng > Nhấn Nhận Thỏi Vàng (Ảnh Demo Gần Giống)<br>
- Bảng giá sẽ thay đổi khi có sự kiện khuyến mại
<center><img width="100%" src="assets/images/huongdan/huongdan4.png"></center></br>
<span style="color:#212529"><strong>Nhóm Thông Báo Update: </strong></span> <a href="https://zalo.me/g/ydhxpt975"><b class="text-primary"> Tại Đây </b></a><br>
- Truy cập nhóm thông báo để cập nhật tình hình mới nhất về Ngọc Rồng Tea<br>
- Bảng Giá Nạp<br>
- Cập Nhật Mới<br>
- Giftcode<br>
<div class="row pl-2 pt-2">
<a href="index.php">
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
<script src="assets/js/app17d5.js?_=1668687099"></script>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="text-center">
Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
</div>
</footer>
</div>