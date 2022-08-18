<?php
include("DatabaseCon.php");
session_start();
global $db;

if(isset($_POST)){


    $date=$_POST['menu_Tarih'];
    $date=DateTime::createFromFormat('d/m/Y', $date);

    $menu_Tarih=date_format($date, 'Y-m-d');
    $menuGun=date_format($date,'D');
        //Cumartesi-pazar için menü tanımlanmasın.
        if ($menuGun != "Sat" and $menuGun != "Sun") {

            $menu_Corba = $_POST['menu_Corba'];
            $menu_Yemek1 = $_POST['menu_Yemek1'];
            $menu_Yemek2 = $_POST['menu_Yemek2'];
            $menu_Ek1 = $_POST['menu_Ek1'];
            $menu_Ek2 = $_POST['menu_Ek2'];

            if($menu_Tarih != "" and $menu_Corba != "" and $menu_Yemek1!= "" and $menu_Yemek2 != "" and $menu_Ek1 != "" and $menu_Ek2!= "") {

                $tarihAra=$db->prepare("Select menu_Tarih from menuler where menu_durum=1");
                $tarihAra->execute();

                $varTarih=0;
                foreach ($tarihAra as $key=>$value){
                    if($value['menu_Tarih']==$menu_Tarih){
                        $varTarih=1;
                    }
                }
                if($varTarih==1){
                    $data="Menü tanımlı. Farklı bir tarih seçin.";
                }
                else{
                    $sorgu = $db->prepare("insert into menuler(`menu_Tarih`,`menu_Corba`, `menu_Yemek1`, `menu_Yemek2`,`menu_Ek1`, `menu_Ek2`) value (:menu_Tarih,:menu_Corba,:menu_Yemek1,:menu_Yemek2,:menu_Ek1,:menu_Ek2)");
                    try {
                        $ekle = $sorgu->execute([
                            'menu_Tarih' => $menu_Tarih,
                            'menu_Corba' => $menu_Corba,
                            'menu_Yemek1' => $menu_Yemek1,
                            'menu_Yemek2' => $menu_Yemek2,
                            'menu_Ek1' => $menu_Ek1,
                            'menu_Ek2' => $menu_Ek2

                        ]);

                        $data = "Degisiklikler Kaydedildi.";
                    } catch (Exception $exception) {
                        $data = "Hata!!!";
                    }
                }

            }
            else{
                $data= "Lütfen tüm alanları doldurun.";
            }
        }
        else {

            $data = "Cumartesi-Pazar günleri için menü tanımlanamıyor.";
        }


    echo $data;
}

