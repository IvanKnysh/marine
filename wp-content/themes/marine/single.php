<?php get_header() ?>
    
    <div class="post-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container">
                <h1><?php the_title() ?></h1>
                <div class="content">
                    <?php the_content() ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

        <div class="container">
            <div class="comments">
                <h2>Leave a comment</h2>
                <?php comments_template(); ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>