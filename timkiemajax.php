<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Db();
$q = $_REQUEST["q"];
$danhsachsanpham=$obj->select("select * from sanpham where tensp like '%$q%' limit 0,4");
$today=date('YmdHis');
$danhsachkhuyenmai=$obj->select("SELECT * FROM `khuyenmaisp` where `ngaykt`>$today");
?>
<!DOCTYPE html>
<html>
<?php    include"subpage/head.php";?>
<body>
<div class="main">
  <div class="main">  
      <div class="content">

            <div class="section group">

            <?php
               foreach ($danhsachsanpham as$value) {
                  ?>


            <div class="grid_1_of_4 images_1_of_4">
                <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
                <h2><?php echo $value['tensp']?></h2>
                
                <p><span style="font-size:8px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ';?></span><span class="price">
                  <?php
                  $tongkm=0;
                  foreach ($danhsachkhuyenmai as $item) {

                     if($item['mansx']==$value['mansx'])
                        $tongkm+=$item['sotienkm'];
                  }
                  $gia=$value["giasp"]-$tongkm;
                  echo number_format($gia ,0 ,'.' ,'.').' Đ';;
                  ?>
                </span></p>
                 <div  class="button"><span><img src="images/cart.jpg" alt="" /><a href="xulythemgiohang.php?masp=<?php echo $value['masp'];?>&gia=<?php echo $gia?>" class="cart-button">Thêm giỏ</a></span> </div>
                 <div class="button"><span><a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>" class="details">Chi tiết</a></span></div>
            </div>


                  <?php
               }

            ?>

           
            
         
         </div>
   </div>
  </div>
 </div>
</body>
</html>


