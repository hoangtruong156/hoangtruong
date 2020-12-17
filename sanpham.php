<?php
session_start();
?>
<html>
<?php		include"subpage/head.php"
;?>
<body>
  <div class="wrap">
	<div class="header">
			
			<?php
			include"subpage/header_top.php";	
			include"subpage/h_menu.php";

			$masp=$_GET['masp'];

include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Sanpham();
$sanpham=$obj->select("SELECT * FROM `sanpham` where `masp`=$masp");
$sanphamcungmansx=$obj->timtheomansx($sanpham[0]['mansx'],$sanpham[0]['masp']);
if(isset($_SESSION['dssp']))
$giohang=$_SESSION['dssp'];
$today=date('YmdHis');
$danhsachkhuyenmai=$obj->select("SELECT * FROM `khuyenmaisp` where `ngaykt`>$today")
	?>		
	
	</div>
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img  src="admin/image/<?php echo $sanpham[0]['anhsp']?>" alt="" />	
						<!-- Ảnh sản phẩm	 -->			
					</div>
				<div  class="desc span_3_of_2 ">
					<h2><?php echo $sanpham[0]['tensp']?></h2><!-- Tên sản phẩm	 -->	
					<p><?php echo $sanpham[0]['mota']?></p>	<!-- Thông tin chi tiết -->				
					<div class="price">

						<p>Giá: <span ><strike  style="font-size:13px"><?php echo number_format($sanpham[0]["giasp"] ,0 ,'.' ,'.').' Đ';?></strike>

<?php
					 	$tongkm=0;
					 	foreach ($danhsachkhuyenmai as $item) {

					 		if($item['mansx']==$sanpham[0]["mansx"])
					 			$tongkm+=$item['sotienkm'];
					 	}
					 	$gia=$sanpham[0]["giasp"]-$tongkm;
					 	$masp=$sanpham[0]["masp"];
					 	echo number_format($gia ,0 ,'.' ,'.').' Đ';
						?>
						</span></p><!-- Giá sản phẩm -->	
					</div>
					
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="images/youtube.png" alt=""></a></li>
					    	<li><a href="https://www.facebook.com/PhoneStore-Shop-105112544306538/">
					    		<img src="images/facebook.png" alt=""></a>
					    	</li>
					    	<li><a href="#"><img src="images/twitter.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
			    		</ul>
					</div>
				<div class="add-cart" h >
					
					<div  class="button"><span ><a href="xulythemgiohang.php?masp=<?php echo $masp;?>&gia=<?php echo $gia?>&vitri=sanpham.php?masp=<?php echo $masp;?>">Thêm giỏ hàng</a></span></div><!-- Viết J-->
					<div class="clear"></div>
				</div>
			</div>
			<!-- Mô tả -->
	    				
	</div>

				
				<h2 style="text-align: center">Giỏ hàng</h2>
				<div class="cart-container rightsidebar span_3_of_1" > 
					
					<?php
						if(isset($_SESSION['dssp']))
						foreach ($_SESSION['dssp'] as $key => $value) {
							$sanphamx=$obj->select("SELECT * FROM `sanpham` where `masp`=$key");?>

							<div class="cart-container__items">
						<img src="admin/image/<?php echo $sanphamx[0]['anhsp']; ?>">
						<div>
						<p><?php  echo $sanphamx[0]['tensp']; ?></p>
						<p>x <?php echo $value['luong'];?></p>
						</div>
					</div>

					<?php }	?>
					
					
				<!--	<div class="cart-container__items">
						<img src="https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-green-600x600.jpg">
						<div>
						<p>IPHONE 11</p>
						<p>x5</p>
						</div>
					</div>-->
					
 				</div>
 		</div>
<div  class="product-desc">
			<h2>Sản Phẩm Cùng Nhà Sản Xuất</h2>
			
			
	        
	    </div>
 		<div  class="section group">

	      	<?php
	      		foreach ($sanphamcungmansx as$value) {
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
					 
				</div>


	      			<?php
	      		}

	      	?>
				
				
			
			</div>
 	</div>
</div>
</div>
  <?php 

include "subpage/footer.php";
  ?>
</body>
</html>

 