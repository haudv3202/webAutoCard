<?php
   include_once 'head.php';
   include_once 'css/head.php';
   include_once 'maychu.php';
?>
<?php
                                if ($trangthai == 2) {
                                    // Thiết lập giá trị mặc định cho $theloai khi admin = 0
                                    ?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-e5dddff7-97ac-441c-b143-62b67d18c464@mhtml.blink" /><link rel="stylesheet" type="text/css" href="cid:css-34dd506e-ebee-44bf-afb7-620f3fa56cc7@mhtml.blink" />
        

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="">
        <div class="modal-header text-center" style="background-color:#6b056e;">
            <img src="img/<?php echo $logo; ?>" style="display: block; max-width:350px; margin:auto;">
        </div>
        <div class="modal-body">
        	  <b style="padding: 2px;">
        	      <span style="color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>CHÚ Ý:</span> Hiện tại có rất nhiều bên <span style="color:red;">sử dụng và ăn cắp ý tưởng cũng như là hình ảnh game và website</span> của <span style="color:purple;">NROHADES</span>!<br>
Mọi người hãy chú ý và hãy là người chơi thông minh, chơi một cách có chọn lọc nhé.
        	  </b>
        </div>
        <div class="modal-footer">
            <b>Thân ái, 
            <span style="color:purple;">admin TAGON!</span>
            <img src="https://www.nrohades.com/assets/images/logo/hades.png" width="65" height="35"></button>
        </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        setTimeout(function() {
            // Hiển thị thông báo ở đây
            $("#exampleModal").modal('show');
        }, 5); // Đợi 5 giây (5000 ms) trước khi hiển thị thông báo

        // Đóng modal popup khi nút 'Đóng' được nhấn
        $("#exampleModal .close, #exampleModal button[data-dismiss='modal']").click(function(){
            $("#exampleModal").modal('hide');
        });
    });
</script>
</style>
  <div class="p-1 mt-1 alert alert-danger" style="border-radius: 7px; box-shadow: 0px 0px 5px black;">
                <div class="p-1">
    <h5><b>Sơ lược về game</b></h5>
    <hr>
    <p><?php echo $name_server; ?>
            <img src="https://www.nrohades.com/assets/images/logo/hades.png" width="35" height="20"> – game nhập vai trực tuyến với cốt truyện và nhân vật dựa trên bộ truyện tranh nổi tiếng Nhật Bản Dragon Ball đã từng làm say lòng bao nhiêu thế hệ độc giả Việt Nam. Bạn sẽ chọn tiếp nhận hành tinh nào, Trái Đất, Namếc hay Xayda? Cuộc hành trình tìm kiếm ngọc rồng và chống lại thế lực hung ác sẽ do bạn quyết định, vận mệnh luôn nằm trong tay người được chọn.</p>
    <p>Cùng với sự hướng dẫn của các bậc tiền bối và sự nỗ lực của bản thân, bạn có thể đạt đến sức mạnh vượt trội trở thành những chiến binh siêu hạng. Ngoài ra, bạn sẽ không phải chiến đấu đơn độc khi xung quanh bạn là bạn bè và những chiến binh cùng chí hướng, cùng hỗ trợ lẫn nhau đối đầu với các thế lực hắc ám.
</p>
    <p>Ngọc rồng Hades là trò chơi trực tuyến đa nền tảng. Bạn có thể chơi được trên mọi nền tảng từ máy tính PC Windows, iPhone, các dòng máy chạy hệ điều hành Android, Windows Phone đến các cả bản Java chạy trên S40, S60 cũ của Nokia. Với chất lượng cao và tốc độ mượt mà trên các loại đường truyền mạng ADSL, 3G, GPRS.
</p>
    <p>Trò chơi thích hợp với mọi lứa tuổi. Điều khiển trực tiếp nhân vật rất dễ dàng trên màn hình cảm ứng. Khi chơi trên PC bạn chỉ cần dùng chuột, hoặc linh hoạt điều khiển nhân vật với bàn phím cứng điện thoại Nokia S40, S60.</p>
    <br>
    <h5><b>Giới thiệu chung</b></h5>
    <h6><b>1. Class nhân vật</b></h6>
    <p>Game được làm dựa trên cốt truyện của bộ truyện tranh nổi tiếng Dragon Ball. Khi tham gia vào thế giới Ngọc rồng Hades, bạn có thể chọn tham gia vào 1 trong 3 hành tinh: Trái Đất, Namếc, Xayda với hình dạng và những khả năng riêng biệt.
