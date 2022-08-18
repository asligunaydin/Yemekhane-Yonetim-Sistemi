<?php
include("DatabaseCon.php");

    session_start();
    global $db;
    if(isset($_POST)) {

        $kullanici_adi = $_POST['kAdi'];
        $sifre = $_POST['sifre'];

        $yetki_turu="";

        $data="";

        if($kullanici_adi!="" and $sifre!="" ) {
            $kullaniciAra = $db->prepare("select * from kullanicilar where kullanici_adi=:kullanici_adi and sifre=:sifre");
            $kullaniciAra->execute([
                'kullanici_adi' => $kullanici_adi,
                'sifre' => $sifre
            ]);

            foreach ($kullaniciAra as $key =>$value){
                $yetki_turu=$value['yetki_turu'];
            }

            $say = $kullaniciAra->rowCount();
            if ($say == 1) {
                $_SESSION['kullanici_adi'] = $kullanici_adi;
                $_SESSION['yetki_turu']=$yetki_turu;

                $data="OK";
//                header("Location:YemekListeleView.php");
//                die();

            } else {
                $data="Kullanıcı bulunamadı.";
            }
        }else{
            $data="Lütfen tüm alanları doldurunuz.";
        }
        echo $data;

    }
