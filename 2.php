<?php
require_once('config.php');
error_reporting(0);
if ( isset($_GET['message']) && isset($_GET['status']) )
{
    $code = check_string($_GET['message']);
    $card = $ketnoi->query("SELECT * FROM napthe WHERE code = '$code' ")->fetch_array();
    if ($_GET['status'] == 'hoantat')
    {
        $vnd = $card['vnd'];
        $ketnoi->query("UPDATE napthe SET `status` = 'thanhcong' WHERE `status` = 'xuly' AND `code` = '".$code."'");
        $ketnoi->query("UPDATE user SET `vnd` = `vnd` WHERE `username` = '".$card['username']."' ");
        $ketnoi->query("INSERT INTO `napthe` SET 
              `message` = 'Nạp Card thành công, thực nhận $vnd',
              `createdate` = now(),
              `request_id` = '".$card['request_id']."' ");
    }
    else if ($_GET['status'] == 'thatbai')
    {
        $ketnoi->query("UPDATE napthe SET status = 'thatbai' WHERE status = 'xuly' AND code = '".$code."'");
    }
}
else
{   
    echo json_encode(array('status' => "error", 'msg' => "Cái quát đờ phắc gì vậy?"));
}
?>