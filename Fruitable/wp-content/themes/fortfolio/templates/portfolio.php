<?php
/*
Template Name: Portfolio
*/
?>
<?php
get_header();

?>
<!--================ Start Banner Area =================-->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <?php custom_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

	<!--================Start Portfolio Area =================-->
	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">	
				<div class="col-lg-12">
					<div class="main_title text-left" style="padding-top: 111px;">
						<h2>
						Projects I’ve Successfully Delivered </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
				</ul>
			</div>
	
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
					<?php
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => -1
					);
					$portfolio_query = new WP_Query($args);
					if ($portfolio_query->have_posts()) :
						while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
							$portfolio_url = get_post_meta(get_the_ID(), 'project_url', true); // or get_field('portfolio_url');
							$portfolio_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
							$title = get_the_title();
							$categories = get_the_terms(get_the_ID(), 'category'); // You can replace 'category' if you use a custom taxonomy
							$category_names = [];

							if (!empty($categories) && !is_wp_error($categories)) {
								foreach ($categories as $cat) {
									$category_names[] = $cat->name;
								}
							}
					?>
					<div class="col-lg-4 col-md-6 all <?php echo implode(' ', wp_list_pluck($categories, 'slug')); ?>">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<?php if ($portfolio_image) : ?>
									<img class="img-fluid w-100" src="<?php echo esc_url($portfolio_image); ?>" alt="<?php echo esc_attr($title); ?>">
								<?php endif; ?>
								<div class="overlay"></div>
								<a href="<?php echo esc_url($portfolio_url ?: $portfolio_image); ?>" class="img-gal" target="_blank">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="<?php echo esc_url($portfolio_url ?: '#'); ?>" target="_blank"><?php echo esc_html($title); ?></a></h4>
								<p><?php echo implode(', ', $category_names); ?></p>
							</div>
						</div>
					</div>
					<?php
						endwhile;
						wp_reset_postdata();
					else :
						echo '<p>No portfolio items found.</p>';
					endif;
					?>
				</div>

			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

<?php 
get_footer();
?>