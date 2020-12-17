<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Db();
$dansachsanphamngaytao1=$obj->select("SELECT * FROM `sanpham` ORDER BY `ngaytao` DESC LIMIT 0,12");
$dansachsanphamnvsmart=$obj->select("SELECT * FROM `sanpham` where mansx='5' ORDER BY `ngaytao` LIMIT 0,4");
$dansachsanphamnsamsung=$obj->select("SELECT * FROM `sanpham` where mansx='2' ORDER BY `ngaytao` LIMIT 0,4");
$dansachsanphamnapple=$obj->select("SELECT * FROM `sanpham` where mansx='1' ORDER BY `ngaytao` LIMIT 0,4");
$today=date('YmdHis');
$danhsachkhuyenmai=$obj->select("SELECT * FROM `khuyenmaisp` where `ngaykt`>$today");


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
 	<?php

 		include"subpage/main.php";		
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
</body>
</html>

