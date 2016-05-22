<?php
include"koneksi.php";

mysql_query("delete from admin where id_admin='$_GET[id]'");
header("location:index.php?page=tampil_admin.php");
?>