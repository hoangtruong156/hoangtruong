<?php
session_start();
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$obj=new Giohang();

if(!isset($_SESSION['id']))
{
$masp = $_REQUEST["masp"];
$gia = $_REQUEST["gia"];


if(isset($_SESSION['makh']))
{
	
	$giohang=$obj->timgiohang($_SESSION['makh']);
	if($giohang=="")
		{
			$obj->taogiohang($_SESSION['makh']);
			$giohang=$obj->giohangmoitao();

		}
	$_SESSION['giohang']=$giohang[0]['magiohang'];
	
}


$_SESSION['dssp']["$masp"]['gia']=$gia;
if(!isset($_SESSION['dssp']["$masp"]['luong']))
{

$_SESSION['dssp']["$masp"]['luong']=1;

if(isset($_SESSION['makh']))
$obj->taochitietgiohang($giohang[0]['magiohang'],$masp,1);

}
else
{

$_SESSION['dssp']["$masp"]['luong']+=1;
if(isset($_SESSION['makh']))
	$obj->suachitietgiohang($giohang[0]['magiohang'],$masp,$_SESSION['dssp']["$masp"]['luong']);

}







}


if (isset($_REQUEST['vitri'])) {
	$vitri=$_REQUEST['vitri'];
	header("Location: $vitri");
}
else
 header('Location: index.php');

