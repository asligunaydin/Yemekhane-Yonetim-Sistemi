<?php
include("DatabaseCon.php");
require_once "MetinKarakterKontrol.php";

    session_start();
    global $db;

    if(isset($_POST) and  isset($_FILES['ymk_fotograf']['name'])){


        //Fotoğraf Yükleme İşlemi----------
        $ymk_fotograf = $_FILES['ymk_fotograf']['name'];
        $location = "uploads/yemekler/".$ymk_fotograf;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
        $imageFileType = strtolower($imageFileType);

        $valid_extensions = array("jpg","jpeg","png");

        $response = 0;
        if(in_array(strtolower($imageFileType), $valid_extensions)) {

            if(move_uploaded_file($_FILES['ymk_fotograf']['tmp_name'],$location)){
                $response = $location;
            }
        }
        //echo $response;
        //---------------------------------


        $ymk_Ad=$_POST['y_adi'];
        $ymk_Kalori=$_POST['y_kalori'];
        $ymk_Tur=$_POST['y_tur'];

        if($ymk_Ad != "" and $ymk_Kalori != "" and $ymk_Tur!= "" )
        {
            if (KarakterTip($ymk_Ad)) {

                $yemekAra=$db->prepare("Select ymk_Ad from yemekler where ymk_Durum=1");
                $yemekAra->execute();

                $var=0;
                foreach ($yemekAra as $key=>$value)
                {
                        if(Replace_EN($value['ymk_Ad'])==Replace_EN($ymk_Ad)){
                            $var=1;
                        }
                }

                if($var==1){
                    $data="Var olan kayıt eklenemez.";
                }else{
                    $sorgu=$db->prepare("insert into yemekler(`ymk_Ad`,`ymk_Kalori`, `ymk_Tur`,`ymk_fotograf`) value (:ymk_Ad,:ymk_Kalori,:ymk_Tur,:ymk_fotograf)");
                    try {
                        $ekle = $sorgu->execute([
                            'ymk_Ad' => $ymk_Ad,
                            'ymk_Kalori' => $ymk_Kalori,
                            'ymk_Tur' => $ymk_Tur,
                            'ymk_fotograf' => $ymk_fotograf
                        ]);
                        $data="Değişiklikler kaydedildi.";
                    }catch (Exception $exception){
                        $data="Hata!!!";
                    }
                }

            }
            else{
                $data ="Sembol veya sayısal karakter kullanmayın.";
            }

        }
        else{
            $data= "Lütfen tüm alanları doldurun.";
        }
        echo $data;

    }



//
//$tarihAra=$db->prepare("Select menu_Tarih from menuler where menu_durum=1");
//$tarihAra->execute();
//
//$varTarih=0;
//foreach ($tarihAra as $key=>$value){
//    if($value['menu_Tarih']==$menu_Tarih){
//        $varTarih=1;
//    }
//}
//if($varTarih==1){
//    $data="Menü tanımlı. Farklı bir tarih seçin.";
//}
//else{
//    $sorgu = $db->prepare("insert into menuler(`menu_Tarih`,`menu_Corba`, `menu_Yemek1`, `menu_Yemek2`,`menu_Ek1`, `menu_Ek2`) value (:menu_Tarih,:menu_Corba,:menu_Yemek1,:menu_Yemek2,:menu_Ek1,:menu_Ek2)");
//    try {
//        $ekle = $sorgu->execute([
//            'menu_Tarih' => $menu_Tarih,
//            'menu_Corba' => $menu_Corba,
//            'menu_Yemek1' => $menu_Yemek1,
//            'menu_Yemek2' => $menu_Yemek2,
//            'menu_Ek1' => $menu_Ek1,
//            'menu_Ek2' => $menu_Ek2
//
//        ]);
//
//        $data = "Degisiklikler Kaydedildi.";
//    } catch (Exception $exception) {
//        $data = "Hata!!!";
//    }
//}





