<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | View Projects
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
                            View Projects
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
                                    <div class="m-portlet__head-caption justify-content-between">
                                        <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                            <h3 class="m-portlet__head-text">
                                                Project Name
                                            </h3>
                                        </div>
                                        <div>
                                            <a href="add-project.php" class="btn m-btn--pill m-btn--air  btn-outline-success m-btn m-btn--custom">
                                                Project Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="progress-pie-chart pie-chart"
                                                 data-percent="30">
                                                <div class="ppc-progress">
                                                    <div class="ppc-progress-fill ppc-progress-fill1"
                                                         id=""></div>
                                                </div>
                                                <div class="ppc-percents ppc-percents1" id="">
                                                    <div class="pcc-percents-wrapper">
                                                        <span>%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="project-manager-container">
                                                <img src="assets/img_avatar.png" class="project-manager-img img-fluid"
                                                     alt="">
                                                <h5 class="mt-4">project manager name</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <h5 class="text-success">Project Duration:</h5>
                                                <p><strong class="text-info">From:</strong> 2017/10/25 <strong class="text-info">To:</strong> 2018/2/24 </p>
                                                <h5 class="text-success">Owner:</h5>
                                                <p>ShadidSoft.</p>
                                                <h5 class="text-success">Section:</h5>
                                                <p>Electronics Section</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet m-portlet--tab">
                                <div class="m-portlet__head ">
                                    <div class="m-portlet__head-caption justify-content-between">
                                        <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                            <h3 class="m-portlet__head-text">
                                                Project Name
                                            </h3>
                                        </div>
                                        <div>
                                            <a href="add-project.php" class="btn m-btn--pill m-btn--air  btn-outline-success m-btn m-btn--custom">
                                                Project Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="progress-pie-chart pie-chart2"
                                                 data-percent="98%">
                                                <div class="ppc-progress">
                                                    <div class="ppc-progress-fill ppc-progress-fill1"
                                                         id=""></div>
                                                </div>
                                                <div class="ppc-percents ppc-percents1" id="">
                                                    <div class="pcc-percents-wrapper">
                                                        <span>%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="project-manager-container">
                                                <img src="assets/img_avatar.png" class="project-manager-img img-fluid"
                                                     alt="">
                                                <h5 class="mt-4">project manager name</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <h5 class="text-success">Project Duration:</h5>
                                                <p><strong class="text-info">From:</strong> 2017/10/25 <strong class="text-info">To:</strong> 2018/2/24 </p>
                                                <h5 class="text-success">Owner:</h5>
                                                <p>ShadidSoft.</p>
                                                <h5 class="text-success">Section:</h5>
                                                <p>Electronics Section</p>
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
<script>
    $(function () {
        var $ppc = $('.pie-chart'),
            percent = parseInt($ppc.data('percent')),
            deg = 360 * percent / 100;
        if (percent > 50) {
            $ppc.addClass('gt-50');
        }
        $ppc.find(".ppc-progress-fill1").css('transform', 'rotate(' + deg + 'deg)');
        $ppc.find('.ppc-percents1 span').html(percent + '%');
    });
    $(function () {
        var $ppc = $('.pie-chart2'),
            percent = parseInt($ppc.data('percent')),
            deg = 360 * percent / 100;
        if (percent > 50) {
            $ppc.addClass('gt-50');
        }
        $ppc.find(".ppc-progress-fill1").css('transform', 'rotate(' + deg + 'deg)');
        $ppc.find('.ppc-percents1 span').html(percent + '%');
    });
</script>
<!--end::Page Snippets -->

<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
