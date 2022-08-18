<?php
include ("DatabaseCon.php");
    session_start();
    global $db;

    if(isset($_POST['uyeSilme'])){

        $deleteID=$_POST['deleteID'];

        $sorgu=$db->prepare("Update kurul set krl_Durum=0 where krl_ID=:deleteID");
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

