<?php
session_start();

/// OTURUM KONTROLÜ
if (!isset($_SESSION['kullanici_adi'])) {
    header("Location:LoginView.php?GeçersizOturum");
    exit;
} else {
    true;
}

if($_SESSION['yetki_turu']=="Admin"){
    header("Location:Yetkisiz.php");
    exit();
}else{
    true;
}

?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8"/>
    <title>Yemekhane Yönetim Sistemi</title>
    <meta name="description" content="Bootstrap datetimepicker examples"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->



    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>        <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>


    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
        <?php include "Aside.php"; ?>
        <!--end::Aside-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header  header-fixed " >
                <!--begin::Container-->
                <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->

                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->

                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::User-->
                        <div class="topbar-item">
                            <button type="button" id="btn_Cikis" class="btn btn-bg-light">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                     id="kt_quick_user_toggle">
                                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Selam,</span>
                                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                    <?php
                                    $kullanici_adi = $_SESSION['kullanici_adi'];

                                    echo $kullanici_adi;
                                    ?>
                                </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
		                        <span class="symbol-label font-size-h5 font-weight-bold">
                                    <?php
                                    $kullanici = $_SESSION['kullanici_adi'];
                                    $ilkHarf = substr($kullanici, 0, 1);
                                    echo $ilkHarf;
                                    ?>
                                </span>
		                    </span>
                                </div>
                            </button>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-1">

                            <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5">
                                    KULLANICI KAYIT                	            </h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
                <!--end::Subheader-->

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class=" container ">


                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Yeni Kayıt Oluşturun
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Ad:</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="k_Ad" class="form-control" placeholder=""/>
<!--                                            <span class="form-text text-muted">Lütfen yemek adını girin.</span>-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Soyad:</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="k_Soyad" class="form-control" placeholder=""/>
<!--                                            <span class="form-text text-muted">Lütfen yemeğin kalorisini girin.</span>-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Eposta Adresi:</label>
                                          <div class="col-lg-4">
                                            <input type="email" name="k_Mail" class="form-control" placeholder=""/>
<!--                                            -->
                                           </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Kullanıcı Adı:</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="kullanici_adi" class="form-control" placeholder=""/>
                                            <!-- <span class="form-text text-muted">Lütfen yemeğin kalorisini girin.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Şifre:</label>
                                        <div class="col-lg-4">
                                            <input type="password" name="sifre" class="form-control" placeholder=""/>
                                            <!--  <span class="form-text text-muted">Lütfen yemeğin kalorisini girin.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Yetki Tür:</label>
                                        <div class=" col-lg-4 col-md-9 col-sm-12">
                                            <select class="form-control " id="kt_select2_1" name="yetki_turu">
                                                <option value="Admin">Admin</option>
                                                <option value="Super Admin">Super Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="button" id="btn_Kkaydet" class="btn btn-success mr-2">Kaydet</button>
                                            <button type="button" class="btn btn-secondary">İptal</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->

                        <!--begin::Modal-->
                        <!--end::Modal-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <?php include "Footer.php";  ?>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->

<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.0.6"></script>
<!--end::Page Scripts-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/widgets.js?v=7.0.6"></script>
<script>

    function Yetki(){

        var yetkilendirme ="<?php
            $yetki=$_SESSION['yetki_turu'];
            echo $yetki;
            ?>";

        var kullanicilar=document.getElementById("menuKullanicilar");
        var kurul=document.getElementById("menuKurul");

        if(yetkilendirme==="Superadmin"){
            kullanicilar.style.display="";
            kurul.style.display="";
        }
        else {
            kullanicilar.style.display="none";
            kurul.style.display="none";
        }
    }



    $(document).ready(function ()
    {

        Yetki();

        $("#btn_Kkaydet").click(function (){

            var k_Ad=$("input[name=k_Ad]").val();
            var k_Soyad=$("input[name=k_Soyad]").val();
            var k_Mail=$("input[name=k_Mail]").val();
            var kullanici_adi=$("input[name=kullanici_adi]").val();
            var sifre=$("input[name=sifre]").val();
            var yetki_turu=$("select[name=yetki_turu]").val();

            $.ajax({
                url: "KullaniciEkle.php",
                type: "POST",
                data:{
                    'k_Ad':k_Ad,
                    'k_Soyad':k_Soyad,
                    'k_Mail':k_Mail,
                    'kullanici_adi':kullanici_adi,
                    'sifre':sifre,
                    'yetki_turu':yetki_turu
                },
                success:function (data){

                    $("input[name=k_Ad]").val("");
                    $("input[name=k_Soyad]").val("");
                    $("input[name=k_Mail]").val("");
                    $("input[name=kullanici_adi]").val("");
                    $("input[name=sifre]").val("");
                    $("select[name=yetki_turu]").val("");
                    Swal.fire(
                        {
                            position: 'top-right',
                            icon: 'info',
                            title: data,
                            showConfirmButton: false,
                            timer: 1500
                        });
                }});
        });
    });

    $("#btn_Cikis").click(function () {
        window.location.href = "Cikis.php";
    });
</script>
</body>
<!--end::Body-->
</html>
