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
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto " id="kt_brand">
                <!--begin::Logo-->
                <a href="index.html" class="brand-logo">
                    <img alt="Logo" src="assets/media/logos/logo-light.png"/>
                </a>
                <!--end::Logo-->

                <!--begin::Toggle-->
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
				<span class="svg-icon svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    </g>
</svg><!--end::Svg Icon--></span>			</button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->

            <!--begin::Aside-->
            <?php include "Aside.php"; ?>
            <!--end::Aside-->
        </div>
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
                                    KURUL UYE KAYIT	                	            </h5>
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
                                <h5 class="text-dark font-weight-bold my-1 mr-5">
                                    Yeni Kayıt Oluşturun
                                </h5>
                            </div>
                            <!--begin::Form-->

                            <div class="card-body">
                            <form class="form" action="KurulEkle.php" method="POST">
                                <div>
                                        <div class="form-group main-form row" >
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div  class="col-lg-10">
                                                <div  class="form-group row align-items-center" >
                                                    <div class="row-cols-md-1">
                                                        <label>Tür</label>
                                                        <select class="form-control" name="krl_Tur[]">
                                                            <option value="">Seçiniz</option>
                                                            <option value="Uye">Üye</option>
                                                            <option value="Kurul Baskani">Kurul Başkanı</option>
                                                        </select>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Ad</label>
                                                        <input class="form-control" type="text" name="krl_Ad[]" />
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Soyad</label>
                                                        <input class="form-control" type="text" name="krl_Soyad[]" />
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Unvan</label>
                                                        <input class="form-control" type="text" name="krl_Unvan[]" />
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a type="button" class="btn btn-sm font-weight-bolder btn-light-danger btn-remove">
                                                            <i class="la la-trash-o"></i>Sil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>

                                <div class="paste-new-forms"></div>

                                        <div class="form-group row" style="margin-left: auto ">
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div class="col-lg-4">
                                                <a href="javascript:void(0)" type="button" class="btn btn-sm font-weight-bolder btn-light-primary add-form">
                                                    <i class="la la-plus"></i>Ekle</a>
                                            </div>
                                        </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                            <button class="btn font-weight-bold btn-success mr-2" name="save_data" type="submit" >Kaydet</button>
                                            <button class="btn font-weight-bold btn-secondary" type="reset" >İptal</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!--end::Form-->
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
            <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                <!--begin::Container-->
                <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2022&copy;</span>
                        <a  target="_blank" class="text-dark-75 text-hover-primary"></a>
                    </div>
                    <!--end::Copyright-->

                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
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
<script src="assets/js/pages/widgets.js?v=7.0.6"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
    $(document).ready(function (){


        Yetki();

        $(document).on('click','.add-form',function () {

            $(document).on('click', '.btn-remove',function (){
                $(this).closest('.main-form').remove();
            });


            $('.paste-new-forms').append('<div class="form-group main-form row" >\
                <label class="col-lg-2 col-form-label text-right">\
                </label>\
            <div  class="col-lg-10">\
                <div  class="form-group row align-items-center" >\
                \<div class="row-cols-md-1">\
                        <label>Tür</label>\
                        <select class="form-control" name="krl_Tur[]">\
                            <option value="">Seçiniz</option>\
                            <option value="Uye">Üye</option>\
                            <option value="Kurul Baskani">Kurul Başkanı</option>\
                        </select>\
                        <div class="d-md-none mb-2"></div>\
                    </div>\
                    <div class="col-md-2">\
                        <label>Ad</label>\
                        <input class="form-control" type="text" name="krl_Ad[]" />\
                        <div class="d-md-none mb-2"></div>\
                    </div>\
                    <div class="col-md-2">\
                        <label>Soyad</label>\
                        <input class="form-control" type="text" name="krl_Soyad[]" />\
                        <div class="d-md-none mb-2"></div>\
                    </div>\
                    <div class="col-md-2">\
                        <label>Unvan</label>\
                        <input class="form-control" type="text" name="krl_Unvan[]" />\
                        <div class="d-md-none mb-2"></div>\
                    </div>\
                    <div class="col-md-4">\
                        <a type="button" class="btn btn-sm font-weight-bolder btn-light-danger btn-remove">\
                            <i class="la la-trash-o"></i>Sil</a>\
                    </div>\
                </div>\
            </div>\
        </div>');



        });

    });



    $("#btn_Cikis").click(function () {
        window.location.href = "Cikis.php";
    });
</script>
</body>
<!--end::Body-->
</html>
