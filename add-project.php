<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Add project
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
                            Add project
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
                                            Add new project
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <ul class="nav nav-tabs  m-tabs-line m-tabs-line--brand" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#tabs1"
                                           role="tab">
                                            <i class="flaticon-menu-button"></i>
                                            General
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#tabs2" role="tab">
                                            <i class="flaticon-graph"></i>
                                            Work plan
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#tabs3" role="tab">
                                            <i class="flaticon-users"></i>
                                            Employees
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#tabs4" role="tab">
                                            <i class="flaticon-folder-1"></i>
                                            Files
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#tabs5" role="tab">
                                            <i class="flaticon-background"></i>
                                            Project Sections
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#tabs6" role="tab">
                                            <i class="flaticon-list-3"></i>
                                            Pending orders
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!--  Start General tab  -->
                                    <div class="tab-pane active" id="tabs1" role="tabpanel">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group">
                                                        <label for="Project-name">
                                                            Project Name
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="Project-name" aria-describedby="Project-name"
                                                               placeholder="Project Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="m-dropzone dropzone m-dropzone--brand"
                                                         action="inc/api/dropzone/upload.php"
                                                         id="m-dropzone-three">
                                                        <div class="m-dropzone__msg dz-message needsclick">
                                                            <h3 class="m-dropzone__msg-title">
                                                                Project Photo
                                                            </h3>
                                                            <span class="m-dropzone__msg-desc">
                                                               Drop img here or click to upload.<br> Only image is allowed for upload.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group">
                                                        <label for="exampleTextarea">
                                                            About the project
                                                        </label>
                                                        <textarea class="form-control m-input" id="exampleTextarea"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group ">
                                                        <label for="m_select2_9">
                                                            Project section:
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
                                                        <label for="project-owner">
                                                            Project owner
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="project-owner" aria-describedby="emailHelp"
                                                               placeholder="project owner">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group ">
                                                        <label for="select-2">
                                                            Project manager:
                                                        </label>
                                                        <select class="m_select2_9 form-control m-select2" id="select-2"
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
                                                    <div class="form-group m-form__group ">
                                                        <label for="select-3">
                                                            Project Consultant:
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
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group m-form__group">
                                                        <label for="project-value">
                                                            Project value
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    $
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control m-input"
                                                                   id="project-value" placeholder="Project value"
                                                                   aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group m-form__group">
                                                        <label for="Invoiced-value">
                                                            Invoiced value
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    $
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control m-input"
                                                                   id="Invoiced-value" placeholder="Invoiced value">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group m-form__group">
                                                        <label for="Residual-value">
                                                            Residual value
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    $
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control m-input"
                                                                   id="Residual-value" placeholder="Residual value">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit"
                                                            class="btn  m-btn--air btn-outline-brand m-btn m-btn--custom">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--  End General tab  -->
                                    <!--  Start Work plan Tab -->
                                    <div class="tab-pane" id="tabs2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="m-portlet__body">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h5 class="m-portlet__head-text">The duration of the project
                                                                is <span class="text-danger">8 months</span></h5>
                                                            <canvas id="myChart" width="100%" height="20"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-center">
                                                            <div class="progress-pie-chart" id="pie-chart"
                                                                 data-percent="66">
                                                                <div class="ppc-progress">
                                                                    <div class="ppc-progress-fill"
                                                                         id="ppc-progress-fill1"></div>
                                                                </div>
                                                                <div class="ppc-percents" id="ppc-percents1">
                                                                    <div class="pcc-percents-wrapper">
                                                                        <span>%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h5 class="m--margin-top-20 m--font-success">Percentage of
                                                                completion according to plan</h5>
                                                        </div>
                                                        <div class="col-md-6 text-center">
                                                            <div class="progress-pie-chart" id="pie-chart2"
                                                                 data-percent1="50">
                                                                <div class="ppc-progress">
                                                                    <div class="ppc-progress-fill"
                                                                         id="ppc-progress-fill2"></div>
                                                                </div>
                                                                <div class="ppc-percents" id="ppc-percents2">
                                                                    <div class="pcc-percents-wrapper">
                                                                        <span>%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h5 class="m--margin-top-20 m--font-success">Real
                                                                achievement rate</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <div class="col-md-12 mt-5">
                                                            <h4 class="Status-h4"><span
                                                                        class="text-warning">Status:</span> <span
                                                                        class="m-badge m-badge--success m-badge--wide">advanced</span>
                                                                <span class="m-badge m-badge--danger m-badge--wide">Late</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  End Work plan Tab -->
                                    <!--  Start employees Tab -->
                                    <div class="tab-pane" id="tabs3" role="tabpanel">
                                        <form action="#">
                                            <div class="row ">
                                                <div class="col-md-12">
                                                    <div class="form-group m-form__group">
                                                        <label for="Project_manager">
                                                            Project manager
                                                        </label>
                                                        <input type="text" class="form-control m-input"
                                                               id="Project_manager" placeholder="Project manager">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-form__group ">
                                                        <label for="select-3">
                                                            Vice Project Manager:
                                                        </label>
                                                        <select class="m_select2_9 form-control m-select2"
                                                                id="select-11"
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
                                                    <div class="form-group m-form__group overflow-hidden ">
                                                        <label for="select-5">
                                                            Operating manger:
                                                        </label>
                                                        <select class="m_select2_9 form-control m-select2" id="select-5"
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
                                            <div class="row">
                                                <div class="col-md-12 border-bottom pt-2 pb-2"></div>
                                                <div class="col-sm-12 text-sm-left pt-3">

                                                    <a href="#"
                                                       class="btn btn-brand  m-btn--air m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"
                                                       data-toggle="modal" data-target="#m_modal_1">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                    <h4 class="head-4">Add new employees group</h4>
                                                </div>
                                                <div class="col-md-12 border-bottom pt-2 pb-2"></div>

                                            </div>
                                            <div class="power-body">
                                                <div class="row employee-group">
                                                    <div class="col-md-6 mt-3">
                                                        <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                           data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        Engineers
                                                    </span>
                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                           data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        Electronic employee
                                                    </span>
                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                           data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        Employee group1
                                                    </span>
                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <a href="#" class="btn btn-outline-brand m-btn m-btn--icon"
                                                           data-target="#m_scrollable_modal_1" data-toggle="modal">
                                                <span>
                                                    <i class="fa fa-user"><b class="validity-view">25</b></i>
                                                    <span>
                                                        Employee group2
                                                    </span>
                                                </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--  End employees Tab -->
                                    <!--  Start Files Tap  -->
                                    <div class="tab-pane" id="tabs4" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <button type="button" class="btn btn-brand" data-toggle="modal"
                                                        data-target="#m_modal_5">
                                                    Upload Report
                                                    <i class="fas fa-upload pl-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <form class="m-form m-form--fit m--margin-bottom-20">
                                                    <div class="row m--margin-bottom-20">
                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                            <label>
                                                                ID:
                                                            </label>
                                                            <input type="text" class="form-control m-input"
                                                                   placeholder="E.g: 4590" data-col-index="0">
                                                        </div>
                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                            <label>
                                                                Report Name:
                                                            </label>
                                                            <input type="text" class="form-control m-input"
                                                                   placeholder="E.g: 37000-300" data-col-index="1">
                                                        </div>
                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                            <label>
                                                                Upload By:
                                                            </label>
                                                            <input type="text" class="form-control m-input"
                                                                   placeholder="E.g: Hamza" data-col-index="2">
                                                        </div>
                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                            <label>
                                                                Upload Date:
                                                            </label>
                                                            <div class="input-daterange input-group m_datepicker">
                                                                <input type="text" class="form-control m-input"
                                                                       name="start"
                                                                       placeholder="From" data-col-index="3"/>
                                                                <div class="input-group-append">
																					<span class="input-group-text">
																						<i class="la la-ellipsis-h"></i>
																					</span>
                                                                </div>
                                                                <input type="text" class="form-control m-input"
                                                                       name="end"
                                                                       placeholder="To" data-col-index="3"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-separator m-separator--md m-separator--dashed"></div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <button class="btn btn-brand m-btn m-btn--icon m_search">
																				<span>
																					<i class="la la-search"></i>
																					<span>
																						Search
																					</span>
																				</span>
                                                            </button>
                                                            &nbsp;&nbsp;
                                                            <button class="btn btn-secondary m-btn m-btn--icon m_reset">
																				<span>
																					<i class="la la-close"></i>
																					<span>
																						Reset
																					</span>
																				</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                                       id="m_table_1">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            ID
                                                        </th>
                                                        <th>
                                                            Report Name
                                                        </th>
                                                        <th>
                                                            Upload By
                                                        </th>
                                                        <th>
                                                            Upload Date
                                                        </th>
                                                        <th>
                                                            more
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            01
                                                        </td>
                                                        <td>
                                                            Report name1
                                                        </td>
                                                        <td>
                                                            5/21/2017
                                                        </td>
                                                        <td>
                                                            hamza
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>
                                                            ID
                                                        </th>
                                                        <th>
                                                            Report Name
                                                        </th>
                                                        <th>
                                                            Upload Date
                                                        </th>
                                                        <th>
                                                            Upload By
                                                        </th>
                                                        <th>
                                                            More
                                                        </th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!--begin:: File view Modal-->
                                        <div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            More Details
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
                                                             data-scrollable="true" data-height="300">
                                                            <form>
                                                                <div class="m-section">
                                                                    <div class="m-section__content">
                                                                        <table class="table m-table m-table--head-bg-brand file-details-table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    File name
                                                                                </th>
                                                                                <th>
                                                                                    Upload By
                                                                                </th>
                                                                                <th>
                                                                                    Upload Date
                                                                                </th>
                                                                                <th>
                                                                                    Show File
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr class="gry-bg">
                                                                                <td>
                                                                                    6565-564
                                                                                </td>
                                                                                <td>
                                                                                    Larry
                                                                                </td>
                                                                                <td>
                                                                                    7/5/2018
                                                                                </td>
                                                                                <td>
                                                                                    <a href="https://docs.google.com/spreadsheets/d/1uCNdAAbLM0x6r1V_UJTR-5GVhxlPDp-ydtl_mfPeJ-k/edit?usp=sharing"
                                                                                       target="_blank"
                                                                                       class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only">
                                                                                        <i class="fa flaticon-folder"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-container m-widget3">
                                                                    <div class="m-widget3__item">
                                                                        <div class="m-widget3__header">
                                                                            <div class="m-widget3__user-img">
                                                                                <img class="m-widget3__img"
                                                                                     src="assets/app/media/img/users/user1.jpg"
                                                                                     alt="">
                                                                            </div>
                                                                            <div class="m-widget3__info">
                                                                        <span class="m-widget3__username">
                                                                            Melania Trump
                                                                        </span>
                                                                                <br>
                                                                                <span class="m-widget3__time">
                                                                        Engineer
                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-widget3__body">
                                                                            <p class="m-widget3__text">
                                                                                Lorem ipsum dolor sit
                                                                                amet,consectetuer
                                                                                edipiscing elit,sed diam nonummy
                                                                                nibh
                                                                                euismod
                                                                                tinciduntut laoreet doloremagna
                                                                                aliquam
                                                                                erat
                                                                                volutpat.
                                                                            </p>
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
                                                                        Lebron King James
                                                                    </span>
                                                                                <br>
                                                                                <span class="m-widget3__time">
                                                                        1 day ago
                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-widget3__body">
                                                                            <p class="m-widget3__text">
                                                                                Lorem ipsum dolor sit
                                                                                amet,consectetuer
                                                                                edipiscing elit,sed diam nonummy
                                                                                nibh
                                                                                euismod
                                                                                tinciduntut laoreet doloremagna
                                                                                aliquam
                                                                                erat
                                                                                volutpat.Ut wisi enim ad minim
                                                                                veniam,quis
                                                                                nostrud exerci tation ullamcorper.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group">
                                                                    <div class="input-group mt-4">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Comment...">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-brand"
                                                                                    type="submit">
                                                                                <i class="flaticon-paper-plane"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                                        <!--End::File upload Modal-->

                                    </div>
                                    <!--  End Files Tap  -->
                                    <!--  Start  Project Sections Tap  -->
                                    <div class="tab-pane" id="tabs5" role="tabpanel">
                                        <!--begin::Portlet-->
                                        <div class="m-portlet m-portlet--tabs">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-tools">
                                                    <ul class="nav nav-tabs  m-tabs-line m-tabs-line--danger"
                                                        role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                                               href="#m_portlet_base_demo_2_3_tab_content" role="tab">
                                                                Electronics Section
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#m_portlet_base_demo_2_3_tab_content" role="tab">
                                                                Section2
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#m_portlet_base_demo_2_3_tab_content" role="tab">
                                                                Section3
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="m-portlet__body">
                                                <div class="tab-content">

                                                    <div class="tab-pane active"
                                                         id="m_portlet_base_demo_2_3_tab_content" role="tabpanel">
                                                        <h5>About Department:</h5>
                                                        <div class="form-group m-form__group">
                                                            <textarea class="form-control m-input" id="exampleTextarea"
                                                                      rows="3"></textarea>
                                                        </div>
                                                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                                                        <h5>Reports:</h5>
                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <form class="m-form m-form--fit m--margin-bottom-20">
                                                                    <div class="row m--margin-bottom-20">
                                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                                            <label>
                                                                                ID:
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control m-input"
                                                                                   placeholder="E.g: 4590"
                                                                                   data-col-index="0">
                                                                        </div>
                                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                                            <label>
                                                                                Report Name:
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control m-input"
                                                                                   placeholder="E.g: 37000-300"
                                                                                   data-col-index="1">
                                                                        </div>
                                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                                            <label>
                                                                                Upload By:
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control m-input"
                                                                                   placeholder="E.g: Hamza"
                                                                                   data-col-index="2">
                                                                        </div>
                                                                        <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                                                            <label>
                                                                                Upload Date:
                                                                            </label>
                                                                            <div class="input-daterange input-group m_datepicker">
                                                                                <input type="text"
                                                                                       class="form-control m-input"
                                                                                       name="start"
                                                                                       placeholder="From"
                                                                                       data-col-index="3"/>
                                                                                <div class="input-group-append">
																					<span class="input-group-text">
																						<i class="la la-ellipsis-h"></i>
																					</span>
                                                                                </div>
                                                                                <input type="text"
                                                                                       class="form-control m-input"
                                                                                       name="end"
                                                                                       placeholder="To"
                                                                                       data-col-index="3"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <button class="btn btn-brand m-btn m-btn--icon m_search">
																				<span>
																					<i class="la la-search"></i>
																					<span>
																						Search
																					</span>
																				</span>
                                                                            </button>
                                                                            &nbsp;&nbsp;
                                                                            <button class="btn btn-secondary m-btn m-btn--icon m_reset">
																				<span>
																					<i class="la la-close"></i>
																					<span>
																						Reset
																					</span>
																				</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                                                       id="m_table_2">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            ID
                                                                        </th>
                                                                        <th>
                                                                            Report Name
                                                                        </th>
                                                                        <th>
                                                                            Upload By
                                                                        </th>
                                                                        <th>
                                                                            Upload Date
                                                                        </th>
                                                                        <th>
                                                                            more
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            01
                                                                        </td>
                                                                        <td>
                                                                            Report name1
                                                                        </td>
                                                                        <td>
                                                                            5/21/2017
                                                                        </td>
                                                                        <td>
                                                                            hamza
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th>
                                                                            ID
                                                                        </th>
                                                                        <th>
                                                                            Report Name
                                                                        </th>
                                                                        <th>
                                                                            Upload Date
                                                                        </th>
                                                                        <th>
                                                                            Upload By
                                                                        </th>
                                                                        <th>
                                                                            More
                                                                        </th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <!--begin:: File view Modal-->
                                                                <div class="modal fade" id="m_modal_7" tabindex="-1"
                                                                     role="dialog"
                                                                     aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    More Details
                                                                                </h5>
                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
																			<span aria-hidden="true">
																				&times;
																			</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="m-scrollable"
                                                                                     data-scrollbar-shown="true"
                                                                                     data-scrollable="true"
                                                                                     data-height="300">
                                                                                    <form>
                                                                                        <div class="m-section">
                                                                                            <div class="m-section__content">
                                                                                                <table class="table m-table m-table--head-bg-brand file-details-table">
                                                                                                    <thead>
                                                                                                    <tr>
                                                                                                        <th>
                                                                                                            File name
                                                                                                        </th>
                                                                                                        <th>
                                                                                                            Upload By
                                                                                                        </th>
                                                                                                        <th>
                                                                                                            Upload Date
                                                                                                        </th>
                                                                                                        <th>
                                                                                                            Show File
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                    <tr class="gry-bg">
                                                                                                        <td>
                                                                                                            6565-564
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            Larry
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            7/5/2018
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <a href="https://docs.google.com/spreadsheets/d/1uCNdAAbLM0x6r1V_UJTR-5GVhxlPDp-ydtl_mfPeJ-k/edit?usp=sharing"
                                                                                                               target="_blank"
                                                                                                               class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only">
                                                                                                                <i class="fa flaticon-folder"></i>
                                                                                                            </a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="comment-container m-widget3">
                                                                                            <div class="m-widget3__item">
                                                                                                <div class="m-widget3__header">
                                                                                                    <div class="m-widget3__user-img">
                                                                                                        <img class="m-widget3__img"
                                                                                                             src="assets/app/media/img/users/user1.jpg"
                                                                                                             alt="">
                                                                                                    </div>
                                                                                                    <div class="m-widget3__info">
                                                                        <span class="m-widget3__username">
                                                                            Melania Trump
                                                                        </span>
                                                                                                        <br>
                                                                                                        <span class="m-widget3__time">
                                                                        Engineer
                                                                    </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="m-widget3__body">
                                                                                                    <p class="m-widget3__text">
                                                                                                        Lorem ipsum
                                                                                                        dolor sit
                                                                                                        amet,consectetuer
                                                                                                        edipiscing
                                                                                                        elit,sed diam
                                                                                                        nonummy
                                                                                                        nibh
                                                                                                        euismod
                                                                                                        tinciduntut
                                                                                                        laoreet
                                                                                                        doloremagna
                                                                                                        aliquam
                                                                                                        erat
                                                                                                        volutpat.
                                                                                                    </p>
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
                                                                        Lebron King James
                                                                    </span>
                                                                                                        <br>
                                                                                                        <span class="m-widget3__time">
                                                                        1 day ago
                                                                    </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="m-widget3__body">
                                                                                                    <p class="m-widget3__text">
                                                                                                        Lorem ipsum
                                                                                                        dolor sit
                                                                                                        amet,consectetuer
                                                                                                        edipiscing
                                                                                                        elit,sed diam
                                                                                                        nonummy
                                                                                                        nibh
                                                                                                        euismod
                                                                                                        tinciduntut
                                                                                                        laoreet
                                                                                                        doloremagna
                                                                                                        aliquam
                                                                                                        erat
                                                                                                        volutpat.Ut wisi
                                                                                                        enim ad minim
                                                                                                        veniam,quis
                                                                                                        nostrud exerci
                                                                                                        tation
                                                                                                        ullamcorper.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group m-form__group">
                                                                                            <div class="input-group mt-4">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="Comment...">
                                                                                                <div class="input-group-append">
                                                                                                    <button class="btn btn-brand"
                                                                                                            type="submit">
                                                                                                        <i class="flaticon-paper-plane"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">
                                                                                    Close
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--End::File upload Modal-->
                                                            </div>
                                                        </div>
                                                        <div class="m-separator m-separator--md m-separator--dashed"></div>
                                                        <h5>Organizational organ:</h5>
                                                        <div class="m-scrollable m-scrollable--track"
                                                             data-scrollable="true" style="height: 200px">
                                                            <div class="m-widget3">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6">
                                                                        <div class="m-widget3__item">
                                                                            <div class="m-widget3__header">
                                                                                <div class="m-widget3__user-img">
                                                                                    <img class="m-widget3__img"
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                                                         src="assets/app/media/img/users/user1.jpg"
                                                                                         alt="">
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
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Portlet-->
                                    </div>
                                    <!--  End  Project Sections Tap  -->
                                    <!--  Start  Pending orders tab -->
                                    <div class="tab-pane" id="tabs6" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!--begin::Portlet-->
                                                <div class="m-portlet">
                                                    <div class="m-portlet__head">
                                                        <div class="m-portlet__head-caption justify-content-between">
                                                            <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-list-3"></i>
                                                        </span>
                                                                <h3 class="m-portlet__head-text">
                                                                    Pending orders 1
                                                                </h3>
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                        class="btn m-btn--pill m-btn--air btn-outline-danger">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-portlet__body">
                                                        <div class="m-widget2">
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Portlet-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!--begin::Portlet-->
                                                <div class="m-portlet">
                                                    <div class="m-portlet__head">
                                                        <div class="m-portlet__head-caption justify-content-between">
                                                            <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-list-3"></i>
                                                        </span>
                                                                <h3 class="m-portlet__head-text">
                                                                    Pending orders 2
                                                                </h3>
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                        class="btn m-btn--pill m-btn--air btn-outline-danger">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-portlet__body">
                                                        <div class="m-widget2">
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Portlet-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!--begin::Portlet-->
                                                <div class="m-portlet">
                                                    <div class="m-portlet__head">
                                                        <div class="m-portlet__head-caption justify-content-between">
                                                            <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-list-3"></i>
                                                        </span>
                                                                <h3 class="m-portlet__head-text">
                                                                    Pending orders 3
                                                                </h3>
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                        class="btn m-btn--pill m-btn--air btn-outline-danger">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-portlet__body">
                                                        <div class="m-widget2">
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Portlet-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!--begin::Portlet-->
                                                <div class="m-portlet">
                                                    <div class="m-portlet__head">
                                                        <div class="m-portlet__head-caption justify-content-between">
                                                            <div class="m-portlet__head-title">
                                                        <span class="m-portlet__head-icon">
                                                            <i class="flaticon-list-3"></i>
                                                        </span>
                                                                <h3 class="m-portlet__head-text">
                                                                    Pending orders 4
                                                                </h3>
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                        class="btn m-btn--pill m-btn--air btn-outline-danger">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-portlet__body">
                                                        <div class="m-widget2">
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget2__item m-widget2__item--info">
                                                                <div class="m-widget2__checkbox">
                                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div class="m-widget2__desc">
                                                                        <span class="m-widget2__text">
                                                                            Lorem ipsum dolor sit amet
                                                                        </span>
                                                                    <br>
                                                                    <span class="m-widget2__user-name">
                                                                            <a href="#"
                                                                               class="m-widget2__link">
                                                                                By Hamza
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                                <div class="m-widget2__actions">
                                                                    <div class="m-widget2__actions-nav">
                                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                                             m-dropdown-toggle="hover">
                                                                            <a href="#" class="m-dropdown__toggle">
                                                                                <i class="la la-ellipsis-h"></i>
                                                                            </a>
                                                                            <div class="m-dropdown__wrapper">
                                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                <div class="m-dropdown__inner">
                                                                                    <div class="m-dropdown__body">
                                                                                        <div class="m-dropdown__content">
                                                                                            <ul class="m-nav">
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_8"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-paper-plane"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Send to
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href="#"
                                                                                                       data-toggle="modal"
                                                                                                       data-target="#m_modal_9"
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                More info
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="m-nav__item">
                                                                                                    <a href=""
                                                                                                       class="m-nav__link">
                                                                                                        <i class="m-nav__link-icon flaticon-delete-1"></i>
                                                                                                        <span class="m-nav__link-text">
                                                                                                                Delete
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Portlet-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--  End  Pending orders tab -->
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
    <!--Begin Modals-->
    <!--begin::More info Modal-->
    <div class="modal fade" id="m_modal_9" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        More Information
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
                         data-scrollable="true" data-height="300">
                        <form>
                            <h6>Description:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi dicta
                                distinctio, dolor dolores, dolorum ducimus ipsa ipsum itaque minima nisi odio officiis
                                quam quasi quidem temporibus tenetur veritatis?</p>
                            <h6>Comments:</h6>
                            <div class="comment-container m-widget3">
                                <div class="m-widget3__item">
                                    <div class="m-widget3__header">
                                        <div class="m-widget3__user-img">
                                            <img class="m-widget3__img"
                                                 src="assets/app/media/img/users/user1.jpg"
                                                 alt="">
                                        </div>
                                        <div class="m-widget3__info">
                                                                        <span class="m-widget3__username">
                                                                            Melania Trump
                                                                        </span>
                                            <br>
                                            <span class="m-widget3__time">
                                                                        Engineer
                                                                    </span>
                                        </div>
                                    </div>
                                    <div class="m-widget3__body">
                                        <p class="m-widget3__text">
                                            Lorem ipsum dolor sit
                                            amet,consectetuer
                                            edipiscing elit,sed diam nonummy
                                            nibh
                                            euismod
                                            tinciduntut laoreet doloremagna
                                            aliquam
                                            erat
                                            volutpat.
                                        </p>
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
                                                                        Lebron King James
                                                                    </span>
                                            <br>
                                            <span class="m-widget3__time">
                                                                        1 day ago
                                                                    </span>
                                        </div>
                                    </div>
                                    <div class="m-widget3__body">
                                        <p class="m-widget3__text">
                                            Lorem ipsum dolor sit
                                            amet,consectetuer
                                            edipiscing elit,sed diam nonummy
                                            nibh
                                            euismod
                                            tinciduntut laoreet doloremagna
                                            aliquam
                                            erat
                                            volutpat.Ut wisi enim ad minim
                                            veniam,quis
                                            nostrud exerci tation ullamcorper.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control"
                                           placeholder="Comment...">
                                    <div class="input-group-append">
                                        <button class="btn btn-brand"
                                                type="submit">
                                            <i class="flaticon-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <!--end::More info Modal-->
    <!--begin::Sent To Modal-->
    <div class="modal fade" id="m_modal_8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Send To
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-group m-form__group ">
                            <label for="select-7">
                                Sent Pending orders to:
                            </label>
                            <select class="m_select2_9 form-control m-select2" id="select-7"
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-brand">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Send To Modal-->
    <!--begin::add new employees group Modal-->
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Add new employees group
                    </h5>
                    <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group m-form__group">
                                <label>
                                    Name of the group
                                </label>
                                <div class=" m-input-icon--left">
                                    <input type="text"
                                           class="form-control m-input"
                                           placeholder="Group Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group m-form__group overflow-hidden ">
                                <label for="select-6">
                                    Employees:
                                </label>
                                <select class="m_select2_9 form-control m-select2"
                                        id="select-6"
                                        name="param" multiple>
                                    <option></option>
                                    <optgroup
                                            label="Alaskan/Hawaiian Time Zone">
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
                                    <optgroup
                                            label="Mountain Time Zone">
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
    <!--end::add new employees group Modal-->
    <!--begin::Employee group Modal-->
    <div class="modal fade" id="m_scrollable_modal_1" tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
                                    <a href="#"
                                       class="m-widget3__status m--font-info">
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
    </div>
    <!--end::Employee group Modal-->

    <!--begin:: File upload Modal-->
    <div class="modal fade p-0" id="m_modal_5" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Upload Report
                    </h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
																			<span aria-hidden="true">
																				&times;
																			</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">

                        <div class="form-group m-form__group">
                            <label for="exampleInputEmail1">
                                Choose file
                            </label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"
                                       id="customFile">
                                <label class="custom-file-label"
                                       for="customFile">
                                    Report
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-brand">
                            Submit
                        </button>

                </form>
            </div>
        </div>
    </div>
    <!--end::File upload Modal-->

    <!--End Modals-->
