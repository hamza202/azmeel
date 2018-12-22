<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Profile
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
                            Profile
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
                                    <div class="m-portlet__head-caption ">
                                        <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                            <h3 class="m-portlet__head-text">
                                                Profile Details
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="edit-profile-photo">
                                                <img class="profile-pic pic1" src="assets/user-avatar.jpg"
                                                     alt="">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" class="upload file-upload up1"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group">
                                                        <label for="project-owner">
                                                            Name:
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="project-owner" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group">
                                                        <label for="Jop-Title">
                                                            Jop Title:
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="Jop-Title" placeholder="Jop Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group">
                                                        <label for="Functional-number">
                                                            Functional number:
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="Functional-number" placeholder="Functional number">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="p-email">
                                                    Email:
                                                </label>
                                                <input type="email" class="form-control m-input" id="p-email"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="p-number">
                                                    Phone number:
                                                </label>
                                                <input type="text" class="form-control m-input" id="p-number"
                                                       placeholder="Phone number">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn m-btn--pill m-btn--air btn-outline-success">
                                                    Submit
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
<script>
    $(document).ready(function () {


        var readURL = function (input = ['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic1').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up1").on('change', function () {
            readURL(this);
        });


    });

</script>
</body>
<!-- end::Body -->
</html>
