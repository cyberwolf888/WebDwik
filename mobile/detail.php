<?php
include ("../koneksi.php");

if(isset($_POST['id_cst'])){
    $id_cst = $_POST['id_cst'];
    $label_status = array(""=>"Belum bayar","1"=>"Bayar","2"=>"Lunas");

    $detail = mysql_fetch_array(mysql_query("SELECT c.*,l.status AS sts_laporan FROM cst AS c LEFT JOIN laporan AS l ON l.id_cst = c.id_cst WHERE c.id_cst = '$id_cst'"));
    $detail["label_status"] = $label_status[$detail["sts_laporan"]];
    echo json_encode($detail);
}
