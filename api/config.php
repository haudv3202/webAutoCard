<?php
	$apikey = '9B45C3DA1146B989E38E252B5A5DAC99'; //API key, lấy từ website thesieutoc.net thay vào trong cặp dấu ''
	// database Mysql config
	$local_db = "127.0.0.1";
	$user_db = "root";
	$pass_db = "";
	$name_db = "nrosao";
	# đừng đụng vào 
  $conn = new mysqli($local_db, $user_db, $pass_db, $name_db);
  $conn->set_charset("utf8");
    
?>
