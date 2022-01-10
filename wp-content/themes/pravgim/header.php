<!DOCTYPE html>
<html>

<head>
    <title>Православная гимназия</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <meta name="author" content="#">


    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=cyrillic,latin' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:700italic&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/responsiveslides.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">-->


    <link rel="icon" type="image/ico" href="favicon.ico">
    <?php wp_head(); ?>

    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <!--<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>-->
    <!--<script src="js/jquery.min.js"></script>
    <script src="js/uhpv-full.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/allScript.js"></script>-->


</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8">
            <div class="pull-right">
                <?php
                if(is_active_sidebar('prav-for-the-visually-impaired')){
                    dynamic_sidebar('prav-for-the-visually-impaired');
                }
                ?>
            </div>
            <!--<span id="uhvb" class="pull-right">
                      <a id="specialButton" href="#">
                       <img class="uhvb-img" alt="Версия для слабовидящих"
                            src="<?php /*echo _prav_path_img( 'vs.png' ) */?>" align="center">
                   </a>
                  </span>-->
        </div>
    </div>
</div>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-9">

                <div class="logo_konkurs">
                    <a href="https://www.sait2019.ru/uchastniki" target="_blank">
                        <img src="<?php echo _prav_path_img( 'logo-konk.png' ) ?>">
                    </a>
                </div>

                <div class="headBlockText">
                    <a href="<?php bloginfo('url'); ?>">
                        <div class="headerText">
                            <img class="img-responsive" src="<?php echo _prav_path_img( 'headerText.png' ) ?>"
                                 alt="Православная гимназия">
                        </div>
                        <div class="headerName_1">имени преподобного Амвросия Оптинского</div>
                        <div class="headerName_2">Липецкой Епархии</div>
                    </a>
                </div>

                <div class="row saintMini">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo _prav_path_img( 'headerIcon.jpg' ) ?>"/>
                    </div>
                </div>

                <div class="row slider center">
                    <div class="col-md-12">
                        <div class="birds">
                            <img src="<?php echo _prav_path_img( 'birds.png' ) ?>"/>
                        </div>

                        <div class="saint">
                            <img src="<?php echo _prav_path_img( 'headerIcon.jpg' ) ?>"/>
                        </div>

                        <ul class="rslides" id="slider1">
                            <li><img src="<?php echo _prav_path_img( 'slider/slider_1.jpg' ) ?>"
                                     alt="Православная гимназия"></li>
                            <li><img src="<?php echo _prav_path_img( 'slider/slider_2.jpg' ) ?>"
                                     alt="Православная гимназия"></li>
                            <li><img src="<?php echo _prav_path_img( 'slider/slider_3.jpg' ) ?>"
                                     alt="Православная гимназия"></li>
                            <li><img src="<?php echo _prav_path_img( 'slider/slider_4.jpg' ) ?>"
                                     alt="Православная гимназия"></li>
                            <li><img src="<?php echo _prav_path_img( 'slider/slider_5.jpg' ) ?>"
                                     alt="Православная гимназия"></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">
                <div class="headerLogo">
                    <img src="<?php echo _prav_path_img( 'headerLogo.png' ) ?>"/>
                </div>
                <div class="headerLogoText text-center">
                    <p>По благословению Высокопреосвящейнешего Митрополита Липецкого и Задонского Никона</p>
                </div>
            </div>
        </div> <!--row-->
    </div>
</header>

<div class="container themesImg">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo _prav_path_img( 'Georgievskaya-lenta.png' ) ?>"/>
        </div>
    </div>
</div>

<?php
/*  if(is_active_sidebar('prav-holiday')){
      dynamic_sidebar('prav-holiday');
    }
*/?>


<div class="container main">

    <div class="navbar">
        <div class="navbar-inner">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-header',
                'container' => 'div',
                'container_class' => 'container',
                'menu_class' => 'nav',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>'
            ]);
            ?>
        </div>
    </div>