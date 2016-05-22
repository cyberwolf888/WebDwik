<?php
include"koneksi.php";
mysql_query("UPDATE kolektor SET nama='$_POST[nama]', pass='$_POST[pass]' where id_kolektor='$_POST[id]'");
header("location:index.php?page=tampil_kolektor.php");
?>