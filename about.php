<?php
/*
Template Name: About
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
<section id="team-description">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content();  ?>
        <?php endwhile; ?>
    </div>
</section>
<section id="our-skills">
    <div class="text-center">
        <h2 class="head-block text-uppercase"><?php the_field('section_our_skills_header'); ?></h2>
        <p class="text-center mt-3"><?php the_field('section_our_skills_description'); ?></p>
    </div>
    <div class="container skillbox">
        <?php if (have_rows('skills')) : ?>
            <ul class="row skills mx-auto mt-2 mb-2">
                <?php while (have_rows('skills')) : the_row();
                    $percent = get_sub_field('percents');
                    $skill_title = get_sub_field('skill_title');
                ?>
                    <li class="skill d-flex col-12 col-lg-6 w-75">
                        <div class="percent"><?php echo $percent . '%' ?></div>
                        <div class="uncolored d-block">
                            <div class="colored d-block"><?php echo $skill_title; ?></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<section id="our-team">
    <div class="container text-center">
        <h2 class="head-block  text-uppercase"><?php the_field('section_our_team_header'); ?></h2>
        <p class="text-center mt-3"><?php the_field('section_our_team_description'); ?></p>
        <?php if (have_rows('mate')) : ?>
            <ul class="team d-flex flex-wrap mx-auto mt-2 mb-2">
                <?php while (have_rows('mate')) : the_row();
                    $image = get_sub_field('mate_pic');
                    $content = get_sub_field('mate_description');
                ?>
                    <li class="slide">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <h3><?php echo $content; ?></h3>
                    </li>
                <?php endwhile; ?>
                <li>
                    <form class="d-flex" action="#" method="post" enctype="multipart/form-data">
                        <label for="file"><img src="<?= get_stylesheet_directory_uri() . '/images/' ?>av.jpg" alt=""></label>
                        <input class="addfile" type="file" id="file" name="file" multiple="">
                    </form>
                    <input class="send-cv" type="submit" value="Send CV">
                </li>
            </ul>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>