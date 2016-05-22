<?php
include"koneksi.php";

$sql=mysql_query("select * from admin where id_admin='$_POST[id]' and pass='$_POST[pass]'");
$cek=mysql_num_rows($sql);
$data=mysql_fetch_array($sql);

if($cek > 0){
	session_start();
	$_SESSION[id]=$data[0];
	header("location:index.php");	
}
else{
	header("location:form_login.php?message=gagal");
}
?>