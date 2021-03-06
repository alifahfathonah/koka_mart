<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | KokaMart </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/front_end/img/logo_koka.png') ?>">
    <!-- Google font-->
    <link href="<?php echo base_url('assets/back_end/css/apis.css') ?>" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/sweetalert/css/sweetalert.css') ?>">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/css/component.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/icon/themify-icons/themify-icons.css') ?>">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/bower_components/select2/css/select2.min.css') ?>">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/multiselect/css/multi-select.css') ?>">

    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/icon/icofont/css/icofont.css') ?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/icon/feather/css/feather.css') ?>">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/pages/data-table/css/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/css/jquery.mCustomScrollbar.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.css') ?>" />
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?php echo base_url('Home') ?>">
                            <p style="font-size: 20px; margin-top: 15px; margin-left: 15px;">KokaMart</p>
                            <!--<img class="img-fluid" src="<?php echo base_url('assets/back_end/images/logo.png') ?>" alt="Theme-Logo">-->
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search" hidden>
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <!--
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url('assets/back_end/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url('assets/back_end/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url('assets/back_end/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li> -->
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url('assets/back_end/images/logo-transparent.png') ?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $this->session->userdata('admin_nama') ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="<?php echo base_url('back_end/Profile') ?>">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('back_end/Authentication/logout') ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="<?php echo base_url('assets/back_end/images/avatar-3.jpg') ?>" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?php echo base_url('assets/back_end/images/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?php echo base_url('assets/back_end/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?php echo base_url('assets/back_end/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?php echo base_url('assets/back_end/images/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url('assets/back_end/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="<?php echo base_url('assets/back_end/images/avatar-4.jpg') ?>" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?php echo base_url('admin') ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                        <span class="pcoded-mtext">Data Master</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?php echo base_url('back_end/Artikel') ?>">
                                                <span class="pcoded-mtext">Data Artikel</span>
                                            </a>
                                        </li>
                                        <!--<li class="">
                                            <a href="<?php echo base_url('back_end/Customer') ?>">
                                                <span class="pcoded-mtext">Data Customer</span>
                                            </a>
                                        </li>-->
                                        <li class="">
                                            <a href="<?php echo base_url('back_end/Kategori') ?>">
                                                <span class="pcoded-mtext">Data Kategori</span>
                                            </a>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Data Produk</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="<?php echo base_url('back_end/produk/Premium') ?>">
                                                        <span class="pcoded-mtext">Premium</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?php echo base_url('back_end/produk/Ukm') ?>">
                                                        <span class="pcoded-mtext">UKM / Lainnya</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">Transaksi</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="<?php echo base_url('back_end/Penjualan') ?>">
                                                <span class="pcoded-mtext">Penjualan</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="<?php echo base_url('back_end/Pengiriman_produk') ?>">
                                                <span class="pcoded-mtext">Pengiriman Produk</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url('back_end/Laporan') ?>">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Laporan Penjualan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                            
                                            <?= $contents; ?>

                                        </div>
                                    </div>
                                </div>
                                <div id="styleSelector">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Delete-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Modal Delete-->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/back_end/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/back_end/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/back_end/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/back_end/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/back_end/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="<?php echo base_url('assets/back_end/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/jquery/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/jquery-ui/js/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/popper.js/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') ?>"></script>

    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/modernizr/js/modernizr.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/modernizr/js/css-scrollbars.js') ?>"></script>

    <!-- sweet alert js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/sweetalert/js/sweetalert.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/modal.js') ?>"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/modalEffects.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/classie.js') ?>"></script>

    <!-- data-table js -->
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/data-table/js/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/data-table/js/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/data-table/js/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

    <!-- Chart js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/chart.js/js/Chart.js') ?>"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/i18next/js/i18next.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/jquery-i18next/js/jquery-i18next.min.js') ?>"></script>

    <!-- Select 2 js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/select2/js/select2.full.min.js') ?>"></script>
    <!-- Multiselect js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/bower_components/multiselect/js/jquery.multi-select.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/jquery.quicksearch.js') ?>"></script>

    <!-- amchart js -->
    <script src="<?php echo base_url('assets/back_end/pages/widget/amchart/amcharts.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/widget/amchart/serial.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/widget/amchart/light.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/SmoothScroll.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/js/pcoded.min.js') ?>"></script>

    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/pages/advance-elements/select2-custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/pages/data-table/js/data-table-custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/js/vartical-layout.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/pages/dashboard/custom-dashboard.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/back_end/js/script.min.js') ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="<?php echo base_url('assets/back_end/js/gtagmanager.js') ?>"></script>

    <script src="<?php echo base_url('assets/back_end/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.js') ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script>
      function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
      }
    </script>
</body>

</html>
