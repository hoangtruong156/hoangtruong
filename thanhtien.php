<?php 
session_start();

$tong=0;
foreach ($_SESSION['dssp'] as $key => $value) {
	$tong+=$value['gia']*$value['luong'];
}

echo number_format($tong ,0 ,'.' ,'.').' Đ';
