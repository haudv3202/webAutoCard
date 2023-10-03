<?php
// 
include_once 'connect.php';

include_once 'maychu.php';
include_once 'set.php';
include('head.php');
?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="cid:css-151c12d4-add5-49e4-82b5-e69ade23ef1f@mhtml.blink" />
    <link rel="stylesheet" type="text/css" href="cid:css-ec4f0dc5-a42e-41af-8c6c-758ccf2591e9@mhtml.blink" />


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
<?php
if ($trangthai == 2) {
    // Thiết lập giá trị mặc định cho $theloai khi admin = 0
?>
    <div class="p-1 pb-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">






        <div class="alert alert-danger" style="border-radius: 7px;">
            <div>
                <div style="width: 55px; float:left; margin-right: 10px;">
                    <img class="avatar" src="https://www.nrohades.com/assets/images/avatar/29.png" style="width: 50px; height: 55px;">
                </div>
                <a href="mo-thanh-vien.php" class="alert-link text-decoration-none font-weight-bold" style="color:#9100ff; font-size:18px;">
                    Mở Thành Viên 1 Đồng <img src="image/hot.gif"> </a>
                <div class="box_name_eman">bởi <b>
                        <b style="color:red">admin</b>
                    </b>
                </div>
                <br>
            </div>
            <div>
                <div style="width: 55px; float:left; margin-right: 10px;">
                    <img class="avatar" src="https://www.nrohades.com/assets/images/avatar/29.png" style="width: 50px; height: 55px;">
                </div>
                <a href="bang-xep-hang.php" class="alert-link text-decoration-none font-weight-bold" style="color:#9100ff; font-size:18px;">
                    Bảng Xếp Hạng Đua Top<img src="image/hot.gif"> </a>
                <div class="box_name_eman">bởi <b>
                        <b style="color:red">admin</b>
                    </b>
                </div>
                <br>
            </div>
            <div>
                <div style="width: 55px; float:left; margin-right: 10px;">
                    <img class="avatar" src="https://www.nrohades.com/assets/images/avatar/29.png" style="width: 50px; height: 55px;">
                </div>
                <a href="top-nap.php" class="alert-link text-decoration-none font-weight-bold" style="color:#9100ff; font-size:18px;">
                    Bảng Xếp Hạng Nạp<img src="image/hot.gif"> </a>
                <div class="box_name_eman">bởi <b>
                        <b style="color:red">admin</b>
                    </b>
                </div>
                <br>
            </div>
            <div>
                <div style="width: 55px; float:left; margin-right: 10px;">
                    <img class="avatar" src="https://www.nrohades.com/assets/images/avatar/29.png" style="width: 50px; height: 55px;">
                </div>
                <a href="gioithieu-nguoichoi.php" class="alert-link text-decoration-none font-weight-bold" style="color:#9100ff; font-size:18px;">
                    Sự Kiện Giới Thiệu Nhận Quà <img src="image/hot.gif"> </a>
                <div class="box_name_eman">bởi <b>
                        <b style="color:red">admin</b>
                    </b>
                </div>
                <br>
            </div>
        </div>
        <div class="alert alert-danger" style="border-radius: 7px;">
            <div>

                <?php
                $query = "SELECT posts.*, player.gender, account.active FROM posts 
                    LEFT JOIN player ON posts.username = player.name 
                    LEFT JOIN account ON player.account_id = account.id 
                    WHERE posts.username = player.name 
                    ORDER BY posts.id DESC";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $post_id = $row['id'];

                    // Lấy Avatar và tên người dùng
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

                    if ($row['ghimbai'] == 1) {
                        // Tiêu đề và avatar của bài viết ghim
                        echo '<div style="width: 40px; float: left; margin-right: 5px; overflow: hidden;">';
                        echo '<img src="' . $avatar_url . '" alt="Avatar" style="width: 35px; height: 35px;">';
                        echo '</div>';
                        echo '<div class="box-right">';

                        if ($row['active'] == 1) {
                            // Determine title color based on the value of 'theloai'
                            $titleColor = '';
                            switch ($row['theloai']) {
                                case 0:
                                    $titleColor = 'color: #8B0000; font-weight: bold;'; // Brown color
                                    break;
                                case 1:
                                    $titleColor = 'color: #FF0000; font-weight: bold;'; // Green color
                                    break;
                                case 2:
                                    $titleColor = 'color: #A52A2A; font-weight: bold;'; // Orange color
                                    break;
                                case 3:
                                    $titleColor = 'color: #CD3333; font-weight: bold;'; // Red color
                                    break;
                                default:
                                    $titleColor = ''; // Default color (fallback)
                                    break;
                            }

                            echo '<a href="bai-viet.php?id=' . $row['id'] . '"><span style="' . $titleColor . '">' . $row['tieude'] . '</span></a>';
                            echo '<div class="box-name" style="font-size: 9px;"> bởi <span class="text-danger font-weight-bold">';
                            echo $row['username'];
                            echo ' <i class="fas fa-star"></i>'; // Icon sao cho quản trị viên
                            echo '</span>';
                        } else {
                            echo '<a href="bai-viet.php?id=' . $row['id'] . '">' . $row['tieude'] . '</a>';
                            echo '<div class="box-name" style="font-size: 9px;"> bởi ' . $row['username'] . '';
                        }


                        $query2 = "SELECT comments.id, comments.nguoidung, player.account_id, account.active, account.tichdiem FROM comments INNER JOIN player ON comments.nguoidung = player.name INNER JOIN account ON player.account_id = account.id WHERE comments.post_id = '$post_id' ORDER BY comments.id ASC";
                        $result2 = mysqli_query($conn, $query2);


                        $thao_luan_da_hien_thi = false;
                        $displayed_danh_hieu = false;
                        $first_comment_processed = false;
                        $first_comment_tichdiem = 0;
                        $first_comment_color = "";
                        $first_comment_danh_hieu = "";

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $tichdiem = $row2['tichdiem'];
                                if ($row2['active'] == 1 && !$thao_luan_da_hien_thi) {
                                    echo '';
                                    $thao_luan_da_hien_thi = true;
                                    $displayed_danh_hieu = true;
                                    // Đánh dấu rằng đã hiển thị thông tin của active
                                    // và không cần hiển thị danh hiệu nữa
                                } elseif ($row2['active'] != 1) {
                                    if ($tichdiem >= 200) {
                                        $danh_hieu = "(Chuyên Gia Đã Giải Đáp)";
                                        $color = "#800000";
                                    } elseif ($tichdiem >= 100) {
                                        $danh_hieu = "(Người Hỏi Đáp Đã Trả Lời)";
                                        $color = "#A0522D";
                                    } elseif ($tichdiem >= 35) {
                                        $danh_hieu = "(Người Bắt Chuyện Đã Trả Lời)";
                                        $color = "#6A5ACD";
                                    } else {
                                        $danh_hieu = "";
                                    }
                                    if ($danh_hieu !== "" && !$displayed_danh_hieu) {
                                        if (!$first_comment_processed) {
                                            $first_comment_color = $color;
                                            $first_comment_danh_hieu = $danh_hieu;
                                            $first_comment_processed = true;
                                        }
                                    }
                                }
                            }
                            if ($first_comment_danh_hieu !== "" && !$displayed_danh_hieu) {
                                echo '<span style="color:' . $first_comment_color . ' !important"> ' . $first_comment_danh_hieu . '</span>';
                            }
                        }

                        echo '</div></div>';
                    }
                }
                ?>

                <?php
                // Tính toán số lượng bài viết
                $query = "SELECT COUNT(*) AS count FROM posts";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $count = $row['count'];

                // Thiết lập giới hạn cho mỗi trang
                $limit = 10;

                // Tính toán số lượng trang
                $total_pages = ceil($count / $limit);

                // Lấy số trang từ tham số URL
                $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                // Xác định vị trí của trang hiện tại trong danh sách các trang
                $page_position = min(max(1, $page - 1), max(1, $total_pages - 2));

                // Tính toán giới hạn kết quả truy vấn theo biến $limit và $page
                $offset = ($page - 1) * $limit;
                $query = "SELECT posts.*, player.gender, account.active FROM posts 
          LEFT JOIN player ON posts.username = player.name 
          LEFT JOIN account ON player.account_id = account.id 
          WHERE posts.username = player.name 
          ORDER BY posts.id DESC LIMIT $limit OFFSET $offset";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $post_id = $row['id'];

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

                    // Tiêu đề và avatar của người dùng
                    echo '    <br>
        <div class="box-stt">
          <div style="width: 55px; float:left; margin-right: 10px;">
            <img class="avatar" src="' . $avatar_url . '" style="width: 50px">
            </div>
          <div class="box-right">
              <a href="bai-viet.php?id=' . $row['id'] . '" class="alert-link text-decoration-none" title="">' . $row['tieude'] . '</a>
            
            <div class="box_name_eman">bởi <b>
                                        <b style="color:red">  ' . $row['username'] . ' </b>       </div>
          </div>

      </br>';

                    echo '<div class="box-right">';

                    $query2 = "SELECT comments.id, comments.nguoidung, player.account_id, account.active, account.tichdiem
            FROM comments 
            INNER JOIN player ON comments.nguoidung = player.name
            INNER JOIN account ON player.account_id = account.id
            WHERE comments.post_id = '$post_id'
            ORDER BY comments.id ASC";

                    $result2 = mysqli_query($conn, $query2);

                    $thao_luan_da_hien_thi = false;
                    $displayed_danh_hieu = false;
                    $first_comment_processed = false;
                    $first_comment_tichdiem = 0;
                    $first_comment_color = "";
                    $first_comment_danh_hieu = "";

                    if (mysqli_num_rows($result2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            $tichdiem = $row2['tichdiem'];
                            if ($row2['active'] == 1 && !$thao_luan_da_hien_thi) {
                                echo '';
                                $thao_luan_da_hien_thi = true;
                                $displayed_danh_hieu = true;
                                // Đánh dấu rằng đã hiển thị thông tin của active
                                // và không cần hiển thị danh hiệu nữa
                            } elseif ($row2['active'] != 1) {
                                if ($tichdiem >= 200) {
                                    $danh_hieu = "(Chuyên Gia Đã Giải Đáp)";
                                    $color = "#800000";
                                } elseif ($tichdiem >= 100) {
                                    $danh_hieu = "(Người Hỏi Đáp Đã Trả Lời)";
                                    $color = "#A0522D";
                                } elseif ($tichdiem >= 35) {
                                    $danh_hieu = "(Người Bắt Chuyện Đã Trả Lời)";
                                    $color = "#6A5ACD";
                                } else {
                                    $danh_hieu = "";
                                }
                                if ($danh_hieu !== "" && !$displayed_danh_hieu) {
                                    if (!$first_comment_processed) {
                                        $first_comment_color = $color;
                                        $first_comment_danh_hieu = $danh_hieu;
                                        $first_comment_processed = true;
                                    }
                                }
                            }
                        }
                        if ($first_comment_danh_hieu !== "" && !$displayed_danh_hieu) {
                            echo '<span style="color:' . $first_comment_color . ' !important"> ' . $first_comment_danh_hieu . '</span>';
                        }
                    }
                    echo '</div></div>';
                }
                ?>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="dang-bai1.php" class="btn btn-action text-white" style="border-radius: 7px;" routerlink="post">Đăng bài</a>
                    </div>
                    <?php
                    echo '<div class="col-7 text-right">';
                    echo '<ul class="pagination" style="justify-content: flex-end;">';
                    if ($page > 1) {
                        echo '<a class="btn btn-action text-white" href="?page=' . ($page - 1) . '" aria-label="Previous" style="15px 0px 0px 15px;">
                            <span aria-hidden="true">«</span>
                        </a>';
                    }
                    $start_page = max(1, min($total_pages - 2, $page - 1));
                    $end_page = min($total_pages, max(2, $page + 1));
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i >= $start_page && $i <= $end_page) {
                            $class_name = "btn btn-action text-white";
                            if ($i == $page) {
                                $class_name = "btn btn-action text-white";
                            }
                            echo '<li><a class="' . $class_name . '" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    if ($page < $total_pages) {
                        echo '<a class="btn btn-action text-white" href="?page=' . ($page + 1) . '" aria-label="Next" style="border-radius: 0px 15px 15px 0px; ">
                            <span aria-hidden="true">»</span></a>';
                    }
                    echo '</ul>';
                    echo '</div>';
                    ?>

                </div>
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
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/main.js"></script>
    </body><!-- Bootstrap core JavaScript -->

</html>
<!--
# SOURCE WEBSITE NGOCRONGSAO CREATED BY NGUYEN DUC KIEN
# GITHUB: @NTDUCKIEN
# ZALO: 0981374169
# NGOCRONGSAO VERSION 1.0
 -->
</div>
</main>
</body>
<div class="text-center mt-1">
    <b style="font-size:13px;" class="text-white">Tham gia cộng đồng giao lưu game với chúng tớ.</b>
    <br>
    <a href="https://www.nrohades.com/charge" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findondiscord.png" style="max-width:100px" class="mt-1"></a>
    <a href="https://www.facebook.com/groups/ngocronghades" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findonfb.png" style="max-width:100px" class="mt-1"></a>
</div>
<div class="text-center text-white">
    Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
    Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
</div>
</footer>
</div>

</body>

</html>
<?php
} else {
?>
<?php
    echo '
					<script type="text/javascript">
						
						$(document).ready(function(){
						
						  swal({
								title: "Thất bại",
								text: "web đang được bảo trì quay lại vào lúc khác em nhé",
								type: "success",
								confirmButtonText: "OK",
						  })
						});
						
						</script>
						';
}
?>
</body>

</html>
<style>
    .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }
</style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>