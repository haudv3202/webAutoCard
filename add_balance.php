<?php
include_once 'set.php';
if ($_login == null) {
    header("location:/index.php");
}

// // Check if the user has already received coins
// $query = _query(_select('account', "vnd_reward", "username='$_username'"));
// $result = mysqli_fetch_array($query);

if ($_vnd_reward == '1') {
    $_alert = array(
        'type' => 'error',
        'title' => 'Thất bại',
        'text' => 'Tài khoản của bạn đã !'
    );
} else {
    // Add coins to the user's balance and update the database
    $coin = $_coin + 19000;
    $query2 = _query(_update('account', "vnd='$coin', vnd_reward='1'", "username='$_username'"));

    if ($query2) {
        $_alert = array(
            'type' => 'success',
            'title' => 'Thành công',
            'text' => 'Bạn đã nhận được tiền thành công!'
        );
    } else {
        $_alert = array(
            'type' => 'error',
            'title' => 'Thất bại',
            'text' => 'Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!'
        );
    }
}

// Show alert message
if ($_alert != null) { 
    echo '
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: "'.$_alert['title'].'",
                    text: "'.$_alert['text'].'",
                    type: "'.$_alert['type'].'",
                    confirmButtonText: "OK",
                });
            });
		</script>
			';
}

header('location:/');
?>
