<?php
include"koneksi.php";
if(empty($_POST['id'])){
	header("location:index.php?page=form_input_kolektor.php&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]&&message=gagal");
}else if(empty($_POST['nama'])){
	header("location:index.php?page=form_input_kolektor.php&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]&&message=gagal");
}else if(empty($_POST['pass'])){
	header("location:index.php?page=form_input_kolektor.php&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]&&message=gagal");
}else{
mysql_query("insert into kolektor (id_kolektor,nama,pass) values ('$_POST[id]','$_POST[nama]','$_POST[pass]')");
header("location:index.php?page=tampil_kolektor.php");
}?>