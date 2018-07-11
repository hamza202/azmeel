<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Azmeel | Notifications
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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Notifications
                        </h3>
                    </div>
                    <div>
                        <a href="#" data-target="#m_modal_1" data-toggle="modal"
                           class="btn btn-outline-success m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                            <span>
                                <i class="flaticon-paper-plane"></i>
                                <span>
                                    Send Notifications
                                </span>
                            </span>
                        </a>
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
                                                Notifications sent
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <form action="#">
                                        <div class="m-timeline-3">
                                            <div class="m-timeline-3__items">
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                        <span class="m-timeline-3__item-time">
                                                            14:00
                                                        </span>
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text">
                                                            Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                        </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-user-name">
                                                            <span class="text-success">To:</span> <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Derrick , </a>
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> hamza , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Ahmed , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> mohammad , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> kaream , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Naser , </a>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-timeline-3__items">
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                        <span class="m-timeline-3__item-time">
                                                            14:00
                                                        </span>
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text">
                                                            Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                        </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-user-name">
                                                            <span class="text-success">To:</span> <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Derrick , </a>
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> hamza , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Ahmed , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> mohammad , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> kaream , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Naser , </a>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-timeline-3__items">
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                        <span class="m-timeline-3__item-time">
                                                            14:00
                                                        </span>
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text">
                                                            Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                        </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-user-name">
                                                            <span class="text-success">To:</span> <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Derrick , </a>
                                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> hamza , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Ahmed , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> mohammad , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> kaream , </a>
                                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link"> Naser , </a>

                                                        </span>
                                                    </div>
                                                </div>
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
    <!--begin::Modal-->
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="#">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            New Notifications
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">
                                    Notification text:
                                </label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-success">
                            Send
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
<!--end::Page Snippets -->
<script>
    var end = new Date('10/8/2018 4:00 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = '<li class="countdown-item"><span class="countdown-value">' + days + '</span><span class="countdown-unit">days</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item"><span class="countdown-value">' + hours + '</span><span class="countdown-unit">hours</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item"><span class="countdown-value">' + minutes + '</span><span class="countdown-unit">minutes</span></li>';
        document.getElementById('countdown').innerHTML += '<li class="countdown-item d-md-table-cell d-none"><span class="countdown-value">' + seconds + '</span><span class="countdown-unit">seconds</span></li>';
    }

    timer = setInterval(showRemaining, 1000);
</script>
<!--end::Page Resources -->
</body>
<!-- end::Body -->
</html>
