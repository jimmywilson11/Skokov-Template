<?php
/**
 * The template for displaying the footer.
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
	<div class="container-fluid big-inf">
        <div class="container">
            <div class="col col-md-12 col-lg-4 pr-3">
				<?php dynamic_sidebar('footerleft'); ?>
				<h2>Photo Stream</h2>
				<ul class="gallery">
                    <li>
                    	<a href="<?= get_stylesheet_directory_uri() .'/image/'?>g1_1920x1080.jpg" aria-label="Wallpaper 1">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g1_140x67.webp" type="image/webp">
                                    <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g1_140x67.jpg" alt="Wallpaper 1">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_stylesheet_directory_uri() .'/image/'?>g2_1920x1080.jpg" aria-label="Wallpaper 2">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g2_140x67.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g2_140x67.jpg" alt="Wallpaper 2">
                                </picture>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_stylesheet_directory_uri() .'/image/'?>g3_1920x1080.jpg" aria-label="Wallpaper 3">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g3_140x67.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g3_140x67.jpg" alt="Wallpaper 3">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_stylesheet_directory_uri() .'/image/'?>g4_1920x1080.jpg" aria-label="Wallpaper 4">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g4_140x67.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g4_140x67.jpg" alt="Wallpaper 4">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_stylesheet_directory_uri() .'/image/'?>g5_1920x1080.jpg" aria-label="Wallpaper 5">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g5_140x67.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g5_140x67.jpg" alt="Wallpaper 5">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_stylesheet_directory_uri() .'/image/'?>g6_1920x1080.jpg" aria-label="Wallpaper 6">
                            <picture>
                                <source srcset="<?= get_stylesheet_directory_uri() .'/webp/' ?>g6_140x67.webp" type="image/webp">
                                <img src="<?= get_stylesheet_directory_uri() .'/image/'?>g6_140x67.jpg" alt="Wallpaper 6">
                            </picture>
                        </a>
                    </li>
                </ul>
			</div>
			<div class="col col-md-12 col-lg-4">
				<?php dynamic_sidebar('footermiddle'); ?>
				<?php $soc_icons = get_theme_mod('understrap_social_icons_settings');
					if ($soc_icons['headline']) { ?>
                        <div class="social d-flex align-items-center flex-wrap">
                            <h2 class="m-0 mr-2 footer-headings"><?= $soc_icons['headline'] ?></h2>
                        <? }
                    if (!empty($soc_icons['links'])) { ?>
                        <ul class="social-list d-flex flex-wrap justify-content-start mt-2 mb-2">
                            <?php $social_icons_order = array('Facebook', 'Google', 'Tumblr', 'Linkedin', 'Youtube', 'Behance', 'Rss', 'Dribbble');
                            foreach ($social_icons_order as $item) {
                                if (!empty($soc_icons['links'][$item])) { $item = mb_strtolower($item)?>
                                    <li>
                                        <a href="<?= $soc_icons['links'][$item] ?>" class="icons <?=$item?>" aria-label="<?=$item?>">
                                            <span class="fa fa-<?=$item?>" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>
				<?php 
				} ?> 
			</div>
			<div class="col col-md-12 col-lg-4 mb-3">
				<?php $contacts = get_theme_mod( 'understrap_contact_info_settings' );
					if ( $contacts['headline'] ) { ?>
						<h2 class="footer-headings mb-2"><?= $contacts['headline'] ?></h2>
                    <address>
                		<?php }
							if ( ! empty( $contacts['info'] ) ) {?>
							<ul>
								<li class="d-flex mb-4">
									<span class="icon fa fa-map-marker" aria-hidden="true"></span>
									<p>
										<?= __('Address:','understrap') ?> <?= $contacts['info']['Address'] ?>
									</p>
								</li>
								<li class="d-flex mb-2">
									<span class="icon fa fa-whatsapp" aria-hidden="true"></span>
									<div>
										<p class="mr-2"><?= __('Phones:','understrap') ?></p>
										<div>
											<a href="tel:<?= $contacts['info']['Phone 1'] ?>" class="contact"><?= $contacts ['info']['Phone 1']?></a>
											<a href="tel:<?= $contacts['info']['Phone 2'] ?>" class="contact"><?= $contacts['info']['Phone 2'] ?></a>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4">
									<span class="icon fa fa-envelope" aria-hidden="true"></span>
									<p><?= __('Email:','understrap') ?> <a href="mailto:<?= $contacts['info']['E-mail']?>"><span class="contact"><?= $contacts['info']['E-mail']?></span></a>
								</li>
							</ul>
						   <?php 
						} ?>
                    </address>
				<?php dynamic_sidebar('footerright'); ?>
			</div>
		</div>
	</div>
	<div class="container-fluid black">
        <div class="container black-row">
            <div class="copyright">
                <p class="pt-3">&#169; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - All Rights Reserved</p>
			</div>
			<nav class="footer-nav">
				<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer_menu',
							'container_class' => 'footer-nav',
							'container_id'    => '',
							'menu_class'      => 'footer-menu flex-wrap',
							'fallback_cb'     => '',
							'menu_id'         => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
				); ?>
			</nav>
		</div>
	</div>	
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

