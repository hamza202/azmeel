<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Add New Member
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
                            New Member
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
                                            Add New Member
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <form action="#">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group row">
                                                    <div class=" col-sm-12">
                                                        <div class="m-dropzone dropzone m-dropzone--brand"
                                                             action="inc/api/dropzone/upload.php"
                                                             id="m-dropzone-three">
                                                            <div class="m-dropzone__msg dz-message needsclick">
                                                                <h3 class="m-dropzone__msg-title">
                                                                    personal picture
                                                                </h3>
                                                                <span class="m-dropzone__msg-desc">
                                                                       Drop img here or click to upload.<br> Only image is allowed for upload.
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group">
                                                    <label for="Name">
                                                        Name
                                                    </label>
                                                    <input type="text" class="form-control m-input" id="Name"
                                                           aria-describedby="Name" placeholder="Name">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label for="exampleInputEmail1">
                                                        Email address
                                                    </label>
                                                    <input type="email" class="form-control m-input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter email">
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <label for="Functional_number">
                                                        Functional number
                                                    </label>
                                                    <input type="text" class="form-control m-input"
                                                           id="Functional_number"
                                                           aria-describedby="Functional number"
                                                           placeholder="Functional number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group">
                                                    <label for="m_select2_9">
                                                        Choose the powers
                                                    </label>
                                                    <select class="form-control m-select2" id="m_select2_9"
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
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group">
                                                    <label for="Phone_Number">
                                                        Phone Number
                                                    </label>
                                                    <input type="text" class="form-control m-input" id="Phone_Number"
                                                           aria-describedby="Phone_Number" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group">
                                                    <label for="Password1">
                                                        Password
                                                    </label>
                                                    <input type="password" class="form-control" id="Password1"
                                                           placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-form__group">
                                                    <label for="Password2">
                                                        Confirm password
                                                    </label>
                                                    <input type="password" class="form-control" id="Password2"
                                                           placeholder="Confirm password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn  m-btn--air btn-outline-brand m-btn m-btn--custom">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
