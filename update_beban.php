<?php
include"koneksi.php";
mysql_query("update beban set id_kolektor='$_POST[kolektor]', kd_daerah='$_POST[daerah]' where no_beban='$_POST[kd_beban]'");
header("location:index.php?page=tampil_beban.php");
?>