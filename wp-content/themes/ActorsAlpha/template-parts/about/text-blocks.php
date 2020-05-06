<?php $args = array(
    'post_type' => 'text_blocks_about',							
    'posts_per_page' => -1,							
    'orderby' => 'title',
    'order' => 'ASC',
); ?>


   

<section class="section">

    <div class="l-wrapper">
        
        <?php $aboutblocks = new WP_Query($args); while($aboutblocks->have_posts()): $aboutblocks->the_post(); ?>

        <div class="text-block text-block--2col">

            <div class="row">

                <div class="col-1-of-2 text-block__single">
                   
                    <h3 class="text-block__title"><?php the_field('left_title') ?></h3>

                    <p class="text-block__text"><?php the_field('left_text') ?></p>

                </div>

                <div class="col-1-of-2 text-block__single">

                    <h3 class="text-block__title"><?php the_field('right_title'); ?></h3>

                    <p class="text-block__text"><?php echo the_field('right_text'); ?></p>

                </div>

            </div>

        </div>

        <?php endwhile; wp_reset_postdata(); ?>    

    </div>

</section>