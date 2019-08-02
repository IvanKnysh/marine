<footer>
    <div class="bg-1">
        <div class="container">
            <div class="flx">
                <div class="col">
                    <img class="logo" src="<?= get_template_directory_uri() ?>/img/logo-footer.png" alt="">
                    <p>Vivamus orci sem, consectetur ut vestibulum a, mper ac dui. Aenean tellus nisl, commodo eu aliquet ut, pulvinar ut sapien. Proin tate aliquam mi nec hendrerit.</p>
                </div>
                <div class="col">
                    <h3>Recent Posts</h3>
                </div>
                <div class="col">
                    <h3>Contacts</h3>
                    <div class="point">
                        <?php the_field('address', 'options') ?>
                    </div>
                    <div class="point">
                        Phone: <a href="tel:<?php the_field('phone', 'options') ?> ">
                            <?php the_field('phone', 'options') ?>
                        </a>
                        <br>
                        Fax: <?php the_field('fax', 'options') ?>
                    </div>
                    <div class="point">
                        <a href="mailto:<?php the_field('e-mail', 'options') ?>">
                            <?php the_field('e-mail', 'options') ?>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <h3>Newsaletter Signup</h3>
                    <div class="desc">
                        By subscribing to our mailing list you will get the latest news from us.
                    </div>
                    <input type="text">
                    <h4>Follow Us</h4>
                    <div class="social">
                        <?php if(get_field('facebook', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('facebook', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/facebook.png" alt="">
                            </a>
                        <?php } if(get_field('twitter', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('twitter', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/twitter.png" alt="">
                            </a>
                        <?php } if(get_field('skype', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('skype', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/skype.png" alt="">
                            </a>
                        <?php } if(get_field('google_plus', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('google_plus', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/glus.png" alt="">
                            </a>
                        <?php } if(get_field('vimeo', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('vimeo', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/vimeo.png" alt="">
                            </a>
                        <?php } if(get_field('linkedin', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('linkedin', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/linkedin.png" alt="">
                            </a>
                        <?php } if(get_field('instagram', 'options')) { ?>
                            <a target="_blank" href="<?php the_field('instagram', 'options') ?>">
                                <img src="<?= get_template_directory_uri() ?>/img/instagram.png" alt="">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-2">
        <div class="container">
            <div class="copy">
                © <?php echo date('Y') ?> Marine. All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>