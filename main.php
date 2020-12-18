
<pre> </pre>
<div class="main">	 
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>HÀNG HOT ĐÃ VỀ</h3>
    		</div>
    		
    		<div class="clear"></div>
    	</div>



	      <div class="section group">

	      	<?php
	      		foreach ($dansachsanphamngaytao1 as$value) {
	      			?>


				<div class="grid_1_of_4 images_1_of_4">
					 <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
					 <h2><?php echo $value['tensp']?></h2>
					 
					 <p><span style="font-size:15px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ';?></span><span class="price">
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
			<div class="content_bottom">
    		<div class="heading">
    		<h3>ĐIỆN THOẠI VSMART</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				
				<?php
	      		foreach ($dansachsanphamnvsmart as$value) {
	      			?>


				<div class="grid_1_of_4 images_1_of_4">
					 <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
					 <h2><?php echo $value['tensp']?></h2>
					 
					 <p ><span style="font-size:8px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ';?></span><span class="price">
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
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="xulythemgiohang.php?masp=<?php echo $value['masp'];?>&gia=<?php echo $gia?>" class="cart-button">Thêm giỏ</a></span> </div>
				     <div class="button"><span><a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>" class="details">Chi tiết</a></span></div>
				</div>


	      			<?php
	      		}

	      	?>
			</div>

			<div class="content_bottom">
    		<div class="heading">
    		<h3>ĐIỆN THOẠI SAMSUNG</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

<div class="section group">
				
				<?php
	      		foreach ($dansachsanphamnsamsung as$value) {
	      			?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
					 <h2><?php echo $value['tensp']?></h2>
					 
					 <p ><span style="font-size:8px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ';?></span><span class="price">
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
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="xulythemgiohang.php?masp=<?php echo $value['masp'];?>&gia=<?php echo $gia?>" class="cart-button">Thêm giỏ</a></span> </div>
				     <div class="button"><span><a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>" class="details">Chi tiết</a></span></div>
				</div>


	      			<?php
	      		}

	      	?>
			</div>



<div class="content_bottom">
    		<div class="heading">
    		<h3>ĐIỆN THOẠI APPLE</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

<div class="section group">
				<?php
	      		foreach ($dansachsanphamnapple as$value) {
	      			?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>"><img style="width:150px;height:200px;" src="admin/image/<?php echo $value['anhsp']?>" alt="" /></a>
					 <h2><?php echo $value['tensp']?></h2>
					 
					 <p ><span style="font-size:8px;" class="strike"><?php echo number_format($value["giasp"] ,0 ,'.' ,'.').' Đ';?></span><span class="price">
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
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="xulythemgiohang.php?masp=<?php echo $value['masp'];?>&gia=<?php echo $gia?>" class="cart-button">Thêm giỏ</a></span> </div>
				     <div class="button"><span><a href="sanpham.php?<?php echo "masp=".$value['masp'] ?>" class="details">Chi tiết</a></span></div>
				</div>


	      			<?php
	      		}

	      	?>
			
</div>

    </div>

 </div>