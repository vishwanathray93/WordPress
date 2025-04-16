
    <!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<?php  if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
							?>
								<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_custom_logo(); ?>" alt=""></a>
								<?php } else {
							echo '<h3 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h3>';
									}?>
							
							<h4>Follow Me</h4>
						</div>
						<?php
						$locations = get_nav_menu_locations();
						$menu_id = $locations['footer_menu_portfolio']; // Menu ID assigned to the location

						$acf_menu_id = 'nav_menu_' . $menu_id;
						?>

						<div class="footer_social">
							<a href="<?php echo esc_url(get_field('linkdin', $acf_menu_id)); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a href="<?php echo esc_url(get_field('twitter', $acf_menu_id)); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo esc_url(get_field('github', $acf_menu_id)); ?>" target="_blank"><i class="fa fa-github"></i></a>
							<a href="<?php echo esc_url(get_field('facebook', $acf_menu_id)); ?>"><i class="fa fa-facebook" target="_blank"></i></a>
							<a href="<?php echo esc_url(get_field('instagram', $acf_menu_id)); ?>"><i class="fa fa-instagram" target="_blank"></i></a>
						</div>

					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart-o" aria-hidden="true"></i></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/popper.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/stellar.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/isotope-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/mail-script.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

	<!--gmaps Js-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/gmaps.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
</body>
</html>

