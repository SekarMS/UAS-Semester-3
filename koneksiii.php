<?php

$user="root";
$server="localhost";
$password="";
$database="uas_smt3";

$rumah=mysqli_connect ($server,$user,$password);
if($rumah){
	echo 'Terhubung';
	}else{
	echo 'Cek Lagi';
	}
$db=mysqli_select_db($rumah,$database);
if ($db){
	echo 'db berhasil terhubung';
	}else{
		echo 'cek lagi';
	}
?>