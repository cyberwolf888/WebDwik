<?php
include ("../koneksi.php");

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $valid = false;
    $query = mysql_query("SELECT * FROM kolektor WHERE id_kolektor='$username' AND pass='$password'");
    $kolektor = mysql_fetch_array($query);
    if($kolektor){
        $valid = true;
    }

    if($valid){
        $return = array("status"=>1,"id_kolektor"=>$kolektor["id_kolektor"],"nama_kolektor"=>$kolektor["nama"]);
        echo json_encode($return);
    }else{
        $return = array("status"=>0);
        echo json_encode($return);
    }
}