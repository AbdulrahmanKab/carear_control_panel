<!DOCTYPE html>
<html lang="en" direction="rtl" dir="rtl" style="direction: rtl" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>High five Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Asap+Condensed:500">        <!--end::Fonts -->
    <link rel="stylesheet" href="{{asset('asset/admin/css/index.css')}}" >
    <link rel="stylesheet" href="{{asset('asset/admin/css/jquery.fancybox.min.css')}}" >
    <!--begin::Page Vendors Styles(used by this page) -->
    <link rel="stylesheet" href="{{asset('styleFont.css')}}">
    <link href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->
    <link href="/assets/css/demo8/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    @yield('css')
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->
    <style>
        .fancybox-caption__body{
            overflow:hidden;
        }
    </style>
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  style="background-image: url(/assets/media/demos/demo8/bg-1.jpg)"  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >


<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
    <div class="kt-header-mobile__logo">
        <a href="demo8/index.html">
            <img alt="Logo" src="/assets/media/logos/logo-8-sm.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed "  data-ktheader-minimize="on" >
                <div class="kt-header__top">
                    <div class="kt-container ">
                        <!-- begin:: Brand -->
                        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                            <div class="kt-header__brand-logo ml-2">
                                <a href="demo8/index.html">
                                    <img alt="Logo" src="{{asset("uploads/logo2.png")}}" class="kt-header__brand-logo-default"/>
                                    <img alt="Logo" src="{{asset("uploads/logo2.png")}}" class="kt-header__brand-logo-sticky"/>
                                </a>
                            </div>
                        </div>
                        <!-- end:: Brand -->			<!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">

                            <!--begin: Notifications -->
                            <div class="kt-header__topbar-item dropdown">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">

                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <form>
                                        <!--begin: Head -->
                                        <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                            <h3 class="kt-head__title">
                                                User Notifications
                                                &nbsp;
                                                <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                                            </h3>
                                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end: Head -->


                                    </form>
                                </div>
                            </div>
                            <!--end: Notifications -->

                            <!--begin: Language bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
			<span class="kt-header__topbar-icon">
				<img class="" src="/assets/media/flags/020-flag.svg" alt="" />
			</span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                                    <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                        <li class="kt-nav__item kt-nav__item--active">
                                            <a href="#" class="kt-nav__link">
                                                <span class="kt-nav__link-icon"><img src="/assets/media/flags/020-flag.svg" alt="" /></span>
                                                <span class="kt-nav__link-text">English</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <span class="kt-nav__link-icon"><img src="/assets/media/flags/016-spain.svg" alt="" /></span>
                                                <span class="kt-nav__link-text">Spanish</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <span class="kt-nav__link-icon"><img src="/assets/media/flags/017-germany.svg" alt="" /></span>
                                                <span class="kt-nav__link-text">German</span>
                                            </a>
                                        </li>
                                    </ul>		</div>
                            </div>
                            <!--end: Language bar -->

                            <!--begin: User bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,10px">
                                    <span class="kt-header__topbar-welcome kt-visible-desktop">   {{auth()->user()->name}}</span>
                                    <img alt="Pic" src="{{asset('uploads/'.auth()->user()->image)}}"/>
                                    <span class="kt-header__topbar-icon kt-bg-brand kt-font-lg kt-font-bold kt-font-light kt-hidden">S</span>
                                    <span class="kt-header__topbar-icon kt-hidden"><i class="flaticon2-user-outline-symbol"></i></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <!--begin: Head -->
                                    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                        <div class="kt-user-card__avatar">
                                            <img class="kt-hidden-" alt="Pic" src="{{asset("uploads/".auth()->user()->image)}}" />
                                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                        </div>
                                        <div class="kt-user-card__name">
                                            {{auth()->user()->name}}
                                        </div>

                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">
                                        <a href="/admin/profile" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                   صفحتي
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    عرض الصفحة الشخصية
                                                </div>
                                            </div>
                                        </a>

                                        <div class="kt-notification__custom kt-space-between">
                                            <form action="/logout" method="post">
                                            @csrf
                                                <button type="submit" class="btn btn-label btn-label-brand btn-sm btn-bold">تسجيل خروج</button>

                                            </form>

                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->

                            <!--end: Quick panel toggler -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                </div>
                <div class="kt-header__bottom">
                    <div class="kt-container ">
                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/" class="kt-menu__link kt-menu__toggle">
                                            <span class="kt-menu__link-text">الرئيسية</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>


                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " >
                                                    <a href="/admin/slider" class="kt-menu__link">
                                                        <i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
                                                        <span class="kt-menu__link-text">محتوى السلايدر</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/" class="kt-menu__link kt-menu__toggle">
                                            <span class="kt-menu__link-text">الخدمات</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>


                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " >
                                                    <a href="/admin/services" class="kt-menu__link">
                                                        <i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
                                                        <span class="kt-menu__link-text">الخدمات</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/" class="kt-menu__link kt-menu__toggle">
                                            <span class="kt-menu__link-text">الاخبار</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>


                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " >
                                                    <a href="/admin/news" class="kt-menu__link">
                                                        <i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
                                                        <span class="kt-menu__link-text">الاخبار</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/admin/permissions" class="kt-menu__link ">
                                            <span class="kt-menu__link-text">الصلاحيات</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/admin/courses" class="kt-menu__link ">
                                            <span class="kt-menu__link-text">الدورات</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/admin/orders" class="kt-menu__link ">
                                            <span class="kt-menu__link-text">طلبات الدورات</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                    </li>

                                   <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                       <a href="/admin/messages" class="kt-menu__link ">
                                           <span class="kt-menu__link-text">الرسائل</span>
                                           <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                           <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                       </a>

                                   </li>
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a href="/admin/partners" class="kt-menu__link ">
                                            <span class="kt-menu__link-text">الشركاء</span>
                                            <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                    </li>
                                   <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                       <a href="/" class="kt-menu__link kt-menu__toggle">
                                           <span class="kt-menu__link-text">ثوابت النظام</span>
                                           <i class="kt-menu__hor-arrow la la-angle-down"></i>
                                           <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                       </a>
                                       <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                           <ul class="kt-menu__subnav">
                                               <li class="kt-menu__item " >
                                                   <a href="/admin/system/constant" class="kt-menu__link">
                                                       <i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
                                                       <span class="kt-menu__link-text">عرض ثوابت النظام</span>
                                                   </a>
                                               </li>
                                           </ul>
                                       </div>


                                   </li>
                                </ul>
                            </div>
                        </div>
                       </div>
                </div>
            </div>
            <!-- end:: Header -->

            <div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                        <!-- begin:: Subheader -->
                        <!-- end:: Subheader -->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                        @yield('content')

                        </div>
                        <!-- end:: Content -->							</div>
                </div>
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item" id="kt_footer">
                <div class="kt-container ">
                    <div class="kt-footer__wrapper">
                        <div class="kt-footer__copyright">
                            {{date("Y")}}&nbsp;&copy;&nbsp;
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: Footer -->			</div>
    </div>
