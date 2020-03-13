<?php
/*
Template Name: Blog
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section id="title">
    <div class="container-fluid">
        <div class="container">
            <h2 class="title-head"><?= __('Blog', 'understrap') ?></h2>
        </div>
    </div>
</section>
<section id="blogposts">
    <div class="container-fluid row">
        <div class="offset-md-1 col-md-7">
            <div class="quote">
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
            <main class="site-main" id="main">
                <div class="ul row">
                    <?php
                    $posts = get_posts(array(
                        'numberposts' => -1,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ));
                    foreach ($posts as $post) {
                        setup_postdata($post);
                    ?>
                        <li class="col-md-6 d-flex flex-wrap">
                            <div class="news-item card mt-3 mb-3">
                                <div class="card-body">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink() ?>">
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                    </a>
                                    <div class="comments d-flex justify-content-between">
                                        <a href="#" class="d-block ml-3 mt-1 like"><i class="far fa-heart"></i> 10</a>
                                        <ul class="news-info d-flex mr-2">
                                            <li><a href="<?php the_author(); ?>" class="pr-1">by <?php the_author(); ?></a> &#8260; </li>
                                            <li><a href="<?php the_permalink() ?>#comments" class="pl-1 pr-1"><?php comments_number('0 comments', '1 Comment', '% Comments'); ?></a> &#8260; </li>
                                            <li><a href="<?php the_permalink(); ?>" class="pl-1"><time class="post-time" date="<?php the_time('F d, Y'); ?>"><?php the_time('F d, Y'); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </main>
        </div>
        <aside class="col-md-4">
            <?php dynamic_sidebar('right-sidebar'); ?>
        </aside>
    </div>
    </div>
</section>
<?php get_footer(); ?>