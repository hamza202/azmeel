<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Map
    </title>
    <?php
    include "style.php"
    ?>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->

    <!-- END: Brand -->
    <?php
    include "menu.php"
    ?>

    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <?php
        include('left-menu.php')
        ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Our Map
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Add Location
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="add-power">
                                    <form action="#">
                                        <div class="row text-center ">
                                            <div class="col-sm-8 text-sm-left">

                                                <a href="#"
                                                   class="btn btn-brand  m-btn--air m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"
                                                   data-toggle="modal" data-target="#m_modal_1">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                                <h4 class="head-4">Add New Location</h4>
                                                <!--begin::Modal-->
                                                <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Information of location
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">
                                                                        &times;
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="form-group m-form__group">
                                                                            <label>
                                                                                Lat:
                                                                            </label>
                                                                            <div class=" m-input-icon--left">
                                                                                <input type="text"
                                                                                       class="form-control m-input"
                                                                                       placeholder="lat">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <div class="form-group m-form__group">
                                                                            <label>
                                                                                Lng:
                                                                            </label>
                                                                            <div class=" m-input-icon--left">
                                                                                <input type="text"
                                                                                       class="form-control m-input"
                                                                                       placeholder="lng">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <div class="form-group m-form__group">
                                                                            <label>
                                                                                Description:
                                                                            </label>
                                                                            <div class=" m-input-icon--left">
                                                                                <input type="text"
                                                                                       class="form-control m-input"
                                                                                       placeholder="Description">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="m-form__group form-group marker-select">
                                                                            <label for="">
                                                                                Marker
                                                                            </label>
                                                                            <div class="m-radio-inline">
                                                                                <label class="m-radio m-radio--solid m-radio--brand">
                                                                                    <input type="radio" name="example_3"
                                                                                           value="1">
                                                                                    <img src="assets/green-marker.png" alt="">
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="m-radio m-radio--solid m-radio--brand">
                                                                                    <input type="radio" name="example_3"
                                                                                           value="2">
                                                                                    <img src="assets/orange-marker.png" alt="">
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="m-radio m-radio--solid m-radio--brand">
                                                                                    <input type="radio" name="example_3"
                                                                                           value="3">
                                                                                    <img src="assets/red-marker.png" alt="">
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button href="#"
                                                                        class="btn btn-outline-brand m-btn m-btn--icon">
                                                                    <span>
                                                                        <i class="fas fa-plus"></i>
                                                                        <span>
                                                                            Add
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Modal-->
                                            </div>
                                            <div class="col-sm-4 mt-3 mt-sm-0 text-sm-right">
                                                <button type="submit" class="btn btn-success">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="power-body">
                                    <div id="m_gmap_3" style="height:500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Body -->
    <!-- begin::Footer -->
    <?php
    include 'footer.php'
    ?>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<?php
include "quick_sidebar.php"
?>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!--begin::Base Scripts -->
<?php
include "javascript.php"
?>
<!--Start map script-->
<script>
    var GoogleMapsDemo = {
        init: function () {
            var t;
            (t = new GMaps({div: "#m_gmap_3", lat: 24.703662, lng: 46.663893})).addMarker({
                lat: 24.703662,
                lng: 46.663893,
                title: "Lima",
                icon:'assets/green-marker.png',
                details: {database_id: 42, author: "Hamza"},
                infoWindow: {content: '<div class="map-span" style="color:#000">HTML Content!</div>'}
            }), t.addMarker({
                lat: 24.603662,
                lng: 46.763893,
                title: "Marker with InfoWindow",
                icon:'assets/red-marker.png',
                infoWindow: {content: '<div class="map-span" style="color:#000">HTML Content!</div>'}
            }), t.addMarker({
                lat: 24.803662,
                lng: 46.763893,
                icon:'assets/orange-marker.png',
                title: "Marker with InfoWindow",
                infoWindow: {content: '<div class="map-span" style="color:#000">HTML Content!</div>'}
            }),t.addMarker({
                lat: 24.753662,
                lng: 46.703893,
                icon:'',
                title: "Marker with InfoWindow",
                infoWindow: {content: '<div  class="map-span" style="color:#000">Our Company</div>'}
            }),t.setZoom(10)
        }
    };
    jQuery(document).ready(function () {
        GoogleMapsDemo.init()
    });

</script>
<!--End map script-->
</body>
<!-- end::Body -->
</html>
