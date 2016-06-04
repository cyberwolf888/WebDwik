<?php
include"koneksi.php";
mysql_query("delete from cst where id_cst='$_GET[id]'");
header("location:index.php?page=tampil_cst2.php");
?>