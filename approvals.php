<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Approvals
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
                <div class="d-flex align-items-center ">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Approvals
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
                                        <div class="m-portlet__head-caption justify-content-between">
                                            <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                                <h3 class="m-portlet__head-text">
                                                    Approval
                                                </h3>
                                            </div>
                                            <a href="#" data-target="#m_modal_1" data-toggle="modal"
                                               class="btn  m-btn--pill m-btn--air btn-outline-success m-btn m-btn--custom">
                                                Submit an approval request
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="m-section__content">
                                                    <form action="#">
                                                        <table class="table m-table approval-table table-responsive-md m-table--head-separator-brand">
                                                            <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    Applicant
                                                                </th>
                                                                <th style="min-width: 120px;">
                                                                    Request code
                                                                </th>
                                                                <th style="min-width: 130px;">
                                                                    Application Date
                                                                </th>
                                                                <th>
                                                                    Case
                                                                </th>
                                                                <th>
                                                                    Edit/Delete
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">
                                                                    1
                                                                </th>
                                                                <td>
                                                                    Jhon
                                                                </td>
                                                                <td>
                                                                    565644
                                                                </td>
                                                                <td>
                                                                    2018/2/25
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-warning text-white whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-danger whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    1
                                                                </th>
                                                                <td>
                                                                    Jhon
                                                                </td>
                                                                <td>
                                                                    565644
                                                                </td>
                                                                <td>
                                                                    2018/2/25
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-warning text-white whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-danger whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    1
                                                                </th>
                                                                <td>
                                                                    Jhon
                                                                </td>
                                                                <td>
                                                                    565644
                                                                </td>
                                                                <td>
                                                                    2018/2/25
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-warning text-white whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-danger whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    1
                                                                </th>
                                                                <td>
                                                                    Jhon
                                                                </td>
                                                                <td>
                                                                    565644
                                                                </td>
                                                                <td>
                                                                    2018/2/25
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-brand m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-warning text-white whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button type="button" title="Accept"
                                                                            class="btn btn-primary m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <button type="button" title="Refusal"
                                                                            class="btn btn-danger whi m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
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
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="#">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-form__group">
                                <label for="Request_title">
                                    Request Title
                                </label>
                                <input id="Request_title" type="text" class="form-control m-input" aria-describedby="emailHelp" placeholder="Request Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">
                                    Upload File
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
                        <div class="col">
                            <div class="form-group m-form__group">
                                <label for="exampleTextarea">
                                    Details
                                </label>
                                <textarea class="form-control m-input m-input--air" id="exampleTextarea" placeholder="Details" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="select-1" class="col-form-label  col-sm-12">
                            Send To:
                        </label>
                        <div class="col-sm-12">
                            <select class="form-control m_select2_9 m-select2" id="select-1" name="param" multiple>
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
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit"
                            class="btn btn-outline-brand m-btn m-btn--icon">
                        <span>
                            <i class="flaticon-paper-plane"></i>
                            <span>
                                Send
                            </span>
                        </span>
                    </button>
                </div>
            </div>
            </form>
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
