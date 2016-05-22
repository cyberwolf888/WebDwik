<?php
include"koneksi.php";
mysql_query("delete from emergency where kd_emergency='$_GET[id]'");
header("location:index.php?page=tampil_emergency.php");
?>