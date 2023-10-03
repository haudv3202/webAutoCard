<?php
include_once 'set.php';
$_title = "NRO JR - Thanh toán";
include_once 'head.php';
if($_login == null) {header("location:/");}
$_alert = null;

if($_status == '-1') {
	echo '
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	  swal({
			title: "Thất bại",
			text: "Tài khoản của bạn đã được kích hoạt!",
			type: "error",
			confirmButtonText: "OK",
	  })
	});
	
	</script>
	';
}
else if($_status == '0' && $_coin < 20000)
{
	echo '
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	  swal({
			title: "Số dư không đủ",
			text: "Bạn không đủ 20.000 KCoin. Vui lòng nạp thêm tiền vào tài khoản để kích hoạt nhé!",
			type: "error",
			confirmButtonText: "OK",
	  })
	});
	
	</script>
	';
}
else if($_status == '1' && $_coin < 20000)
{
	echo '
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	  swal({
			title: "Số dư không đủ",
			text: "Bạn không đủ 20.000 KCoin. Vui lòng nạp thêm tiền vào tài khoản để mở lại tài khoản!",
			type: "error",
			confirmButtonText: "OK",
	  })
	});
	
	</script>
	';
}
else if($_status == '0' && $_coin >= 20000) {
	$coin = $_coin - 20000;
	$query = _query(_update('account',"active='-1',vnd='$coin'","username='$_username'"));
	if($query)
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thành công",
				text: "Kích hoạt tài khoản thành công. Bây giờ bạn đã có thể đăng nhập vào game!",
				type: "success",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	else
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thất bại",
				text: "Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!",
				type: "error",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	header('location:/index.php');
	exit();
}
else if($_status == '1' && $_coin >= 20000) {
	$coin = $_coin - 20000;
	$query = _query(_update('account',"active='-1',vnd='$coin'","username='$_username'"));
	if($query)
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thành công",
				text: "Mở khóa tài khoản thành công. Bây giờ bạn đã có thể đăng nhập vào game!",
				type: "success",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	else
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thất bại",
				text: "Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!",
				type: "error",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	header('location:/index.php');
	exit();
}
include_once 'index.php';
?>
