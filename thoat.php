<?php
session_start();
if (isset($_SESSION['makh'])) {


	session_destroy();

	 header('Location: index.php');
}
header('Location: index.php');