</div>

<!-- end::Footer -->
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
<!--begin::Page Vendors -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Resources -->
<script src="assets/demo/default/custom/crud/datatables/search-options/advanced-search.js"
        type="text/javascript"></script>
<script src="assets/demo/default/custom/crud/datatables/search-options/advanced-search2.js"
        type="text/javascript"></script>

<!--end::Page Resources -->
<script>
    var barChartData = {
        labels: ["2013-03-01", "2013-04-1", "2013-05-1", "2013-06-1", "2013-07-1", "2014-09-1"],
        datasets: [{
            borderColor: "#11a541",
            data: [0, 0, 0, 0, 0],
            fill: false,
            borderWidth: 20
        }]
    };

    Chart.defaults.global.defaultFontFamily = "'Comic Sans MS'";
    // Disable pointers
    Chart.defaults.global.elements.point.radius = 0;
    Chart.defaults.global.elements.point.hoverRadius = 0;

    var ctx = document.getElementById("myChart").getContext("2d");
    new Chart(ctx, {
        type: 'line',
        data: barChartData,
        options: {

            legend: {
                display: false,
                position: "right"
            },
            title: {
                display: false
            },
            scales: {
                xAxes: [{
                    type: "time",
                    ticks: {
                        minRotation: 30
                    }
                }]
            }
        }
    });
</script>
<script>
    $(function () {
        var $ppc = $('#pie-chart'),
            percent = parseInt($ppc.data('percent')),
            deg = 360 * percent / 100;
        if (percent > 50) {
            $ppc.addClass('gt-50');
        }
        $('#ppc-progress-fill1').css('transform', 'rotate(' + deg + 'deg)');
        $('#ppc-percents1 span').html(percent + '%');
    });
    $(function () {
        var $ppc = $('#pie-chart2'),
            percent = parseInt($ppc.data('percent1')),
            deg = 360 * percent / 100;
        if (percent > 50) {
            $ppc.addClass('gt-50');
        }
        $('#ppc-progress-fill2').css('transform', 'rotate(' + deg + 'deg)');
        $('#ppc-percents2 span').html(percent + '%');
    });
</script>

<!--end::Page Snippets -->

<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
