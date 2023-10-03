<?php
   include_once 'set.php';
   include_once 'head.php';
   ?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng Rose</title>
<link rel="icon" href="assets/images/nro.png" type="image/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
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
</style>
<div class="container py-3">
<header>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
<a href="index.html" class="d-flex align-items-center text-dark text-decoration-none">
<img class="me-2" src="assets/images/nro.png" alt="" width="36" height="36">
<span class="fs-5">Ngọc Rồng Rose</span>
</a>
<?php
   if($_login != null) {
      if($_status == "0") {
   echo '<div class="alert alert-info">Để có thể đăng nhập vào game, bạn cần phải <a href="/active.php">kích hoạt tài khoản</a> (Phí: 20,000 VND = 20,000 VND).</div>';
   }
   elseif($_status == "1") {
   echo '<div class="alert alert-info">Tài khoản đang bị khóa, để mở lại bạn cần phải <a href="/active.php">mở khóa tài khoản</a> (Phí: 20,000 VND= 20,000 VND).</div>';
   }
   elseif($_status == "-1") {
      echo '<div class="alert alert-info">Tài khoản của bạn đã kích hoạt thành viên.</div>';
      }
   }
   ?>
<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
<a class="me-3 py-2 text-dark text-decoration-none" href="tai-ve.html">Tải về</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="lich-su-nap-the.html">Lịch sử</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/groups/nrorose">Cộng đồng</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/nrorose">Hỗ trợ</a>
</nav>
<nav class="my-2 my-md-0 ms-md-3">
<a class="btn btn-outline-primary" href="login.html" style="font-weight: 500">Đăng nhập</a>
</nav>
</div>
</header><main>
<section class="text-center container">
<div class="row py-md-3">
<div class="col-lg-6 col-md-8 mx-auto">
<h2 class="fw-light">Ngọc Rồng Rose</h2>
<p class="lead text-muted">
Đăng ký tài khoản nhận quà tân thủ và nhiều phần thưởng hấp dẫn.
</p>
<p>
 <a href="login.html" class="btn btn-primary">Đăng nhập</a>
<a href="register.html" class="btn btn-primary">Đăng ký</a>
</p>
</div>
</div>
</section>
<div class="row g-4 py-4 row-cols-1 row-cols-md-4">
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fas fa-coins feature-icon"></i>
</div>
<div>
<a href="login.html" class="feature-title">Nạp Coin</a>
<p>Thanh toán hoàn toàn tự động, xử lý nhanh sau 1 - 5 phút.</p>
<a href="login.html" class="btn btn-primary">
Nạp ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fas fa-exchange-alt feature-icon"></i>
</div>
<div>
<a href="huong-dan.html" class="feature-title">Nạp ngọc</a>
<p>Thanh toán hoàn toàn tự động, xử lý ngay lập tức.</p>
<a href="huong-dan.html" class="btn btn-primary">
Nạp ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fas fa-exchange-alt feature-icon"></i>
</div>
<div>
<a href="huong-dan.html" class="feature-title">Nạp vàng</a>
<p>Thanh toán hoàn toàn tự động, xử lý ngay lập tức.</p>
<a href="huong-dan.html" class="btn btn-primary">
Nạp ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fa fa-toggle-on feature-icon" aria-hidden="true"></i>
</div>
<div>
<a href="kich-hoat.html" class="feature-title">Mở thành viên</a>
<p>Mở thành viên nhận quà vip ngay nào.</p>
<a href="kich-hoat.html" class="btn btn-primary">
Mở ngay
</a>
</div>
</div>
</div>
</div>
<div class="alert alert-warning" style="background-color: #fdf8da;">
<div class="topic_name">
<div style="width: 55px; float:left; margin-right: 10px;">
<b data-bs-toggle="modal" data-bs-target="#exampleModal">
<img src="assets/images/avatar/avatar1.png" style="border-color:red; width: 50px; height: 55px;">
</div>
<i class="fa fa-check-circle-o" aria-hidden="true" style="color:red"></i> Nạp Thẻ Tích Lũy
</a>
</b>
<div class="box_name_eman">bởi <b><b><font style="color:red">Black Goku</font></b></b> - <span> Xem chi tiết tại đây !!! </span> </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Nạp Thẻ Tích Lũy</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
 <div class="modal-body">
<div class="box_ndung_bviet">Chào các cư dân,<br>
Ngọc Rồng Rose sẽ tiến hành mở nhận quà tích lũy tại npc Quy Lão (Kame). Từ <b>11/09/2022 đến 23h59 ngày 18/09/2022.</b><br>
<br>
Mỗi lần quy đổi 10.000 qua Ngọc hoặc Vàng sẽ nhận được 10 điểm . Mỗi 50 điểm sẽ được 1 phần quà tại npc Quy Lão (Kame).<br>
<b>- Cải trang Thỏ Siêu Hot để đón Trung Thu.<br>
- Ngoài ra sẽ có cơ hội nhận được thêm 1 Đá Bảo Vệ.</b><br>
<br>
Chúc các bạn chơi game vui vẻ,<br>
BQT xin thông báo.<br>
<br></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app3007.js?_=1668687090"></script>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="text-center">
Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
</div>
</footer>
</div>

<?php
      include_once 'end.php';
      ?>