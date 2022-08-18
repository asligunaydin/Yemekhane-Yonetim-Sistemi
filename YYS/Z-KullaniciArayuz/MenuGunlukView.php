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
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Yemekhane Yönetim Sistemi </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="css/slider.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />


</head>

<body class="sub_page">


<div class="hero_area">
    <div class="bg-box">
        <img src="images/hero-bg.jpg" alt="">
    </div>


    <!-- header section strats -->
<!--    style="width: 100%;-->
<!--    position: fixed;-->
<!--    z-index: 1000;-->
<!--    top: 0;-->
<!--    left: 0;-->
<!--    background: #222831"-->
    <header class="header_section" >
        <div class="container" >
            <nav class="navbar navbar-expand-lg custom_nav-container " >
                <a class="navbar-brand" href="">
            <span>
              Yemekhane
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  m-md-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="MenuGunlukView.php">GÜNÜN MENÜSÜ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="MenuHaftalikView.php">HAFTALIK MENÜ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="MenuAylikView.php">AYLIK MENÜ</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="/YYS/LoginView.php" class="order_online">
                            Giriş
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>

<!-- food section -->

<div class="food_section layout_padding">
    <div class="" >
        <div class="heading_container heading_center">

            <h1 style="font-size: 50px; margin-bottom: 50px; margin-top: 5px">
                Günün Menüsü

            </h1>

        </div>

        <div class="card-body" style=" margin-left: 350px; margin-right: 350px; margin-top: 1px ">
            <div class="row grid">

                <!--                Günlük Menu Listeleme Başlangıç-->
                <?php
                include "DatabaseCon2.php";
                include "MenuGunluk.php";
                global $db;
                global $returnArray;
                global $day;
                global $menuBilgisi;
                echo $menuBilgisi;
                if($day!="Sat" and $day!="Sun" and $menuBilgisi!=false){
                foreach ($returnArray as $veri=>$value){
                    ?>

                    <div class="col-sm-6 col-lg-4 all gunluk">
                        <div class="box">
                            <div>
                                <div class="img-box">
                                    <?php
                                    $ymk_Ad=$value;
                                    $kaloriSorgu=$db->prepare("Select ymk_fotograf from yemekler where ymk_Ad='{$ymk_Ad}'");
                                    $kaloriSorgu->execute();
                                    $row = $kaloriSorgu->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <img src="/YYS/uploads/yemekler/<?php
                                    echo $row["ymk_fotograf"];
                                    ?>" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <?php echo $value; ?>
                                    </h5>

                                    <div class="options">
                                        <h6>
                                            <?php
                                            $ymk_Ad=$value;
                                            $kaloriSorgu=$db->prepare("Select ymk_Kalori from yemekler where ymk_Ad='{$ymk_Ad}'");
                                            $kaloriSorgu->execute();
                                            $row = $kaloriSorgu->fetch(PDO::FETCH_ASSOC);
                                            echo $row["ymk_Kalori"];
                                            ?>
                                            kalori
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
                }else{?>
                    <div class="heading_container heading_center" style="margin: auto">

                        <h4 style="margin: 5px auto 50px;">
                            <?php echo "Menü Bilgisi Yok..."; ?>

                        </h4>
                    </div>
                <?php
                }
                ?>

                <!--                Günlük Menu Listeleme Bitiş-->

            </div>

        </div>

        <div class="btn-box">
            <?php include "FiyatListesi.php";
            include "DatabaseCon2.php";
            $src="/YYS/uploads/belgeler/";;
            global $rowListe;?>
            <a href="<?php echo $src, $rowListe["Dosya"]?>">
                Yemek Ücretleri
            </a>
        </div>
    </div>
        <div style="margin-top: 50px; margin-bottom: 100px"></div>


    <!--    Begin::Slider-->
    <section class="book_section layout_padding" style="background: #222831">
        <div style="margin-left: 400px; margin-right: 400px">
            <div class="slideshow-container">

                <!-- Full-width slides/quotes -->
                <div class="dot-container" style="border-top-right-radius: 10px ;border-top-left-radius: 10px; background: rgba(34,40,49,0.79)">
                    Duyurular
                </div>

                <?php
                include "Duyurular.php";
                global $returnDuyuru;
                $index=0;
                global $say;

                if($say==0){ ?>
                    <div class="heading_container heading_center" style="margin: auto">

                        <h6 style="margin: 20px auto 50px; font-family: cursive; color: #222831">
                            <?php echo "Duyuru Bulunmamaktadır."; ?>

                        </h6>
                    </div>
                    <?php
                }else{

                    ?>
                    <?php foreach ($returnDuyuru as $key => $value){

                        ?>

                        <div class="mySlides">
                            <h5 style="margin-bottom: 50px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif ">
                                <?php
                                echo $value['duyuru_Baslik'];
                                echo " - ". $value['duyuru_Tarih'];
                                ?></h5>
                            <q><?php
                                echo $value['duyuru_Metin'];
                                ?></q>
                        </div>
                        <?php
                        $index++;
                    }?>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    <?php
                }
                ?>

                <!-- Next/prev buttons -->
            </div>

            <!-- Dots/bullets/indicators -->
            <div class="dot-container" style="border-bottom-right-radius: 10px ;border-bottom-left-radius: 10px">
                <?php
                for($n=1; $n<=$index; $n++)
                {
                    ?>
                    <span class="dot" onclick="currentSlide(<?php echo $n; ?>)"></span>
                    <?php
                }
                ?>
            </div>

        </div>
    </section>
    <!--    End::Slider-->

    <!-- book section -->
    <section class="book_section layout_padding" >
        <div class="container">
            <div class="heading_container">
                <h2>
                    İstek ve Öneriler
                </h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form_container " style="margin-left: 0px">
                        <form action="">
                            <div>
                                <label class="col-10" >
                                    <input type="text" name="ad" style="color: grey" class="form-control" placeholder="Adınız" />
                                </label>
                            </div>
                            <div>
                                <label class="col-10">
                                    <input type="text" name="soyad" class="form-control" placeholder="Soyadınız" />
                                </label>
                            </div>
                            <div>
                                <label class="col-10">
                                    <input type="text" name="mail" class="form-control" placeholder="E-posta" />
                                </label>
                            </div>
                            <div>
                                <label class="col-10">
                                    <input type="text" name="konu" class="form-control" placeholder="Konu" />
                                </label>
                            </div>
                            <div>
                                <label class="col-10">
                                    <textarea class="form-control" name="ileti" placeholder="Mesajınız" rows="6"></textarea>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <button class="btn-box" type="button" id="btn_OneriEkle">GÖNDER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</section>
<!-- end book section -->


<!--    <div style="margin-top: 50px; margin-bottom: 100px"></div>-->



</div>

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
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="js/custom.js"></script>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        slideIndex += n
        showSlides(slideIndex);
    }

    function currentSlide(n) {
        slideIndex = n
        showSlides(slideIndex);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
<script>
    $("#btn_OneriEkle").click(function (){
        var ad=$("input[name=ad]").val();
        var soyad=$("input[name=soyad]").val();
        var mail=$("input[name=mail]").val();
        var konu=$("input[name=konu]").val();
        var ileti=$("textarea[name=ileti]").val();

        $.ajax({
            url:"IstekOneriler.php",
            type:"POST",
            data:{
                'ad':ad,
                'soyad':soyad,
                'mail':mail,
                'konu':konu,
                'ileti':ileti
            },
            success:function (result){
                $("input[name=ad]").val(" ");
                $("input[name=soyad]").val(" ");
                $("input[name=mail]").val(" ");
                $("input[name=konu]").val(" ");
                $("textarea[name=ileti]").val(" ");
                console.log(result);
            }
        });


    });

</script>