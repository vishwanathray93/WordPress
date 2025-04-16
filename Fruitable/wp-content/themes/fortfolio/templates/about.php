<?php
/*
Template Name: About
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
    
   <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="<?php echo get_field('about_image'); ?>" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <?php  echo get_field('short_intro'); ?>
                        <a class="primary_btn" href="<?php echo get_field('upload_cv'); ?>"><span><?php echo get_field('download_cv'); ?></span></a>
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
                                <h2><?php echo get_field('tech_stack_heading'); ?></h2>
                                <p><?php echo get_field('stack_intro_paragraph') ?></p>
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
                                            $name = get_the_title(); // or get_field('tech_name');tech_stack_heading_
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
                            <span class="lage"><?php echo get_field('years_of_experience'); ?></span>
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

<?php 
get_footer();
?>