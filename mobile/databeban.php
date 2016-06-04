<?php
include ("../koneksi.php");

if(isset($_POST['id_kolektor'])){
    $id_kolektor = $_POST['id_kolektor'];
    $label_status = array(""=>"Belum bayar","1"=>"Bayar","2"=>"Lunas");
    $kd_daerah = array();
    $query = mysql_query("SELECT * FROM beban WHERE id_kolektor = '$id_kolektor'");
    while($row = mysql_fetch_array($query)){
        array_push($kd_daerah, $row['kd_daerah']);
    }

    if(count($kd_daerah)>0){
        $customer = array();
        $sql = "SELECT c.*,l.status AS sts_laporan FROM cst AS c LEFT JOIN laporan AS l ON l.id_cst = c.id_cst WHERE ";
        foreach ($kd_daerah as $data){
            $sql.=" c.kd_daerah='$data' OR";
        }
        $sql = substr($sql,0,-2);
        $query = mysql_query($sql);
        $no = 0;
        while ($cst = mysql_fetch_array($query)){
            $customer[$no] = $cst;
            $customer[$no]["label_status"] = $label_status[$cst["sts_laporan"]];
            $no++;
        }
        header('Content-Type: application/json');
        echo json_encode(array("databeban"=>$customer));
    }else{
        //Jika tidak ada data beban
    }
}