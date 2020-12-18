<?php
session_start();
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Db();
if (isset($_SESSION['id'])||isset($_SESSION['makh'])) {
	 header('Location: index.php');
}
$them='';
$them2='';
$thongbao="";
$thongbaodk="";

if (isset($_POST['dangnhap'])) {
		
	//	var_dump($_POST);
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);

		if ($username == "" || $password ==""||$username=="Tài khoản"||$password=="Mật khẩu") {

			$thongbao= "  Tài khoản và mật khẩu bạn không được để trống!";
				
		}else{
						
						$rows=$obj->select("select * from khachhang where tendangnhap = '$username' and matkhau = '$password' ");
						//var_dump($rows);		
			if (count($rows)==0) {
				$thongbao="  Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				//var_dump($rows);
				$_SESSION['ten'] = $rows[0]['ten'];
				$_SESSION['makh']=$rows[0]['makh'];
				$_SESSION['sodienthoai']=$rows[0]['sodienthoai'];
				$_SESSION['diachi']=$rows[0]['diachi'];
				//var_dump($_SESSION);
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
}


if (isset($_POST['dangky'])) {
	$thongbaodk="";
	//var_dump($_POST);

	$taikhoan = $_POST["taikhoan"];//Lấy gia tri taikhoan trong post gan qua bien tai khoan
	$matkhau = $_POST["matkhau"];
	$hoten = $_POST["hoten"];
	$diachi = $_POST["diachi"];
	$sdt = $_POST["sdt"];
	$email = $_POST["email"];

	echo $taikhoan=strip_tags(addslashes($taikhoan));
echo	$matkhau=strip_tags(addslashes($matkhau));
echo	$hoten=strip_tags(addslashes($hoten));
echo	$diachi=strip_tags(addslashes($diachi));
echo	$sdt=strip_tags(addslashes($sdt));
	echo $email=strip_tags(addslashes($email));

	if ($taikhoan==""||$matkhau==""||$hoten==""||$diachi==""||$sdt==""||$email==""||$taikhoan=="Tài khoản"||$matkhau=="Mật khẩu"||$diachi=="Địa chỉ"||$sdt=="Số điện thoại"||$hoten=="Họ và tên") 
	{

			$thongbaodk="  Đăng ký thất bại!";
				
		}else{
						
						$rows=$obj->select("select * from khachhang where tendangnhap = '$taikhoan'");
						//var_dump($rows);		
			if (count($rows)!=0) {
				$thongbaodk="  Tên đăng nhập đã tồn tại!";
			}else{

					if($email!=''&&$email!="E-Mail")
						{$them.="`email`,";
							$them2="'$email'".",";
										}

echo "INSERT INTO `khachhang`( $them `tendangnhap`, `matkhau`, `diachi`, `sodienthoai`, `ten`) VALUES ($them2 $taikhoan,$matkhau,$diachi,$sdt,$hoten)";
					$obj->insert("INSERT INTO `khachhang`( $them `tendangnhap`, `matkhau`, `diachi`, `sodienthoai`, `ten`) VALUES ($them2 '$taikhoan','$matkhau','$diachi','$sdt','$hoten')");

					$x=$obj->SELECT("SELECT * FROM `khachhang` ORDER BY `khachhang`.`ngaydk` DESC LIMIT 1");


				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				//var_dump($rows);
				$_SESSION['ten'] = $x[0]['ten'];
				$_SESSION['makh']=$x[0]['makh'];
				$_SESSION['sodienthoai']=$x[0]['sodienthoai'];
				$_SESSION['diachi']=$x[0]['diachi'];
				//var_dump($_SESSION);
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}

}
	



?>