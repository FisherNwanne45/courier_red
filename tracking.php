<?php
//include('resources/config.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . "/New_Courier/resources/config.php");
require_once('resources/config.php');
//require_once __DIR__."/resources/config.php";

?>
<!DOCTYPE html>
<!-- saved from url=(0043)<?php echo $url; ?>/ -->
<html lang="en">
    <!-- Added by HTTrack -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon 0.5s;
            animation: animateErrorIcon 0.5s;
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark 0.5s;
            animation: animateXMark 0.5s;
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px;
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px;
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px;
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0;
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
                margin-top: 26px;
                opacity: 0;
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px;
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1;
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning 0.75s infinite alternate;
            animation: pulseWarning 0.75s infinite alternate;
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px;
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86;
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px;
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486;
            }

            to {
                border-color: #f8bb86;
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486;
            }

            to {
                border-color: #f8bb86;
            }
        }

        .swal-icon--success {
            border-color: #a5dc86;
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px;
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in;
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, 0.2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2;
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2;
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip 0.75s;
            animation: animateSuccessTip 0.75s;
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong 0.75s;
            animation: animateSuccessLong 0.75s;
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg);
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px;
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px;
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px;
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px;
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px;
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px;
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px;
            }
        }

        .swal-icon--info {
            border-color: #c9dae1;
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px;
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1;
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px;
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto;
        }

        .swal-icon:first-child {
            margin-top: 32px;
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%;
        }

        .swal-title {
            color: rgba(0, 0, 0, 0.65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0;
        }

        .swal-title:first-child {
            margin-top: 26px;
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0;
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px;
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box;
        }

        .swal-text:first-child {
            margin-top: 45px;
        }

        .swal-text:last-child {
            margin-bottom: 45px;
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative;
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer;
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2;
        }

        .swal-button:active {
            background-color: #70bce0;
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, 0.29);
        }

        .swal-button[disabled] {
            opacity: 0.5;
            cursor: default;
        }

        .swal-button::-moz-focus-inner {
            border: 0;
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef;
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8;
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7;
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, 0.29);
        }

        .swal-button--danger {
            background-color: #e64942;
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740;
        }

        .swal-button--danger:active {
            background-color: #cf423b;
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, 0.29);
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium;
        }

        .swal-content:last-child {
            margin-bottom: 20px;
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color 0.2s;
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff;
        }

        .swal-content__textarea {
            resize: vertical;
        }

        .swal-button--loading {
            color: transparent;
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1;
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0;
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: 0.4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, 0.9);
            transition: background 0.2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite;
        }

        .swal-button__loader div:nth-child(3n + 2) {
            -webkit-animation-delay: 0.15s;
            animation-delay: 0.15s;
        }

        .swal-button__loader div:nth-child(3n + 3) {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: 0.4;
            }

            20% {
                opacity: 0.4;
            }

            50% {
                opacity: 1;
            }

            to {
                opacity: 0.4;
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: 0.4;
            }

            20% {
                opacity: 0.4;
            }

            50% {
                opacity: 1;
            }

            to {
                opacity: 0.4;
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%;
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto;
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert 0.3s;
            animation: showSweetAlert 0.3s;
            will-change: transform;
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity 0.2s, -webkit-transform 0.3s;
            transition: transform 0.3s, opacity 0.2s;
            transition: transform 0.3s, opacity 0.2s, -webkit-transform 0.3s;
        }

        @media (max-width: 500px) {
            .swal-modal {
                width: calc(100% - 20px);
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            1% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }

            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            1% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05);
            }

            80% {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        </style>
        <!-- /Added by HTTrack -->

        <title><?php echo $name; ?> - Shipment Tracker</title>
        <link rel="shortcut icon" href="wp-content/uploads/2019/04/omni_favicon.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
        <link rel="stylesheet" href="./tracking_files/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous" />
        <script src="./tracking_files/jquery.min.js.download"></script>
        <script src="./tracking_files/popper.min.js.download"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="./tracking_files/bootstrap.min.js.download"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <link href="./tracking_files/global.css" rel="stylesheet" />
        <link href="./tracking_files/tracking.css" rel="stylesheet" />
        <script defer="" src="./tracking_files/global.js.download"></script>
        <script defer="" src="./tracking_files/tracking.js.download"></script>
    </head>

    <body>
        <header>
            <a href="<?php echo $url; ?>/">
                <div class="companyName ml-3">
                    <script>
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'da',
                            includedLanguages: 'da,pt,ar,pl,fr,es,it,en,ko,zh-CN',
                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                        }, 'google_translate_element');
                    }
                    </script>
                    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                    </script>
                    <div id="google_translate_element"></div>

                    <style type="text/css">
                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
                    .goog-te-menu-value {
                        padding: 3px !important;
                    }

                    .goog-te-gadget-simple {
                        background-color: #fff;
                        border-left: 1px solid #d5d5d5;
                        border-top: 1px solid #9b9b9b;
                        border-bottom: 1px solid #e8e8e8;
                        border-right: 1px solid #d5d5d5;
                        font-size: 10pt;
                        display: inline-block;
                        padding-top: 1px;
                        padding-bottom: 2px;
                        border-radius: 10px;
                        cursor: pointer;
                        zoom: 1;
                    }

                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
                        text-decoration: none;
                    }

                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
                        color: blue;
                    }

                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
                        color: blue;
                    }




                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
                        display: none;
                    }

                    /* HIDE the google translate toolbar */
                    .goog-te-banner-frame.skiptranslate {
                        display: none !important;
                    }

                    body {
                        top: 0px !important;
                    }

                    .skiptranslate iframe {
                        visibility: hidden !important;
                    }

                    body {
                        top: 0 !important;

                    }

                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
                    </style>
                </div>
            </a>
            <div class="breadcrumbs d-none d-md-block">
                <a href="<?php echo $url; ?>/#">Tracking Your Shipment</a>
            </div>
            <div class="clear"></div>
        </header>
        <style>
        .image-container {
            position: relative;
            width: 100%;
            height: 12rem;
            background: radial-gradient(circle, white, #d3d3d3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container img {
            object-fit: cover;
            height: 8rem;
            width: auto;
            max-width: 100%;
        }

        @media (max-width: 768px) {
            .image-container {
                height: 10rem;
            }

            .image-container img {
                height: 5rem;
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .image-container {
                height: 8rem;
            }

            .image-container img {
                height: 4rem;
                max-width: 100%;
            }
        }

        #search {
            height: 3.5rem;
            border: 2px solid #ccc;
            border-radius: 20px;
            padding: 0 10px;
            font-size: 1rem;
            background: #d3d3d3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        </style>
        <div class="app">
            <div class="notifications-container"></div>
            <div class="container-fluid col-lg-8 col-sm-12">
                <div class="card-body">
                    <div class="image-container">
                        <a href="./"> <img src="resources/img/<?= htmlspecialchars($row['image']) ?>" width="250px"
                                alt=""></a>
                    </div>

                    <h5>Tracking Your Shipment</h5>
                    <small>Here’s the fastest way to check the status of your shipment through the
                        <strong><?php echo $name; ?></strong>
                        network.<br><br>
                    </small>
                    <form action="resources/track-result.php" method="post" name="form" id="form"
                        class="form-horizontal form-style">
                        <div class="form-row">
                            <div class="col-sm-12 col-md-12 form-group">

                                <input required style="background: #fff;" type="text" name="search" id="search"
                                    class="form-control" placeholder="Tracking Number" value="">

                                <input value="cid" type="hidden" name="dropdown">
                            </div>
                        </div>
                        <button type="submit" name="Submit">track</button>
                    </form>
                </div>
            </div>
        </div>

        <style>
        .swal-button {
            padding: 7px 19px;
            border-radius: 2px;
            background-color: #c22130;
            font-size: 12px;
            border: 1px solid #c22130;
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
        }
        </style>
        <script src="./tracking_files/umhcs11zyowawz03ycjpsi4myawb3tqz.js.download" async=""></script>
        <script src="./tracking_files/sweetalert.min.js.download"></script>
    </body>
    <?php echo $row['tawk']; ?>

</html>