<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Classification
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
                            Classification
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
                                            Add Classification
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="add-power">
                                    <form action="#">
                                        <div class="row text-center ">
                                            <div class="col-sm-12 text-sm-left">

                                                <a href="#"
                                                   class="btn btn-brand  m-btn--air m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"
                                                   data-toggle="modal" data-target="#m_modal_1">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                                <h4 class="head-4">Add new classification</h4>
                                                <!--begin::Modal-->
                                                <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    Add new Classification
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">
                                                                        &times;
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group m-form__group">
                                                                    <label>
                                                                        Name of the classification
                                                                    </label>
                                                                    <div class=" m-input-icon--left">
                                                                        <input type="text" class="form-control m-input"
                                                                               placeholder="classification">

                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group row">
                                                                    <label class="col-form-label  col-sm-12">
                                                                        Choose the powers:
                                                                    </label>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control m-select2" id="m_select2_9" name="param" multiple>
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
                                                                                <option value="NV" selected>
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
                                                                            <optgroup label="Central Time Zone">
                                                                                <option value="AL">
                                                                                    Alabama
                                                                                </option>
                                                                                <option value="AR">
                                                                                    Arkansas
                                                                                </option>
                                                                                <option value="IL">
                                                                                    Illinois
                                                                                </option>
                                                                                <option value="IA">
                                                                                    Iowa
                                                                                </option>
                                                                                <option value="KS">
                                                                                    Kansas
                                                                                </option>
                                                                                <option value="KY">
                                                                                    Kentucky
                                                                                </option>
                                                                                <option value="LA">
                                                                                    Louisiana
                                                                                </option>
                                                                                <option value="MN">
                                                                                    Minnesota
                                                                                </option>
                                                                                <option value="MS">
                                                                                    Mississippi
                                                                                </option>
                                                                                <option value="MO">
                                                                                    Missouri
                                                                                </option>
                                                                                <option value="OK">
                                                                                    Oklahoma
                                                                                </option>
                                                                                <option value="SD">
                                                                                    South Dakota
                                                                                </option>
                                                                                <option value="TX">
                                                                                    Texas
                                                                                </option>
                                                                                <option value="TN">
                                                                                    Tennessee
                                                                                </option>
                                                                                <option value="WI">
                                                                                    Wisconsin
                                                                                </option>
                                                                            </optgroup>
                                                                            <optgroup label="Eastern Time Zone">
                                                                                <option value="CT">
                                                                                    Connecticut
                                                                                </option>
                                                                                <option value="DE">
                                                                                    Delaware
                                                                                </option>
                                                                                <option value="FL">
                                                                                    Florida
                                                                                </option>
                                                                                <option value="GA">
                                                                                    Georgia
                                                                                </option>
                                                                                <option value="IN">
                                                                                    Indiana
                                                                                </option>
                                                                                <option value="ME">
                                                                                    Maine
                                                                                </option>
                                                                                <option value="MD">
                                                                                    Maryland
                                                                                </option>
                                                                                <option value="MA">
                                                                                    Massachusetts
                                                                                </option>
                                                                                <option value="MI">
                                                                                    Michigan
                                                                                </option>
                                                                                <option value="NH">
                                                                                    New Hampshire
                                                                                </option>
                                                                                <option value="NJ">
                                                                                    New Jersey
                                                                                </option>
                                                                                <option value="NY">
                                                                                    New York
                                                                                </option>
                                                                                <option value="NC">
                                                                                    North Carolina
                                                                                </option>
                                                                                <option value="OH">
                                                                                    Ohio
                                                                                </option>
                                                                                <option value="PA">
                                                                                    Pennsylvania
                                                                                </option>
                                                                                <option value="RI">
                                                                                    Rhode Island
                                                                                </option>
                                                                                <option value="SC">
                                                                                    South Carolina
                                                                                </option>
                                                                                <option value="VT">
                                                                                    Vermont
                                                                                </option>
                                                                                <option value="VA">
                                                                                    Virginia
                                                                                </option>
                                                                                <option value="WV">
                                                                                    West Virginia
                                                                                </option>
                                                                            </optgroup>
                                                                        </select>
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

                                        </div>
                                    </form>
                                </div>
                                <div class="power-body">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                   data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        validity
                                                    </span>
                                                </span>
                                                </a>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                   data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        validity
                                                    </span>
                                                </span>
                                                </a>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                   data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        validity
                                                    </span>
                                                </span>
                                                </a>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                   data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        validity
                                                    </span>
                                                </span>
                                                </a>
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--begin::Modal-->
                                    <div class="modal fade" id="m_scrollable_modal_1" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="#">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            validity
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
                                                            <div class="m-widget3 m-widget2">
                                                                <div class="m-widget3__item">
                                                                    <div class="m-widget3__header">
                                                                        <div class="delete-check m-widget3__user-img">
                                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--danger">
                                                                                <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                            <img class="m-widget3__img"
                                                                                 src="assets/app/media/img/users/user4.jpg"
                                                                                 alt="">
                                                                        </div>

                                                                        <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                                                        </div>
                                                                        <a href="#"
                                                                           class="m-widget3__status m--font-info">
                                                                            <i class="fab fa-facebook-messenger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="m-widget3__item">
                                                                    <div class="m-widget3__header">
                                                                        <div class="delete-check m-widget3__user-img">
                                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--danger">
                                                                                <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                            <img class="m-widget3__img"
                                                                                 src="assets/app/media/img/users/user4.jpg"
                                                                                 alt="">
                                                                        </div>

                                                                        <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                                                        </div>
                                                                        <a href="#"
                                                                           class="m-widget3__status m--font-info">
                                                                            <i class="fab fa-facebook-messenger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="m-widget3__item">
                                                                    <div class="m-widget3__header">
                                                                        <div class="delete-check m-widget3__user-img">
                                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--danger">
                                                                                <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                            <img class="m-widget3__img"
                                                                                 src="assets/app/media/img/users/user4.jpg"
                                                                                 alt="">
                                                                        </div>

                                                                        <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                                                        </div>
                                                                        <a href="#"
                                                                           class="m-widget3__status m--font-info">
                                                                            <i class="fab fa-facebook-messenger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="m-widget3__item">
                                                                    <div class="m-widget3__header">
                                                                        <div class="delete-check m-widget3__user-img">
                                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--danger">
                                                                                <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                            <img class="m-widget3__img"
                                                                                 src="assets/app/media/img/users/user4.jpg"
                                                                                 alt="">
                                                                        </div>

                                                                        <div class="m-widget3__info">
                                                                <span class="m-widget3__username">
                                                                    Hamza Abo Aitah
                                                                </span>
                                                                        </div>
                                                                        <a href="#"
                                                                           class="m-widget3__status m--font-info">
                                                                            <i class="fab fa-facebook-messenger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end::Modal-->
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
<!--end::Page Snippets -->

<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
