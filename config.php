<?php
include_once 'cauhinh.php';
try {
    $config = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("KHONG THE KET NOI DEN CSDL ! VUI LONG KIEM TRA LAI: " . $e->getMessage());
}

function _query($sql, $params = []) {
    global $config;

    // Chuẩn bị câu lệnh SQL
    $stmt = $config->prepare($sql);
    if ($stmt) {
        // Liên kết các tham số với câu lệnh SQL
        foreach ($params as $key => $value) {
            $index = $key + 1; // Tăng chỉ số của tham số lên 1
            if (!$stmt->bindValue($index, $value, PDO::PARAM_STR)) {
                // Báo lỗi cho người dùng
                echo "Lỗi khi liên kết tham số với câu lệnh SQL";
                return false;
            }
        }

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            // Trả về kết quả
            return $stmt;
        } else {
            // Báo lỗi cho người dùng
            echo "Lỗi khi thực thi câu lệnh SQL";
            return false;
        }
    } else {
        // Báo lỗi cho người dùng
        echo "Lỗi khi chuẩn bị câu lệnh SQL";
        return false;
    }
}


function _fetch($sql, $params = []) {
    return _query($sql, $params)->fetch(PDO::FETCH_ASSOC);
}

function _insert($table, $data) {
    global $config;
    $fields = implode(",", array_keys($data));
    $placeholders = ":" . implode(",:", array_keys($data));
    $sql = "INSERT INTO $table($fields) VALUES($placeholders)";
    $stmt = $config->prepare($sql);
    // Bind giá trị với placeholders
    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }
    $stmt->execute();
    return $stmt;
}

function _select($select, $from, $where, $params = []) {
    $sql = "SELECT $select FROM $from WHERE $where";
    return _fetch($sql, $params);
}

function isset_sql($txt) {
    global $config;
    $stmt = $config->prepare("SELECT :txt");
    $stmt->bindParam(':txt', $txt);
    $stmt->execute();
    return $stmt->fetchColumn();
}


function _update($table, $data, $where, $params = []) {
    $setClause = "";
    foreach ($data as $key => $value) {
        $setClause .= "$key = :$key, ";
    }
    $setClause = rtrim($setClause, ", ");
    $sql = "UPDATE $table SET $setClause WHERE $where";
    return _query($sql, array_merge($data, $params));
}

$_succ = '<div class="success">';
$_err = '<div class="error">';
$_end = '</div>';

function _alert($txt) {
    // GLOBAL $_succ,$_err,$_end;
    switch ($txt) {
        case 'succ':
            echo '
            <script type="text/javascript">
            
            $(document).ready(function(){
            
              swal({
                    title: "Nạp Thẻ Thành Công",
                    text: "Vui lòng chờ hệ thống duyệt thẻ!",
                    type: "success",
                    confirmButtonText: "OK",
              })
            });
            
            </script>
            ';
        break;
        
        case 'err':
            echo '
            <script type="text/javascript">
            
            $(document).ready(function(){
            
              swal({
                    title: "Nạp Thẻ Thất bại",
                    text: "Nạp sai thông tin hoặc thẻ đã tồn tại trên hệ thống!",
                    type: "error",
                    confirmButtonText: "OK",
              })
            });
            
            </script>
            ';
        break;
    }
}

function _console($txt){
    return "<script>console.log('".htmlspecialchars($txt)."')</script>";
}

function _randtxt(){
    $string = "";
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for($i=1; $i<=9; $i++) {
        $position = rand() % strlen($chars);
        $string .= substr($chars, $position, 1);
    }
    return $string;
}

?>
