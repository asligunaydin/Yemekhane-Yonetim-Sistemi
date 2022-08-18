<?php

include("DatabaseCon.php");
    session_start();
    global $db;

    if(isset($_POST['y_id'])){

        $ymk_id=$_POST['y_id'];
        $ymk_Ad=$_POST['y_adi'];
        $ymk_Kalori=$_POST['y_kalori'];
        $ymk_Tur=$_POST['y_tur'];

        if($ymk_Ad != "" and $ymk_Kalori != "" and $ymk_Tur!= "" ){

            $sorgu=$db->prepare("Update yemekler set ymk_Ad=:ymk_Ad, ymk_Kalori=:ymk_Kalori, ymk_Tur=:ymk_Tur where ymk_ID=:ymk_id");
            $sorgu->execute([
                'ymk_id'=>$ymk_id,
                'ymk_Ad'=>$ymk_Ad,
                'ymk_Kalori'=>$ymk_Kalori,
                'ymk_Tur'=>$ymk_Tur
            ]);
            if($sorgu){
                $data="Değişiklikler kaydedildi.";
            }
            else{
                $data="Hata!";
            }
        }
        else{
            $data="Lütfen tüm alanları doldurun.";
        }
        echo $data;
    }
