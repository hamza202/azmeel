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
                            Contacts
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
                                                    Contacts
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body contacts-section">
                                        <!--begin::Section-->
                                        <div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
                                            <!--begin::Item-->
                                            <div class="m-accordion__item m-accordion__item--brand">
                                                <div class="m-accordion__item-head collapsed" role="tab"
                                                     id="m_accordion_1_item_1_head" data-toggle="collapse"
                                                     href="#m_accordion_1_item_1_body" aria-expanded="    false">
                                                        <span class="m-accordion__item-icon">
                                                            <i class="flaticon-search-magnifier-interface-symbol"></i>
                                                        </span>
                                                    <span class="m-accordion__item-title">
																						Search
																					</span>
                                                    <span class="m-accordion__item-mode"></span>
                                                </div>
                                                <div class="m-accordion__item-body collapse"
                                                     id="m_accordion_1_item_1_body" role="tabpanel"
                                                     aria-labelledby="m_accordion_1_item_1_head"
                                                     data-parent="#m_accordion_1">
                                                    <div class="m-accordion__item-content">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-form__group">
                                                                        <label for="Name">
                                                                            Name
                                                                        </label>
                                                                        <input type="text" class="form-control m-input"
                                                                               id="Name" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-form__group">
                                                                        <label for="exampleSelect1">
                                                                            Job Title
                                                                        </label>
                                                                        <select class="form-control m-input"
                                                                                id="exampleSelect1">
                                                                            <option>
                                                                                1
                                                                            </option>
                                                                            <option>
                                                                                2
                                                                            </option>
                                                                            <option>
                                                                                3
                                                                            </option>
                                                                            <option>
                                                                                4
                                                                            </option>
                                                                            <option>
                                                                                5
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-form__group">
                                                                        <label for="exampleSelect1">
                                                                            Section
                                                                        </label>
                                                                        <select class="form-control m-input"
                                                                                id="exampleSelect1">
                                                                            <option>
                                                                                1
                                                                            </option>
                                                                            <option>
                                                                                2
                                                                            </option>
                                                                            <option>
                                                                                3
                                                                            </option>
                                                                            <option>
                                                                                4
                                                                            </option>
                                                                            <option>
                                                                                5
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-form__group">
                                                                        <label for="exampleSelect1">
                                                                            alphabetical order
                                                                        </label>
                                                                        <select class="form-control m-input"
                                                                                id="exampleSelect1">
                                                                            <option>
                                                                                A-Z
                                                                            </option>
                                                                            <option>
                                                                                Z-A
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group m-form__group">
                                                                        <label for="exampleSelect1">
                                                                            Date of addition
                                                                        </label>
                                                                        <select class="form-control m-input"
                                                                                id="exampleSelect1">
                                                                            <option>
                                                                                New
                                                                            </option>
                                                                            <option>
                                                                                Old
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <button type="submit"
                                                                            class="btn btn-outline-brand m--margin-top-25-tablet m--margin-top-25-desktop m-btn m-btn--icon">
                                                                    <span>
                                                                        <i class="flaticon-search-magnifier-interface-symbol"></i>
                                                                        <span>
                                                                            Success
                                                                        </span>
                                                                    </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Section-->
                                        <form action="#">
                                        <div class="m-widget4 row">
                                            <!--begin::Widget 14 Item-->
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="m-widget4__item col-lg-6 ">
                                                    <div class="m-widget4__img m-widget4__img--pic">
                                                        <img src="assets/app/media/img/users/100_3.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                <i class="fa fa-user"></i>Hamza abo aitah
                                                            </span>
                                                        <br>
                                                        <span class="m-widget4__sub">
                                                               <i class="fa fa-phone"></i> 0501234567
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fa fa-envelope"></i> hamza@gmail.com
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-puzzle-piece""></i> sector name
                                                            </span>
                                                        <span class="m-widget4__sub d-block">
                                                               <i class="fas fa-user-md"></i> sector name
                                                            </span>
                                                    </div>
                                                    <div class="m-widget4__ext text-center">
                                                        <a href="#" class="m-widget3__status m--font-info">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                        <button type="submit"
                                                                class="btn btn-danger m-btn m-btn--icon btn-sm m-btn--icon-only m-btn--pill">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Widget 14 Item-->
                                        </div>
                                        </form>
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
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
</body>
<!-- end::Body -->
</html>
