<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../images/favicon.png" type="">

    <title> YYS </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />


</head>

<body class="sub_page">


<div class="hero_area">
    <div class="bg-box">
        <img src="../images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
            <span>
              YYS
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="MenuGunlukView.php">GÜNÜN MENÜSÜ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="MenuHaftalikView.php">HAFTALIK MENÜ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../MenuAylikView.php">AYLIK MENÜ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="IstekOnerilerView.php">İLETİŞİM</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="/YYS/LoginView.php" class="order_online">
                            YYS Giriş
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>

<!-- food section -->

<section class="food_section layout_padding">
    <div class="" >
        <div class="heading_container heading_center">

            <h1 style="font-size: 60px;">
                 Yemek Menüsü

            </h1>

        </div>

        <ul class="filters_menu">
            <li class="active" data-filter="*">Aylık Menü</li>
            <li  data-filter=".haftalik"  >Haftalık Menü</li>
            <li  data-filter=".gunluk" >Günün Menüsü</li>
        </ul>

        <div class="filters-content" style=" margin-left: 400px; margin-right: 100px;">


<!--                Aylık Menu Listeleme Başlangıç-->
            <?php include "AylikMenu.php";
            include "MenuHaftalik.php";
            global $db;
            global $sorguAy;
            global $bugun;
            global $pazartesi, $sali, $carsamba,$persembe,$cuma;
            ?>

            <!--  Aylık Menü Başlangıç          -->
            <?php foreach ($sorguAy as $key=>$value) {
                ?>

            <?php


                // Günün Menüsü Başlangıç

                if($value['menu_Tarih']==$bugun){
                   ?>
                    <div>
                        <h2 style="font-size: 30px; margin-top: 50px">
                            <?php
                            $dataDate=$value['menu_Tarih'];
                            $date = date_create($dataDate);
                            echo date_format($date, 'd-m-Y');
                            ?>

                        </h2>
                    </div>
                    <div class="row grid ">

                        <?php

                        $menu_Tarih=$value['menu_Tarih'];

                        $sorguGun=$db->prepare("SELECT * FROM menuler WHERE `menu_Tarih`=:menu_Tarih");
                        $sorguGun->execute([
                            'menu_Tarih'=>$menu_Tarih
                        ]);

                        $row = $sorguGun->fetch(PDO::FETCH_ASSOC);

                        $returnArray[0]=$row["menu_Corba"];
                        $returnArray[1]=$row["menu_Yemek1"];
                        $returnArray[2]=$row["menu_Yemek2"];
                        $returnArray[3]=$row["menu_Ek1"];
                        $returnArray[4]=$row["menu_Ek2"];

                        foreach ($returnArray as $key2=>$dayValue){
                            ?>

                            <div class="col-sm-1 col-lg-2 all gunluk haftalik">


                                <div class="box">

                                    <div>
                                        <div class="img-box">
                                            <img src="../images/f1.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                <?php echo $dayValue; ?>
                                            </h6>

                                            <div class="options">
                                                <h7>
                                                    <?php
                                                    $ymk_Ad=$dayValue;
                                                    $kaloriSorgu=$db->prepare("Select ymk_Kalori from yemekler where ymk_Ad='{$ymk_Ad}'");
                                                    $kaloriSorgu->execute();
                                                    $row = $kaloriSorgu->fetch(PDO::FETCH_ASSOC);
                                                    echo $row["ymk_Kalori"];
                                                    ?>
                                                    kalori
                                                </h7>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php
                }
                //Günün Menüsü Bitişi

                // Haftalık Menü Başlangıç
                elseif ($value['menu_Tarih']==$pazartesi || $value['menu_Tarih']==$sali || $value['menu_Tarih']==$carsamba || $value['menu_Tarih']==$persembe || $value['menu_Tarih']==$cuma)
                {
                ?>
                    <div >
                    <h2 style="font-size: 30px; margin-top: 50px">
                        <?php
                        $dataDate=$value['menu_Tarih'];
                        $date = date_create($dataDate);
                        echo date_format($date, 'd-m-Y');
                        ?>

                    </h2>
                </div>
                    <div class="row grid ">


                        <?php

                        $menu_Tarih=$value['menu_Tarih'];

                        $sorguGun=$db->prepare("SELECT * FROM menuler WHERE `menu_Tarih`=:menu_Tarih");
                        $sorguGun->execute([
                            'menu_Tarih'=>$menu_Tarih
                        ]);

                        $row = $sorguGun->fetch(PDO::FETCH_ASSOC);

                        $returnArray[0]=$row["menu_Corba"];
                        $returnArray[1]=$row["menu_Yemek1"];
                        $returnArray[2]=$row["menu_Yemek2"];
                        $returnArray[3]=$row["menu_Ek1"];
                        $returnArray[4]=$row["menu_Ek2"];

                        foreach ($returnArray as $key2=>$dayValue){
                            ?>

                            <div class="col-sm-1 col-lg-2 all haftalik">

                                <div class="box">
                                    <div>
                                        <div class="img-box">
                                            <img src="../images/f1.png" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                <?php echo $dayValue; ?>
                                            </h6>

                                            <div class="options">
                                                <h7>
                                                    <?php
                                                    $ymk_Ad=$dayValue;
                                                    $kaloriSorgu=$db->prepare("Select ymk_Kalori from yemekler where ymk_Ad='{$ymk_Ad}'");
                                                    $kaloriSorgu->execute();
                                                    $row = $kaloriSorgu->fetch(PDO::FETCH_ASSOC);
                                                    echo $row["ymk_Kalori"];
                                                    ?>
                                                    kalori
                                                </h7>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                <?php
                }
                //Haftalık Menü Bitşi

                //Günün ve Haftanın Menüsü Dışındaki Günlerin Menüleri Başlangıç
                else{
                ?>
                    <div >
                        <h2 style="font-size: 30px; margin-top: 50px">
                            <?php
                            $dataDate=$value['menu_Tarih'];
                            $date = date_create($dataDate);
                            echo date_format($date, 'd-m-Y');
                            ?>

                        </h2>
                    </div>

            <div class="row grid ">

                <?php

                $menu_Tarih=$value['menu_Tarih'];

                $sorguGun=$db->prepare("SELECT * FROM menuler WHERE `menu_Tarih`=:menu_Tarih");
                $sorguGun->execute([
                    'menu_Tarih'=>$menu_Tarih
                ]);

                $row = $sorguGun->fetch(PDO::FETCH_ASSOC);

                $returnArray[0]=$row["menu_Corba"];
                $returnArray[1]=$row["menu_Yemek1"];
                $returnArray[2]=$row["menu_Yemek2"];
                $returnArray[3]=$row["menu_Ek1"];
                $returnArray[4]=$row["menu_Ek2"];

                foreach ($returnArray as $key2=>$dayValue){
                ?>

                <div class="col-sm-1 col-lg-2 all aylik">

                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="../images/f1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <?php echo $dayValue; ?>
                                </h6>

                                <div class="options">
                                    <h7>
                                        <?php
                                        $ymk_Ad=$dayValue;
                                        $kaloriSorgu=$db->prepare("Select ymk_Kalori from yemekler where ymk_Ad='{$ymk_Ad}'");
                                        $kaloriSorgu->execute();
                                        $row = $kaloriSorgu->fetch(PDO::FETCH_ASSOC);
                                        echo $row["ymk_Kalori"];
                                        ?>
                                        kalori
                                    </h7>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php
                }
                //Günün ve Haftanın Menüsü Dışındaki Günlerin Menüleri Bitişi
            }?>
            <!--  Aylık Menü Bitişi          -->


        </div>
        <div class="btn-box">
            <a href="">
                Yemek Ücretleri
            </a>
        </div>
    </div>
</section>

<!-- end food section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        İletişim
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Üniversiteler Mah. Dumlupınar Blv. No: 147/A 06800 Çankaya/ANKARA
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  +90(312) 295 70 00
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>

                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="">
                    <div class="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h4>
                    Yemek Saatleri
                </h4>
                <p>
                    Hafta İçi
                </p>
                <p>
                    12.30 - 13.30
                </p>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span>  T.C. Cumhurbaşkanlığı Diyanet İşleri Başkanlığı
                <a></a><br><br>
                &copy; <span id="displayYear"></span> Bilgi İşlem Dairesi

            </p>
        </div>
    </div>
</footer>
<!-- footer section -->
</body>

</html>
<!-- jQery -->
<script src="../js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="../js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="../js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->


