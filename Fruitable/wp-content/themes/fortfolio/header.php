<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name'); ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<?php wp_head(); ?>

</head>
<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
                  <?php  if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                   ?>
					<a class="navbar-brand logo_h" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_custom_logo(); ?>" alt=""></a>
                    <?php } else {
                         echo '<h3 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h3>';
                    }
                    
                    ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary_menu_portfolio', 
                            'container' => false, 
                            'menu_class' => 'nav navbar-nav menu_nav justify-content-end',
                            'menu_id'    => 'main-menu', 
                            'fallback_cb' => false 
                        ) );
                        ?>

					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->
                          
    