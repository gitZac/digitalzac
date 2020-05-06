<section class="section">

    <?php $args = array(
            'post_type' => 'bio',							
            'posts_per_page' => 1,							
            'orderby' => 'title',
            'order' => 'ASC',
        ); ?>

    <?php $hero = new WP_Query($args); while($hero->have_posts()): $hero->the_post(); ?>

    <div class="bio">
        
        <h2 class="section__title--inner u-text-center"><?php the_field('bio_title'); ?></h2>
            <div class="bio__image">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="bio__content">
                <p><?php echo custom_field_excerpt(); ?></p>
            </div>
        
    </div>

    <?php endwhile; wp_reset_postdata(); ?>

</section>