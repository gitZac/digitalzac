<div style="background-image:linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.6)), url(<?php echo get_the_post_thumbnail_url(); ?>);" class="hero hero--blog">

    <div class="hero__content hero__content--blog">

        <h1 class="hero__title hero__title--blog e-fade-in-top"><?php the_title(); ?></h1>

        <p class="hero__blog-subtitle e-fade-in-bottom"><span>
        
            <?php

                if(is_singular('services')){

                    echo the_field('subtitle_services');

                } else if(is_singular('scrapbook')){
                    
                    echo the_field('subtitle_portfolio');

                }
            ?>
        
        </span></p>
        
    </div>

</div>