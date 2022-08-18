<?php
include("DatabaseCon.php");
    session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select ymk_ID,ymk_Ad,ymk_Kalori,ymk_Tur from yemekler where ymk_Durum='1'")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        $returnArray[$key]['ymk_ID']=$value['ymk_ID'];
        $returnArray[$key]['ymk_Ad']=$value['ymk_Ad'];
        $returnArray[$key]['ymk_Kalori']=$value['ymk_Kalori'];
        $returnArray[$key]['ymk_Tur']=$value['ymk_Tur'];
    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);


    //Silme İşlemi: Gelen ID ye göre verinin veritabanındaki  durumu=0. Artık Listelenmeyecek




