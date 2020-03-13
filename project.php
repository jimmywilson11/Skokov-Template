<?php
/*
Template Name: Project
Template Post Type: portfolio, post, page
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
<section id="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="image text-center">
                    <?php the_post_thumbnail(array(798, 598)); ?>     
                </div>
                <div class="project-description mt-2 mb-2">
                    <h2 class="block-title text-uppercase">Project Description</h2>
                    <?php the_field('project_description'); ?>     
                </div>
            </div>
            <aside class="col-md-4">
                <h2>Project Details</h2>
                <?php dynamic_sidebar('project-sidebar'); ?>
            </aside>
        </div>
        <div class="recent-projects">
            <h2 class="block-title text-uppercase">Recent Projects</h2>
        </div>
    </div>
</section>
<?php get_footer(); ?>