</p>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/0.png" alt="">
    </div>
    <p class="text-center">Người Trái Đất: Với những kỹ năng đặc biệt khó chịu đang chờ bạn khám phá và lựa chọn (Chú ý: sức mạnh của người Trái Đất sẽ phát huy tối đa khi đi theo nhóm). Đại diện: Gohan, Krillin, Yamcha,...
</p>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/1.png" alt="">
    </div>
    <p class="text-center">Người Namếc: Sở hữu khả năng tái tạo và hỗ trợ đồng đội đáng kinh ngạc trong mọi cuộc chiến. Với khả năng của người Namếc có thể giúp trận chiến trở nên dễ dàng với phe đồng minh. Đại diện: Ốc tiêu, Pocollo và Kami.
</p>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/2.png" alt="">
    </div>
    <p class="text-center">Chiến binh Xayda: Sở hữu sức mạnh vượt trội, các chiến binh Xayda có thể đơn độc quét sạch quân địch, trở thành cơn ác mộng với phe đối địch (Chú ý: Sức mạnh khủng khiếp của chiến binh Xayda có thể không phát huy hết khi hoạt động theo nhóm). Đại diện: Cađic, Rađic và Kakalot.
</p>
    <br>
    <h6><b>2. Hệ thống nhà</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/3.png" alt="">
    </div>
    <p>- Nguồn hồi phục KI và HP của các chiến binh chính là bằng đậu thần.  Các chiến binh có thể dùng vàng để nâng cấp đậu thần, gia tăng khả năng hồi phục của đậu thần - vàng nào của nấy - Đậu cấp càng cao thì khả năng hồi phục càng nhiều. 
</p>
    <p>- Rương đồ dùng để cất giữ, bảo vệ những tài sản quý giá của các chiến binh.
</p>
    <br>
    <h6><b>3. Bản đồ và NPC</b></h6>

    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/4.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/5.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/6.png" alt="">
    </div>
    <p class="text-center">Hệ thống bản đồ phong phú, đặc trưng của từng hành tinh.</p>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/7.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/8.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/9.png" alt="">
    </div>
    <p>- Những NPC nổi tiếng và gắn liền với cốt truyện của Dragon Ball. Thông qua các NPC đặc biệt như Thượng Đế, Thần
        Mèo, bạn có khả năng tăng sức mạnh và tiềm năng của nhân vật.</p>

    <br>
    <h6><b>4. Hệ thống chiêu thức, chiến đấu và khả năng nhân vật</b></h6>

    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/10.png" alt="">
    </div>
    <p>Mỗi hành tinh có những hệ thống chiêu thức khác nhau, tùy vào sở thích và khả năng bản thân, bạn có thể nâng cấp
        chiêu thức, cũng như tiềm năng bản thân để đạt sức mạnh cao nhất. Cân bằng hài hòa giữa chỉ số bản thân và chiêu
        thức có thể giúp bạn rất nhiều trong con đường trở thành chiến binh huyền thoại.</p>
    <br>
    <h6><b>5. Nhiệm vụ chính tuyến và nhiệm vụ thành tích</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/11.png" alt="">
    </div>
    <p>- Game có hệ thống nhiệm vụ chính tuyến phong phú, đi theo cốt truyện. Thông qua những nhiệm vụ này, bạn có thể
        rèn luyện bản thân và đối đầu với những nhân vật nổi tiếng như Tàu Pảy Pảy, Akkuman, Thượng Đế…</p>
    <br>
    <h6><b>6. Vật phẩm</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/12.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/13.png" alt="">
    </div>
    <p>- Bạn có thể kiếm vật phẩm trang bị cho nhân vật của mình bằng cách tích lũy vàng trong game hoặc đánh quái rớt
        ra. Ngoài ra bạn có thể mua các sách kỹ năng để nâng cấp chiêu thức, cũng như avatar để biến hóa hình dạng khuôn
        mặt, tạo sự độc nhất cho nhân vật của mình.</p>
    <br>
    <h6><b>7. Hệ thống hỗ trợ bay</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/14.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/15.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/16.png" alt="">
    </div>
    <p>Với thú cưỡi , các bạn sẽ được phục hồi KI trong khi bay . Hãy nhanh chóng tìm mua vật phẩm yêu thích và hữu ích
        trên trong cửa hàng nhé</p>
    <br>
    <h6><b>8. Đệ tử</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/17.png" alt="">
    </div>
    <p>- Ngọc rồng Hades sẽ xuất hiện 1 boss mới với tên gọi Broly ban đầu mới xuất hiện sẽ rất yếu. Nhưng khi đánh
        hắn, hắn sẽ mạnh dần lên đến khi hắn biến hình thành siêu xayda tóc vàng và sẽ dắt theo 1 đệ tử. Nếu bạn đánh
        thắng Broly bạn sẽ nhận được tên đệ tử ấy.</p>
    <br>
    <h6><b>9. Chiêu thức Lưỡng Long Nhất Thể</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/18.png" alt="">
    </div>
    <p>Bao gồm 4 loại:
        - Lưỡng long nhất thể: giữ trạng thái biến hình 10 phút, sau khi tách ra phải chờ 10 phút sau mới dùng lại được.
        (dành cho dân Trái Đất và Xayda)
        - Dùng bông tai Porata: ( có bán tại npc Urôn) dùng bông tai thì bất cứ lúc nào cũng hợp thể được và chủ dùng
        tách ra khi sử dụng lại bông tai, bông tai dùng vĩnh viễn.(dành cho dân Trái Đất và Xayda)
        - Hợp thể của người Namek.(dành cho dân Namek)
        - Hợp thể vĩnh viễn của người Namek: là đệ tử sẽ mãi mãi mất đi, khi đó toàn bộ sức mạnh của đệ tử sẽ biến thành
        tiềm năng của sư phụ.(dành cho dân Namek)</p>
    <br>
    <h6><b>10. Trang bị Pha Lê</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/19.png" alt="">
    </div>
    <p>Với món đồ bạn ưng ý (vải thô, lưỡng long, jean, zealot v.v..), hãy đem tới đảo Kame gặp bà hạt mít để được phù
        phép pha lê hóa cho trang bị của bạn. Những trang bị này sẽ trở nên vip hơn, mạnh hơn khi đã được phù phép. Khi
        đánh quái sẽ có cơ hội nhận được trang bị pha lê có thể ép pha lê vào. Có 7 loại pha lê, 7 màu sắc và tác dụng
        khác nhau. Bạn hãy đến gặp bà hạt mít tại đảo kame để ép pha lê vào trang bị pha lê. Hãy nhớ trước khi ép ngọc
        NPC bà Hạt Mít sẽ cho biết trước thông tin nhé.</p>
    <h6><b>11. Giành ngọc rồng sao đen</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/20.png" alt="">
    </div>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/21.png" alt="">
    </div>
    <p>Đây là một chức năng hay dành cho bang hội. Chi tiết về sự kiện xem tại diễn đàn.</p>
    <br>
    <h6><b>11. Doanh trại độc nhãn</b></h6>
    <div class="text-center">
        <img class="img-gk mb-3" src="https://www.nrohades.com/assets/images/game/22.png" alt="">
    </div>
    <p>
        - Để tham gia các bạn đến gặp Lính canh rừng Bambo trái đất. Có 10 cửa ải : Từ tường thành đến Trại độc nhãn và
        cuối cùng là Tầng 1 , Tầng 2 , Tầng 3 , Tầng 4</p>
    <br>
    <h6><b>12. Những cập nhật hấp dẫn khác</b></h6>
    <p>...</p>
