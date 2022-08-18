<?php
include("DatabaseCon.php");
    session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select k_ID, k_Ad, k_Soyad, k_Mail, yetki_turu from kullanicilar where durum='1'")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        $returnArray[$key]['k_ID']=$value['k_ID'];
        $returnArray[$key]['k_Ad']=$value['k_Ad'];
        $returnArray[$key]['k_Soyad']=$value['k_Soyad'];
        $returnArray[$key]['k_Mail']=$value['k_Mail'];
        $returnArray[$key]['yetki_turu']=$value['yetki_turu'];
    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);

