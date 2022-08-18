<?php

include("DatabaseCon.php");
    session_start();
    global $db;


    if(isset($_POST['deleteID'])){

        $deleteID=$_POST['deleteID'];

        $sorgu=$db->prepare("Update duyurular set duyuru_durum=0 where duyuru_ID=:deleteID");
        $sorgu->execute([
            'deleteID'=>$deleteID
        ]);
        if ($sorgu){
            $data="Kayıt Silindi";
        }else{
            $data="Silme işlemi başarısız!";
        }
        echo $data;
    }

