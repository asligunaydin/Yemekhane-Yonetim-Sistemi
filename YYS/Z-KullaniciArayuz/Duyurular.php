<?php
include "DatabaseCon2.php";

    global $db;
    $returnDuyuru=[];

    try {
    $sorgu=$db->prepare("Select * from duyurular where duyuru_durum='1' and MONTH(duyuru_Tarih) = MONTH(CURDATE()) order by `duyuru_Tarih`");
    $sorgu->execute();
    foreach ($sorgu as $key=>$value){

        //date format tr
        $date = date_create($value['duyuru_Tarih']);
        $value['duyuru_Tarih']=date_format($date, 'd/m/Y');

        $returnDuyuru[$key]['duyuru_Tarih']=$value['duyuru_Tarih'];
        $returnDuyuru[$key]['duyuru_Baslik']=$value['duyuru_Baslik'];
        $returnDuyuru[$key]['duyuru_Metin']=$value['duyuru_Metin'];


    }
    $say = $sorgu->rowCount();

    }catch (Exception $exception){
    }


