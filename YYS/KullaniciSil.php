<?php
include "DatabaseCon.php";
        session_start();
        global $db;

        if(isset($_POST['kullanicisilme'])){

            $deleteID=$_POST['deleteID'];

            $sorgu=$db->prepare("Update kullanicilar set durum=0 where k_ID=:deleteID");
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




