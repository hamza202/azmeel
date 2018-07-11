<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Change work location
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
                            Change work location
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
                                                Work location
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="e-name">
                                                    Employee Name:
                                                </label>
                                                <input type="text" class="form-control m-input" id="e-name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="F-number">
                                                    Functional number:
                                                </label>
                                                <input type="text" class="form-control m-input" id="F-number" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="F-number">
                                                    Current location:
                                                </label>
                                                <input type="text" class="form-control m-input" id="F-number" placeholder="Current location" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group1 m-form__group">
                                                <label for="exampleInputEmail1">
                                                    New location:
                                                </label>
                                                <div></div>
                                                <select class="custom-select form-control">
                                                    <option selected="">
                                                        Open this select menu
                                                    </option>
                                                    <option value="1">
                                                        One
                                                    </option>
                                                    <option value="2">
                                                        Two
                                                    </option>
                                                    <option value="3">
                                                        Three
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-outline-success">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                    </form>
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
<!--end::Page Snippets -->

<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
