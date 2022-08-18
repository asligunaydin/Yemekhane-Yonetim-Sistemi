<?php
include ("DatabaseCon.php");
    session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select onr_ID, tarih,konu,ileti,ad,soyad,mail from oneriler where durum='1' order by onr_ID desc")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        //date format tr
        $date = date_create($value['tarih']);
        $value['tarih']=date_format($date, 'd/m/Y');

        $returnArray[$key]['onr_ID']=$value['onr_ID'];
        $returnArray[$key]['tarih']=$value['tarih'];
        $returnArray[$key]['konu']=$value['konu'];
        $returnArray[$key]['ileti']=$value['ileti'];
        $returnArray[$key]['ad']=$value['ad'];
        $returnArray[$key]['soyad']=$value['soyad'];
        $returnArray[$key]['mail']=$value['mail'];
    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);