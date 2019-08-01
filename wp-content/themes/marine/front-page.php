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
                    <h1><?php the_title() ?></h1>
                    <p><?php the_field('description') ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>




    <div class="animate-plus" data-animation-delay="0s" data-animations="fadeInUp" data-animation-when-visible="true">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, aspernatur autem deleniti distinctio eius eos facere ipsum laudantium maiores, natus necessitatibus numquam optio placeat, similique soluta veniam. Dolor, molestias?
    </div>
    <div class="animate-plus" data-animation-delay="0.5s" data-animations="fadeInUp" data-animation-when-visible="true">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, aspernatur autem deleniti distinctio eius eos facere ipsum laudantium maiores, natus necessitatibus numquam optio placeat, similique soluta veniam. Dolor, molestias?
    </div>
    <div class="animate-plus" data-animation-delay="1s" data-animations="fadeInUp" data-animation-when-visible="true">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, aspernatur autem deleniti distinctio eius eos facere ipsum laudantium maiores, natus necessitatibus numquam optio placeat, similique soluta veniam. Dolor, molestias?
    </div>

<?php get_footer() ?>