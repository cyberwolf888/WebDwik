<?php
include"koneksi.php";
date_default_timezone_set("asia/singapore");
$bulan=date("m");
$tahun=date("Y");
if(empty($_POST['kolektor'])){
	header("location:index.php?page=form_input_beban.php&&kolektor=$_POST[kolektor]&&daerah=$_POST[daerah]&&message=gagal");
}else if(empty($_POST['daerah'])){
	header("location:index.php?page=form_input_beban.php&&kolektor=$_POST[kolektor]&&daerah=$_POST[daerah]&&message=gagal");
}else {
mysql_query("insert into beban (id_kolektor,kd_daerah,bulan,tahun) values ('$_POST[kolektor]','$_POST[daerah]','$bulan','$tahun')");
header("location:index.php?page=tampil_beban.php");
}?>