<?php
include "DatabaseCon.php";
    session_start();
    global $db;


    if(isset($_POST['k_id'])){


        $k_id=$_POST['k_id'];
        $k_ad=$_POST['k_ad'];
        $k_soyad=$_POST['k_soyad'];
        $k_mail=$_POST['k_mail'];
        $yetki_turu=$_POST['yetki_turu'];

        if($k_id!=""){

            $sorgu=$db->prepare("Update kullanicilar set k_Ad=:k_Ad, k_Soyad=:k_Soyad, k_Mail=:k_Mail, yetki_turu=:yetki_turu  where k_ID=:k_ID");
            $sorgu->execute([
                'k_ID'=>$k_id,
                'k_Ad'=>$k_ad,
                'k_Soyad'=>$k_soyad,
                'k_Mail'=>$k_mail,
                'yetki_turu'=>$yetki_turu
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


