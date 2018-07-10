<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Meeting
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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Meeting
                        </h3>
                    </div>
                    <div>
                        <a href="add-meeting.php" class="btn m-btn--pill btn-outline-brand m-btn--air">
                            Add New Meeting
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <section class="view-project-section">
                                <div class="m-portlet m-portlet--tab">
                                    <div class="m-portlet__head ">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                                <h3 class="m-portlet__head-text">
                                                    Meeting Name
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="countdown-container">
                                                    <ul class="countdown" id="countdown">

                                                    </ul>
                                                </div>
                                                <div class="power-body">
                                                    <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                       data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        Staff required to attend
                                                    </span>
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="m_gmap_1" style="height:280px;"></div>
                                            </div>
                                            <div class="col-md-12 mt-4 ">
                                                <a href="#" data-target="#m_modal_2" data-toggle="modal"
                                                   class="btn m-btn--pill m-btn--air btn-primary">
                                                    Edit
                                                </a>
                                                <a href="#" class="btn m-btn--pill m-btn--air btn-danger">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
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
    <!--Start Modala-->
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Meeting
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
                        <div class="col-md-12">
                            <h6>map:</h6>
                        </div>
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
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Duration:</h6>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group date" >
                                <input type="text" class="form-control m-input" placeholder="Select date and time" id="m_datetimepicker_5"/>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar glyphicon-th"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h6>Employee</h6>
                            <div class="form-group m-form__group ">

                                <select class="m_select2_9 form-control m-select2" id="select-3"
                                        name="param" multiple>
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">
                                            Alaska
                                        </option>
                                        <option value="HI">
                                            Hawaii
                                        </option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">
                                            California
                                        </option>
                                        <option value="NV">
                                            Nevada
                                        </option>
                                        <option value="OR">
                                            Oregon
                                        </option>
                                        <option value="WA">
                                            Washington
                                        </option>
                                    </optgroup>
                                </select>
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
                            <i class="fas fa-edit"></i>
                            <span>
                                Edit
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Modal-->
    <div class="modal fade" id="m_scrollable_modal_1" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Staff required to attend
                    </h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                                                        <span aria-hidden="true">
                                                            &times;
                                                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="m-scrollable" data-scrollbar-shown="true"
                         data-scrollable="true" data-height="200">
                        <div class="m-widget3">
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget3__item">
                                <div class="m-widget3__header">
                                    <div class="m-widget3__user-img">
                                        <img class="m-widget3__img"
                                             src="assets/app/media/img/users/user4.jpg"
                                             alt="">
                                    </div>
                                    <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                    </div>
                                    <a href="#" class="m-widget3__status m--font-info">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
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
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--    -->
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
    var GoogleMapsDemo2 = {
        init: function () {
            var t;
            (t = new GMaps({div: "#m_gmap_1", lat: 24.703662, lng: 46.663893})).addMarker({
                lat: 24.703662,
                lng: 46.663893,
                title: "Lima",
                icon: 'assets/green-marker.png',
                details: {database_id: 42, author: "Hamza"},
                infoWindow: {content: '<div class="map-span" style="color:#000">HTML Content!</div>'}
            }), t.setZoom(10)
        }
    };
    jQuery(document).ready(function () {
        GoogleMapsDemo2.init()
    });
</script>
<!--End Map script -->
<!--Start time down-->
<script>
    var end = new Date('10/8/2018 4:00 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = '<li class="countdown-item"><span class="countdown-value">' + days + '</span><span class="countdown-unit">days</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item"><span class="countdown-value">' + hours + '</span><span class="countdown-unit">hours</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item"><span class="countdown-value">' + minutes + '</span><span class="countdown-unit">minutes</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item d-md-table-cell d-none"><span class="countdown-value">' + seconds + '</span><span class="countdown-unit">seconds</span></li>';
    }

    timer = setInterval(showRemaining, 1000);
</script>
<!--End Time down-->
<script src="assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
</body>
<!-- end::Body -->
</html>
