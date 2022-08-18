<?php
include "DatabaseCon.php";
    session_start();
    global $db;


    if(isset($_POST['krl_ID'])){

        $krl_ID=$_POST['krl_ID'];
        $krl_Ad=$_POST['krl_Ad'];
        $krl_Soyad=$_POST['krl_Soyad'];
        $krl_Unvan=$_POST['krl_Unvan'];
        $krl_Tur=$_POST['krl_Tur'];

        if($krl_Ad!="" and $krl_Soyad!="" and $krl_Unvan!="" and $krl_Tur!=""){
            $sorgu=$db->prepare("Update kurul set krl_Ad=:krl_Ad, krl_Soyad=:krl_Soyad, krl_Unvan=:krl_Unvan, krl_Tur=:krl_Tur  where krl_ID=:krl_ID");
            $sorgu->execute([
                'krl_ID'=>$krl_ID,
                'krl_Ad'=>$krl_Ad,
                'krl_Soyad'=>$krl_Soyad,
                'krl_Unvan'=>$krl_Unvan,
                'krl_Tur'=>$krl_Tur
            ]);
            if($sorgu){
                $data="Değişiklikler kaydedildi.";
            }
            else{
                $data="Hata!";
            }
        }else{
            $data="Lütfen alanları doldurun.";
        }
        echo $data;
    }