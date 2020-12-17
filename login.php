<?php
session_start();
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Giohang();
if (isset($_SESSION['id'])||isset($_SESSION['makh'])) {
	 header('Location: index.php');
}
$them='';
$them2='';
$thongbao="";
$thongbaodk="";
$_SESSION['giohang']="";
if (isset($_POST['dangnhap'])) 
{
		
		//var_dump($_POST);
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);

		if ($username == "" || $password ==""||$username=="Tài khoản"||$password=="Mật khẩu") 
		{

			$thongbao= "  Tài khoản và mật khẩu bạn không được để trống!";
				
		}
		else{
						
			$rows=$obj->select("select * from khachhang where tendangnhap = '$username' and matkhau = '$password' ");
			if (count($rows)==0) 
			{
				$thongbao="  Tên đăng nhập hoặc mật khẩu không đúng !";
			}
			else
			{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				//var_dump($rows);
				$_SESSION['ten'] = $rows[0]['ten'];
				$_SESSION['makh']=$rows[0]['makh'];
				$_SESSION['sodienthoai']=$rows[0]['sodienthoai'];
				$_SESSION['diachi']=$rows[0]['diachi'];

				unset($_SESSION['dssp']);
				unset($_SESSION['giohang']);
				$giohang=$obj->timgiohang($rows[0]['makh']);
				//var_dump($giohang);
				if(empty($giohang))
				{
					$obj->taogiohang($rows[0]['makh']);
					$giohang=$obj->timgiohang($rows[0]['makh']);
					$_SESSION['giohang']=$giohang[0]['magiohang'];
				}
				


					
				$_SESSION['giohang']=$giohang[0]['magiohang'];
				$chitietgiohang=$obj->timchitietgiohang($_SESSION['giohang']);
				
				foreach ( $chitietgiohang as $key => $value) {
					$_SESSION['dssp'][$value['masp']]['luong']=$value['soluong'];
					$mssp=$value['masp'];
					$gia=$obj->select("select * from sanpham where masp=$mssp");
					$gia=$gia[0]['giasp'];
					$_SESSION['dssp'][$value['masp']]['gia']=$gia;
				}


			
				//var_dump($_SESSION);
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
}
if (isset($_POST['dangky'])) 
{
	$thongbaodk="";
	//var_dump($_POST);

	$taikhoan = $_POST["taikhoan"];//Lấy gia tri taikhoan trong post gan qua bien tai khoan
	$matkhau = $_POST["matkhau"];
	$hoten = $_POST["hoten"];
	$diachi = $_POST["diachi"];
	$sdt = $_POST["sdt"];
	$email = $_POST["email"];

//echo 	$taikhoan=strip_tags(addslashes($taikhoan));
//echo	$matkhau=strip_tags(addslashes($matkhau));
//echo	$hoten=strip_tags(addslashes($hoten));
//echo	$diachi=strip_tags(addslashes($diachi));
//echo	$sdt=strip_tags(addslashes($sdt));
//echo 	$email=strip_tags(addslashes($email));

	if ($taikhoan==""||$matkhau==""||$hoten==""||$diachi==""||$sdt==""||$email==""||$taikhoan=="Tài khoản"||$matkhau=="Mật khẩu"||$diachi=="Địa chỉ"||$sdt=="Số điện thoại"||$hoten=="Họ và tên") 
	{

			$thongbaodk="  Đăng ký thất bại!";
				
	}
	else
	{
						
		$rows=$obj->select("select * from khachhang where tendangnhap = '$taikhoan'");
						//var_dump($rows);		
		if (count($rows)!=0) 
		{
				$thongbaodk="  Tên đăng nhập đã tồn tại!";
			
		}
		else
		{

		if($email!=''&&$email!="E-Mail")
			{
				$them.="`email`,";
				$them2="'$email'".",";
			}
echo "INSERT INTO `khachhang`( $them `tendangnhap`, `matkhau`, `diachi`, `sodienthoai`, `ten`) VALUES ($them2 $taikhoan,$matkhau,$diachi,$sdt,$hoten)";
					$obj->insert("INSERT INTO `khachhang`( $them `tendangnhap`, `matkhau`, `diachi`, `sodienthoai`, `ten`) VALUES ($them2 '$taikhoan','$matkhau','$diachi','$sdt','$hoten')");

					$x=$obj->SELECT("SELECT * FROM `khachhang` ORDER BY `khachhang`.`ngaydk` DESC LIMIT 1");

				unset($_SESSION['dssp']);
				unset($_SESSION['giohang']);
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				//var_dump($rows);
				$_SESSION['ten'] = $x[0]['ten'];
				$_SESSION['makh']=$x[0]['makh'];
				$_SESSION['sodienthoai']=$x[0]['sodienthoai'];
				$_SESSION['diachi']=$x[0]['diachi'];
				$obj->taogiohang($_SESSION['makh']);
				$giohang=$obj->giohangmoitao($_SESSION['makh']);
				$_SESSION['giohang']=$giohang[0]['magiohang'];
				//var_dump($_SESSION);
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển trang web tới một trang gọi là index.php
                header('Location: index.php');
		}
	}
}
	



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
 <br>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	
        	<p>Đăng Nhập</p>
        	<form action="login.php" method="post" id="member">
                	<input name="username" type="text" value="Tài khoản" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tài khoản';}">
                    <input name="password" type="password" value="Mật khẩu" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}">
                 
                <!-- <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>-->
                    <div class="buttons"><div><button type="submit" class="grey" name="dangnhap">Đăng nhập</button></div><br><a style="color: red;font-size: 15px;"><?php echo $thongbao==""?"":$thongbao;?> </a></div>
                   </form> </div>
    	<div class="register_account">
    		<h3>Đăng ký</h3>
    		<form action="login.php" method="post" id="member"  >
		   			 <table>
		   				<tbody><tr>
		   			<td>
		   				<div>
		   					<input name="taikhoan" type="text" value="Tài khoản" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tài khoản';}" >
		   				</div>
		   				<div>
		    				<input name="matkhau" type="text" value="Mật khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}">
		    			</div>
		    			<div>
		    				<input name="hoten" type="text" value="Họ và tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ và tên';}">
		    			</div>
		    			<div>
		          			<input name="diachi" type="text" value="Địa chỉ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}">
		          		</div>
		          		<div>
		          			<input name="sdt" type="text" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}">
		          		</div>
		    			<div>
		    				<input name="email" type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}">
		    			</div>
		    		
		    			
		    		</td>
		    			
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button type="submit" name="dangky" class="grey">ĐĂNG KÝ</button></div></div>


		<!--    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>-->
		    <div class="clear"></div>
		    <br><a style="color: red;font-size: 15px;"><?php echo $thongbaodk==""?"":$thongbaodk;?> </a>
		    </form>
    	</div>  	
       <div class="clear"></div>
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

