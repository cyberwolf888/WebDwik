<?php
include ("../koneksi.php");

if(isset($_POST['no_kontrak'])){
    $no_kontrak = $_POST['no_kontrak'];
    $label_status = array(""=>"Belum bayar","1"=>"Bayar","2"=>"Lunas");

    $detail = mysql_fetch_array(mysql_query("SELECT c.*,l.status AS sts_laporan FROM cst AS c LEFT JOIN laporan AS l ON l.no_kontrak = c.no_kontrak WHERE c.no_kontrak = '$no_kontrak'"));
    $detail["label_status"] = $label_status[$detail["sts_laporan"]];
    echo json_encode($detail);
}
