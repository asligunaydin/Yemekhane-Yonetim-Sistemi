<?php
include "DatabaseCon.php";
    session_start();
    global $db;

    if(isset($_POST['save_data'])){
        $krl_Ad=$_POST['krl_Ad'];
        $krl_Soyad=$_POST['krl_Soyad'];
        $krl_Unvan=$_POST['krl_Unvan'];
        $krl_Tur=$_POST['krl_Tur'];


        foreach ($krl_Ad as $index => $isimler){
            $s_krl_Ad=$isimler;
            $s_krl_Soyad=$krl_Soyad[$index];
            $s_krl_Unvan=$krl_Unvan[$index];
            $s_krl_Tur=$krl_Tur[$index];

            $sorgu=$db->prepare("insert into kurul(`krl_Ad`,`krl_Soyad`,`krl_Unvan`,`krl_Tur`) value (:s_krl_Ad,:s_krl_Soyad,:s_krl_Unvan,:s_krl_Tur)");
            $sorgu->execute([
                's_krl_Ad'=>$s_krl_Ad,
                's_krl_Soyad'=>$s_krl_Soyad,
                's_krl_Unvan'=>$s_krl_Unvan,
                's_krl_Tur'=>$s_krl_Tur
            ]);

        }

        header("Location:KurulEkleView.php");
    }
