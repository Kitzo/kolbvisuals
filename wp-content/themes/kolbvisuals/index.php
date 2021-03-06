<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>


    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title(''); ?></title>
    
    <!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <!--Carousel-->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/jsImgSlider/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/jsImgSlider/themes/1/js-image-slider.js" type="text/javascript"></script>

    <?php wp_head(); ?>
    <?php get_wpbs_theme_options(); ?>

    
</head>

<body class="body-bg" <?php body_class();?>>
<?php get_template_part( 'partials/svg','icons'); ?>
<?php if (of_get_option('remove_top_bar') != 1) : ?> 
<?php endif; ?>
<header role="banner">
</header>
<?php if (of_get_option('make_nav_sticky') == 1) : ?>
<div data-spy="affix" data-offset-top="210" data-offset-bottom="200">
<?php endif; ?> 
    <div class="containernav">
                <?php $logo_header = of_get_option('logo_header'); ?>
            <img src="<?php bloginfo('template_url'); ?>/i/logo.png" alt="<?php bloginfo('name'); ?>" class="logo"/>
            <img src="<?php bloginfo('template_url'); ?>/i/logo-3.png" alt="<?php bloginfo('name'); ?>" class="logo-2"/>
          <nav class="navbar navbar-default kolb-menu-1" role="navigation">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span>Photography</span>
                  </button>
              </div>
        
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php 
                        wp_nav_menu( array(
                        'theme_location'       => 'Main Menu',
                        'depth'      => 3,
                        'container'  => false,
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new twitter_bootstrap_nav_walker(),
                        'fallback_cb'    => '__return_false')
                        );
                    ?>
               </div>
          </nav>
          <nav class="navbar navbar-default kolb-menu-2" role="navigation">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span>Videography</span>
                  </button>
              </div>
        
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <?php 
                        wp_nav_menu( array(
                        'theme_location'       => 'Footer Menu',
                        'depth'      => 3,
                        'container'  => false,
                        'menu_class' => 'nav navbar-nav kolb-header-2',
                        'walker' => new twitter_bootstrap_nav_walker(),
                        'fallback_cb'    => '__return_false')
                        );
                    ?>
               </div>
          </nav>
    </div>
</div>
<?php if (of_get_option('make_nav_sticky') == 1) : ?>
<?php endif; ?>
<footer>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="foot-links">
        <a href="<?php echo get_option('About Us'); ?>" alt="About Us">About Us</a> | <a href="<?php echo get_option('Contact'); ?>" alt="Contact Us">Contact</a>
      </div>
    </div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>

</body>

</html>
