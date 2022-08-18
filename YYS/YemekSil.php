<?php
include("DatabaseCon.php");
    session_start();
    global $db;


    if(isset($_POST['yemeksilme'] )){

        $deleteID=$_POST['deleteID'];

        $sorgu=$db->prepare("Update yemekler set ymk_Durum=0 where ymk_ID=:deleteID");
        $sorgu->execute([
            'deleteID'=>$deleteID
        ]);
        if($sorgu){
            $data="Kayit Silindi.";
        }else{
            $data="Silme işlemi başarısız!";
        }
        echo $data;
    }






