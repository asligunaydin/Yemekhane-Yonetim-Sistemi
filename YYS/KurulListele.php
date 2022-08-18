<?php
include ("DatabaseCon.php");
    session_start();
    global $db;
    $returnArray=[];
    $veri=$db->query("select krl_ID, krl_Tur,krl_Ad,krl_Soyad,krl_Unvan from kurul where krl_Durum='1'")->fetchAll();
    foreach ($veri as $key=>$value){
      $returnArray[$key]['krl_ID']=$value['krl_ID'];
      $returnArray[$key]['krl_Tur']=$value['krl_Tur'];
      $returnArray[$key]['krl_Ad']=$value['krl_Ad'];
      $returnArray[$key]['krl_Soyad']=$value['krl_Soyad'];
      $returnArray[$key]['krl_Unvan']=$value['krl_Unvan'];
    }
    $returnArray["data"]=$returnArray;
    echo json_encode($returnArray);