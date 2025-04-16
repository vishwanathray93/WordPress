<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<?php echo get_field('name_and_profession'); ?>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="mailto:vishwanathraystm@gmail.com"><span><?php echo get_field('hire_me'); ?></span></a>
								<a class="primary_btn tr-bg" href="<?php echo get_field('cv_file'); ?>" download=""><span><?php echo get_field('get_cv'); ?></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="<?php echo get_field('banner_image'); ?>" alt="banner">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

   <!--================ Start About Us Area =================-->
   <section class="about_area section_gap">
	<?php 
		$about_page = get_page_by_path('about'); // 'about' is the page slug
		$about_id = $about_page->ID;

		// $about_heading = get_field('about_heading', $about_id);
		// $about_description = get_field('about_description', $about_id);

	?>
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="<?php echo get_field('about_image', $about_id); ?>" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <?php  echo get_field('short_intro', $about_id); ?>
                        <a class="primary_btn" href="<?php echo get_field('upload_cv', $about_id); ?>"><span><?php echo get_field('download_cv', $about_id); ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================ Tech stack  =================-->
	<section class="brand_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-6">
                                <h2><?php echo get_field('tech_stack_heading', $about_id); ?></h2>
                                <p><?php echo get_field('stack_intro_paragraph', $about_id) ?></p>
                                <?php
                                $tech_query = new WP_Query(array(
                                    'post_type' => 'tech_stack',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'ASC'
                                ));

                                if ($tech_query->have_posts()) : ?>
                                    <div class="row">
                                        <?php while ($tech_query->have_posts()) : $tech_query->the_post(); 
                                            $icon = get_field('tech_icon');
                                            $name = get_the_title(); 
                                        ?>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="single-brand-item d-table">
                                                    <div class="d-table-cell text-center">
                                                    <img src="<?php echo esc_url(get_field('tech_icon')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>

                        </div>

                <div class="offset-lg-2 col-lg-4 col-md-6">
                    <div class="client-info">
                        <div class="d-flex mb-50">
                            <span class="lage"><?php echo get_field('years_of_experience', $about_id); ?></span>
                            <span class="smll">Years Experience Working</span>
                        </div>
                        <div class="call-now d-flex">
                            <div>
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="ml-15">
                                <p>call us now</p>
                                <h3><a href="tel:+919304423628"></a> +919304423628</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================ Start Features Area =================-->
	<section class="features_area section_gap_top">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2> service offers</h2>
                        <p>
						Is give may shall likeness made yielding spirit a itself togeth created after sea
						is in beast beginning signs open god you're gathering ithe.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row feature_inner">
                <?php
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1
                );
                $services_query = new WP_Query($args);

                if ($services_query->have_posts()):
                    while ($services_query->have_posts()): $services_query->the_post();
                        // Get image URL (Featured Image)
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No services found.</p>';
                endif;
                ?>
            </div>
        </div>

     </div>
    </section>

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
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

	<!--================ Start Testimonial Area =================-->
	<!-- <div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>client say about me</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
			</div>
		</div>
	</div> -->
	<!--================ End Testimonial Area =================-->

	<?php get_footer(); ?>