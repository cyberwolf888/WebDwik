<?php
include"koneksi.php";
if(empty($_POST['id'])){
header("location:index.php?page=form_input_admin.php&&message=gagal&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]");
}else if(empty($_POST['nama'])){
header("location:index.php?page=form_input_admin.php&&message=gagal&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]");
}else if(empty($_POST['pass'])){
header("location:index.php?page=form_input_admin.php&&message=gagal&&id=$_POST[id]&&nama=$_POST[nama]&&pass=$_POST[pass]");
}else {
mysql_query("insert into admin values ('$_POST[id]','$_POST[nama]','$_POST[pass]')");
header("location:index.php?page=tampil_admin.php");
}?>