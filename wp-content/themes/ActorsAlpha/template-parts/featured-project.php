<?php $args = array(
    'post_type' => 'scrapbook',							
    'posts_per_page' => 1,							
    'orderby' => 'rand',
    'order' => 'ASC',
); ?>

<section class="section">
   
    <?php $scrapbook = new WP_Query($args); while($scrapbook->have_posts()): $scrapbook->the_post(); ?>
    
        <h2 class="section__title--inner u-text-center">Featured Project</h2>

        <div class="feat-proj">

            <div class="feat-proj__background"></div>
            
            <figure class="feat-proj__image-container">
               
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="feat-proj__image">
                
            </figure>

            <div class="feat-proj__text-container">

                <div class="feat-proj__logo-cont">
                       
                    <p class="feat-proj__logo-text"><?php the_field('customer'); ?></p>
                    
                </div>

                <h4 class="feat-proj__title"><?php the_field('featured_project_title'); ?></h4>
                <a href="<?php the_permalink(); ?>" class="feat-proj__txt-link">Check It Out<i class="feat-proj__icon fa fa-arrow-right"></i></a>

            </div>

        </div>

    <?php endwhile; wp_reset_postdata(); ?>    

</section>


