<?php
   include_once 'head.php';
   include_once 'maychu.php';
   include_once 'css/head.php';
   include_once 'set.php';
   include 'connect.php';
   ?>
<?php
echo '
					<script type="text/javascript">
						
						$(document).ready(function(){
						
						  swal({
								title: "Thành công",
								text: "Thay đổi đã hoàn thành",
								type: "success",
								confirmButtonText: "OK",
						  })
						});
						
						</script>
						';
 
          $sql = "SELECT player.name, player.gender, account.active, account.is_admin FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result); 
                                if ($row['is_admin'] == 1) {
                                    // Thiết lập giá trị mặc định cho $theloai khi admin = 0
                                    ?>
                                     
                                    <div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
                                    <form action="ip.php" method="post" enctype="multipart/form-data">
                                    <label>Tên Miền</label>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="a" type="text" class="form-control mt-1" value="<?php echo $link_server; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                       <label>Name Sever</label>                  <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="b" type="text" class="form-control mt-1" value="<?php echo $name_server; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                                                                                        <div class="text-center mt-1">
                                            <div class="form-check form-check-inline">
                        <b>Trạng Thái</b></div>
                        <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="trangthai" id="hades1" value="1" checked="true">
                      <label class="form-check-label" for="hades1">Bảo Trì</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="trangthai" id="hades2" value="2">
                      <label class="form-check-label" for="hades2">Online</label>
                    </div>
                   </br> 
              <b>Logo</b></br>                               <input type="file" name="fileUpload" id="fileUpload">
              </br><b>APK</b>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="apk" type="text" class="form-control mt-1" value="<?php echo $apk; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                                         <b>PC</b>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="pc" type="text" class="form-control mt-1" value="<?php echo $pc; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                                        <b>IOS</b>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="ios" type="text" class="form-control mt-1" value="<?php echo $ios; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                                            
             <b>JAVA</b>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="java" type="text" class="form-control mt-1" value="<?php echo $java; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
           <b>Fanpage</b>  
 <input style="height: 50px; border-radius: 15px; font-weight: bold;" name="fanpage" type="text" class="form-control mt-1" value="<?php echo $fanpage; ?>" autofocus="">
                    <span style="color: red; font-size: 12px; font-weight: bold;">
                                            </span>
                                                                         

                        <button class="btn btn-lg btn-dark btn-block" style="border-radius: 10px;width: 100%; height: 50px;" type="submit" value="Upload" name="submit">ok chốt</button>
                                                                                   <?php
                                } else {
                                    ?>
                                    <?php
                                echo '
					<script type="text/javascript">
						
						$(document).ready(function(){
						
						  swal({
								title: "Thất bại",
								text: "chỉ có admin mới đc vô nhé e",
								type: "success",
								confirmButtonText: "OK",
						  })
						});
						
						</script>
						';
						
                        }
                        ?>
                                                 </body></html>
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


