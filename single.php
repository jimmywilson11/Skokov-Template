<?php
/*
 * Template Name: Single Post
 * Template Post Type: post, page
 * @package understrap
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
<div class="wrapper" id="single-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row">
			<div class="offset-md-1 col-md-7">
				<main class="site-main" id="main">
					<div class="card">
						<div class="card-body text-center">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="card-footer">
							<h3 class="card-title"><?php the_title(); ?></h3>
							<div class="comments d-flex justify-content-between">
								<a href="#" class="d-block ml-3 mt-1 like"><i class="far fa-heart"></i> 15</a>
								<ul class="news-info d-flex mr-2">
									<li><a href="<?php the_author() ?>" class="pr-1"><?php the_author() ?></a> &#8260; </li>
									<li><a href="<?php the_permalink() ?>#comments" class="pl-1 pr-1"><?php comments_number('0 comments', '1 Comment', '% Comments'); ?></a> &#8260; </li>
									<li><a href="<?php the_permalink() ?>" class="pl-1"><time class="post-time" date="<?php the_time('F d, Y'); ?>"><?php the_time('F d, Y'); ?></time></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="post">
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
					<div class="social-share d-flex justify-content-between align-items-center flex-wrap">
						<h3 class="share-this mt-3 mb-3"><?= __('Share This Post', 'understrap') ?></h3>
						<ul class="d-flex flex-wrap justify-content-around">
							<li class="d-flex share-item mb-3 mr-3">
								<a href="#">
									<i class="fab fa-facebook-f"></i><span>15</span>
								</a>
							</li>
							<li class="d-flex share-item mb-3 mr-3">
								<a href="#">
									<i class="fab fa-google-plus-g"></i><span>34</span>
								</a>
							</li>
							<li class="d-flex share-item mb-3 mr-3">
								<a href="#">
									<i class="fab fa-tumblr"></i><span>362</span>
								</a>
							</li>
							<li class="d-flex share-item mb-3 mr-3">
								<a href="#">
									<i class="fab fa-linkedin-in"></i><span>7</span>
								</a>
							</li>
						</ul>
					</div>
					<h3 class="releate-post-title"><?= __('Releated Posts', 'understrap') ?></h3>
					<div class="releated-post d-flex">
						<?php
							$posts = get_posts(array(
								'numberposts' => 3,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true,
							));
							foreach ($posts as $post) {
								setup_postdata($post);
							?>
								<div class="col-12 col-md-4 mb-3 mt-5">
									<a class="releated-post-item" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(array(238, 188)); ?>
										<h4 class="item-title text-uppercase w-75"><?php the_title(); ?></h4>
									</a>
								</div>
							<?php }
							wp_reset_postdata();
						?>
					</div>
				</main>
				<div class="comments">
					<h3 class="comments-mytitle text-uppercase mb-3"><?php comments_number('Leave comments', '1 Comment', '% Comments'); ?></h3>
					<?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div>
			</div>
			<aside class="col-md-4">
				<?php dynamic_sidebar('right-sidebar'); ?>
			</aside>
		</div>
	</div>
</div>
<?php get_footer(); ?>