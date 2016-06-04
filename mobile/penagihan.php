<?php
date_default_timezone_set("asia/singapore");
include_once ("../koneksi.php");

if(isset($_POST['id_kolektor'])){
    $id_kolektor = $_POST['id_kolektor'];
    $id_cst = $_POST['id_cst'];
    $bayar = $_POST['bayar'];
    $angusran = $_POST['angsuran'];
    $denda = $_POST['denda'];
    $response = array("status"=>1);
    $kolektor = mysql_fetch_array(mysql_query("SELECT * FROM kolektor WHERE id_kolektor = '$id_kolektor'"));
    $customer = mysql_fetch_array(mysql_query("SELECT * FROM cst WHERE id_cst = '$id_cst'"));

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
    $query = mysql_query("INSERT INTO laporan (id_cst,laporan,waktu,status,angsuran,id_kolektor,denda) VALUES ('$id_cst', '$laporan', '$waktu', '$status', '$angusran', '$id_kolektor', '$denda')");
    if($query){
        $telah_bayar = $telah_bayar+$bayar;
        if(!mysql_query("UPDATE cst SET telah_bayar='$telah_bayar' WHERE id_cst='$id_cst'")){
            $response['status'] = 0;
        }
    }else{
        $response['status'] = 0;
    }

    echo json_encode($response);
}

