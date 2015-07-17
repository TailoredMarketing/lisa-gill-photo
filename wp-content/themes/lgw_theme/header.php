<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
	<header id="header" class="container">
        <div id="logo"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.png" width="229" height="113" alt=""/></div>
        <nav id="nav" class="navbar navbar-default">
        	<div class="container">
            	<div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse main-nav',
						'container_id'      => 'main-nav',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker()
						)
					); } ?>
                 </div>
              </div>
        </nav>
    </header> 