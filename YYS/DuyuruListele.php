<?php
include("DatabaseCon.php");
    session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select duyuru_ID,duyuru_Baslik, duyuru_Metin, duyuru_Tarih from duyurular where duyuru_durum=1")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        //date format tr
        $date = date_create($value['duyuru_Tarih']);
        $value['duyuru_Tarih']=date_format($date, 'd/m/Y');

        $returnArray[$key]['duyuru_ID']=$value['duyuru_ID'];
        $returnArray[$key]['duyuru_Baslik']=$value['duyuru_Baslik'];
        $returnArray[$key]['duyuru_Metin']=$value['duyuru_Metin'];
        $returnArray[$key]['duyuru_Tarih']=$value['duyuru_Tarih'];

    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);

