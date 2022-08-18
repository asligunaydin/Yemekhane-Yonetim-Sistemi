<?php
include("DatabaseCon.php");
    session_start();
    global $db;

    if(isset($_POST)){

        $date=$_POST['duyuru_Tarih'];
        $date=DateTime::createFromFormat('d/m/Y', $date);

        $duyuru_Tarih=date_format($date, 'Y-m-d');
        $duyuru_Baslik=$_POST['duyuru_Baslik'];
        $duyuru_Metin=$_POST['duyuru_Metin'];


    if($duyuru_Baslik != "" and $duyuru_Tarih != "" and $duyuru_Metin != "" )
    {
        $sorgu=$db->prepare("insert into duyurular(`duyuru_Baslik`,`duyuru_Tarih` ,`duyuru_Metin`) value (:duyuru_Baslik,:duyuru_Tarih, :duyuru_Metin)");
        try {


        $ekle=$sorgu->execute([
            'duyuru_Baslik'=>$duyuru_Baslik,
            'duyuru_Tarih'=>$duyuru_Tarih,
            'duyuru_Metin'=>$duyuru_Metin
        ]);
            $data="Degisiklikler Kaydedildi.";
        }catch (Exception $exception){
            $data="Hata!!!";
        }
    }
    else{
        $data= "Lutfen tum alanlari doldurunuz.";
    }

    echo $data;
}