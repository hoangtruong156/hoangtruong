<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");

$obj=new Giohang();
$a=$_GET['a'];
$b=$_GET['b'];



$_SESSION['dssp'][$a]['luong']=$b;
if(isset($_SESSION['makh']))
	$obj->suachitietgiohang($_SESSION['giohang'],$a,$b);

if($_SESSION['dssp'][$a]['luong']==0)
{
	

	unset($_SESSION['dssp'][$a]);
	
	if(isset($_SESSION['makh']))
	$obj->xoachitietgiohang($_SESSION['giohang'],$a);
}