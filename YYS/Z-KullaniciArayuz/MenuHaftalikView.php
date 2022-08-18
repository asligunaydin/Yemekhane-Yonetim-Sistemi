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
    <link href="css/responsive.css" rel="stylesheet" />


</head>

<body class="sub_page">


<div class="hero_area">
    <div class="bg-box">
        <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="">
            <span>
              Yemekhane
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
                Haftalık Yemek Menüsü

            </h1>

        </div>

        <div class="card-body" style=" margin-left: 350px; margin-right: 350px; margin-top: 1px ">




            <table class="table table-dark table-active"  id="haftalikMenu_datatable">
                <thead>
                <tr>
                    <th  title="Field #2">Tarih</th>
                    <th  title="Field #4">Çorba</th>
                    <th  title="Field #5">Ana Yemek</th>
                    <th  title="Field #6">Ara Sıcak</th>
                    <th  title="Field #7">Tatlı/Meze/İçecek</th>
                    <th  title="Field #8">Tatlı/Meze/İçecek</th>
                </tr>
                </thead>
            </table>


        </div>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script>
    $(document).ready(function ()
    {

        $('#haftalikMenu_datatable').DataTable( {
            dom: 'Bfrtip',
            "ajax": "MenuHaftalik.php",
            "columns": [
                { data: "menu_Tarih" },
                { data: "menu_Corba" },
                { data: "menu_Yemek1" },
                { data: "menu_Yemek2" },
                { data: "menu_Ek1" },
                { data: "menu_Ek2" }
            ],
            "language":{
                // "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
                "url":"/YYS/js/dil.json"
            }

        } );

    });



</script>