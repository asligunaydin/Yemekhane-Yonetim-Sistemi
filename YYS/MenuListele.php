<?php
include("DatabaseCon.php");
session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select menu_ID,menu_Tarih,menu_Corba,menu_Yemek1,menu_Yemek2,menu_Ek1,menu_Ek2 from menuler where menu_durum='1'")->fetchAll();
    foreach ($veri as $key=>$value)
    {
        //date format tr
        $date = date_create($value['menu_Tarih']);
        $value['menu_Tarih']=date_format($date, 'd/m/Y');

        $returnArray[$key]['menu_ID']=$value['menu_ID'];
        $returnArray[$key]['menu_Tarih']=$value['menu_Tarih'];
        $returnArray[$key]['menu_Corba']=$value['menu_Corba'];
        $returnArray[$key]['menu_Yemek1']=$value['menu_Yemek1'];
        $returnArray[$key]['menu_Yemek2']=$value['menu_Yemek2'];
        $returnArray[$key]['menu_Ek1']=$value['menu_Ek1'];
        $returnArray[$key]['menu_Ek2']=$value['menu_Ek2'];

    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);