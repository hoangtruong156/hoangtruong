<?php


session_start();

$a=$_REQUEST("a");
$b=$_REQUEST("b");

$_SESSION['dssp']["$b"]=$a;







