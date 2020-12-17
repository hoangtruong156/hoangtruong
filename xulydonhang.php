<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Giohang();
//var_dump($_POST);
//var_dump($_SESSION);

$_SESSION['thongbaodathang']="";
if(empty($_SESSION['dssp']))
	$_SESSION['thongbaodathang'].="Phải có sản phẩm trong giỏ hàng.</br>";
$tenkh=$_POST['tenkh'];
$diachi=$_POST['diachi'];
$sodienthoai=$_POST['sodienthoai'];

$tenkh=trim(preg_replace('/[\s]+/',' ',$tenkh));
$diachi=trim(preg_replace('/[\s]+/',' ',$diachi));
$sodienthoai=trim(preg_replace('/[\s]+/',' ',$sodienthoai));



$pattern = '/[0-9]/';
$subject = "$sodienthoai";






if(isset($_POST['them']))
	{
		
		if($tenkh=="")		
		$_SESSION['thongbaodathang'].="Tên khách hàng không được để trống.</br>";	
		if($diachi=="")	
		$_SESSION['thongbaodathang'].="Địa chỉ không được để trống.</br>";
		if(!preg_match($pattern, $subject)||strlen($subject)!=10)	
		$_SESSION['thongbaodathang'].="Số điện thoại không hợp lệ.</br>";







		

	}









if(isset($_POST['them'])&&$tenkh!=""&&$diachi!=""&&preg_match($pattern, $subject)&&strlen($subject)==10&&isset($_SESSION['dssp']))
{


$tongsl=0;
$dssp=$_SESSION['dssp'];
foreach ($dssp as $key => $value) {


	if(isset($_POST[$key]))
	{
	$l=$_POST[$key];//lấy số lượng sản phẩm theo mã san phẩm
	$tongsl+=$l;	


}	


}



if($tongsl>0)
{
if (isset($_SESSION['makh'])) {
	$makh=','.$_SESSION['makh'];
	$kh=",makh";
}
else
{$makh="";$kh="";
}
$tenkh=$_POST['tenkh'];
$diachikh=$_POST['diachi'];
$sodienthoai=$_POST['sodienthoai'];
$obj->INSERT("INSERT INTO `donhang`(`math`, `tenkh`, `diachikh`, `sdtkh` $kh) VALUES (1,'$tenkh','$diachikh','$sodienthoai'$makh)");

$x=$obj->SELECT("SELECT * FROM `donhang` ORDER BY `donhang`.`ngaydh` DESC LIMIT 1");
$madh=$x[0]['madh'];



$dssp=$_SESSION['dssp'];
foreach ($dssp as $key => $value) {
	$gia=$value['gia'];
	$l=$_POST[$key];//lấy số lượng sản phẩm theo mã san phẩm
	if($l==0)
		continue;
	else
	$obj->INSERT("INSERT INTO `chitietdh`( `madh`, `masp`, `giasp`, `soluong`) VALUES ($madh,$key,$gia,$l)");
}
$_SESSION['thongbaodathang'].="Đặt hàng thành công.";

if(isset($_SESSION['makh']))
foreach ($_SESSION['dssp'] as $key => $value) {
	$obj->xoachitietgiohang($_SESSION['giohang'],$key);
}

	unset($_SESSION['dssp']);
	 header('Location: index.php');

}




}
header('Location: quanlygiohang.php');