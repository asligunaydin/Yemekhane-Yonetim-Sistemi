<?php
include "DatabaseCon2.php";
global $db;

    $yil = date('Y');

    $yilSorgu=$db->prepare("Select * from yemekfiyatlisteleri where `Tarih`=:tarih");
    $yilSorgu->execute([
        'tarih'=>$yil
    ]);

    $say=$yilSorgu->rowCount();

    if($say==1){
        $rowListe=$yilSorgu->fetch(PDO::FETCH_ASSOC);
    }
    $i=-1;
    while($say==0) {

            $yil = date('Y-m-d', strtotime(  $i . "years"));
            $date = date_create($yil);
            $yil = date_format($date, 'Y');

            $gecenyilSorgu = $db->prepare("Select * from yemekfiyatlisteleri where `Tarih`=:tarih");
            $gecenyilSorgu->execute([
                'tarih' => $yil
            ]);

            $say=$gecenyilSorgu->rowCount();
            $rowListe = $gecenyilSorgu->fetch(PDO::FETCH_ASSOC);
            $i--;

    }






