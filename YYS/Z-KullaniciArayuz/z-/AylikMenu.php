<?php
include "DatabaseCon2.php";
    global $db;

//    $bugun = date('Y-m-d');
//
//    $sorguAy=$db->prepare("SELECT * FROM menuler WHERE MONTH(menu_Tarih) = MONTH(CURDATE()) ORDER BY `menu_Tarih`");
//    $sorguAy->execute();

//    $sorgu=$db->prepare("SELECT * FROM menuler WHERE `menu_Tarih`=:bugun");
//    $sorgu->execute([
//        'bugun'=>$bugun
//    ]);
//
//    $row = $sorgu->fetch(PDO::FETCH_ASSOC);
//
//    $returnArray[0]=$row["menu_Corba"];
//    $returnArray[1]=$row["menu_Yemek1"];
//    $returnArray[2]=$row["menu_Yemek2"];
//    $returnArray[3]=$row["menu_Ek1"];
//    $returnArray[4]=$row["menu_Ek2"];



//        if($bugun=='2022-04-12'){
//            echo "gün bugündür.";
//        }else{
//            echo "değıldır";
//        }
