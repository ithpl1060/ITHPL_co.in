<?php
// uncomment this 01/04/2025
$session = \Config\Services::session();
$session_data = $session->get('loginSession');

// echo $session_data;
// print_r($session_data);
// var_dump($session_data);
// exit;

if ($session_data == null) {

    // return redirect()->to(base_url('super/login')); //not this
    return null;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() . 'resource/images/favicon.ico'; ?>">
    <!-- <link rel="icon" href="</?php echo base_url() . 'resource/images/images.jpg'; ?>"> -->

    <title><?= esc($meta['meta_title'] ?? 'ITHPL | login') ?></title>

    <!-- Bootstrap 4.1-->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'resource/assets/vendor_components/bootstrap/dist/css/bootstrap.css'; ?>">
    <link rel="stylesheet"
        href="<?php echo base_url() . 'resource/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css'; ?>">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="<?php echo base_url() . 'resource/css/bootstrap-extend.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'resource/css/bootstrap-editable.css'; ?>">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() . 'resource/assets/vendor_components/datatable/datatables.min.css' ?>" />

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'resource/css/master_style.css'; ?>">

    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() . 'resource/assets/vendor_components/sweetalert/sweetalert.css' ?>" />


    <!-- SoftMaterial admin skins -->
    <link rel="stylesheet" href="<?php echo base_url() . 'resource/css/skins/_all-skins.css'; ?>">

    <!-- Select2 -->
    <link rel="stylesheet"
        href="<?php echo base_url() . 'resource/assets/vendor_components/select2/dist/css/select2.min.css' ?>">


    <style>
        .error {
            color: red;
        }
    </style>
    <style>
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.75) url('<?php echo base_url('resource/images/loader.gif'); ?>') no-repeat center center;
            z-index: 10000;
        }
    </style>
    <style>
        .template-option {
            cursor: pointer;
            transition: transform 0.3s ease;
            border-radius: 8px;
        }

        .template-option.selected {
            border: 3px solid #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .template-image-container {
            width: 100%;
            height: 200px;
            /* viewport size */
            overflow: hidden;
            /* crop anything outside this box */
            border-radius: 8px;
            position: relative;
        }

        .template-img {
            width: 100%;
            height: auto;
            /* allow full image height*/
            transition: transform 5s ease-in-out;
            /* smooth scroll effect */
            object-fit: cover;
            object-position: top;
            display: block;
        }

        /* On hover, scroll image to its bottom */
        .template-image-container:hover .template-img {
            transform: translateY(calc(-100% + 200px));
            /* move image up by its height minus container height */
        }

        /* Template name label */
        .template-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 6px 10px;
            background-color: rgba(0, 0, 0, 0.5);
            /* semi-transparent black */
            color: #fff;
            font-size: 14px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        /* Show label on hover */
        .template-image-container:hover .template-label {
            opacity: 1;
        }

        /* .template-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: top;
            display: block;

            /* Default transition for unhover (quick reset) 
            transition: transform 0.8s ease-in;
        } */

        /* Slow down when hovering (scroll down effect) */
        /* .template-image-container:hover .template-img {
            transform: translateY(calc(-100% + 200px));
            transition: transform 4s ease-out;
            /* 👈 slow scroll into view 
        } */


        @keyframes floatImg {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>



</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url('seo'); ?>" class="logo">
                <span class="text-white">Innovative TechHub</span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">

                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>resource/images/avatar-custom.png"
                                    class="user-image rounded-circle" alt="User Image">
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <li class="user-header">

                                    <img src="<?php echo base_url(); ?>resource/images/avatar-custom.png"
                                        class="float-left rounded-circle" alt="User Image">

                                    <p>
                                        <span id="userName" class="text-sm"></span>
                                        <small class="mb-5">
                                            <span class="text-bold text-info text-center" id="userRole">Admin</span>
                                            <span class="text-bold text-info text-center" id="userIdforAvatar"></span>


                                        </small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="row no-gutters">
                                        <div role="separator" class="divider col-12"></div>
                                        <div role="separator" class="divider col-12"></div>
                                        <div class="col-12 text-left">
                                            <a href="#" onclick="logout();"><i class="fa fa-power-off"></i> Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>