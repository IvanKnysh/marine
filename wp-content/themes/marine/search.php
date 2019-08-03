<?php get_header() ?>

    <div class="posts">
        <div class="container">
            <h2><?php printf( __( 'Search Results for: "%s"', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
            <div class="flx">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
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
                    <p>No Results</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>