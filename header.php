<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head();?>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper" <?php body_class();?>>


    <!-- .preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- /.preloader -->


    <!-- menu-area -->
    <header class="main-header header-style-four">
        
        <!-- header-top-style-two -->
        <div class="header-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="social-style-four in-block">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-box centred">
                            <a href="index.html"><figure><img src="<?php echo get_template_directory_uri();?>/images/logo/logo1.png" alt=""></figure></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="search-box">
                            <form action="index.html" method="post">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-top-style-two -->


        <!-- main-menu -->
        <div class="theme_menu menu-area stricky centred">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu">
                                <div class="navbar-header">     
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'menu_class' => 'navigation clearfix'
                                        ));
                                    ?>

                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'menu_class' => 'mobile-menu clearfix'
                                        ));
                                    ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
           </div>
        </div><!-- end main-menu -->
    </header>
    <!-- end menu-area -->