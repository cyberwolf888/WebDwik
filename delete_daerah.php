<?php
include"koneksi.php";
mysql_query("delete from daerah where kd_daerah='$_GET[id]'");
header("location:index.php?page=tampil_daerah.php");
?>