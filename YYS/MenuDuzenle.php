<?php

include "DatabaseCon.php";
    session_start();
    global $db;

    if(isset($_POST['menu_ID'])){

        $menu_ID=$_POST['menu_ID'];

        $date = date_create($_POST['menu_Tarih']);
        $menu_Tarih=date_format($date, 'Y-m-d');

        $menu_Corba=$_POST['menu_Corba'];
        $menu_Yemek1=$_POST['menu_Yemek1'];
        $menu_Yemek2=$_POST['menu_Yemek2'];
        $menu_Ek1=$_POST['menu_Ek1'];
        $menu_Ek2=$_POST['menu_Ek2'];

        if($menu_ID!=""){

            $sorgu=$db->prepare("Update menuler set menu_Tarih=:menu_Tarih, menu_Corba=:menu_Corba,  menu_Yemek1=:menu_Yemek1, menu_Yemek2=:menu_Yemek2, menu_Ek1=:menu_Ek1,menu_Ek2=:menu_Ek2 where menu_ID=:menu_ID");
            $sorgu->execute([
               'menu_ID'=>$menu_ID,
               'menu_Tarih' =>$menu_Tarih,
               'menu_Corba'=>$menu_Corba,
               'menu_Yemek1'=>$menu_Yemek1,
               'menu_Yemek2'=>$menu_Yemek2,
               'menu_Ek1'=>$menu_Ek1,
               'menu_Ek2'=>$menu_Ek2
            ]);
            if($sorgu){
                $data="Değişiklikler kaydedildi.";
            }
            else{
                $data="Hata!";
            }

        }else{
            $data="Lütfen alanları doldurunuz";
        }
        echo $data;
    }
