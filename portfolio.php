<?php
/*
Template Name: Portfolio
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section id="title">
    <div class="container-fluid">
        <div class="container">
            <h2 class="title-head"><?php the_title() ?></h2>
        </div>
    </div>
</section>
<section id="portfolio-gallery">
    <div class="container">
        <h2 class="text-center text-uppercase"><?php the_field('head_block'); ?></h2>
        <p class="text-center"><?php the_field('description'); ?></p>
        <ul class="row menu-navigation mx-auto pt-2 pb-2 mb-3">
            <li class="nav-item"><a href="#" class="filter-button active-bg" data-filter="all">All</a>
            </li>
            <li class="nav-item"><a href="#" class="filter-button" data-filter="web">Web Site</a></li>
            <li class="nav-item"><a href="#" class="filter-button" data-filter="logo">Logo</a></li>
            <li class="nav-item"><a href="#" class="filter-button" data-filter="ui">UI Kit</a></li>
            <li class="nav-item"><a href="#" class="filter-button" data-filter="photo">Photo</a></li>
            <li class="nav-item"><a href="#" class="filter-button" data-filter="app">App Design</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="gallery">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 filter web">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img1.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img1.jpg" alt="Graphic Design">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter web ui">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img2.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img2.jpg" alt="Flat UI">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 item filter web">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img3.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img3.jpg" alt="Architecture Web Design 1920">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter web">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img4.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img4.jpg" alt="Personal Website - Light">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter logo">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img5.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img5.jpg" alt="Logo">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter ui">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img6.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img6.jpg" alt="UI Kit">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter app">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img7.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img7.jpg" alt="Daily News App">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter app">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img8.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img8.jpg" alt="Clinic Site and App Design">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 filter photo">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>img9.webp" type="image/webp">
                        <img class="img-fluid z-depth-1" src="<?= get_stylesheet_directory_uri() . '/images/' ?>img9.jpg" alt="Christmas Neon Sign">
                    </picture>
                    <div class="overlay">
                        <i class="fas fa-long-arrow-alt-right fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>