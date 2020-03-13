<?php
/*
Template Name: Front Page
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

$container = get_theme_mod('understrap_container_type');
?>

<section id="slider">
    <div class="container-fluid">
        <a class="carousel-control-prev arrow" href="#carouselExampleIndicators" role="button" aria-label="Prev" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next arrow" href="#carouselExampleIndicators" role="button" aria-label="Next" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
        </a>
        <div id="carouselExampleIndicators" class="carousel slide m-auto" data-ride="carousel">
            <div class="carousel-inner container">
                <div class="carousel-item active text-center">
                    <div class="d-xl-flex justify-content-xl-end">
                        <div class="description text-xl-left">
                            <div class="col-lg-8 col-xl-12 m-lg-auto m-xl-0">
                                <h2>
                                    <span class="description-heading text-uppercase">We believe</span>
                                    <span class="description-heading text-uppercase">in quality design</span>
                                </h2>
                            </div>
                            <div class="w-xl-50 mb-xl-5 col-md-7 m-md-auto m-xl-0">
                                <p>
                                    <span class="description-text">Any creative project is unique</span>
                                    <span class="description-text">and should be provided with</span>
                                    <span class="description-text">appropriate quality</span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn-order">Order now</a>
                            </div>
                        </div>
                        <div class="faces">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>slider-faces.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() . '/image/' ?>slider-faces.png" alt="Team faces" class="d-block">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="carousel-item text-center">
                    <div class="d-xl-flex justify-content-xl-end">
                        <div class="description text-xl-left">
                            <div class="col-lg-8 col-xl-12 m-lg-auto m-xl-0">
                                <h2>
                                    <span class="description-heading text-uppercase">We believe</span>
                                    <span class="description-heading text-uppercase">in quality design</span>
                                </h2>
                            </div>
                            <div class="w-xl-50 mb-xl-5 col-md-7 m-md-auto m-xl-0">
                                <p>
                                    <span class="description-text">Any creative project is unique</span>
                                    <span class="description-text">and should be provided with</span>
                                    <span class="description-text">appropriate quality</span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn-order">Order now</a>
                            </div>
                        </div>
                        <div class="faces">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>slider-faces.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() . '/image/' ?>slider-faces.png" alt="Team faces" class="d-block">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="carousel-item text-center">
                    <div class="d-xl-flex justify-content-xl-end">
                        <div class="description text-xl-left">
                            <div class="col-lg-8 col-xl-12 m-lg-auto m-xl-0">
                                <h2>
                                    <span class="description-heading text-uppercase">We believe</span>
                                    <span class="description-heading text-uppercase">in quality design</span>
                                </h2>
                            </div>
                            <div class="w-xl-50 mb-xl-5 col-md-7 m-md-auto m-xl-0">
                                <p>
                                    <span class="description-text">Any creative project is unique</span>
                                    <span class="description-text">and should be provided with</span>
                                    <span class="description-text">appropriate quality</span>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn-order">Order now</a>
                            </div>
                        </div>
                        <div class="faces">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>slider-faces.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() . '/image/' ?>slider-faces.png" alt="Team faces" class="d-block">
                            </picture>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container content-description">
        <h2 class="text-center text-uppercase"><?php the_field('section_header'); ?></h2>
        <p class="text-center mt-3"><?php the_field('section_description'); ?></p>
        <ul class="design-list text-center d-flex justify-content-around flex-wrap mt-4">
            <?php
                $args = array(
                    'post_type' => 'specializations',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $cur_terms = get_the_terms( $post->ID, 'direction' ); 
                        if( is_array( $cur_terms ) ){
                            foreach( $cur_terms as $cur_term ){
                            }
                            }?>
                            <li class="design-item">
                                <div class="design-card justify-content-center m-auto">
                                    <img src="<?= get_stylesheet_directory_uri() . '/images/' ?>web-design-icon.png" alt="<?= $cur_term->name ?>">
                                    <h3><?php the_terms( get_the_ID(), 'direction'); ?></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="card-overlay">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="overlay-content">
                                        <a href="<?php the_permalink( ) ?>"><h3 class="text-center"><?php the_title() ?></h3></a>
                                        <p class="text-right overlay-text"><?php the_terms( get_the_ID(), 'direction', 'in '); ?></p>
                                    </div>
                                </div>
                            </li>
                    <?php }
                } else {
                    echo 'Not found';
                }
                wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>
<section id="our-works">
    <div class="container-fluid text-center">
        <h2 class="head-block text-uppercase mt-2 mb-2"><?php the_field('section_our_work_header'); ?></h2>
        <p class="text-center"><?php the_field('section_our_work_description'); ?></p>
        <div class="masonry-container">
            <ul>
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                    'orderby' => 'title'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <li class="item">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?> </a>
                        </li>
                <?php }
                } else {
                    echo 'Not found';
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
</section>
<section id="our-clients">
    <div class="container-fluid text-center">
        <h2 class="head-block text-uppercase mt-2 mb-2"><?php the_field('section_our_clients_header'); ?></h2>
        <p class="text-center"><?php the_field('section_our_clients_description'); ?></p>
        <div id="carousel-controls">
            <ul id="owl-carousel" class="container owl-carousel mx-auto">
                <?php
                $args = array(
                    'post_type' => 'clients',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <li><?= get_the_post_thumbnail(); ?></li>
                <?php }
                } else {
                    echo 'Not found';
                }
                wp_reset_postdata();
                ?>
            </ul>
            <p>
                <a class="owl-prew arrow-left">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                </a>
                <a class="owl-next arrow-right">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                </a>
            </p>
        </div>
    </div>
</section>
<?php get_footer(); ?>