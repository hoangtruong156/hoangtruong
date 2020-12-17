<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
if (!isset($_GET['timkiem'])) {
	header('Location: index.php');
}

$obj=new Db();
$obj2=new Sanpham();
$today=date('YmdHis');
$danhsachkhuyenmai=$obj->select("SELECT * FROM `khuyenmaisp` where `ngaykt`>$today");
$dansachsanphamngaytao1=$obj->select("SELECT * FROM `sanpham` ORDER BY `ngaytao` DESC LIMIT 0,4");
$timkiem=$_GET['timkiem'];

$dssanpham="";
if($timkiem=="3t")
	$dssanpham=$obj2->duoi3t();
 else if  ($timkiem=="6t") 
	$dssanpham=$obj2->duoi6t();
else if  ($timkiem=="10t")
	$dssanpham=$obj2->duoi10t();
else if ($timkiem=="15t")
	$dssanpham=$obj2->duoi15t();
else if($timkiem=="15tt") 
	$dssanpham=$obj2->tren15t();
else if($timkiem=="Apple")
	$dssanpham =$obj2->timtheomansxall(1);
else if($timkiem=="OPPO")
	$dssanpham =$obj2->timtheomansxall(3);
else if($timkiem=="VSMART")
	$dssanpham =$obj2->timtheomansxall(5);
else if($timkiem=="XIAOMI")
	$dssanpham =$obj2->timtheomansxall(4);
else if($timkiem=="HONOR")
	$dssanpham =$obj2->timtheomansxall(6);
else if($timkiem=="HUAWEI")
	$dssanpham =$obj2->timtheomansxall(8);
else if($timkiem=="REALME")
	$dssanpham =$obj2->timtheomansxall(7);
else if($timkiem=="SAMSUNG")
	$dssanpham =$obj2->timtheomansxall(2);






else if($timkiem=="Tìm kiếm sản phẩm")
	$dssanpham=$obj2->getAll();
else 
	
		$dssanpham=$obj2->timtheoten($timkiem);
		
	

	


?>

<!DOCTYPE HTML>
<html>
<?php		include"subpage/head.php";?>
<body>
  <div class="wrap">
	<div class="header">	
		<?php

		include"subpage/header_top.php";
		include"subpage/h_menu.php";
		include"subpage/header_bottom.php";				
			
			
		?>		
	</div>
	 <div class="clear"></div>
 <div class="main">
 	

<div class="section group">

<br>
	      	<?php
	      	
	      		foreach ($dssanpham as $value) {
	      			?>


				<div class="grid_1_of_4 images_1_of_4">
					 <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
					 <h2><?php echo $value['tensp']?></h2>
					 
					 <p><span style="font-size:8px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ'; ?></span><span class="price">
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
					  <div  class="button"><span><img src="images/cart.jpg" alt="" /><a  href="xulythemgiohang.php?masp=<?php echo $value['masp'];?>&gia=<?php echo $gia?>" class="cart-button">Thêm giỏ</a></span> </div>
				     <div class="button"><span><a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>" class="details">Chi tiết</a></span></div>
				</div>


	      			<?php
	      		}

	      	?>
				
				
			
			</div>


 </div>
</div>
   	<?php
   		include"subpage/footer.php";
   	?>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>