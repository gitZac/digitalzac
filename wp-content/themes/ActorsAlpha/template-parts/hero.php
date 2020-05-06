
<?php $args = array(
        'post_type' => 'hero',							
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $hero = new WP_Query($args); while($hero->have_posts()): $hero->the_post(); ?>


    <div style="background-image:linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.3)), url(<?php echo get_the_post_thumbnail_url(); ?>);" class="hero hero--vhbg">

        <div class="hero__content">

            <h1 class="hero__title e-fade-in-top"><?php the_title(); ?></h1>
            <p class="hero__text e-fade-in-bottom"> 
                <span class="hero__text--span"><?php echo get_the_content(); ?></span>
            </p>
            
            <div class="hero__btn-container">
                <a href="<?php the_field('hero_button_link'); ?>" class="btn btn--master btn--primary"><?php the_field('hero_button') ?></a>
            </div>      
            
        </div>

    </div><!--HERO-->

<?php endwhile; wp_reset_postdata(); ?>
