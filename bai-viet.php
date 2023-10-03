<?php
ob_start();
include_once 'connect.php';
include_once 'set.php';
if (isset($_POST['username'])) {
    $_username = $_POST['username'];
}
include('head.php');
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-f4105981-6aec-4ad4-a90e-a153f7d61179@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-58277d25-8a4c-416c-ae88-406afe2f1724@mhtml.blink" />
        

<title>Ngọc Rồng Hades</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://www.nrohades.com/assets/images/icon/icon.ico">


<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jquery -->


<!-- mycss -->
<link rel="stylesheet" href="./css/style.css">

<!-- myjs -->
<!--<script src="js/tet.js"></script>-->

<!-- bootstrap -->

    </head>
  <div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
<body>    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col">
                <table cellpadding="0" cellspacing="0" width="99%" style="font-size: 13px;">
                    <tbody>
                        <tr>
                            <td width="60px;" style="vertical-align: top">
                                <div class="text-center" style="margin-left: -10px;">
                                    <br>
                                    <div style="font-size: 9px; padding-top: 5px">
                                        <?php
                                        if (isset($_GET['id'])) {
                                            // Xử lý lấy thông tin bài viết từ CSDL
                                            $post_id = $_GET['id'];
                                            $query = "SELECT posts.*, player.gender, account.tichdiem, account.active, posts.image FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = ?";
                                            $stmt = $conn->prepare($query);
                                            $stmt->bind_param("i", $post_id);
                                            $stmt->execute();
                                            $result = $stmt->get_result();

                                            if ($row = mysqli_fetch_assoc($result)) {
                                                $gender = $row['gender'];
                                                $hanhtinh = $row['gender'];
                                                $tichdiem = $row['tichdiem'];

                                                //lấy  Avatar và tên của người dùng
                                                $active = $row['active'];
                                                $avatar_url = "";

                                                if ($active == 1) {
                                                    if ($gender == 1) {
                                                        $avatar_url = "image/avatar11.png";
                                                    } elseif ($gender == 2) {
                                                        $avatar_url = "image/avatar13.png";
                                                    } else {
                                                        $avatar_url = "image/avatar10.png";
                                                    }
                                                } else {
                                                    if ($gender == 1) {
                                                        $avatar_url = "image/avatar1.png";
                                                    } elseif ($gender == 2) {
                                                        $avatar_url = "image/avatar2.png";
                                                    } else {
                                                        $avatar_url = "image/avatar0.png";
                                                    }
                                                }

                                                $name_hanhtinh = "";
                                                if ($hanhtinh == 1) {
                                                    $name_hanhtinh = "(Namec)";
                                                } elseif ($hanhtinh == 2) {
                                                    $name_hanhtinh = "(Xayda)";
                                                } else {
                                                    $name_hanhtinh = "(Trái Đất)";
                                                }
                                                $color = "";
                                                if ($tichdiem >= 500) {
                                                    $danh_hieu = "(Chuyên Gia)";
                                                    $color = "#800000"; // sets color to red
                                                } elseif ($tichdiem >= 300) {
                                                    $danh_hieu = "(Hỏi Đáp)";
                                                    $color = "#A0522D"; // sets color to yellow
                                                } elseif ($tichdiem >= 200) {
                                                    $danh_hieu = "(Người Bắt Chuyện)";
                                                    $color = "#6A5ACD";
                                                } else {
                                                    $danh_hieu = "";
                                                    $color = "";
                                                }

                                                echo '<div class="text-center"><img class="avatar" src="' . $avatar_url . '" alt="Avatar" style="width: 50px"><br></div>';
                                                if ($row['active'] == 1) {
                                                    echo '<span class="text-danger font-weight-bold">' . $row['username'] . '</span><br>';
                                                    echo '<span class="text-danger pt-1 mb-0">(active)</span>';
                                                    echo '<div style="font-size: 8px">Điểm:' . $tichdiem;
                                                } else {
                                                    echo '<div style="font-size: 9px; padding-top: 5px">' . $row['username'] . '</div>';
                                                    if ($danh_hieu !== "") {
                                                        echo '<div style="font-size: 9px; padding-top: 5px"><span style="color:' . $color . ' !important">' . $danh_hieu . '</span></div>';
                                                    }
                                                    echo '<div style="font-size: 8px">Điểm:' . $tichdiem;
                                                }
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td class="bg bg-light" style=" border-radius: 7px">';
                                                echo '<div class="row" style="padding: 0 7px 15px 7px">';
                                                $created_at = strtotime($row['created_at']);
                                                $now = time();
                                                $time_diff = $now - $created_at;
                                                echo '<div class="col"><div style="font-size: 9px; padding-top: 5px">';
                                                if ($time_diff < 60) {
                                                    echo $time_diff . ' giây trước';
                                                } elseif ($time_diff < 3600) {
                                                    echo floor($time_diff / 60) . ' phút trước';
                                                } elseif ($time_diff < 86400) {
                                                    echo floor($time_diff / 3600) . ' giờ trước';
                                                } elseif ($time_diff < 2592000) {
                                                    echo floor($time_diff / 86400) . ' ngày trước';
                                                } elseif ($time_diff < 31536000) {
                                                    echo floor($time_diff / 2592000) . ' tháng trước';
                                                } else {
                                                    echo floor($time_diff / 31536000) . ' năm trước';
                                                }
                                                echo '</div>';

                                                echo '<b class="title-topic" style="color:#9100ff;">' . $row['tieude'] . '</b>';
                                                echo '<br>';
                                                // Kiểm tra và hiển thị nội dung
                                                $content = $row['noidung'];

                                                // Chuyển đổi http:// và https:// thành liên kết
                                                $content = preg_replace('/(https?:\/\/[^\s]+(\.[^\s]+)+)/', '<a href="$1" class="link">$1</a>', $content);

                                                echo '<span style="white-space: pre-wrap;">' . $content . '</span><br>';

                                                $image_filenames = null;
                                                if ($row['image'] !== null) {
                                                    $image_filenames = json_decode($row['image'], true); // Chuyển đổi chuỗi JSON thành mảng
                                                }

                                                if (is_array($image_filenames) && !empty($image_filenames)) {
                                                    foreach ($image_filenames as $image_filename) {
                                                        $image_path = "uploads/" . $image_filename; // Đường dẫn đến thư mục chứa ảnh
                                                        // Kiểm tra nếu tệp tồn tại trong thư mục image
                                                        if (file_exists($image_path)) {
                                                            echo '<img src="' . $image_path . '" alt="Ảnh" class="img-thumbnail">';
                                                        } else {
                                                            echo 'Không tìm thấy hình ảnh';
                                                        }
                                                    }
                                                }

                                            }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <?php
        // query the `comments` table to retrieve all comments for the current post, along with the author name
        $query = "SELECT nguoidung, traloi, created_at, gender, image FROM comments WHERE post_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $comments = $result->fetch_all(MYSQLI_ASSOC);

        // retrieve post information based on the id parameter in the URL
    
        ?>
        <div class="container pt-5 pb-5">
            <?php foreach ($comments as $comment): ?>
                <div class="row pt-3">
                    <div class="col-md-12">
                        <table cellpadding="0" cellspacing="0" width="99%" style="font-size: 13px;">
                            <tbody>
                                <tr>
                                    <td width="60px;" style="vertical-align: top">
                                        <div class="text-center" style="margin-left: -10px;">
                                            <div style="font-size: 9px; padding-top: 5px">
                                                <?php
                                                // Lấy Avatar và tên người dùng
                                                $gender = $comment['gender'];
                                                $nguoidung = $comment['nguoidung'];

                                                // Lấy thông tin tài khoản và điểm tích lũy
                                                $sql = "SELECT account.tichdiem, account.active, player.account_id FROM account INNER JOIN player ON player.account_id = account.id WHERE player.name = ?";
                                                $stmt = $conn->prepare($sql);
                                                $stmt->bind_param("s", $nguoidung);
                                                $stmt->execute();
                                                $result = $stmt->get_result();

                                                if ($result->num_rows > 0) {
                                                    $row = $result->fetch_assoc();
                                                    $tichdiem = intval($row['tichdiem']);
                                                    $active = $row['active'];
                                                    $account_id = $row['account_id'];

                                                    $avatar_url = "";

                                                    if ($active == 1) {
                                                        if ($gender == 1) {
                                                            $avatar_url = "image/avatar11.png";
                                                        } elseif ($gender == 2) {
                                                            $avatar_url = "image/avatar13.png";
                                                        } else {
                                                            $avatar_url = "image/avatar10.png";
                                                        }
                                                    } else {
                                                        if ($gender == 1) {
                                                            $avatar_url = "image/avatar1.png";
                                                        } elseif ($gender == 2) {
                                                            $avatar_url = "image/avatar2.png";
                                                        } else {
                                                            $avatar_url = "image/avatar0.png";
                                                        }
                                                    }

                                                    // Hiển thị avatar và tên người dùng
                                                    echo '<img class="avatar" src="' . $avatar_url . '" alt="Avatar" style="width: 50px">';
                                                    echo '<p>';

                                                    $query = "SELECT DISTINCT posts.*, account.active, player.account_id FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.username = ? ORDER BY posts.id DESC";
                                                    $stmt = $conn->prepare($query);
                                                    $stmt->bind_param("s", $nguoidung);
                                                    $stmt->execute();
                                                    $result2 = $stmt->get_result();

                                                    // Hiển thị thông tin tài khoản và danh sách bài viết
                                                    $actives_displayed = array();
                                                    $has_active = false; // Khởi tạo biến 'has_active' với giá trị mặc định là false
                                        
                                                    while ($row = $result2->fetch_assoc()) {
                                                        if ($row['active'] == 1 && !in_array($row['account_id'], $actives_displayed)) {
                                                            $actives_displayed[] = $row['account_id'];
                                                            $has_active = true; // Nếu có giá trị 'active' bằng 1, gán giá trị true cho biến 'has_active'
                                                        }
                                                    }

                                                    $color = "";
                                                    if ($tichdiem >= 500) {
                                                        $danh_hieu = "(Chuyên Gia)";
                                                        $color = "#800000"; // sets color to red
                                                    } elseif ($tichdiem >= 300) {
                                                        $danh_hieu = "(Hỏi Đáp)";
                                                        $color = "#A0522D"; // sets color to yellow
                                                    } elseif ($tichdiem >= 200) {
                                                        $danh_hieu = "(Người Bắt Chuyện)";
                                                        $color = "#6A5ACD";
                                                    } else {
                                                        $danh_hieu = "";
                                                        $color = "";
                                                    }

                                                    if ($has_active) {
                                                        // Nếu tìm thấy giá trị 'active' bằng 1 trong vòng lặp while, hiển thị tên người dùng với chữ màu đỏ
                                                        echo '<span class="text-danger font-weight-bold">' . $nguoidung . '</span><br>';
                                                        echo '<span class="text-danger pt-1 mb-0">(active)</span><br>';
                                                    } else {
                                                        // Nếu không tìm thấy giá trị 'active' bằng 1 hoặc biến $row không tồn tại, hiển thị tên người dùng với chữ màu đen.
                                                        echo '<span>' . $nguoidung . '</span><br>';
                                                        if ($danh_hieu !== "") {
                                                            echo '<span style="color:' . $color . ' !important">' . $danh_hieu . '</span><br>';
                                                        }
                                                    }

                                                    echo '<span style="font-size: 8px">Điểm: ' . $tichdiem . '</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="bg bg-light" style="border-radius: 7px">
                                        <div class="row" style="padding: 0 7px 15px 7px">
                                            <div class="col">
                                                <small>
                                                    <?php
                                                    $created_at = strtotime($comment['created_at']);
                                                    $now = time();
                                                    $time_diff = $now - $created_at;
                                                    if ($time_diff < 60) {
                                                        echo $time_diff . ' giây trước';
                                                    } elseif ($time_diff < 3600) {
                                                        echo floor($time_diff / 60) . ' phút trước';
                                                    } elseif ($time_diff < 86400) {
                                                        echo floor($time_diff / 3600) . ' giờ trước';
                                                    } elseif ($time_diff < 2592000) {
                                                        echo floor($time_diff / 86400) . ' ngày trước';
                                                    } elseif ($time_diff < 31536000) {
                                                        echo floor($time_diff / 2592000) . ' tháng trước';
                                                    } else {
                                                        echo floor($time_diff / 31536000) . ' năm trước';
                                                    }
                                                    ?>
                                                </small>
                                                <p class="text-dark pt-1 pb-1 mb-1">
                                                    <?php
                                                    $content = $comment['traloi'];

                                                    $content = preg_replace_callback('/(https?:\/\/[^\s]+(\.[^\s]+)+)/', function ($matches) {
                                                        $url = $matches[0];
                                                        return '<a href="' . $url . '" class="link">' . (filter_var($url, FILTER_VALIDATE_URL) ? $url : substr($url, 0, -1)) . '</a>';
                                                    }, $content);

                                                    echo '<span style="white-space: pre-wrap;">' . $content . '</span><br>';

                                                    $image_filenames = $comment['image']; // Assuming $comment['image'] is a JSON string or null
                                            
                                                    if (!is_null($image_filenames)) {
                                                        $image_filenames = json_decode($image_filenames, true); // Convert JSON string to an array
                                            
                                                        if (is_array($image_filenames) && !empty($image_filenames)) {
                                                            foreach ($image_filenames as $image_filename) {
                                                                $image_path = "uploads/" . $image_filename;

                                                                if (file_exists($image_path)) {
                                                                    echo '<img src="' . $image_path . '" alt="Ảnh" class="img-thumbnail">';
                                                                } else {
                                                                    echo 'Không tìm thấy hình ảnh';
                                                                }
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php
            if ($_login === null) {
                ?>
                <br>
                <div class="border-secondary border-top"></div>
                <div class="container pt-4 pb-4 text-white">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <div style="font-size: 13px" class="text-dark">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pb-2">
                    <div class="row mt-3">
                        <div class="col-5">
                        </div>
                        <?php
            } else { // Lấy id bài viết từ URL
                $post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

                // Tính toán số lượng comment cho bài viết hiện tại
                $query = "SELECT COUNT(*) AS count FROM comments WHERE post_id = '$post_id'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $count = $row['count'];

                // Thiết lập giới hạn cho mỗi trang
                $limit = 20;

                // Tính toán số lượng trang
                $total_pages = ceil($count / $limit);

                // Lấy số trang từ tham số URL
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                // Xác định vị trí của trang hiện tại trong danh sách các trang
                $page_position = min(max(1, $page - 1), max(1, $total_pages - 2));

                // Tính toán giới hạn kết quả truy vấn theo biến $limit và $page
                $offset = ($page - 1) * $limit;

                // Hiển thị pagination
                echo '<div class="col text-right">';
                echo '<ul class="pagination justify-content-end">';
                if ($page > 1) {
                    echo '<li><a class="btn btn-action text-white" href="bai-viet.php?id=' . $post_id . '&page=' . ($page - 1) . '"><</a></li>';
                }
                $start_page = max(1, min($total_pages - 2, $page - 1));
                $end_page = min($total_pages, max(2, $page + 1));
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i >= $start_page && $i <= $end_page) {
                        $class_name = "btn btn-sm btn-light";
                        if ($i == $page) {
                            $class_name = "btn btn-sm page-active";
                        }
                        echo '<li><a class="btn btn-action text-white"' . $class_name . '" href="bai-viet.php?id=' . $post_id . '&page=' . $i . '">' . $i . '</a></li>';
                    }
                }
                if ($page < $total_pages) {
                    echo '<li><a class="btn btn-action text-white" href="bai-viet.php?id=' . $post_id . '&page=' . ($page + 1) . '">></a></li>';
                }
                echo '</ul>';
                echo '</div>';
                ?>

                    </div>
                    <div class="border-secondary border-top"></div><br>
                    <table cellpadding="0" cellspacing="0" width="99%" style="font-size: 13px;">
                        <tbody>
                            <tr>
                                <table cellpadding="0" cellspacing="0" width="99%" style="font-size: 13px;">
                                    <tbody>
                                        <tr>
                                            <td width="55px;" style="vertical-align: top">
                                                <div class="text-left" style="display: block;">
                                                    <?php
                                                    $query = "SELECT posts.*, account.active FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = $post_id";
                                                    $result = mysqli_query($conn, $query);

                                                    if ($row = mysqli_fetch_assoc($result)) {
                                                        if ($row['trangthai'] == 0):
                                                            // Lấy tên người dùng từ cơ sở dữ liệu
                                                            $sql = "SELECT player.name, player.gender, account.active FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                                                            $result = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($result);

                                                            // Hiển thị ảnh đại diện và tên người dùng
                                                            if (isset($row['gender'])) {
                                                                //lấy  Avatar và tên của người dùng
                                                                $gender = $row['gender'];
                                                                $active = $row['active'];
                                                                $avatar_url = "";

                                                                if ($active == 1) {
                                                                    if ($gender == 1) {
                                                                        $avatar_url = "image/avatar11.png";
                                                                    } elseif ($gender == 2) {
                                                                        $avatar_url = "image/avatar13.png";
                                                                    } else {
                                                                        $avatar_url = "image/avatar10.png";
                                                                    }
                                                                } else {
                                                                    if ($gender == 1) {
                                                                        $avatar_url = "image/avatar1.png";
                                                                    } elseif ($gender == 2) {
                                                                        $avatar_url = "image/avatar2.png";
                                                                    } else {
                                                                        $avatar_url = "image/avatar0.png";
                                                                    }
                                                                }
                                                                echo '<img class="avatar" src="' . $avatar_url . '" alt="Avatar" style="width: 50px">';
                                                            }
                                                        endif;
                                                    }
                                                    ?>
                                                    <br>
                                                </div>
                                            </td>
                                            <td style="border-radius: 7px">
                                                <div class="row">
                                                    <div class="col">
                                                        <?php
                                                        ob_start(); // start buffering output
                                                
                                                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['traloi'])) {
                                                            $comment =  htmlspecialchars($_POST['traloi'], ENT_QUOTES, 'UTF-8');
                                                            
                                                            if (isset($_GET['id'])) {
                                                                $id = intval($_GET['id']);

                                                                $select_stmt = $conn->prepare("SELECT player.name, player.gender, player.account_id, account.active FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username = ?");
                                                                $select_stmt->bind_param("s", $_username);
                                                                $select_stmt->execute();
                                                                $result = $select_stmt->get_result();

                                                                if ($result->num_rows > 0) {
                                                                    $row = $result->fetch_assoc();

                                                                    $update_stmt = $conn->prepare("UPDATE account SET tichdiem = tichdiem + 1 WHERE id = ?");
                                                                    $update_stmt->bind_param("i", $row['account_id']);
                                                                    $update_stmt->execute();

                                                                    $data = "SELECT player.name FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                                                                    $dulieu = mysqli_query($conn, $data);
                                                                    $connectdata = mysqli_fetch_assoc($dulieu);
                                                                    $_name = $connectdata['name'];

                                                                    // Kiểm tra nếu có tệp tin ảnh được tải lên
                                                                    if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {
                                                                        $image_files = $_FILES['image'];
                                                                        $total_files = count($image_files['name']);

                                                                        $image_names = array(); // Mảng để lưu trữ tên tệp tin ảnh
                                                                        $upload_directory = "uploads/"; // Thư mục lưu trữ ảnh
                                                
                                                                        for ($i = 0; $i < $total_files; $i++) {
                                                                            $image_filename = $image_files['name'][$i];
                                                                            $image_tmp = $image_files['tmp_name'][$i];

                                                                            $targetFile = $upload_directory . basename($image_filename);

                                                                            // Di chuyển tệp tin ảnh vào thư mục lưu trữ
                                                                            move_uploaded_file($image_tmp, $targetFile);

                                                                            // Thêm tên tệp tin vào mảng
                                                                            $image_names[] = basename($image_filename);
                                                                        }

                                                                        // Chuyển đổi mảng thành chuỗi JSON
                                                                        $image_names_json = json_encode($image_names);

                                                                        // Lưu thông tin bình luận và tệp tin ảnh vào cơ sở dữ liệu
                                                                        $insert_stmt = $conn->prepare("INSERT INTO comments (post_id, nguoidung, gender, image, traloi) VALUES (?, ?, ?, ?, ?)");
                                                                        $insert_stmt->bind_param("issss", $id, $_name, $row['gender'], $image_names_json, $comment);
                                                                        $insert_stmt->execute();
                                                                        header('location:bai-viet.php?id='.$id);
                                                                    } else {
                                                                        // Lưu thông tin bình luận vào cơ sở dữ liệu (không có tệp tin ảnh)
                                                                        $insert_stmt = $conn->prepare("INSERT INTO comments (post_id, nguoidung, gender, traloi) VALUES (?, ?, ?, ?)");
                                                                        $insert_stmt->bind_param("isss", $id, $_name, $row['gender'], $comment);
                                                                        $insert_stmt->execute();
                                                                        header('location:bai-viet.php?id='.$id);
                                                                    }
                                                                }
                                                            } elseif (isset($_POST['delete_post'])) {
                                                                // Xử lý khi người dùng nhấn vào nút "Xoá Bài"
                                                                require_once('connect.php');

                                                                // Lấy id bài viết từ $_GET hoặc $_POST
                                                                $post_id = isset($_GET['id']) ? intval($_GET['id']) : intval($_POST['post_id']);

                                                                // Kiểm tra xem người dùng có quyền xoá bài không
                                                                $query = "SELECT posts.*, account.active FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = $post_id";
                                                                $result = mysqli_query($conn, $query);

                                                                if ($row = mysqli_fetch_assoc($result)) {
                                                                    if ($row['active'] == 1) {
                                                                        // Xoá bài viết
                                                                        $delete_comments_query = "DELETE FROM comments WHERE post_id = $post_id";
                                                                        $delete_posts_query = "DELETE FROM posts WHERE id = $post_id";

                                                                        // Thực hiện xoá các comment của bài viết
                                                                        if (mysqli_query($conn, $delete_comments_query)) {
                                                                            // Xoá bài viết sau khi xoá các comment thành công
                                                                            if (mysqli_query($conn, $delete_posts_query)) {
                                                                                header("Location:/dien-dan"); // Chuyển hướng về trang chủ hoặc trang danh sách bài viết
                                                                                exit();
                                                                            } else {
                                                                                echo "Error: Failed to delete post.";
                                                                            }
                                                                        } else {
                                                                            echo "Error: Failed to delete comments.";
                                                                        }
                                                                    } else {
                                                                        echo "Error: You don't have permission to delete this post.";
                                                                    }
                                                                } else {
                                                                    echo "Error: Post not found.";
                                                                }
                                                            } elseif (isset($_POST['pin_post'])) {
                                                                // Xử lý khi người dùng nhấn vào nút "Ghim Bài"
                                                                require_once('connect.php');

                                                                // Lấy id bài viết từ $_GET hoặc $_POST
                                                                $post_id = isset($_GET['id']) ? intval($_GET['id']) : intval($_POST['post_id']);

                                                                // Kiểm tra xem người dùng có quyền ghim bài không
                                                                $query = "SELECT posts.*, account.active FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = $post_id";
                                                                $result = mysqli_query($conn, $query);

                                                                if ($row = mysqli_fetch_assoc($result)) {
                                                                    if ($row['active'] == 1) {
                                                                        // Ghim bài viết
                                                                        $pin_query = "UPDATE posts SET ghimbai = 1 WHERE id = $post_id";
                                                                        if (mysqli_query($conn, $pin_query)) {
                                                                            header("Location: /bai-viet.php?id=" . $post_id); // Chuyển hướng về trang bài viết
                                                                            exit();
                                                                        } else {
                                                                            echo "Error: Failed to pin post.";
                                                                        }
                                                                    } else {
                                                                        echo "Error: You don't have permission to pin this post.";
                                                                    }
                                                                } else {
                                                                    echo "Error: Post not found.";
                                                                }
                                                            } elseif (isset($_POST['delete_pin_post'])) {
                                                                // Xử lý khi người dùng nhấn vào nút "Bỏ Ghim"
                                                                require_once('connect.php');

                                                                // Lấy id bài viết từ $_GET hoặc $_POST
                                                                $post_id = isset($_GET['id']) ? intval($_GET['id']) : intval($_POST['post_id']);

                                                                // Kiểm tra xem người dùng có quyền bỏ ghim bài không
                                                                $query = "SELECT posts.*, account.active FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = $post_id";
                                                                $result = mysqli_query($conn, $query);

                                                                if ($row = mysqli_fetch_assoc($result)) {
                                                                    if ($row['active'] == 1) {
                                                                        // Bỏ ghim bài viết
                                                                        $unpin_query = "UPDATE posts SET ghimbai = 0 WHERE id = $post_id";
                                                                        if (mysqli_query($conn, $unpin_query)) {
                                                                            header("Location: /bai-viet.php?id=" . $post_id); // Chuyển hướng về trang bài viết
                                                                            exit();
                                                                        } else {
                                                                            echo "Error: Failed to unpin post.";
                                                                        }
                                                                    } else {
                                                                        echo "Error: You don't have permission to unpin this post.";
                                                                    }
                                                                } else {
                                                                    echo "Error: Post not found.";
                                                                }
                                                            } elseif (isset($_POST['block_comments'])) {
                                                                // Kiểm tra quyền khoá bình luận (ví dụ: kiểm tra quyền active)
                                                
                                                                // Lấy ID bài viết từ $_GET hoặc $_POST
                                                                $post_id = isset($_GET['id']) ? intval($_GET['id']) : intval($_POST['post_id']);

                                                                // Thực hiện câu truy vấn SQL để cập nhật cột "trangthai" của bài viết thành 1 (đã khoá bình luận)
                                                                $update_query = "UPDATE posts SET trangthai = 1 WHERE id = $post_id";
                                                                if (mysqli_query($conn, $update_query)) {
                                                                    header("Location: /bai-viet.php?id=" . $post_id); // Chuyển hướng về trang bài viết
                                                                    exit();
                                                                } else {
                                                                    echo "Error: Failed to block comments.";
                                                                }
                                                            } elseif (isset($_POST['unlock_comments'])) {
                                                                // Kiểm tra quyền khoá bình luận (ví dụ: kiểm tra quyền active)
                                                
                                                                // Lấy ID bài viết từ $_GET hoặc $_POST
                                                                $post_id = isset($_GET['id']) ? intval($_GET['id']) : intval($_POST['post_id']);

                                                                // Thực hiện câu truy vấn SQL để cập nhật cột "trangthai" của bài viết thành 1 (đã khoá bình luận)
                                                                $update_query = "UPDATE posts SET trangthai = 0 WHERE id = $post_id";
                                                                if (mysqli_query($conn, $update_query)) {
                                                                    header("Location: /bai-viet.php?id=" . $post_id); // Chuyển hướng về trang bài viết
                                                                    exit();
                                                                } else {
                                                                    echo "Error: Failed to block comments.";
                                                                }
                                                            }
                                                        }

                                                        ob_end_flush();
                                                        ?>
                                                        <?php
                                                        $query = "SELECT posts.*, player.name FROM posts LEFT JOIN player ON posts.username = player.name LEFT JOIN account ON player.account_id = account.id WHERE posts.id = $post_id";
                                                        $result = mysqli_query($conn, $query);

                                                        if ($row = mysqli_fetch_assoc($result)) {
                                                            if ($row['trangthai'] == 0) {
                                                                ?>
                                                                <form id="form" method="POST">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" type="text" name="traloi"
                                                                            id="traloi" placeholder="Nhập bình luận của bạn..."
                                                                            required></textarea>
                                                                        <span id="notify" class="text-danger"></span>
                                                                    </div>
                                                                     <div class="mt-1">
                                                    <button type="submit" name="submit" class="btn btn-action text-white" style="border-radius: 7px;"> <i class="fa fa-comment"></i>Bình luận</button>
                                                </div>
                                                                </form>
                                                                <?php
                                                            }
                                                        }

                                                        $query2 = "SELECT account.*, account.active FROM account LEFT JOIN player ON player.account_id = account.id WHERE account.active = 1";
                                                        $result2 = mysqli_query($conn, $query2);

                                                        if ($row2 = mysqli_fetch_assoc($result2)) {
                                                            if ($row2['active'] == 1) {
                                                                // Kiểm tra xem tài khoản hiện tại có quyền active hay không
                                                                if (isset($_SESSION['id'])) {
                                                                    $current_user_id = $_SESSION['id'];
                                                                    $active_query = "SELECT active FROM account WHERE id = $current_user_id";
                                                                    $active_result = mysqli_query($conn, $active_query);
                                                                    $active_row = mysqli_fetch_assoc($active_result);

                                                                    if ($active_row['active'] == 1) {
                                                                        ?>
                                                                                                  <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                        <script>
                                                            document.getElementById('image').addEventListener('change', function () {
                                                                var fileCount = this.files.length;
                                                                var imageCountElement = document.getElementById(
                                                                    'image-count');
                                                                if (fileCount > 0) {
                                                                    imageCountElement.innerText = 'Đã chọn ' + fileCount +
                                                                        ' ảnh';
                                                                } else {
                                                                    imageCountElement.innerText = '';
                                                                }
                                                            });
                                                            // Xử lý sự kiện khi bình luận được gửi
                                                            document.getElementById('form').addEventListener('submit', function (
                                                                event) {
                                                                event
                                                                    .preventDefault(); // Ngăn chặn gửi biểu mẫu một cách tự động

                                                                // Tạo một đối tượng FormData để chứa dữ liệu biểu mẫu
                                                                var formData = new FormData(this);

                                                                // Gửi yêu cầu AJAX
                                                                var xhr = new XMLHttpRequest();
                                                                xhr.open('POST', this.action, true);
                                                                xhr.onload = function () {
                                                                    if (xhr.status === 200) {
                                                                        // Xử lý thành công, cập nhật URL và tải lại trang
                                                                        var newURL = window.location.origin + window
                                                                            .location.pathname +
                                                                            "?id=<?php echo $post_id; ?>";
                                                                        window.history.pushState({
                                                                            path: newURL
                                                                        }, '', newURL);
                                                                        window.location.reload();
                                                                    } else {
                                                                        // Xử lý lỗi
                                                                        console.log('Đã xảy ra lỗi: ' + xhr.status);
                                                                    }
                                                                };

                                                                xhr.send(formData);
                                                            });
                                                        </script>

                                                        <script>
                                                            const form = document.querySelector('#form');
                                                            const submitBtn = form.querySelector('#btn-cmt');
                                                            const submitError = form.querySelector('#notify');
                                                            const traloiInput = document.getElementById('traloi');
                                                            form.addEventListener('submit', (event) => {
                                                                const traloi = traloiInput.value.trim().length;
                                                                if (traloi < script 1) {
                                                                event.preventDefault();
                                                                submitError.innerHTML =
                                                                    '<strong>Lỗi:</strong> Bình luận phải có ít nhất 1 ký tự!';
                                                                submitError.style.display = 'block';
                                                                submitBtn.scrollIntoView({
                                                                    behavior: 'smooth',
                                                                    block: 'start'
                                                                });
                                                            }
                                                                        });
                                                            traloiInput.addEventListener('keydown', (event) => {
                                                                if (event.keyCode === 13 && !event.shiftKey) {
                                                                    event.preventDefault();
                                                                    submitBtn.click();
                                                                }
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="border-secondary border-top"></div>
                                <div class="container pt-4 pb-4 text-white">
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div style="font-size: 13px" class="text-dark">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            <?php
            }
                                        }
                                        ?>
    </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js">
        < script src="asset/main.js" >
    </script>
</body>

</html>
// <!--
// # SOURCE WEBSITE NGOCRONGSAO CREATED BY NGUYEN DUC KIEN
// # GITHUB: @NTDUCKIEN
// # ZALO: 0981374169
// # NGOCRONGSAO VERSION 1.0
//  -->
