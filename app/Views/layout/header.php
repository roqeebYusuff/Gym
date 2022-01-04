<html>
    <head>
        <title> <?php echo $title; ?> | Gym </title>
        <!-- Css files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/bootstrap/css/mdb.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/fontawesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/ionicons/css/ionicons.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style.css" />

        <!-- Js files -->
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/jquery/js/jquery.min.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/bootstrap/js/mdb.js"> </script>
    </head>

    <script>
        $(document).ready(function(){
            $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() > 100) { // check if user scrolled more than 100 from top of the browser window
                $(".fixed-top").css("background-color", "#040919"); // if yes, then change the color of class "fixed-top" 
                } else {
                $(".fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
                }
            });            

            $('.nav-menu a').on('click', function(){
                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }
            });

        });
    </script>

    <body>
            <!--========================== Header ============================-->
        <header id="header">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color: transparent;" id="nav-menu-container">
                    <div class="container">

                        <!-- Brand -->
                        <a class="navbar-brand" href="#" style="margin-right:150px;"><span style="color: #e0072f; font-weight: 700;">we</span>Gym</a>

                        <!-- Collapse -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="#navcollapse" aria-expanded="false" aria-label="Toggle navigation"> 
                            <span class="navbar-toggler-icon"> </span>
                        </button>

                        <!-- Links -->
                        <div class="collapse navbar-collapse shift" id="navcollapse"> 
                            <ul class="navbar-nav mr-auto nav-menu">
                                <li class="navbar-item menu-active">
                                    <a href="#home" class="navbar-link">Home</a>
                                </li>

                                <li class="navbar-item">
                                    <a href="#feature" class="navbar-link">About</a>
                                </li>

                                <li class="navbar-item">
                                    <a href="#how" class="navbar-link">How</a>
                                </li>

                                 <li class="navbar-item">
                                    <a href="#buy-tickets" class="navbar-link">Pricing</a>
                                </li> 

                                <li class="navbar-item">
                                    <a href="#gallery" class="navbar-link">Gallery</a>
                                </li>

                                <li class="navbar-item">
                                    <a href="#contact" class="navbar-link">Contact</a>
                                </li>

                                <li class="navbar-item buy-tickets">
                                    <a href="<?php echo base_url() ?>/login" class="navbar-link">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav><!-- #nav-menu-container -->
        </header><!-- #header -->