</div>            </div>
            <!-- footer -->
<footer class="mt-1">
    
    
    <div class="text-center mt-1">
       <b style="font-size:13px;" class="text-white">Tham gia cộng đồng giao lưu game với chúng tớ.</b>
       <br>
       <a href="https://www.nrohades.com/index" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findondiscord.png" style="max-width:100px" class="mt-1"></a>
       <a href="https://www.facebook.com/groups/ngocronghades" target="_blank"><img src="https://www.nrohades.com/assets/images/icon/findonfb.png" style="max-width:100px" class="mt-1"></a>
   </div>
    <div class="text-center text-white">
        Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
        Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
    </div>
</footer>        </div>
    


<div class="modal fade" id="notify" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="">
        <div class="modal-header text-center" style="background-color:#6b056e;">
            <img src="https://i.imgur.com/IuMgQkO.png" style="display: block; max-width:350px; margin:auto;">
        </div>
        <div class="modal-body">
        	  <b style="padding: 2px;">
        	      <span style="color:red;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>CHÚ Ý:</span> Hiện tại có rất nhiều bên <span style="color:red;">sử dụng và ăn cắp ý tưởng cũng như là hình ảnh game và website</span> của <span style="color:purple;">NROHADES</span>!<br>
Mọi người hãy chú ý và hãy là người chơi thông minh, chơi một cách có chọn lọc nhé.
        	  </b>
        </div>
        <div class="modal-footer">
            <b>Thân ái, 
            <span style="color:purple;">admin Hades!</span>
            <img src="https://www.nrohades.com/assets/images/logo/hades.png" width="65" height="35">
            
            <!--<span style="color:red;"><i class="fa fa-heart" aria-hidden="true"></i></span></b>-->
        </b></div><b>
      </b></div><b>
</b></div><b>

 </b></div></body></html>
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