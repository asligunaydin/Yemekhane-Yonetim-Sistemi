<?php
include("DatabaseCon.php");
include ("KullaniciMailGonder.php");
require_once "MetinKarakterKontrol.php";
session_start();
global $db;

if(isset($_POST)){

    $k_Ad=$_POST['k_Ad'];
    $k_Soyad=$_POST['k_Soyad'];
    $k_Mail=$_POST['k_Mail'];
    $kullanici_adi=$_POST['kullanici_adi'];
    $parola=$_POST['sifre'];
    $yetki_turu=$_POST['yetki_turu'];

    if($k_Ad != "" and $k_Soyad != "" and $k_Mail!= "" and $kullanici_adi != "" and $parola != "" and $yetki_turu!= "")
    {
        $kullaniciAra=$db->prepare("Select k_Mail,kullanici_adi from kullanicilar where durum=1");
        $kullaniciAra->execute();

        $varEposta=0;
        $varK_adi=0;
        foreach ($kullaniciAra as $key=>$value)
        {
            if(Replace_EN($value['k_Mail'])==Replace_EN($k_Mail)){
                $varEposta=1;
            }
            if(Replace_EN($value['kullanici_adi'])==Replace_EN($kullanici_adi)){
                $varK_adi=1;
            }
        }

        if($varEposta==1){

            $data="Farklı bir e-posta adresi girin.";

        }
        elseif ($varK_adi==1){

            $data="Farklı bir kullanıcı adı girin.";

        }
        else{

            $sorgu=$db->prepare("insert into kullanicilar(`k_Ad`,`k_Soyad`, `k_Mail`, `kullanici_adi`,`sifre`, `yetki_turu`) value (:k_Ad,:k_Soyad,:k_Mail,:kullanici_adi,:sifre,:yetki_turu)");

            try {
                $ekle = $sorgu->execute([
                    'k_Ad' => $k_Ad,
                    'k_Soyad' => $k_Soyad,
                    'k_Mail' => $k_Mail,
                    'kullanici_adi' => $kullanici_adi,
                    'sifre' => $parola,
                    'yetki_turu' => $yetki_turu
                ]);
                $data="Değişiklikler kaydedildi.";
                PHPMailerFunc($k_Mail, $kullanici_adi, $parola);

            }
            catch (Exception $exception){

                $data="Hata!!!";
                echo $exception->getMessage();

            }
        }
    }
    else{
        $data= "Lütfen tüm alanları doldurun.";
    }
    echo $data;
}


