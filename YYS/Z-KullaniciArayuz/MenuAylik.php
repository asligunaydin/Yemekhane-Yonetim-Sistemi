<?php
include("DatabaseCon2.php");

global $db;
    $returnArray=[];
    $veri=$db->query("select menu_Tarih,menu_Corba,menu_Yemek1,menu_Yemek2,menu_Ek1,menu_Ek2 from menuler where menu_durum='1' and MONTH(menu_Tarih) = MONTH(CURDATE()) ORDER BY `menu_Tarih`")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        $dataDate=$value['menu_Tarih'];
        $date = date_create($dataDate);
        $fDate=date_format($date, 'd-m-Y');
        $returnArray[$key]['menu_Tarih']=$fDate;
        $returnArray[$key]['menu_Corba']=$value['menu_Corba'];
        $returnArray[$key]['menu_Yemek1']=$value['menu_Yemek1'];
        $returnArray[$key]['menu_Yemek2']=$value['menu_Yemek2'];
        $returnArray[$key]['menu_Ek1']=$value['menu_Ek1'];
        $returnArray[$key]['menu_Ek2']=$value['menu_Ek2'];

    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);
