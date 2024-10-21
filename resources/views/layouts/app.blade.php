<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <!-- Meta data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta content="Al-Quran Kareem"
      name="description">
  <meta content="Al-Quran Kareem" name="author">
  <meta name="keywords"
      content="Al-Quran Kareem" />

  <!-- Title -->
  <title>@yield('title')</title>

    <!--Favicon -->
    <link rel="icon" href="assets/images/brand/fav.png" type="image/x-icon" />

    <!-- Style css -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Dark css -->
    <link href="assets/css/dark.css" rel="stylesheet" />

    <!-- Skins css -->
    <link href="assets/css/skins.css" rel="stylesheet" />
    <link href="assets/css/skins.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="assets/css/animated.css" rel="stylesheet" />

    <!--Sidemenu css -->
    <link id="theme" href="assets/css/sidemenu.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="assets/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!---jvectormap css-->
    <link href="assets/plugins/jvectormap/jqvmap.css" rel="stylesheet" />

    <!-- simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/css/simplebar.css">

    <!-- Data table css -->
    <link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <!--Daterangepicker css-->
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />


    <!-- Style css -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/second.css" rel="stylesheet" />

</head>

<body class="app sidebar-mini light-mode default-sidebar">

    <!---Global-loader-->
    <!-- <div id="global-loader">
        <img src="assets/images/svgs/loader.svg" alt="loader">
    </div> -->

    <div class="page">
        <div class="page-main">

            <!--aside open-->
           <!--aside open-->
           <div class="app-sidebar app-sidebar2">
            <div class="app-sidebar__logo">
                <a class="header-brand" href="flow2-dashboard.html">
                    <img src="assets/images/brand/logo.png" class="header-brand-img desktop-lgo"
                        alt="Covido logo">
                    <img src="assets/images/brand/logo1.png" class="header-brand-img dark-logo"
                        alt="Covido logo">
                    <img src="assets/images/brand/favicon.png" class="header-brand-img mobile-logo"
                        alt="Covido logo">
                    <img src="assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo"
                        alt="Covido logo">
                </a>
            </div>
        </div>
        <aside class="app-sidebar app-sidebar3">
            <div class="app-sidebar__user">
                <div class="dropdown user-pro-body text-center">
                    <div class="user-pic">
                        <img src="{{ $user->img }}" alt="user-img"
                            id="sidebarUserProfile" class="avatar-xl rounded-circle mb-1" style="border: 2px solid white;">
                    </div>
                    <div class="user-info">
                        <h5 class=" mb-1 font-weight-bold" id="sidebarUsername">{{ $user->fname ." ".$user->lname }}</h5>
                        <span class="text-muted app-sidebar__user-name text-sm">Admin</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item{{ Request::is('dashboard') ? ' active' : ''}}" href="/dashboard">


                        <svg class="side-menu__icon" id="category-2" xmlns="http://www.w3.org/2000/svg"
                            width="18.18" height="18.18" viewBox="0 0 18.18 18.18">
                            <path id="Vector"
                                d="M3.962,0H2.522A2.254,2.254,0,0,0,0,2.522V3.962A2.254,2.254,0,0,0,2.522,6.484H3.962A2.254,2.254,0,0,0,6.484,3.962V2.522A2.254,2.254,0,0,0,3.962,0Z"
                                transform="translate(10.181 1.515)" fill="#bf8d46" />
                            <path id="Vector-2" data-name="Vector"
                                d="M3.969,0H2.53A2.257,2.257,0,0,0,0,2.522V3.962a2.257,2.257,0,0,0,2.522,2.53H3.962A2.254,2.254,0,0,0,6.484,3.969V2.53A2.248,2.248,0,0,0,3.969,0Z"
                                transform="translate(1.515 10.173)" fill="#bf8d46" />
                            <path id="Vector-3" data-name="Vector"
                                d="M6.5,3.25A3.25,3.25,0,1,1,3.25,0,3.25,3.25,0,0,1,6.5,3.25Z"
                                transform="translate(1.515 1.515)" fill="#bf8d46" />
                            <path id="Vector-4" data-name="Vector"
                                d="M6.5,3.25A3.25,3.25,0,1,1,3.25,0,3.25,3.25,0,0,1,6.5,3.25Z"
                                transform="translate(10.165 10.165)" fill="#bf8d46" />
                            <path id="Vector-5" data-name="Vector" d="M0,0H18.18V18.18H0Z"
                                transform="translate(18.18 18.18) rotate(180)" fill="none" opacity="0" />
                        </svg>

                        <span class="side-menu__label">Dashboard</span></a>
                </li>
                <!-- <li class="slide">
                    <a class="side-menu__item" href="/flow2-qari-panel.html">

                        <svg class="side-menu__icon" id="Group_15880" data-name="Group 15880"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="21.578" height="21.827" viewBox="0 0 21.578 21.827">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_3226" data-name="Rectangle 3226" width="21.577"
                                        height="21.827" fill="#bf8d46" />
                                </clipPath>
                            </defs>
                            <g id="Group_15875" data-name="Group 15875" clip-path="url(#clip-path)">
                                <path id="Path_27620" data-name="Path 27620"
                                    d="M1.029,257.222a.422.422,0,0,0-.074-.037,1.182,1.182,0,0,1-.935-1.37,12.519,12.519,0,0,1,.518-2.207,4.5,4.5,0,0,1,2.919-2.775c.643-.221,1.269-.495,1.921-.682.754-.216,1.527-.365,2.293-.537a.242.242,0,0,1,.186.05c.11.1.2.215.324.348l-1.388.225a3.213,3.213,0,0,0,.829,1.53,4.168,4.168,0,0,0,3.238,1.24A4.073,4.073,0,0,0,14,251.6a3.171,3.171,0,0,0,.689-1.381L13.325,250c.161-.142.277-.257.406-.351a.3.3,0,0,1,.194-.029,14.365,14.365,0,0,1,3.457.933,11.683,11.683,0,0,1,1.773.756,4.573,4.573,0,0,1,2.2,3.329c.059.342.12.684.187,1.024a1.233,1.233,0,0,1-.94,1.524.235.235,0,0,0-.053.033Z"
                                    transform="translate(0 -235.396)" fill="#bf8d46" />
                                <path id="Path_27621" data-name="Path 27621"
                                    d="M98.581,4.7c0,.384,0,.767,0,1.151a.5.5,0,0,1-.758.5,13.783,13.783,0,0,0-3.048-.906,11.747,11.747,0,0,0-5.245.288c-.591.169-1.166.395-1.742.612-.473.178-.793-.023-.793-.524,0-.717,0-1.435,0-2.152A3.434,3.434,0,0,1,89.832.3a14.631,14.631,0,0,1,4.13-.24A14.255,14.255,0,0,1,96.1.4a3.361,3.361,0,0,1,2.48,3.239c0,.355,0,.71,0,1.065"
                                    transform="translate(-82.038 0)" fill="#bf8d46" />
                                <path id="Path_27622" data-name="Path 27622"
                                    d="M91.319,115.682a.561.561,0,0,1-.592-.315,3.584,3.584,0,0,1-.393-.748,4.844,4.844,0,0,1-.36-1.846c0-.056.005-.111.008-.188.65.151,1.131-.316,1.7-.42-.02.368-.047.742-.058,1.116a.891.891,0,0,0,.052.376c.3.673.592,1.348.923,2a1.108,1.108,0,0,0,.457.422.684.684,0,0,0,.882-.254,2.094,2.094,0,0,1,1.206-.748,1.974,1.974,0,0,1,2.03.685.8.8,0,0,0,1.433-.133c.343-.682.654-1.382.94-2.09a2.164,2.164,0,0,0-.089-1.233c-.009-.048-.025-.1-.037-.144,0,0,.008-.011.03-.041.286.11.585.215.874.34a1.173,1.173,0,0,0,.91.09,1.123,1.123,0,0,1,.1.933c-.127.464-.266.926-.423,1.381a2.161,2.161,0,0,1-.293.537.578.578,0,0,1-.672.286c-.1.507-.177,1.013-.31,1.5a6.131,6.131,0,0,1-2.931,3.713,2.118,2.118,0,0,1-2.322-.054,5.839,5.839,0,0,1-2.448-3.071c-.243-.678-.409-1.383-.617-2.1m4.194,1.93a1.626,1.626,0,0,0,.972-.244.672.672,0,0,0,.005-1.2,1.758,1.758,0,0,0-1.832.016.664.664,0,0,0,.012,1.173,1.5,1.5,0,0,0,.843.254"
                                    transform="translate(-84.845 -105.743)" fill="#bf8d46" />
                            </g>
                        </svg>


                        <span class="side-menu__label">Qari Panel</span></a>
                </li> -->

                <li class="slide">
                    <a class="side-menu__item{{ Request::is('azkar') ? ' active' : ''}}" href="/azkar">



                        <svg class="side-menu__icon" id="vuesax_bold_message-text"
                            data-name="vuesax/bold/message-text" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <g id="message-text">
                                <path id="Vector" d="M24,0V24H0V0Z" fill="#bf8d46" opacity="0" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M14,20H1a1,1,0,0,1-1-1V6A6.139,6.139,0,0,1,1.5,1.5,6.139,6.139,0,0,1,6,0h8a6.138,6.138,0,0,1,4.5,1.5A6.14,6.14,0,0,1,20,6v8a6.138,6.138,0,0,1-1.5,4.5A6.138,6.138,0,0,1,14,20ZM5,11.75a.751.751,0,0,0-.751.75A.76.76,0,0,0,5,13.25h7a.76.76,0,0,0,.751-.75A.751.751,0,0,0,12,11.75Zm0-5a.76.76,0,0,0-.751.75A.751.751,0,0,0,5,8.25H15a.75.75,0,0,0,0-1.5Z"
                                    transform="translate(2 2)" fill="#bf8d46" />
                            </g>
                        </svg>



                        <span class="side-menu__label">Azkar Panel</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item{{ Request::is('app-users') ? ' active' : ''}}" href="/app-users">
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="22.676"
                            height="22.675" viewBox="0 0 22.676 22.675">
                            <g id="vuesax_bold_people" data-name="vuesax/bold/people"
                                transform="translate(-620 -252)">
                                <g id="people" transform="translate(620 252)">
                                    <path id="Vector" d="M0,0H22.675V22.675H0Z" fill="none" opacity="0" />
                                    <path id="Vector-2" data-name="Vector"
                                        d="M2.825,5.452a.7.7,0,0,0-.2,0,2.735,2.735,0,1,1,.2,0Z"
                                        transform="translate(13.737 1.89)" fill="#bf8d46" />
                                    <path id="Vector-3" data-name="Vector"
                                        d="M3.959,4.434a5.867,5.867,0,0,1-3.911.794A6.17,6.17,0,0,0,.6,2.686,5.805,5.805,0,0,0,0,.059,5.893,5.893,0,0,1,3.949.843,2,2,0,0,1,3.959,4.434Z"
                                        transform="translate(15.684 9.455)" fill="#bf8d46" />
                                    <path id="Vector-4" data-name="Vector"
                                        d="M2.627,5.452a.7.7,0,0,1,.2,0,2.726,2.726,0,1,0-.2,0Z"
                                        transform="translate(3.458 1.89)" fill="#bf8d46" />
                                    <path id="Vector-5" data-name="Vector"
                                        d="M4.3,2.686a6.153,6.153,0,0,0,.557,2.57A5.838,5.838,0,0,1,1.12,4.443a2.007,2.007,0,0,1,0-3.6A5.8,5.8,0,0,1,4.9.04,6.007,6.007,0,0,0,4.3,2.686Z"
                                        transform="translate(1.885 9.455)" fill="#bf8d46" />
                                    <path id="Vector-6" data-name="Vector"
                                        d="M3.373,6.491a1.067,1.067,0,0,0-.246,0,3.26,3.26,0,1,1,.246,0Z"
                                        transform="translate(8.078 8.503)" fill="#bf8d46" />
                                    <path id="Vector-7" data-name="Vector"
                                        d="M1.07.815a1.94,1.94,0,0,0,0,3.467,5.773,5.773,0,0,0,5.914,0,1.94,1.94,0,0,0,0-3.467A5.773,5.773,0,0,0,1.07.815Z"
                                        transform="translate(7.31 16.135)" fill="#bf8d46" />
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">App User</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item{{ Request::is('settings') ? ' active' : ''}}" href="/settings">
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="21.707"
                            height="21.707" viewBox="0 0 21.707 21.707">
                            <g id="vuesax_bold_setting-2" data-name="vuesax/bold/setting-2"
                                transform="translate(-300 -190)">
                                <g id="setting-2" transform="translate(300 190)">
                                    <path id="Vector"
                                        d="M16.371,6.023c-1.637,0-2.306-1.158-1.492-2.578A1.715,1.715,0,0,0,14.245,1.1l-1.565-.9A1.51,1.51,0,0,0,10.618.75l-.1.172c-.814,1.42-2.153,1.42-2.976,0L7.444.75A1.484,1.484,0,0,0,5.4.207l-1.565.9A1.726,1.726,0,0,0,3.2,3.454c.823,1.411.154,2.569-1.483,2.569A1.724,1.724,0,0,0,0,7.741V9.333a1.724,1.724,0,0,0,1.718,1.718c1.637,0,2.306,1.158,1.483,2.578a1.715,1.715,0,0,0,.633,2.343l1.565.9a1.51,1.51,0,0,0,2.062-.543l.1-.172c.814-1.42,2.153-1.42,2.976,0l.1.172a1.51,1.51,0,0,0,2.062.543l1.565-.9a1.718,1.718,0,0,0,.633-2.343c-.823-1.42-.154-2.578,1.483-2.578A1.724,1.724,0,0,0,18.1,9.333V7.741A1.737,1.737,0,0,0,16.371,6.023ZM9.045,11.477a2.939,2.939,0,1,1,2.939-2.939A2.945,2.945,0,0,1,9.045,11.477Z"
                                        transform="translate(1.809 2.316)" fill="#bf8d46" />
                                    <path id="Vector-2" data-name="Vector" d="M0,0H21.707V21.707H0Z"
                                        transform="translate(21.707 21.707) rotate(180)" fill="none" opacity="0" />
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">Settings</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="/logout">
                        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 20 20">
                            <g id="vuesax_bold_arrow-square-left" data-name="vuesax/bold/arrow-square-left"
                                transform="translate(-492 -188)">
                                <g id="arrow-square-left" transform="translate(492 188)">
                                    <path id="Vector"
                                        d="M11.825,0H4.842A4.447,4.447,0,0,0,0,4.842v6.975a4.45,4.45,0,0,0,4.842,4.85h6.975a4.447,4.447,0,0,0,4.842-4.842V4.842A4.437,4.437,0,0,0,11.825,0Zm-2,10.833a.629.629,0,0,1,0,.883.624.624,0,0,1-.883,0L6,8.775a.629.629,0,0,1,0-.883L8.942,4.95a.625.625,0,1,1,.883.883l-2.5,2.5Z"
                                        transform="translate(1.667 1.667)" fill="#bf8d46" />
                                    <path id="Vector-2" data-name="Vector" d="M0,0H20V20H0Z"
                                        transform="translate(20 20) rotate(180)" fill="none" opacity="0" />
                                </g>
                            </g>
                        </svg>

                        <span class="side-menu__label">Log Out</span></a>
                </li>

            </ul>

        </aside>
        <!--aside closed-->

        <div class="app-content main-content">
            <div class="side-app">

                <!--app header-->
                <div class="app-header header top-header">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a class="header-brand" href="index.html">
                                <img src="assets/images/brand/logo.png" class="header-brand-img desktop-lgo"
                                    alt="Dashtic logo">
                                <img src="assets/images/brand/logo1.png" class="header-brand-img dark-logo"
                                    alt="Dashtic logo">
                                <img src="assets/images/brand/favicon.png"
                                    class="header-brand-img mobile-logo" alt="Dashtic logo">
                                <img src="assets/images/brand/favicon1.png"
                                    class="header-brand-img darkmobile-logo" alt="Dashtic logo">
                            </a>
                            <div class="dropdown side-nav">
                                <div class="app-sidebar__toggle" data-toggle="sidebar">
                                    <a class="open-toggle" href="#">
                                        <svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="3" y1="12" x2="21" y2="12"></line>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <line x1="3" y1="18" x2="21" y2="18"></line>
                                        </svg>
                                    </a>
                                    <a class="close-toggle" href="#">
                                        <svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex mx-auto" style="width: 100%;">
                                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch ">
                                    <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                        height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                        focusable="false">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                    </svg>
                                </a>
                                <div class="mt-1 mx-auto    ">
                                    <form class="form-inline" method="GET" action="/app-users">
                                        <div class="search-element">
                                            <input type="search" name="q" class="form-control header-search"
                                                placeholder="Search…" aria-label="Search" tabindex="1" value="{{ old('q', request()->query('q')) }}">
                                            <button class="btn btn-primary-color" type="submit">
                                                <svg class="header-icon search-icon" x="1008" y="1248"
                                                    viewBox="0 0 24 24" height="100%" width="100%"
                                                    preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div><!-- SEARCH -->

                            </div>
                        </div>
                    </div>
                </div>
                <!--/app header-->



                    <!-- main content -->
                    @yield('content')

                    

                    <!--End row-->

                </div>
            </div><!-- end app-content-->
        </div>

        <!--Footer-->
        <!-- <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2020 <a href="#">Dashtic</a>. Designed by <a href="#">Spruko Technologies
                            Pvt.Ltd</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- End Footer-->

    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top">
        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
        </svg>
    </a>

    <!-- Jquery js-->
    <script src="assets/js/vendors/jquery-3.4.0.min.js"></script>

    <!-- Bootstrap4 js-->
    <script src="assets/plugins/bootstrap/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Othercharts js-->
    <script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="assets/js/vendors/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Sidemenu js-->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- P-scroll js-->
    <script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>
    <script src="assets/plugins/p-scrollbar/p-scroll1.js"></script>

    <!-- ECharts js -->
    <script src="assets/plugins/echarts/echarts.js"></script>

    <!-- Peitychart js-->
    <script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- Apexchart js-->
    <script src="assets/js/apexcharts.js"></script>

    <!--Moment js-->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- Daterangepicker js-->
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/daterange.js"></script>

    <!---jvectormap js-->
    <script src="assets/plugins/jvectormap/jquery.vmap.js"></script>
    <script src="assets/plugins/jvectormap/jquery.vmap.world.js"></script>
    <script src="assets/plugins/jvectormap/jquery.vmap.sampledata.js"></script>

    <!-- Index js-->
    <script src="assets/js/index1.js"></script>

    <!-- Data tables js-->
    <script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/datatables.js"></script>

    <!--Counters -->
    <script src="assets/plugins/counters/counterup.min.js"></script>
    <script src="assets/plugins/counters/waypoints.min.js"></script>

    <!-- simplebar JS -->
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

    <!--Chart js -->
    <script src="assets/plugins/chart/chart.bundle.js"></script>
    <script src="assets/plugins/chart/utils.js"></script>

    <!-- Custom js-->
    <script src="assets/js/custom.js"></script>

</body>

</html>