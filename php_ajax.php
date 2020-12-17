<?php
   // mảng các tên khóa học
session_start();
 date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
//$obj=new Db();
   
   //$y=$obj->select("SELECT * FROM `sanpham`");
    
   $q = $_REQUEST["q"];
   echo $q;
  if(isset($_Session['dssp'][$q]))
   	$_Session['dssp'][$q]+=1;
	else
		$_Session['dssp'][$q]=1;
//  echo $_Session['dssp'][$q];

  var_dump($_Session);
  // echo $hint === "" ? "Mời bạn nhập tên khóa học hợp lệ" : $hint;
?>