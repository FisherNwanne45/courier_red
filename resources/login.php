<?php
include('log.php'); // Includes Login Script

// Ensure session is not active before calling session_start()
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['login_user'])) {
    // Check if $link is defined
    if (isset($link)) {
        header("location: " . $link . "");
    } else {
        // Define a default behavior if $link is not set
        // For example, redirect to a specific page or show an error message
        header("location: ../index.php");
        exit(); // Ensure no further execution after redirection
    }
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Administrator Panel</title>
        <link href="../images/favicon.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            background: linear-gradient(90deg, #5D54A4, #7C78B8);
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #5C5696;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #6C63AC;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #5D54A4, #6A679E);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7E7BB9;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color: #7875B5;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #6A679E;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #4C489D;
            box-shadow: 0px 2px 2px #5C5696;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #6A679E;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #7875B5;
        }

        .social-login {
            position: absolute;
            height: 140px;
            width: 160px;
            text-align: center;
            bottom: 0px;
            right: 0px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #7875B5;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }
        </style>

        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" action="" method="post">
                        <div class="login__field">
                            <span><?php echo $error; ?></span>
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" id="name" name="username" class="login__input"
                                placeholder="User name / Email">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input id="password" name="password" type="password" class="login__input"
                                placeholder="Password">
                        </div>
                        <button class="button login__submit" name="submit" type="submit">
                            <span class="button__text"> Log in

                                <i class="button__icon fas fa-chevron-right"></i></span>
                        </button>

                    </form>
                    <div class="social-login">
                        <h3><img src="img/<?= htmlspecialchars($row['image']) ?>" width="150" alt="">
                        </h3>
                        <div class="social-icons">
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




                            /* HIDE the google translate toolbar */
                            .goog-te-banner-frame.skiptranslate {
                                display: none !important;
                            }

                            body {
                                top: 0px !important;
                            }

                            /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
                            </style>
                            <!-- Google Translate Element end -->
                        </div>
                    </div>
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>
            </div>
        </div>
    </body>

</html>