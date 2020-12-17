<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Db();
//$dansachsanphamngaytao1=$obj->select("SELECT * FROM `sanpham` ORDER BY `ngaytao` DESC LIMIT 0,4");
$today=date('YmdHis');
$danhsachkhuyenmai=$obj->select("SELECT * FROM `khuyenmaisp` where `ngaykt`>$today");

if(isset($_SESSION['thongbaodathang']))
$thongbaodathang=$_SESSION['thongbaodathang'];
else
$thongbaodathang="";
//if(isset($_SESSION['dssp']))
//$x=$_SESSION['dssp'];
//var_dump($_Session);
//var_dump($dssp);
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
 <div id="main" >
 	

<br>
<br>
<br>
<br>

<form action="xulydonhang.php" method="post" enctype="multipart/form-data">	
<table style="border:1px solid #ccc; width: 100% ; text-align:center;">
	

<?php   
	if(isset($_SESSION['dssp']))   

				foreach ($_SESSION['dssp'] as $key => $value) { 
				$key;
				$gia=$value['gia'];
				$soluongsp=$value['luong'];

				$sanpham=$obj->select("select * from `sanpham` where `masp`=$key  ");
?>
	<tr class="cart-item" data-price="<?php echo $gia ?>" id="<?php echo($key) ?>">
		<td>		<img style="width: 100px;height:150px;" src="admin/image/<?php echo $sanpham[0]['anhsp'];?>"></td>
		<td>		<?php echo $sanpham[0]['tensp'];?>												</td>
		<td>		<?php
					 	echo number_format($gia ,0 ,'.' ,'.').' Đ';
		?>														</td>
<td><p>Số lượng <select   name="<?php echo $sanpham[0]['masp']; ?>"  >
									
									<?php 
										for ($i=0; $i <11 ; $i++) { 
											
										
									?>
										<option <?php if($soluongsp==$i) echo "selected='selected'"; ?> value="<?php echo $i ?>"> <?php echo $i;
												

										?></option>
									<?php }?>
									</select>
									</p>	
								</td>
	</tr>
	
<?php }?>


	
</table>	<a></a>
<br>

<a> </a>
<a> </a>	

<div ><a style="font-size: 15px; font-weight: bold; color: red;">Thành tiền</a> <a id="thanhtien"><?php
$tong=0;
if(isset($_SESSION['dssp']))
foreach ($_SESSION['dssp'] as $key => $value) {
	$tong+=$value['gia']*$value['luong'];
}
echo number_format($tong ,0 ,'.' ,'.').' Đ';

?></a></div>
<div class="main">
    <div class="content">
    	 <div class="login_panel"  style="border: 0;">
        	
        	
        	<form action="xulydonhang.php" method="POST" >
							<p>Người nhận:<input type="text" id="tenkh" name="tenkh"  value="<?php if(isset($_SESSION['ten'])) echo $_SESSION['ten'];?>" /></p><br>
							<p>Địa chỉ:<input value="<?php if(isset($_SESSION['diachi'])) echo $_SESSION['diachi'];?>" type="text" id="diachi" name="diachi" />	</p><br>
						<p>Số điện thoại:<input type="text" value="<?php if(isset($_SESSION['sodienthoai'])) echo $_SESSION['sodienthoai'];?>" id="sodienthoai" name="sodienthoai" />
						</p>
								<p><?php//  var_dump($_SESSION); 
								?></p>						
								<br>
				<!--	<input class="button" type="submit" name="them" value="Đặt hàng" />-->
										
							<div class="clear"></div><!-- End .clear -->
					<div class="search"><div><button type="submit" name="them" class="grey">Đặt hàng</button></div></div>
						</form>

        	 </div>
    	 	<div><?php// var_dump($_SESSION); 


if(isset($_SESSION['thongbaodathang'])){
  echo $thongbaodathang;

unset($_SESSION['thongbaodathang']);}
 ?></div>
       <div class="clear"></div>
    </div>

 </div>

 <?php //var_dump($_SESSION); 


if(isset($_SESSION['thongbaodathang'])){
  echo $thongbaodathang;

unset($_SESSION['thongbaodathang']);}
 ?>






				

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
  <script>
  	const selectSoLuong = Array.from(document.querySelectorAll('select'));

  	function xuliSelect(e){
  		if(this.value==0){
  			document.querySelector(`tr[id="${this.name}"]`).innerHTML="";

  			
  		}
  		
  	
			var xmlhttp = new XMLHttpRequest();
  			xmlhttp.open("GET", "suagiohang.php?a="+this.name+"&b="+this.value, true);
            xmlhttp.send();




			var xmlhttp = new XMLHttpRequest();
               
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("thanhtien").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "thanhtien.php", true);
               xmlhttp.send();


  		
  	}

  	selectSoLuong.forEach(item=>{
  		item.addEventListener('change', xuliSelect);


  	})



  	function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }
            else 
            {
               var xmlhttp = new XMLHttpRequest();
               
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "timkiemajax.php?q=" + str, true);
               xmlhttp.send();
            }
         }

    function renderTotalPrice(e){
    	const items=Array.from(document.querySelectorAll('.cart-item'));
    	var totalPrice=0;
    	console.log(items);
    }

    window.addEventListener('load', renderTotalPrice);
  </script>
</body>
</html>

