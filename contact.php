<?php
/*
Template Name: Contact
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
<section id="map">
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
        </div>
    </div>
</section>
<section id="feedback">
    <div class="container">
        <div class="row p-md-5 mx-auto">
            <div class="col-12 col-md-8">
                <h2>send us a message</h2>
                <form action="#" method="POST" class="form-row mt-4">
                    <label for="name"></label>
                    <input class="col-md-4 mb-3" id="name" type="text" placeholder="name..." value="" required>
                    <label for="email"></label>
                    <input class="col-md-4 mb-3" id="email" type="email" placeholder="email..." value="" required>
                    <label for="subject"></label>
                    <input class="col-md-4 mb-3" id="subject" type="text" placeholder="subject..." value="" required>
                </form>
                <textarea name="message" id="message" cols="50" rows="5" placeholder="message..." required></textarea>
                <button class="send-btn align-self-end mb-3" type="submit">Send a massage</button>
            </div>
            <aside class="col-12 col-lg-4 pl-lg-5">
                <?php $contacts = get_theme_mod('understrap_contact_info_settings');
                if ($contacts['headline']) { ?>
                    <h2><?= $contacts['headline'] ?></h2>
                    <address>
                    <?php }
                if (!empty($contacts['info'])) { ?>
                        <ul class="font-weight-bold mt-4">
                            <li class="d-flex mb-4">
                                <span class="icon fa fa-map-marker" aria-hidden="true"></span>
                                <p>
                                    <?= __('Address:', 'understrap') ?> <?= $contacts['info']['Address'] ?>
                                </p>
                            </li>
                            <li class="d-flex mb-2">
                                <span class="icon fa fa-whatsapp" aria-hidden="true"></span>
                                <div>
                                    <p class="mr-2"><?= __('Phones:', 'understrap') ?></p>
                                    <div>
                                        <a href="tel:<?= $contacts['info']['Phone 1'] ?>" class="contact"><?= $contacts['info']['Phone 1'] ?></a>
                                        <a href="tel:<?= $contacts['info']['Phone 2'] ?>" class="contact"><?= $contacts['info']['Phone 2'] ?></a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <span class="icon fa fa-envelope" aria-hidden="true"></span>
                                <p><?= __('Email:', 'understrap') ?> <a href="mailto:<?= $contacts['info']['E-mail'] ?>"><span class="contact"><?= $contacts['info']['E-mail'] ?></span></a>
                            </li>
                        </ul>
                    <?php } ?>
                    </address>
            </aside>
        </div>
    </div>
</section>
<?php get_footer(); ?>