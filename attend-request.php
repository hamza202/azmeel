<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Attend request
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
                            Attend Request
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="view-project-section">
                            <div class="m-portlet m-portlet--tab">
                                <div class="m-portlet__head ">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                            <h3 class="m-portlet__head-text">
                                                Attend Request
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <form action="#">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group m-form__group ">
                                                <label for="select-3">
                                                    Members to attend:
                                                </label>
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
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">
                                                            Arizona
                                                        </option>
                                                        <option value="CO">
                                                            Colorado
                                                        </option>
                                                        <option value="ID">
                                                            Idaho
                                                        </option>
                                                        <option value="MT">
                                                            Montana
                                                        </option>
                                                        <option value="NE">
                                                            Nebraska
                                                        </option>
                                                        <option value="NM">
                                                            New Mexico
                                                        </option>
                                                        <option value="ND">
                                                            North Dakota
                                                        </option>
                                                        <option value="UT">
                                                            Utah
                                                        </option>
                                                        <option value="WY">
                                                            Wyoming
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="place">
                                                    Attendance place:
                                                </label>
                                                <input type="text" class="form-control m-input" id="place" placeholder="Attendance place">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="place">
                                                Attendance Date:
                                            </label>
                                            <div class="input-group date" >

                                                <input type="text" class="form-control m-input" placeholder="Select date and time" id="m_datetimepicker_5"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar glyphicon-th"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="m-checkbox m-checkbox--bold m-checkbox--state-success">
                                                <input type="checkbox">
                                                Attendance now
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-outline-success">
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="m-widget3">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                            <span class="m-widget3__username">
                                                                              Melania Trump
                                                                            </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                                <i class="fab fa-facebook-messenger"></i>
                                                                            </a>
                                                                             <a href="#"
                                                                                class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="fab fa-facebook"></i>
                                                                            </a>
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="far fa-envelope"></i>
                                                                            </a>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                            <span class="m-widget3__username">
                                                                              Melania Trump
                                                                            </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                                <i class="fab fa-facebook-messenger"></i>
                                                                            </a>
                                                                             <a href="#"
                                                                                class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="fab fa-facebook"></i>
                                                                            </a>
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="far fa-envelope"></i>
                                                                            </a>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                            <span class="m-widget3__username">
                                                                              Melania Trump
                                                                            </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                                <i class="fab fa-facebook-messenger"></i>
                                                                            </a>
                                                                             <a href="#"
                                                                                class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="fab fa-facebook"></i>
                                                                            </a>
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="far fa-envelope"></i>
                                                                            </a>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                            <span class="m-widget3__username">
                                                                              Melania Trump
                                                                            </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                                <i class="fab fa-facebook-messenger"></i>
                                                                            </a>
                                                                             <a href="#"
                                                                                class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="fab fa-facebook"></i>
                                                                            </a>
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="far fa-envelope"></i>
                                                                            </a>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                            <span class="m-widget3__username">
                                                                              Melania Trump
                                                                            </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                                <i class="fab fa-facebook-messenger"></i>
                                                                            </a>
                                                                             <a href="#"
                                                                                class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="fab fa-facebook"></i>
                                                                            </a>
                                                                            <a href="#"
                                                                               class="float-none pt-0 m-widget3__status d-inline-block">
                                                                                <i class="far fa-envelope"></i>
                                                                            </a>
                                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                 src="assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                  Melania Trump
                                                                </span>
                                                            <br>
                                                            <span class="m-widget3__time">
                                                                            Engineer
                                                                             </span>
                                                            <span class="d-block mb-3 m-widget3-social">
                                                                <a href="#"
                                                                   class="float-none pt-0 m-widget3__status m--font-info d-inline-block">
                                                                    <i class="fab fa-facebook-messenger"></i>
                                                                </a>
                                                                 <a href="#"
                                                                    class="float-none pt-0 m-widget3__status d-inline-block">
                                                                    <i class="fab fa-facebook"></i>
                                                                </a>
                                                                <a href="#"
                                                                   class="float-none pt-0 m-widget3__status d-inline-block">
                                                                    <i class="far fa-envelope"></i>
                                                                </a>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
<script src="assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--end::Page Snippets -->

<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
