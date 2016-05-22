<?php
include"koneksi.php";

mysql_query("update admin set nm_admin='$_POST[nama]',pass='$_POST[pass]' where id_admin='$_POST[id]'");
header("location:index.php?page=tampil_admin.php");
?>