<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Authentication | KokaMart</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
  <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
  <meta name="author" content="colorlib" />

  <link rel="shortcut icon" href="<?= base_url('assets/front_end/img/logo_koka.png') ?>">
  
  <link href="<?php echo base_url('assets/back_end/login/css/fontgapis.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/back_end/login/css/fontqiucksand.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/back_end/login/css/waves.min.css') ?>" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/feather.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/themify-icons.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/icofont.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back_end/login/css/pages.css') ?>">

</head>
<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" method="post" action="<?php echo base_url('back_end/Authentication/act_login'); ?>">
                        <div class="text-center">
                            
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary" style="margin: 20px 0 10px 0;"><img style="height: 50px;" src="<?php echo base_url('assets/front_end/img/kokamart.png') ?>" alt="logo.png"></h3>
                                    </div>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <div class="form-group form-primary">
                                    <input type="text" name="admin_username" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="admin_password" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <!--
                                            <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                        -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/jquery.min.js') ?>"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/jquery-ui.min.js') ?>"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/popper.min.js') ?>"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/bootstrap.min.js') ?>"></script>

<script src="<?php echo base_url('assets/back_end/login/js/waves.min.js') ?>" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/jquery.slimscroll.js') ?>"></script>

<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/modernizr.js') ?>"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/css-scrollbars.js') ?>"></script>
<script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo base_url('assets/back_end/login/js/common-pages.js') ?>"></script>

<script async src="<?php echo base_url('assets/back_end/login/js/tagmanager.js') ?>" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

<script type="4878d7dfa7bc22a8dfa99416-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?php echo base_url('assets/back_end/login/js/rocket-loader.min.js') ?>" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
</html>
