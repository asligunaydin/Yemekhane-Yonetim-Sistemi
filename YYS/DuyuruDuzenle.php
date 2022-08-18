<?php
include ("DatabaseCon.php");
    session_start();
    global $db;


    if(isset($_POST)){
        $duyuru_ID=$_POST['duyuru_id'];
        $duyuru_Baslik=$_POST['duyuru_baslik'];

        $date = date_create($_POST['duyuru_Tarih']);
        $duyuru_Tarih=date_format($date, 'Y-m-d');

        $duyuru_Metin=$_POST['duyuru_metin'];


        $sorgu=$db->prepare("Update duyurular set duyuru_Baslik=:duyuru_Baslik, duyuru_Tarih=:duyuru_Tarih, duyuru_Metin=:duyuru_Metin where duyuru_ID=:duyuru_ID");
        $sorgu->execute([
            'duyuru_ID'=>$duyuru_ID,
           'duyuru_Baslik'=>$duyuru_Baslik,
            'duyuru_Tarih'=>$duyuru_Tarih,
            'duyuru_Metin'=>$duyuru_Metin
        ]);

        if($sorgu){
            $data="Değişiklikler kaydedildi.";
        }else{
            $data="Hata!";
        }

    }else{
        $data="Lütfen alanları doldurun.";
    }
    echo json_encode($data);

