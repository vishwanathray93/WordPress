<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

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

	<!--================ Start Features Area =================-->
	<section class="features_area section_gap_top">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2> <?php echo get_field('service_section_heading') ?> </h2>
                        <p>
                            <?php get_field('service_section_contents') ?>
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
    <!--================ End Features Area =================-->

<?php get_footer(); ?>