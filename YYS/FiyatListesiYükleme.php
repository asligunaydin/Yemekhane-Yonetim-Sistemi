<?php
include("DatabaseCon.php");

    session_start();
    global $db;

    if(isset($_POST) and  isset($_FILES['dosya']['name'])){


        $tarih=$_POST['tarih'];

        $dosya=$_FILES['dosya']['name'];
        $location="uploads/belgeler/".$dosya;
        $fileType=pathinfo($location,PATHINFO_EXTENSION);
        $fileType=strtolower($fileType);
        $valid_extensions=array("pdf");

        $response=0;
        if(in_array(strtolower($fileType),$valid_extensions)){
            if(move_uploaded_file($_FILES['dosya']['tmp_name'],$location)){
                $response=$location;
            }
        }



        $tarihAra=$db->prepare("select tarih from yemekfiyatlisteleri");
        $tarihAra->execute();

        $varTarih=0;
        foreach ($tarihAra as $key=>$value){
            if ($value['tarih']==$tarih){
                $varTarih=1;
            }
        }

        if($varTarih==1){
            $data= $tarih ." yılına ait belge bulunmaktadır.";

        }else{
            $sorgu=$db->prepare("insert into yemekfiyatlisteleri(`tarih`,`dosya`) value (:tarih,:dosya)");
            try {
                $sorgu->execute([
                    'tarih'=>$tarih,
                    'dosya'=>$dosya
                ]);
                $data="Değişiklikler kaydedildi.";
            }catch (Exception $exception){
                $data="Hata!!!";
            }
        }



    }
    else{
        $data= "Lütfen tüm alanları doldurun.";
    }
    echo $data;