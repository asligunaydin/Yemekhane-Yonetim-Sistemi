<?php

include("DatabaseCon2.php");

    global $db;
    if(isset($_POST)){
        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];
        $mail=$_POST['mail'];
        $konu=$_POST['konu'];
        $ileti=$_POST['ileti'];
        $tarih=date('Y.m.d');

        if($ad !=" " and $soyad !=" " and $mail!=" " and $konu!=" " and $ileti!=" " ){

            $sorgu=$db->prepare("Insert into oneriler(`ad`,`soyad`,`mail`,`konu`,`ileti`,`tarih`) value (:ad,:soyad,:mail,:konu,:ileti,:tarih)");
            $sorgu->execute([
                'ad'=>$ad,
                'soyad'=>$soyad,
                'mail'=>$mail,
                'konu'=>$konu,
                'ileti'=>$ileti,
                'tarih'=>$tarih
            ]);

        }else{
            //echo "Lütfen tüm alanları doldurunuz.";
        }

    }

