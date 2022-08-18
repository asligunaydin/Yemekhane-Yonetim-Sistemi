<?php
include "DatabaseCon2.php";

    global $db;

        list($day) = explode("/", date('D'));

        if ($day == "Mon") {
            $pazartesi = date("Y-m-d", strtotime("Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));

        } elseif($day=="Tue") {
            $pazartesi = date("Y-m-d", strtotime("Last Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }elseif($day=="Wed") {
            $pazartesi = date("Y-m-d", strtotime("Last Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Last Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }elseif($day=="Thu") {
            $pazartesi = date("Y-m-d", strtotime("Last Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Last Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Last Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }elseif($day=="Fri") {
            $pazartesi = date("Y-m-d", strtotime("Last Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Last Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Last Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Last Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }elseif($day=="Sat") {
            $pazartesi = date("Y-m-d", strtotime("Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }elseif($day=="Sun") {
            $pazartesi = date("Y-m-d", strtotime("Monday", strtotime(date("Y-m-d"))));
            $sali=date("Y-m-d", strtotime("Tuesday", strtotime(date("Y-m-d"))));
            $carsamba=date("Y-m-d", strtotime("Wednesday", strtotime(date("Y-m-d"))));
            $persembe=date("Y-m-d", strtotime("Thursday", strtotime(date("Y-m-d"))));
            $cuma=date("Y-m-d", strtotime("Friday", strtotime(date("Y-m-d"))));
        }

        $returnArray=[];


        $sorguHafta = $db->query("SELECT `menu_Tarih`, `menu_Corba`, `menu_Yemek1`,`menu_Yemek2`, `menu_Ek1`, `menu_Ek2` FROM menuler WHERE (`menu_Tarih` BETWEEN '{$pazartesi}' AND '{$cuma}') ORDER BY `menu_Tarih`")->fetchAll();
        foreach ($sorguHafta as $key=>$value)
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























//        foreach ($sorgu as $key=>$value) {
//            echo  $value['menu_Tarih'],"<br>";
//            echo  $value['menu_Corba'],"<br>";
//            echo  $value['menu_Yemek1'],"<br>";
//            echo  $value['menu_Yemek2'],"<br>";
//            echo  $value['menu_Ek1'],"<br>";
//            echo  $value['menu_Ek2'],"<br>";
//            echo  "<br><br>";
//
//        }





