<?php
include"koneksi.php";
$sql=mysql_query("select * from barang where no_plat='$_POST[plat]'");
$cek=mysql_num_rows($sql);

if($cek > 0){
	header("location:index.php?page=form_input_barang.php&&pesan=gagal&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}
else if(empty($_POST['plat'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['merk'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['type'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['mesin'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['rangka'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['tagihan'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else if(empty($_POST['cst'])){
	header("location:index.php?page=form_input_barang.php&&message=gagal&&plat=$_POST[plat]&&type=$_POST[type]&&mesin=$_POST[mesin]&&rangka=$_POST[rangka]&&tagihan=$_POST[tagihan]&&cst=$_POST[cst]&&merk=$_POST[merk]");
}else {

mysql_query("insert into barang values ('$_POST[plat]','$_POST[merk]','$_POST[type]','$_POST[mesin]','$_POST[rangka]','$_POST[tagihan]','$_POST[cst]')");
header("location:index.php?page=tampil_barang.php");
}?>