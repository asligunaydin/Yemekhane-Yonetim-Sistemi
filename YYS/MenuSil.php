<?php
include("DatabaseCon.php");
    session_start();
    global $db;

    if(isset($_POST['menusilme'])){
        $deleteID=$_POST['deleteID'];

        $sorgu=$db->prepare("Update menuler set menu_durum=0 where menu_ID=:deleteID");
        $sorgu->execute([
           'deleteID'=>$deleteID
        ]);
        if($sorgu){
            $data="Kayıt Silindi.";
        }else{
            $data="Silme işlemi başarısız!";
        }
        echo $data;
    }