</div>

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<div id="kt_demo_panel" class="kt-demo-panel">
    <div class="kt-demo-panel__head">
        <h3 class="kt-demo-panel__title">
            Select A Demo
            <!--<small>5</small>-->
        </h3>
        <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
    </div>
    <div class="kt-demo-panel__body">
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 1
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo1.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 2
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo2.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 3
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo3.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 4
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo4.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 5
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo5.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 6
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo6.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 7
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo7.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item kt-demo-panel__item--active">
            <div class="kt-demo-panel__item-title">
                Demo 8
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo8.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 9
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo9.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 10
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo10.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 11
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo11.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 12
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo12.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 13
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo13.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>

                </div>
            </div>
        </div><div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 14
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="/assets/media/demos/preview/demo14.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="#" class="btn btn-brand btn-elevate disabled" >Coming soon</a>

                </div>
            </div>
        </div>
        <a href="https://1.envato.market/EA4JP" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
            Buy Metronic Now!
        </a>
    </div>
</div>
<!-- end::Demo Panel -->


<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                        <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                                    <span class="kt-nav__link-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                    <span class="kt-nav__link-text">Contacts</span>
                                                    <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                    <span class="kt-nav__link-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                    <span class="kt-nav__link-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                    <span class="kt-nav__link-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages--solid">
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        How likely are you to recommend our company<br> to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>

                                    <div class="kt-chat__text">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="/assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." style="height: 50px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ENd:: Chat-->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#716aca","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="/assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="/assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="/assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="/assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="/assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="/assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="/assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="/assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="/assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="/assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="/assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="/assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="/assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="/assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->

<script src="/assets/js/demo8/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo8/pages/dashboard.js" type="text/javascript"></script>
<script src="{{asset("asset/admin/js/jquery.fancybox.min.js")}}"></script>
<script src="/asset/js/ckeditor.js"></script>
<!--end::Page Scripts -->
@yield('js')
<script>

    var KTBootstrapDatepicker = function () {

        var arrows;
        if (KTUtil.isRTL()) {
            arrows = {
                leftArrow: '<i class="la la-angle-right"></i>',
                rightArrow: '<i class="la la-angle-left"></i>'
            }
        } else {
            arrows = {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }

        // Private functions
        var demos = function () {
            // minimum setup
            $('#kt_datepicker_1').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                orientation: "bottom left",
                templates: arrows
            });

            // minimum setup for modal demo
            $('#kt_datepicker_1_modal').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                orientation: "bottom left",
                templates: arrows
            });

            // input group layout
            $('#kt_datepicker_2').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                format:"yyyy-mm-dd",
                orientation: "bottom left",
                templates: arrows
            });

            // input group layout for modal demo
            $('#kt_datepicker_2_modal').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                orientation: "bottom left",
                templates: arrows
            });

            // enable clear button
            $('#kt_datepicker_3, #kt_datepicker_3_validate').datepicker({
                rtl: KTUtil.isRTL(),
                todayBtn: "linked",
                format:"yyyy-mm-dd",
                clearBtn: true,
                todayHighlight: true,
                templates: arrows
            });

            // enable clear button for modal demo
            $('#kt_datepicker_3_modal').datepicker({
                rtl: KTUtil.isRTL(),
                todayBtn: "linked",
                clearBtn: true,
                todayHighlight: true,
                templates: arrows
            });

            // orientation
            $('#kt_datepicker_4_1').datepicker({
                rtl: KTUtil.isRTL(),
                orientation: "top left",
                todayHighlight: true,
                templates: arrows
            });

            $('#kt_datepicker_4_2').datepicker({
                rtl: KTUtil.isRTL(),
                orientation: "top right",
                todayHighlight: true,
                templates: arrows
            });

            $('#kt_datepicker_4_3').datepicker({
                rtl: KTUtil.isRTL(),
                orientation: "bottom left",
                todayHighlight: true,
                templates: arrows
            });

            $('#kt_datepicker_4_4').datepicker({
                rtl: KTUtil.isRTL(),
                orientation: "bottom right",
                todayHighlight: true,
                templates: arrows
            });

            // range picker
            $('#kt_datepicker_5').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                templates: arrows
            });

            // inline picker
            $('#kt_datepicker_6').datepicker({
                rtl: KTUtil.isRTL(),
                todayHighlight: true,
                templates: arrows
            });
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTBootstrapDatepicker.init();
    });
</script>


</body>
<!-- end::Body -->
</html>
