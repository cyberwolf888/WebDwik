<?php
include"koneksi.php";
date_default_timezone_set("asia/singapore");
$waktu=date("Y/m/d/ H:i:s");
$laporan="diinputkan admin";
$id="admin";
mysql_query("insert into laporan (no_kontrak,laporan,waktu,status,id_kolektor) values ('$_POST[cst]','$laporan','$waktu','$_POST[status]','$id')");
header("location:index.php?page=home.php");
?>