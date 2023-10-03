<?php
   ob_start();
   
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);
   
   include_once 'cauhinh.php';
   include_once 'config.php';
   include_once 'set.php';
   ?>
<!doctype html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
	  <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
      <meta name="author" content="">
      <title>NRO TEA</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <style>
         html {
         font-size: 14px;
         }
         @media (min-width: 768px) {
         html {
         font-size: 16px;
         }
         }
         .container {
         max-width: 960px;
         }
         .pricing-header {
         max-width: 700px;
         }
         .card-deck .card {
         min-width: 220px;
         }
         .border-top {
         border-top: 1px solid #e5e5e5;
         }
         .border-bottom {
         border-bottom: 1px solid #e5e5e5;
         }
         .box-
		 
		 
		 shadow {
         box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
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
      </style>
   </head>
   <body>
   
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
         <div class="d-flex flex-column flex-md-row align-items-center container">            
           <a href="index.php"class="d-flex align-items-center text-dark text-decoration-none">
              <img class="img-fluid" src="/img/nro.png" alt="" width="36" height="36">
<span class="fs-5">Ngọc Rồng Tea</span>     
            </a>
            
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
<a class="me-3 py-2 text-dark text-decoration-none" href="tai-ve.php">Tải về</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="nap-tien.php">Nạp Tiền</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="top-nap.php">Top Nạp</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://zalo.me/g/bcfenb156">Cộng đồng</a>

</nav>
            <?php if($_login == null) { ?>
            <nav class="my-2 my-md-0 mr-md-3">
               <a class="btn btn-outline-primary" href="/login.php" style="font-weight: 500">Đăng nhập</a>
			   
               <?php } else { ?>
               <a class="btn btn-outline-primary" href="/profile.php">
			   
               <span><?php echo ($_username); ?> - <?php echo number_format($_coin); ?> VND</span>
               </a>	
               <?php } ?>
            </nav>
         </div>
      </div>
   </body>
