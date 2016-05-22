<?php
include"koneksi.php";
mysql_query("delete from beban where no_beban = '$_GET[id]'");
header("location:index.php?page=tampil_beban.php");
?>