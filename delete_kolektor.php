<?php
include"koneksi.php";
mysql_query("delete from kolektor where id_kolektor='$_GET[id]'");
header("location:index.php?page=tampil_kolektor.php");
?>