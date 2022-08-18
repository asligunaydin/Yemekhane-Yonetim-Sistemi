<?php
include "DatabaseCon.php";
session_start();

/// OTURUM KONTROLÜ
if (!isset($_SESSION['kullanici_adi'])) {
    header("Location:LoginView.php?GeçersizOturum");
    exit;
} else {
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
    <title>Yemekhane Yönetim Sistemi | Menüler</title>
    <meta name="description" content="Initialized with local json data"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->



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

<!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />-->

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">-->
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">-->
    <style type="text/css" class="init"></style>
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
        <div class="card-body">
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
                                    MENÜLER                	            </h5>
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
                        <div class="card card-custom">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Menü Listesi
                                        <!--                                        <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span>-->
                                    </h3>
                                </div>
                            </div>

                            <div class="card-body">


                                <!--begin: Datatable-->
                                <table class="table table-striped table-light-dark table-bordered table-active" id="menuler_datatable">
                                    <thead>
                                    <tr>
                                        <th title="Field #1">Menu ID</th>
                                        <th title="Field #2">Tarih</th>
                                        <th title="Field #4">Çorba</th>
                                        <th title="Field #5">Ana Yemek</th>
                                        <th title="Field #6">Ana Yemek</th>
                                        <th title="Field #7">Ek</th>
                                        <th title="Field #8">Ek</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <table/>
                                    <!--end: Datatable-->
                            </div>


                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
        </div>
        <!--end::Content-->

        <!--begin::Footer-->

        <!--end::Footer-->

    </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->

<!-- begin::User Panel-->

<!-- end::User Panel-->

</body>
<!--end::Body-->
</html>
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

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


<script type="text/javascript" src="https://datatables.net/media/js/site.js?_=64232ba754b2748258f2324e5f9e21f9"></script>
<script type="text/javascript" src="https://datatables.net/media/js/dynamic.php?comments-page=extensions%2Fbuttons%2Fexamples%2Finitialisation%2Fexport.html" async></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>-->
<!--<script type="text/javascript" src="https://datatables.net/examples/resources/demo.js"></script>-->



<!--<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap4.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/crud/datatables/advanced/multiple-controls.js?v=7.0.6"></script>
<!--end::Page Scripts-->

<script type="text/javascript" class="init">

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

        $('#menuler_datatable').DataTable( {


            "ajax": "MenuListele.php",
            "columns": [
                { data: "menu_ID" },
                { data: "menu_Tarih" },
                { data: "menu_Corba" },
                { data: "menu_Yemek1" },
                { data: "menu_Yemek2" },
                { data: "menu_Ek1" },
                { data: "menu_Ek2" },
                {"render": createUpdateBtn, "data": null, "targets": [0]},
                {"render": createDeleteBtn, "data": null, "targets": [0]}
            ],
            "language":{
                // "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
                "url":"js/dil.json"
            },


            dom: 'Bfrtip',
            lengthChange: false,
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4,5,6]
                    }
                },
                'colvis'
            ]



        } );

    });
    function createDeleteBtn() {

        return '<div class="example-preview">' +
            '<button class="btn btn-sm btn-clean btn-icon menusil" id="deleteBtn"  type="button" data-toggle="modal" data-target="#modal_delete_menu" ' +
            '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon sil" title="Sil">' +
            '<span class="svg-icon svg-icon-md">' +
            '<span class="svg-icon svg-icon-md">' +
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"  viewBox="0 0 24 24" version="1.1">' +
            '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">'+
            '<rect x="0" y="0" width="24" height="24"/>'+
            '<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>'+
            '<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>'+
            '</g>' +
            ' </svg>' +
            '</span>' +
            '</a>' +
            '</button>' +
            '<div class="modal fade" id="modal_delete_menu" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
            '<div class="modal-dialog modal-dialog-centered" role="document">'+
            '<div class="modal-content">'+
            '<div class="modal-header">'+
            '<h5 class="modal-title" id="exampleModalLabel">Seçtiğiniz Öge Silinecek</h5>'+
            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
            '<i aria-hidden="true" class="ki ki-close"></i>'+
            '</button>'+
            '</div>'+
            '<div class="modal-body">Silmek istediğinizden emin misiniz?</div>'+
            '<div class="modal-footer">'+
            '<input type="hidden" id="modalDeleteID" name="modalDeleteID" class="form-control" placeholder=""/>'+
            '<button type="button" class="btn btn-dark-primary font-weight-bold" data-dismiss="modal">İptal</button>'+
            '<button type="button" class="btn btn-danger btn-shadow font-weight-bold " id="ModalMenuSil" data-dismiss="modal">Sil</button>'+
            '</div>'+
            ' </div>'+
            '</div>'+
            '</div>' +
            '</div>';

    }
    $('#menuler_datatable').on('click','.menusil', function (){

        var data=$('#menuler_datatable').DataTable().row($(this).parents('tr')).data();
        var deleteID=data['menu_ID'];

        //modal'a id gönderme

        $("#modalDeleteID").val(deleteID);


        $('#ModalMenuSil').click(function(e){

            var postDeleteID=$("input[name=modalDeleteID]").val();

            $.ajax({
                url:"MenuSil.php",
                type:"POST",
                data:{'deleteID':postDeleteID,'menusilme':true},
                processData:true,
                success: function (data){
                    console.log(data);
                    $('#menuler_datatable').DataTable().ajax.reload();
                    Swal.fire(
                        {
                            position: 'top-right',
                            icon: 'info',
                            title: data,
                            showConfirmButton: false,
                            timer: 1500
                        });

                },
                error: function (){

                }
            });
        });



    } );



    function createUpdateBtn() {
        return '<div class="example-preview">' +
            '<button class="btn btn-sm btn-clean btn-icon updateMenu" id="updateBtn"  type="button" data-toggle="modal" data-target="#modal_update_menu" ' +
            '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Düzenle">' +
            '<span class="svg-icon svg-icon-md">' +
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"  viewBox="0 0 24 24" version="1.1">' +
            '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">' +
            ' <rect x="0" y="0"  width="24" height="24"/>' +
            '<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>' +
            '<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>' +
            '</g>' +
            ' </svg>' +
            '</span>' +
            '</a>' +
            '</button>' +
            '<div class="modal fade" id="modal_update_menu" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
            '<div class="modal-dialog modal-dialog-centered modal-lg" role="document">'+
            '<div class="modal-content">'+
            '<div class="modal-header">'+
            '<h5 class="modal-title" id="exampleModalLabel">Kayıt Güncelle</h5>'+
            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
            '<i aria-hidden="true" class="ki ki-close"></i>'+
            '</button>'+
            '</div>'+

            '<form class="form">'+
            '<div class="card-footer align-items-center">'+

            '<input type="hidden" id="menu_ID" name="menu_ID" class="form-control form-control-solid "/>'+

            ' <div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Tarih</label>'+
            '<div class="col-lg-4 col-md-9 col-sm-12">'+
            '<div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">'+
            '<input type="text" id="menu_Tarih" name="menu_Tarih" class="form-control form-control-solid datetimepicker-input" placeholder="" data-target="#kt_datetimepicker_3"/>'+
            '<div class="input-group-append" name="menu_Tarih" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">'+
            '<span class="input-group-text"><i class="ki ki-calendar"></i></span>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Çorba:</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " id="menu_Corba" name="menu_Corba">'+
            '<option value="">Seçiniz</option>'+
            '<?php
            include "DatabaseCon.php";
            global $db;
            $ListCorba=$db->query("select `ymk_Ad` from yemekler where `ymk_Tur`='Çorba' and ymk_Durum=1 ")->fetchAll(PDO::FETCH_ASSOC);
            foreach($ListCorba as $key=>$value){
                echo '<option value="'.$value['ymk_Ad'].'">'.$value['ymk_Ad'].'</option>';
            }
            ?>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Ana Yemek</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " id="menu_Yemek1" name="menu_Yemek1">'+
            '<option value="">Seçiniz</option>'+
            '<?php
            $ListAnaYemek=$db->query("select `ymk_Ad` from yemekler where `ymk_Tur`='Ana Yemek' and ymk_Durum=1 ")->fetchAll(PDO::FETCH_ASSOC);
            foreach($ListAnaYemek as $key=>$value){
                echo '<option value="'.$value['ymk_Ad'].'">'.$value['ymk_Ad'].'</option>';
            }
            ?>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Ana Yemek-2</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " id="menu_Yemek2" name="menu_Yemek2">'+
            '<option value="">Seçiniz</option>'+
            '<?php
                    $ListAnaYemek=$db->query("select `ymk_Ad` from yemekler where `ymk_Tur`='Ara Sıcak' and ymk_Durum=1 ")->fetchAll(PDO::FETCH_ASSOC);
                foreach($ListAnaYemek as $key=>$value){
                    echo '<option value="'.$value['ymk_Ad'].'">'.$value['ymk_Ad'].'</option>';
                }
                ?>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Ek</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " id="menu_Ek1" name="menu_Ek1">'+
            '<option value="">Seçiniz</option>'+
            '<?php
                $ListAnaYemek=$db->query("select `ymk_Ad` from yemekler where `ymk_Tur`='Ek' and ymk_Durum=1")->fetchAll(PDO::FETCH_ASSOC);
                foreach($ListAnaYemek as $key=>$value){
                    echo '<option value="'.$value['ymk_Ad'].'">'.$value['ymk_Ad'].'</option>';
                }
                ?>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Ek-2</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " id="menu_Ek2" name="menu_Ek2">'+
            '<option value="">Seçiniz</option>'+
            '<?php
                $ListAnaYemek=$db->query("select `ymk_Ad` from yemekler where `ymk_Tur`='Ek' and ymk_Durum=1")->fetchAll(PDO::FETCH_ASSOC);
                foreach($ListAnaYemek as $key=>$value){
                    echo '<option value="'.$value['ymk_Ad'].'">'.$value['ymk_Ad'].'</option>';
                }
                ?>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</form>' +

            '<div class="modal-body"></div>'+
            '<div class="modal-footer">'+
            '<button type="button" class="btn btn-dark-primary font-weight-bold" data-dismiss="modal">İptal</button>'+
            '<button type="button" class="btn btn-success btn-shadow font-weight-bold" id="menuGuncelle" data-dismiss="modal">Kaydet</button>'+
            '</div>'+
            ' </div>'+
            '</div>'+
            '</div>' +
            '</div>';
    }

    $('#menuler_datatable').on('click','.updateMenu', function (){

        var eskiVeri=$('#menuler_datatable').DataTable().row($(this).parents('tr')).data();
        var m_id=eskiVeri["menu_ID"];
        var m_tarih=eskiVeri["menu_Tarih"];
        var m_corba=eskiVeri["menu_Corba"];
        var m_yemek1=eskiVeri["menu_Yemek1"];
        var m_yemek2=eskiVeri["menu_Yemek2"];
        var m_ek1=eskiVeri["menu_Ek1"];
        var m_ek2=eskiVeri["menu_Ek2"];

        //Verileri modal'a yaz
        $('#menu_ID').val(m_id);
        $('#menu_Tarih').val(m_tarih);
        $('#menu_Corba').val(m_corba);
        $('#menu_Yemek1').val(m_yemek1);
        $('#menu_Yemek2').val(m_yemek2);
        $('#menu_Ek1').val(m_ek1);
        $('#menu_Ek2').val(m_ek2);

        $('#menuGuncelle').click(function (){


            var menu_ID=$("input[name=menu_ID]").val();
            var menu_Tarih=$("input[name=menu_Tarih]").val();
            var menu_Corba=$("select[name=menu_Corba]").val();
            var menu_Yemek1=$("select[name=menu_Yemek1]").val();
            var menu_Yemek2=$("select[name=menu_Yemek2]").val();
            var menu_Ek1=$("select[name=menu_Ek1]").val();
            var menu_Ek2=$("select[name=menu_Ek2]").val();


            $.ajax({
                url:"MenuDuzenle.php",
                type: "POST",
                data:{
                    'menu_ID':menu_ID,
                    'menu_Tarih':menu_Tarih,
                    'menu_Corba':menu_Corba,
                    'menu_Yemek1':menu_Yemek1,
                    'menu_Yemek2':menu_Yemek2,
                    'menu_Ek1':menu_Ek1,
                    'menu_Ek2':menu_Ek2

                },
                processData: true,
                success:function (data){
                    console.log("success!");
                    $('#menuler_datatable').DataTable().ajax.reload();
                },
                error:function (data){
                    console.log("error!");
                    Swal.fire(
                        {
                            position: 'top-right',
                            icon: 'success',
                            title: data,
                            showConfirmButton: false,
                            timer: 1500
                        });
                }
            });

        });

    });



    $("#btn_Cikis").click(function () {
        window.location.href = "Cikis.php";
    });

</script>




