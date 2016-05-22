<?php
include"koneksi.php";
mysql_query("update barang set merk='$_POST[merk]', type='$_POST[type]',no_mesin='$_POST[mesin]',no_rangka='$_POST[rangka]',tagihan='$_POST[tagihan]', no_kontrak='$_POST[cst]' where no_plat='$_POST[plat]'");
header("location:index.php?page=tampil_barang.php");
?>