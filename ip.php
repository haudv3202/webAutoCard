<?php
include_once 'head.php';
include_once 'css/head.php';



        //Thư mục bạn lưu file upload
        $target_dir = "img/";
        //Đường dẫn lưu file trên server
        $target_file   = $target_dir  .basename($_FILES["fileUpload"]["name"]);
        $allowUpload   = true;
        //Lấy phần mở rộng của file (txt, jpg, png,...)
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
        //Những loại file được phép upload
        $allowtypes    = array('png', 'jpg', 'jpeg');
        //Kích thước file lớn nhất được upload (bytes)
        $maxfilesize   = 10000000;//10MB
        //1. Kiểm tra file có bị lỗi không?
        
        //2. Kiểm tra loại file upload có được phép không?
        if (!in_array($fileType, $allowtypes )) {
            echo "<br>Only allow for uploading .txt, .dat or .data files.";
            $allowUpload = false;
        }
        //3. Kiểm tra kích thước file upload có vượt quá giới hạn cho phép
        if ($_FILES["fileUpload"]["size"] > $maxfilesize) {
            echo "<br>Size of the uploaded file must be smaller than $maxfilesize bytes.";
            $allowUpload = false;
        }
        //4. Kiểm tra file đã tồn tại trên server chưa?
        if (file_exists($target_file)) {
            echo "<br>The file name already exists on the server.";
            $allowUpload = false;
        }
        if ($allowUpload) {
            //Lưu file vào thư mục được chỉ định trên server
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                echo "<br>File ". basename( $_FILES["fileUpload"]["name"])." uploaded successfully.";
                echo "The file saved at " . $target_file;
            } else {
                 echo "<br>An error occurred while uploading the file.";
            }
        }
        $fanpage = $_POST['fanpage'];
        $apk = $_POST['apk'];
        $pc = $_POST['pc'];
        $ios = $_POST['ios'];
        $java = $_POST['java'];
        $name  = ($_FILES["fileUpload"]["name"]);
        $trangthai = $_POST['trangthai'];
    $a = $_POST['a'];
$b = $_POST['b'];
$fp = fopen("maychu.php", "w");//mở file ở chế độ write-only
fwrite($fp, "<?php\n");
fwrite($fp, "$");
fwrite($fp, "link_server = '$a';\n");
fwrite($fp, "$");
fwrite($fp, "name_server = '$b';\n");
fwrite($fp, "$");
fwrite($fp, "logo = '$name';\n");
fwrite($fp, "$");
fwrite($fp, "apk = '$apk';\n");
fwrite($fp, "$");
fwrite($fp, "pc = '$pc';\n");
fwrite($fp, "$");
fwrite($fp, "ios = '$ios';\n");
fwrite($fp, "$");
fwrite($fp, "java = '$java';\n");
fwrite($fp, "$");
fwrite($fp, "fanpage = '$fanpage';\n");
fwrite($fp, "$");
fwrite($fp, "trangthai = '$trangthai';\n?>");
fclose($fp);
    		header("Location: admin.php")			       
?>  

