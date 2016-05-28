<?php
date_default_timezone_set("asia/singapore");
include_once ("../koneksi.php");

if(isset($_POST['id_kolektor'])){
    $id_kolektor = $_POST['id_kolektor'];
    $no_kontrak = $_POST['no_kontrak'];
    $bayar = $_POST['bayar'];
    $angusran = $_POST['angsuran'];
    $response = array("status"=>1);
    $kolektor = mysql_fetch_array(mysql_query("SELECT * FROM kolektor WHERE id_kolektor = '$id_kolektor'"));
    $customer = mysql_fetch_array(mysql_query("SELECT * FROM cst WHERE no_kontrak = '$no_kontrak'"));

    $pokok_hutang = $customer['pokok_hutang'];
    $telah_bayar = $customer['telah_bayar'];

    $laporan = "diinputkan ".$kolektor['nama'];
    $sisa_hutang = $pokok_hutang - ($telah_bayar+$bayar);
    $waktu = date("Y/m/d H:i:s");

    if($sisa_hutang<=0){
        $status = 2;
    }else{
        $status = 1;
    }
    $query = mysql_query("INSERT INTO laporan (no_kontrak,laporan,waktu,status,angsuran,id_kolektor) VALUES ('$no_kontrak', '$laporan', '$waktu', '$status', '$angusran', '$id_kolektor')");
    if($query){
        $telah_bayar = $telah_bayar+$bayar;
        if(!mysql_query("UPDATE cst SET telah_bayar='$telah_bayar' WHERE no_kontrak='$no_kontrak'")){
            $response['status'] = 0;
        }
    }else{
        $response['status'] = 0;
    }

    echo json_encode($response);
}

