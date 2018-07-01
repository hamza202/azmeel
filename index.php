<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Home
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
                            Home
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
                                            Projects
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-md-4">

                                        <a href="#" class="dashboard-stat color-1">
                                            <div class="dashboard-stat-content"><h4>30</h4>
                                                <span>Effective projects</span></div>
                                            <div class="dashboard-stat-icon"><i class="flaticon-interface-6"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="dashboard-stat color-4">
                                            <div class="dashboard-stat-content"><h4>35</h4>
                                                <span>Completed Projects</span></div>
                                            <div class="dashboard-stat-icon"><i class="flaticon-list"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="dashboard-stat color-2">
                                            <div class="dashboard-stat-content"><h4>65</h4> <span>Total projects</span>
                                            </div>
                                            <div class="dashboard-stat-icon"><i class="flaticon-file"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Map
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="m_gmap_3" style="height:300px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Fast links
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body fast-links-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <a href="#" class="dashboard-stat color-1">
                                            <div class="dashboard-stat-content"><h4>5</h4>
                                                <span>Upcoming meetings</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="dashboard-stat color-4">
                                            <div class="dashboard-stat-content"><h4>6</h4>
                                                <span>Approval Requests</span></div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="dashboard-stat color-2">
                                            <div class="dashboard-stat-content"><h4>2</h4> <span>Upcoming dates</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="dashboard-stat color-3">
                                            <div class="dashboard-stat-content"><h4>3</h4> <span>Memo</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Weather
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/24d7146d68/riyadh/"
                                   data-label_1="Riyadh" data-label_2="WEATHER" data-theme="original">Riyadh WEATHER</a>
                                <script>
                                    !function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, 'script', 'weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Weather
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="clock" style="padding:20px 0 30px;
                                 background: linear-gradient(to left, rgba(255, 255, 255, 0) 25%, rgba(255, 255, 255, 0.2));
                                 border-radius: 4px; background-color:#E8504D;
                                width:100%;color:rgb(230,230,230);">
                                    <center>
                                        <div id="Clock" style="padding-top:10px;font-size:28px">
                                            <span id="clk1" style="width:20px"></span>
                                            <span id="clk2" style="width:20px"></span>
                                            <span id="clk3" style="width:20px"></span>
                                        </div>
                                        <br/>
                                        <div id="Date" style="font-size:22px">
                                            <span id="day"></span>
                                            <span id="month"></span>
                                            <span id="year"></span>
                                        </div>
                                        <br/>
                                        <span id="weekdays" style="font-size:26px"></span>
                                    </center>
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
<script>
    function startTime() {
        var today = new Date();
        var hour = today.getHours();
        if (hour > 12) {
            hour -= 12;
        } else if (hour === 0) {
            hour = 12;
        }
        var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        document.getElementById('clk1').innerHTML = hour + " : ";
        document.getElementById('clk2').innerHTML = today.getMinutes() + " : ";
        document.getElementById('clk3').innerHTML = today.getSeconds();
        document.getElementById("day").innerHTML = today.getDate() + " /";
        document.getElementById('month').innerHTML = today.getMonth() + 1 + " /";
        document.getElementById('year').innerHTML = today.getFullYear();
        var t = setTimeout(function () {
            startTime()
        }, 500);
        document.getElementById("weekdays").innerHTML = "Today is " + weekdays[today.getDay()];
    }

    startTime();
</script>
<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
