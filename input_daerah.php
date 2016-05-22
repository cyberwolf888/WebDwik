<?php
include "koneksi.php";
if($_POST['kecamatan']==""){
	header("location:index.php?page=form_input_daerah.php&&message=gagal&&kec=$_POST[kecamatan]&&desa=$_POST[desa]&&prov=$_POST[prov]");
}else if($_POST['desa']==""){
	header("location:index.php?page=form_input_daerah.php&&message=gagal&&kec=$_POST[kecamatan]&&desa=$_POST[desa]&&prov=$_POST[prov]");
}else if($_POST['prov']==""){
	header("location:index.php?page=form_input_daerah.php&&message=gagal&&kec=$_POST[kecamatan]&&desa=$_POST[desa]&&prov=$_POST[prov]");
}else{
mysql_query("insert into daerah (kecamatan,desa,prov) values ('$_POST[kecamatan]','$_POST[desa]','$_POST[prov]')");
header("location:index.php?page=tampil_daerah.php");
}
?>