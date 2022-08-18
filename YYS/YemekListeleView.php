<?php
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
    <title>Yemekhane Yönetim Sistemi | Yemekler</title>
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
    <link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
<!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />-->
<!---->
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
                                    YEMEKLER	                	            </h5>
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
                                        Yemek Listesi
<!--                                        <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span>-->
                                    </h3>
                                </div>
                            </div>

                            <div class="card-body">
                                <!--begin: Datatable-->
                                <table class="table table-striped table-light-dark table-bordered table-active" id="yemekler_datatable">
                                    <thead>
                                    <tr>
                                        <th title="Field #1">Yemek ID</th>
                                        <th title="Field #2">Ad</th>
                                        <th title="Field #3">Kalori</th>
                                        <th title="Field #4">Tür</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <table/>
                            </div>
                                <!--end: Datatable-->
                            </div>

                        </div>
                        <!--end::Card-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
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



    <!--begin::Footer-->

    <!--end::Footer-->


    <!--end::Page-->


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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
<!---->
<!---->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap4.min.js"></script>-->


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

<script type="text/javascript">

    function turListele() {

        var ymkTur = [
            "Çorba",
            "Ana Yemek",
            "Ara Sıcak"];

        var sel = document.getElementById("yeni_tur");
        var options_str = "";

        options_str='<option value="">' +"Seçiniz"+ '</option>';
        ymkTur.forEach(function (tur) {
            options_str += '<option value="' + tur + '">' + tur + '</option>';
        });

        sel.innerHTML = options_str;


        window.onload = function () {
            document.body.appendChild(sel);
        }
        return ymkTur;
    }

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

    Yetki();

    $(document).ready(function ()
    {


        $('#yemekler_datatable').DataTable( {
            dom: 'Bfrtip',
            lengthChange: false,
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3]
                    }
                },
                'colvis'
            ],
            "ajax": "YemekListele.php",
            "columns": [
                { data: "ymk_ID" },
                { data: "ymk_Ad" },
                { data: "ymk_Kalori" },
                { data: "ymk_Tur" },
                {"render": createUpdateBtn,"targets": [0]},
                {"render": createDeleteBtn, "targets": [0]}
            ],
            "language":{
                // "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
                "url":"js/dil.json"
            }
        } );
    });


    function createDeleteBtn() {

        return '<div class="example-preview">' +
                '<button class="btn btn-sm btn-clean btn-icon yemeksil " id="DeleteBtn" type="button" name="yemekSil" data-toggle="modal"  data-target="#modal_delete" ' +
                    '<a href="javascript:;" class="btn btn-sm btn-clean btn-icon sil" title="Sil">' +
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
                '<div class="modal fade" id="modal_delete" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
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
                                '<button type="button" class="btn btn-danger btn-shadow font-weight-bold " id="ModalYemekSil" data-dismiss="modal">Sil</button>'+
                            '</div>'+
                        ' </div>'+
                    '</div>'+
                '</div>' +
            '</div>';
    }
    //Silme İşlemi Veri Post Başlangıcı
    $('#yemekler_datatable').on('click', '.yemeksil', function(){

        var data =$('#yemekler_datatable').DataTable().row($(this).parents('tr')).data();
        var deleteID=data['ymk_ID'];

        //modal'a id gönderme

        $("#modalDeleteID").val(deleteID);


        $('#ModalYemekSil').click(function(e){

            var postDeleteID=$("input[name=modalDeleteID]").val();

            $.ajax({
                url:"YemekSil.php",
                type:"POST",
                data:{
                    'deleteID':postDeleteID,
                    'yemeksilme':true

                },
                processData: true,
                success:function(data){
                    console.log(data);
                    $('#yemekler_datatable').DataTable().ajax.reload();
                    Swal.fire(
                        {
                            position: 'top-right',
                            icon: 'info',
                            title: data,
                            showConfirmButton: false,
                            timer: 1500
                        });


                },
                error:function(){
                }
            });
        });



    });
    //Silme İşlemi Veri Post Bitişi


    function createUpdateBtn() {
        return '<div class="example-preview">' +
                '<button class="btn btn-sm btn-clean btn-icon updateButton" id="updateBtn"  type="button" data-toggle="modal" data-target="#modal_update" ' +
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
                '<div class="modal fade" id="modal_update" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
                    '<div class="modal-dialog modal-dialog-centered modal-lg" role="document">'+
                        '<div class="modal-content">'+
                            '<div class="modal-header">'+
                                '<h5 class="modal-title" id="exampleModalLabel">Kayıt Güncelle</h5>'+
                                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                    '<i aria-hidden="true" class="ki ki-close"></i>'+
                                '</button>'+
                            '</div>'+
             '<form enctype="multipart/form-data" id="uploadForm" method="POST">'+
            '<div class="card-body">'+

            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12"></label>'+
            '<div class="col-lg-6">'+
            '<input type="hidden" id="y_id" name="y_id" class="form-control"placeholder=""/>'+
            '<span class="form-text text-muted"></span>'+
            '</div>'+
            '</div>'+

            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Yemek Adı:</label>'+
            '<div class="col-lg-4">'+
            '<input type="text" id="yeni_ad" name="yeni_ad" class="form-control" placeholder=""/>'+
            '<span class="form-text text-muted">Lütfen yemek adını girin.</span>'+
            '</div>'+
            '</div>'+

            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Kalori:</label>'+
            '<div class="col-lg-4">'+
            '<input type="number" id="yeni_kalori" name="yeni_kalori" class="form-control"placeholder=""/>'+
            '<span class="form-text text-muted">Lütfen yemeğin kalorisini girin.</span>'+
            '</div>'+
            '</div>'+

            '<div class="form-group row">'+
            '<label class="col-form-label text-right col-lg-3 col-sm-12">Tür:</label>'+
            '<div class=" col-lg-4 col-md-9 col-sm-12">'+
            '<select class="form-control " type="text" id="yeni_tur" name="yeni_tur">'+
        '<option value="dd">Seçiniz</option>'+
            '</select>'+
            '</div>'+

             '<button class="btn btn-light-primary btn-icon" type="button" name="modal_Ac" data-toggle="modal" data-target="#modal_turEkle">...</button>'+

            '<div class="modal fade" id="modal_turEkle" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
            '<div class="modal-dialog modal-dialog-centered" role="document">'+
            '<div class="modal-content">'+
            '<div class="modal-header">'+
            '<h5 class="modal-title" id="exampleModalLabel">Tür Ekleme</h5>'+
            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
            '<i aria-hidden="true" class="ki ki-close"></i>'+
            '</button>'+
            '</div>'+
            '<div class="modal-body">'+
            '<label class="col-form-label text-right ">Tür Adı:</label>'+
            '<input type="text" id="input_tur_ekle" name="input_tur_ekle" class="form-control" placeholder=""/>'+
            ' </div>'+
            '<div class="modal-footer">'+
            '<button type="button" class="btn btn-dark-primary font-weight-bold" data-dismiss="modal">Kapat</button>'+
            '<button type="button" class="btn btn-primary btn-shadow font-weight-bold btn-modal-tur" id="BtnModalTurEkle"data="modal">Ekle</button>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+

        <!--begin::Card-->

        <!--end::Card-->
            '</div>'+
        '</form>'+
            '<div class="modal-body"></div>'+
                                '<div class="modal-footer">'+
                                    '<button type="button" class="btn btn-dark-primary font-weight-bold" data-dismiss="modal">İptal</button>'+
                                    '<button type="button" class="btn btn-success btn-shadow font-weight-bold" id="yemekGuncelle" data-dismiss="modal">Kaydet</button>'+
                                '</div>'+
                        ' </div>'+
                    '</div>'+
                '</div>' +
            '</div>';
    }

    //Güncelleme İşlemi Veri Post Başlangıcı
        //Modal'a veri gönder
    $('#yemekler_datatable').on('click', '.updateButton', function(){


        var ymkTur=turListele();

        // //Tür ekleme modal ekle butonu
         $("#BtnModalTurEkle").click(function (){

            var tur_adi=$("input[name=input_tur_ekle]").val();
            ymkTur.push(tur_adi);

            var sel = document.getElementById("yeni_tur");
            var options_str = "";

            options_str='<option value="">' +"Seçiniz"+ '</option>';
            ymkTur.forEach(function (tur) {
                options_str += '<option value="' + tur + '">' + tur + '</option>';
            });

            sel.innerHTML = options_str;


            window.onload = function () {
                document.body.appendChild(sel);
            }

            $("input[name=input_tur_ekle]").val("");
            $('#modal_turEkle').modal('toggle');

        });

        var eskiVeri=$('#yemekler_datatable').DataTable().row($(this).parents('tr')).data();
        var y_id=eskiVeri['ymk_ID'];//görünmez input ile modala gönder oradan Yemek Düzenleye Post ettir.
        var y_adi=eskiVeri['ymk_Ad'];
        var y_kalori=eskiVeri['ymk_Kalori'];
        var y_tur=eskiVeri['ymk_Tur'];




        //verileri modal'a yazdır
        $("#y_id").val(y_id);
        $("#yeni_ad").val(y_adi);
        $("#yeni_kalori").val(y_kalori);
        $("#yeni_tur").val(y_tur);


        //Modal'daki yeni verileri YemekDuzenle'ye gönder
        $('#yemekGuncelle').click(function(e){


            var fd= new FormData();
            var ymk_id=$("input[name=y_id]").val();
            var ymk_adi=$("input[name=yeni_ad]").val();
            var ymk_kalori=$("input[name=yeni_kalori]").val();
            var ymk_tur=$("select[name=yeni_tur]").val();


            fd.append('y_id',ymk_id);
            fd.append('y_adi',ymk_adi);
            fd.append('y_kalori',ymk_kalori);
            fd.append('y_tur',ymk_tur);


            e.preventDefault();
            $.ajax({
                url:"YemekDuzenle.php",
                type:"POST",
                data: fd,
                processData: false,
                contentType: false,
                success:function(data){
                    console.log("success");
                    $('#yemekler_datatable').DataTable().ajax.reload();
                    Swal.fire(
                        {
                            position: 'top-right',
                            icon: 'success',
                            title: data,
                            showConfirmButton: false,
                            timer: 1500
                        });
                },
                error:function(){
                    console.log("error");
                }
            });

            $('body').removeClass('modal-open')
            $('.modal-backdrop').remove()

        });


    });
    //Güncelleme İşlemi Veri Post Bitişi





    $("#btn_Cikis").click(function () {
        window.location.href = "Cikis.php";
    });
</script>



