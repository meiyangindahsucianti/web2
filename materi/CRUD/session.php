<?php 
include'koneksi.php';
session_start();
$user_check =$_SESSION['username'];
$mysql_query="select * from user where username= '$user_check'";

$row =mysql_fetch_array(mysql_query($mysql_query));
$login_session_name=$row['nama'];

if(!isset($SESSION['username'])){
	header("location:halaman_awal.php");
}
?>