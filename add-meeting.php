<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Add Meeting
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
                            Add Meeting
                        </h3>
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
                                                    Add New Meeting
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <label for="Meeting-Name">
                                                        Meeting Name
                                                    </label>
                                                    <input type="Text" class="form-control m-input" id="Meeting-Name"
                                                           placeholder="Meeting Name">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="m_datetimepicker_5">Meeting Date</label>
                                                <div class="input-group date">

                                                    <input type="text" class="form-control m-input"
                                                           placeholder="Select date and time" id="m_datetimepicker_5"/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar glyphicon-th"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group row">
                                                    <div class="col-12">
                                                        <label for="select-3">
                                                            Staff required to attend
                                                        </label>
                                                    </div>
                                                    <div class="col-12">
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
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <label for="exampleInputEmail1">
                                                        File upload
                                                    </label>
                                                    <div></div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">
                                                            Choose file
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group">
                                                    <label for="exampleTextarea">
                                                        The proceedings required for discussion
                                                    </label>
                                                    <textarea class="form-control m-input" id="exampleTextarea" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group m-form__group row">
                                                    <div class="col-12">
                                                        <label for="select-3">
                                                            Projects related to the meeting
                                                        </label>
                                                    </div>
                                                    <div class="col-12">
                                                        <select class="m_select2_9 form-control m-select2" id="select-4"
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
                                                <a href="#" data-toggle="modal" data-target="#m_modal_2" class="btn btn-outline-brand m-btn m-btn--icon m-btn--outline-2x">
                                                    <span>
                                                        <i class="fas fa-plus"></i>
                                                        <span>
                                                            Meeting Place
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn m-btn--pill m-btn--air btn-success" type="submit">
                                                    Submit
                                                </button>
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
</body>
<!-- end::Body -->
</html>
