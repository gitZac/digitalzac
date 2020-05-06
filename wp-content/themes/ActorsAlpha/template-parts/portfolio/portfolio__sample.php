<?php $args = array(
    'post_type' => 'scrapbook',							
    'posts_per_page' => 2,							
    'orderby' => 'rand',
    'order' => 'ASC',
); ?>

<section class="section section--front">
        
    <div class="port">
        
        <?php $scrapbook = new WP_Query($args); while($scrapbook->have_posts()): $scrapbook->the_post(); ?>

        <div class="port__card" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

            <h2 class="port__title"><?php the_field('scrapbook_description'); ?></h2>
            
            <div class="port__logo">

                <?php 

                    $image = get_field('logo_image');

                    if( !empty($image) ): ?>

                        <img class="port__logo-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                
            </div>
            
            <?php 
                
            //vars
            $servs = get_field('services');    
            
                if( $servs ):  ?>
            
            <ul class="port__plist">

               <?php foreach ($servs as $serv): ?>
                   <li class="port__plist-item"><?php echo $serv; ?> </li>
                <?php endforeach; ?>

            </ul>
            
            <?php endif; ?>

            <div class="port__btn-container">
               
                <a href="<?php the_permalink(); ?>" class="btn--text">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                
            </div>
            
        </div>
        
        <?php endwhile; wp_reset_postdata(); ?>    
        
    </div>
    
</section>