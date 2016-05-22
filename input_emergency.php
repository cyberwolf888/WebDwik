<?php
include"koneksi.php";
if(empty($_POST['cst'])){
	header("location:index.php?page=form_input_emergency.php&&cst=$_POST[cst]&&komen=$_POST[komen]&&ibu=$_POST[ibu]&&message=gagal");
}else if(empty($_POST['komen'])){
	header("location:index.php?page=form_input_emergency.php&&cst=$_POST[cst]&&komen=$_POST[komen]&&ibu=$_POST[ibu]&&message=gagal");
}else if(empty($_POST['ibu'])){
	header("location:index.php?page=form_input_emergency.php&&cst=$_POST[cst]&&komen=$_POST[komen]&&ibu=$_POST[ibu]&&message=gagal");
}else {
mysql_query("INSERT INTO emergency(no_kontrak, komen, nm_ibu) VALUES ('$_POST[cst]','$_POST[komen]','$_POST[ibu]')");
header("location:index.php?page=tampil_emergency.php");
}?>