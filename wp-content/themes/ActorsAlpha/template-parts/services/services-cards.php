<?php $args = array(
    'post_type' => 'services',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'ASC',
); ?>

<section class="section">

    <div class="services">
       
        <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
              
            <div class="services__card" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

                <div class="services__content">

                   <h2 class="services__title"><?php the_field('title'); ?></h2>
                   
                   <p class="services__description">
                   
                       <?php the_field('description'); ?>
                   
                   </p>
                   
                   <a href="<?php the_permalink(); ?>" class="services__link">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                </div>

            </div>
        
        <?php endwhile; wp_reset_postdata(); ?>    

    </div>

</section>