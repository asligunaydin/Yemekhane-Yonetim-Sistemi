<?php
include "DatabaseCon2.php";
global $db;

    $menuBilgisi=true;
    list($day) = explode("/", date('D'));
    $bugun = date('Y-m-d');
    if($day!="Sat" and $day!="Sun") {




            $sorgu = $db->prepare("SELECT * FROM menuler WHERE `menu_Tarih`=:bugun");
            $sorgu->execute([
                'bugun' => $bugun
            ]);
            $row = $sorgu->fetch(PDO::FETCH_ASSOC);

            $say=$sorgu->rowCount();

            if($say==1){
                $menuBilgisi=true;
                $returnArray[0] = $row["menu_Corba"];
                $returnArray[1] = $row["menu_Yemek1"];
                $returnArray[2] = $row["menu_Yemek2"];
                $returnArray[3] = $row["menu_Ek1"];
                $returnArray[4] = $row["menu_Ek2"];
            }else{
                $menuBilgisi=false;
            }



        echo $menuBilgisi;
    }































