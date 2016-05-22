<?php
include"koneksi.php";
mysql_query("update daerah set kecamatan='$_POST[kecamatan]', desa='$_POST[desa]',prov='$_POST[prov]' where kd_daerah='$_POST[kd_daerah]'");
header("location:index.php?page=tampil_daerah.php");
?>