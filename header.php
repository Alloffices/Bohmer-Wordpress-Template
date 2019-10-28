<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohmer_Bags
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/wp-content/themes/bohmer/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/wp-content/themes/bohmer/assets/img/icon.png">

    <!-- Title -->
    <title>Airi - Clean, Minimal eCommerce Bootstrap 4 Template</title>

    <?php wp_head() ?>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="/wp-content/themes/bohmer/assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="/wp-content/themes/bohmer/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <script type="text/javascript">
        
        (function($) {          
            $(document).ready(function(){                    
                $(window).scroll(function(){                          
                    if ($(this).scrollTop() > 30) {
                        $('.header-middle').hide();
                        $('.header-style-3 .header-bottom').css("padding-top", "15px");
                    } else {
                        $('.header-middle').show();
                        $('.header-style-3 .header-bottom').css("padding-top", "0px");
                    }
                });
            });
        })(jQuery);

    </script>
</head>

<body <?php body_class(); ?>>

    <!-- Main Wrapper Start -->
    <div class="wrapper">

       <?php include('bohmer-tempate-pages/header-navigation-template.php') ?>
       <?php include('bohmer-tempate-pages/header-mobile-navigation-template.php') ?>
