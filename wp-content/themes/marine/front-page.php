<?php get_header() ?>

    <div class="slider">
        <?php $slider = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => -1, 'order' => 'ASC' )); ?>
        <?php if ( $slider->have_posts() ) : ?>
        <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
            <div class="rel">
                <div class="bg">
                    <img src="<?php the_field('img') ?>" alt="">
                </div>
                <div class="content">
                    <img src="<?= get_template_directory_uri() ?>/img/slider-logo.png" alt="">
                    <h1 class="animate-plus" data-animation-delay="0s" data-animations="fadeInUp" data-animation-when-visible="true" data-animation-reset-offscreen="true"><?php the_title() ?></h1>
                    <p class="animate-plus" data-animation-delay="0.3s" data-animations="fadeInUp" data-animation-when-visible="true" data-animation-reset-offscreen="true"><?php the_field('description') ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>

    <div class="bl-1">
        <div class="container">
            <div class="flx">
                <div class="animate-plus" data-animation-delay="0s" data-animations="fadeInLeft" data-animation-when-visible="true" data-animation-reset-offscreen="true">
                    <img src="<?= get_template_directory_uri() ?>/img/bl-1-1.png" alt="">
                    <h3>Web development</h3>
                    <p>IT WAS HARD TO MAKE IT SO COOL</p>
                </div>
                <div class="animate-plus" data-animation-delay="0.2s" data-animations="fadeInUp" data-animation-when-visible="true" data-animation-reset-offscreen="true">
                    <img src="<?= get_template_directory_uri() ?>/img/bl-1-2.png" alt="">
                    <h3>SEO Monitoting</h3>
                    <p>IT WAS HARD TO MAKE IT SO COOL</p>
                </div>
                <div class="animate-plus" data-animation-delay="0.4s" data-animations="fadeInUp" data-animation-when-visible="true" data-animation-reset-offscreen="true">
                    <img src="<?= get_template_directory_uri() ?>/img/bl-1-3.png" alt="">
                    <h3>Network Communities</h3>
                    <p>IT WAS HARD TO MAKE IT SO COOL</p>
                </div>
                <div class="animate-plus" data-animation-delay="0.6s" data-animations="fadeInRight" data-animation-when-visible="true" data-animation-reset-offscreen="true">
                    <img src="<?= get_template_directory_uri() ?>/img/bl-1-4.png" alt="">
                    <h3>Web analytics</h3>
                    <p>IT WAS HARD TO MAKE IT SO COOL</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bl-2">
        <div class="container">
            <div class="flx">
                <h2><span>A fully responsive theme</span> with clean design for your success!</h2>
                <a href="#">check details</a>
            </div>
        </div>
    </div>

    <div class="posts">
        <div class="container">
            <h2>Recent Posts</h2>
            <div class="flx">
                <?php $posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8, 'orderby' => 'date', 'order'   => 'ASC' )); ?>
                <?php if ( $posts->have_posts() ) : ?>
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    
                    <div class="post">
                        <div class="date">
                            <div class="d1">
                                <?php the_time('d') ?>
                            </div>
                            <div class="d2">
                                <?php the_time('M, Y') ?>
                            </div>
                        </div>
                        <div class="thumb">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <div class="author">
                                    By <?php the_author() ?>
                                </div>
                                <img src="<?= get_template_directory_uri() ?>/img/point.png" alt="">
                                <div class="category">
                                    <?php
                                        foreach( get_the_category() as $category ){ 
                                            echo "<span>".$category->cat_name."</span>"; 
                                        } 
                                    ?>
                                </div>
                                <img src="<?= get_template_directory_uri() ?>/img/point.png" alt="">
                                <div class="comments">
                                    <?php comments_number('0 comments', '1 comment', '% comments'); ?>
                                </div>
                                <img src="<?= get_template_directory_uri() ?>/img/point.png" alt="">
                                <div class="read">
                                    <a href="<?php the_permalink() ?>">Read More</a>
                                </div>
                            </div>
                            <hr>
                            <h3>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h3>
                            <div class="excerpt">
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <h2>Our Team</h2>
            <div class="flx">
                <?php $team = new WP_Query(array('post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC' )); ?>
                <?php if ( $team->have_posts() ) : ?>
                <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                    <div class="card">
                        <div class="photo">
                            <img src="<?php the_field('photo') ?>" alt="">
                        </div>
                        <h3><?php the_title() ?></h3>
                        <h4><?php the_field('position') ?></h4>
                        <p><?php the_field('description') ?></p>
                        <hr>
                        <div class="social">
                            <?php if(get_field('facebook')) { ?>
                                <a target="_blank" href="<?php the_field('facebook') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/facebook.png" alt="">
                                </a>
                            <?php } if(get_field('twitter')) { ?>
                                <a target="_blank" href="<?php the_field('twitter') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/twitter.png" alt="">
                                </a>
                            <?php } if(get_field('skype')) { ?>
                                <a target="_blank" href="<?php the_field('skype') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/skype.png" alt="">
                                </a>
                            <?php } if(get_field('google_plus')) { ?>
                                <a target="_blank" href="<?php the_field('google_plus') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/glus.png" alt="">
                                </a>
                            <?php } if(get_field('vimeo')) { ?>
                                <a target="_blank" href="<?php the_field('vimeo') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/vimeo.png" alt="">
                                </a>
                            <?php } if(get_field('linkedin')) { ?>
                                <a target="_blank" href="<?php the_field('linkedin') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/linkedin.png" alt="">
                                </a>
                            <?php } if(get_field('instagram')) { ?>
                                <a target="_blank" href="<?php the_field('instagram') ?>">
                                    <img src="<?= get_template_directory_uri() ?>/img/instagram.png" alt="">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="logos">
        <div class="container">
            <div class="flx">
                <img src="<?= get_template_directory_uri() ?>/img/logo-1-1.png" alt="">
                <img src="<?= get_template_directory_uri() ?>/img/logo-1-2.png" alt="">
                <img src="<?= get_template_directory_uri() ?>/img/logo-1-3.png" alt="">
                <img src="<?= get_template_directory_uri() ?>/img/logo-1-4.png" alt="">
                <img src="<?= get_template_directory_uri() ?>/img/logo-1-5.png" alt="">
            </div>
        </div>
    </div>

    <div class="form-block">
        <div class="container">
            <h2>Get In Touch!</h2>
            <div class="form">
                <?php echo do_shortcode('[form]') ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>