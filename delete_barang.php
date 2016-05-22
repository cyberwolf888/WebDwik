<?php
include"koneksi.php";
mysql_query("delete from barang where no_plat='$_GET[id]'");
header("location:index.php?page=tampil_barang.php");
?>