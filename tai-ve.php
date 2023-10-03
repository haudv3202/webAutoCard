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
</style>
<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery('body').bind('cut copy paste', function (e) {
      e.preventDefault();
    });
    jQuery("body").on("contextmenu",function(e){
      return false;
    });
  });
  jQuery(document).keydown(function (event) {
    if (event.keyCode == 123) {
      return false;
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 67) {
      return false;
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      return false;
    }
  });
  document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
      return false;
    } else {
      return true;
    }
  };
  jQuery(document).keypress("u",function(e) {
    if(e.ctrlKey) {
      return false;
    } else {
      return true;
    }
  });
  document.body.addEventListener('keydown', event => {
    if (event.ctrlKey && 'spa'.indexOf(event.key) !== -1) {
      event.preventDefault()
    }
  })
</script><body>
<div class="container py-3">
<main>
<div class="py-3 text-center">
<h2>Tải về</h2>
<div>
<a href="./taive/NroTea.apk" class="btn btn-primary text-white my-2" download>
<i class="fa fa-download"></i> Mod Android - APK
</a>
</div>
<div>
<a href="./taive/NroTea.ipa" class="btn btn-primary text-white my-2" download>
<i class="fa fa-download"></i> Bản Gốc - IOS
</a>
</div>
<a href="https://usescarlet.com/#install" class="btn btn-primary text-white my-2" download>
<i class="fa fa-download"></i> Scarlet IOS
</a>
</div>
<div>
Đối với phiên bản iphone vui lòng làm theo hướng dẫn video dưới đây <a href="#" class="btn btn-primary text-white my-2" download>
<i class="fa fa-download"></i> Link Hướng dẫn </a>
</div>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appe015.js?_=1668687095"></script>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="text-center">
Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
</div>
</footer>
</div>