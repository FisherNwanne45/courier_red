<?php
//include('resources/config.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . "/New_Courier/resources/config.php");
require_once('resources/config.php');
//require_once __DIR__."/resources/config.php";

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->
<html dir="ltr" lang="en-US">

    <head>
        <!-- Mirrored from britsairways.com/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Apr 2022 15:50:18 GMT -->
        <!-- Added by HTTrack -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href='../fonts.googleapis.com/cssdca7.css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
        <link href='../fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/plugin.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        <meta property="og:url" content="<?php echo $row['url']; ?>">
        <meta property="og:image" content="resources/img/<?= htmlspecialchars($row['image']) ?>">

        <meta property="og:site_name" content="<?php echo $row['name']; ?>">
        <script type="text/javascript" src="js/jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="images/favicon.png" rel="shortcut icon">
        <title>Welcome to <?php echo $row['name']; ?></title>

    </head>

    <body>


        <div id="main-wrapper" class="clearfix">

            <style>
            .goog-te-gadget-simple {
                padding: 12px 5px;
            }

            #google_translate_element img,
            #google_translate_element2 img {
                display: inline-block !important;
            }
            </style>
            <header id="header" class="header-style-2 clearfix">
                <div class="navigation2">
                    <div class="container">
                        <div class="left-section">
                            <i class="fa fa-map-marker"></i> Head Office: <?php echo $row['addr']; ?>
                            <!-- Left empty or add content if needed -->
                        </div>

                        <div class="right-section">
                            <div id="google_translate_element"></div>

                            <!-- Link element -->
                            <span class="mobile-link">
                                <a href="tracking" class="button mobile-link">
                                    <i class="fa fa-search"></i> TRACK SHIPMENT
                                </a></span>

                            <!-- Mobile text replacement -->
                            <span class="mobile-text"><?php echo $row['email']; ?></span>
                        </div>

                        <style>
                        /* Initially hide the mobile text and show the link */
                        .mobile-text {
                            display: none;
                        }

                        /* Mobile-specific styles */
                        @media (max-width: 768px) {
                            .mobile-link {
                                display: none;
                                /* Hide the link on mobile */
                            }

                            .mobile-text {
                                display: inline-block;
                                /* Show the text on mobile */
                                font-size: 14px;
                                /* Customize the font size */
                                color: #fff;
                                /* Customize the text color */
                            }
                        }
                        </style>

                    </div>
                </div>

                <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'da',
                        includedLanguages: 'da,pt,ar,pl,fr,es,it,en,ko,zh-CN',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                    }, 'google_translate_element');
                }
                </script>
                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
                <div class="site-header">
                    <div class="top-header clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="top-header-wrap row">
                                    <div class="logo col-md-4">
                                        <a href="index">
                                            <img src="resources/img/<?= htmlspecialchars($row['image']) ?>"
                                                width="250px" alt="">
                                        </a>
                                    </div>

                                    <div class="info col-md-8">
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                <p>
                                                    <span class="heading">Opening Hours</span>
                                                    <span> 09.00 - 17.00</span>
                                                </p>
                                            </li><?php if (!empty($row['phone'])): ?>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <p>
                                                    <span class="heading">Call Us</span>
                                                    <span><?php echo $row['phone']; ?></span>
                                                </p>
                                            </li><?php endif; ?>
                                            <li class="last">
                                                <i class="fa fa-envelope"></i>
                                                <p>
                                                    <span class="heading">Email Us</span>
                                                    <span><a
                                                            href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slide-buttons">
                                        <button id="slide-buttons" class="slide-button icon icon-navicon"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="main-menu">
                                    <ul class="menu">
                                        <li class="active current home">
                                            <a href="index">Home</a>
                                        </li>
                                        <li class="">
                                            <a href="about">About</a>
                                        </li>

                                        <li class="has-sub">
                                            <a href="services">Services</a>
                                            <div class="mega-menu">
                                                <div class="mega-menu-grid">
                                                    <div class="mega-menu-item">
                                                        <a href="sea">
                                                            Sea/Ocean Freight
                                                            <img src="images/services/service2.jpg"
                                                                alt="Sea/Ocean Freight">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="road">
                                                            Road Transportation
                                                            <img src="images/services/service3.jpg"
                                                                alt="Road Transportation">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="air">
                                                            Air Freight
                                                            <img src="images/services/service1.jpg" alt="Air Freight">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="warehouse">
                                                            Warehousing
                                                            <img src="images/services/service5.jpg" alt="Warehousing">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="store">
                                                            Packaging & Storage
                                                            <img src="images/services/service6.jpg"
                                                                alt="Packaging & Storage">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="diplomatic-bag-and-secure-logistics">
                                                            Diplomatic Bag & Secure Logistics
                                                            <img src="images/services/service4.jpg"
                                                                alt="Diplomatic Bag & Secure Logistics">

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="has-sub">
                                            <a href="#">Industry Expertise</a>
                                            <div class="mega-menu">
                                                <div class="mega-menu-grid">
                                                    <div class="mega-menu-item">
                                                        <a href="ecommerce">
                                                            E-commerce Logistics
                                                            <img src="images/services/1.jpg" alt="E-commerce Logistics">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="medical">
                                                            Medical Device Logistics
                                                            <img src="images/services/3.jpg"
                                                                alt="Medical Device Logistics">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="retail">
                                                            Retail Logistics
                                                            <img src="images/services/2.jpg" alt="Air Freight">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="auto">
                                                            Automotive Supply Chain
                                                            <img src="images/services/4.jpg" alt="Automotive">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="aviation">
                                                            Aviation & Aerospace Logistics
                                                            <img src="images/services/5.jpg"
                                                                alt="Aviation & Aerospace Logistics">

                                                        </a>
                                                    </div>
                                                    <div class="mega-menu-item">
                                                        <a href="tech">
                                                            High Tech Logistics
                                                            <img src="images/services/6.jpg" alt="High Tech Logistics">

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>



                                        <li class="">
                                            <a href="contact">Contact Us</a>
                                        </li>

                                    </ul>
                                    <div class="right-section">
                                        <div class="search">
                                            <a href="resources" class=" "><i class="fa fa-user"> CLIENT AREA</i> </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                    <button class="c-menu__close icon icon-close"></button>
                    <div class="search-input">


                    </div>
                    <ul class="slide-menu-items">
                        <li class="active current home">
                            <a href="index">Home</a>
                        </li>
                        <li class="">
                            <a href="about">About</a>
                        </li>

                        <li class="has-sub ">
                            <a href="services">Services</a>
                            <ul>
                                <li><a href="sea">Sea/Ocean Freight</a></li>
                                <li><a href="road">Road Transportation</a></li>
                                <li><a href="air">Air Freight</a></li>
                                <li><a href="warehouse">Warehousing</a></li>
                                <li><a href="store">Packaging & Storage</a></li>
                                <li class="last"><a href="diplomatic-bag-and-secure-logistics">Diplomatic Bag and Secure
                                        Logistics</a></li>
                            </ul>
                        </li>

                        <li class="has-sub ">
                            <a href="#">Industry Expertise</a>
                            <ul>
                                <li><a href="ecommerce">E-commerce Logistics</a></li>
                                <li><a href="medical">Medical Device Logistics</a></li>
                                <li><a href="retail">Retail Logistics</a></li>
                                <li><a href="auto">Automotive Supply Chain</a></li>
                                <li><a href="aviation">Aviation & Aerospace Logistics</a></li>
                                <li class="last"><a href="tech">High Tech Logistics</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="tracking">Track Shipment</a>
                        </li>

                        <li class="">
                            <a href="resources">Client Area</a>
                        </li>
                    </ul>
                </nav>
                <div id="slide-overlay" class="slide-overlay"></div>

            </header>