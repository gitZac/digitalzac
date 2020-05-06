<?php get_header(); ?>

<main role="main">

	<section class="section section--front">
        
        <?php get_template_part('template-parts/hero'); ?> 
        
	</section>
	
	<section class="section section--front">

                <div class="l-wrapper">
                        
                        <?php get_template_part('template-parts/allabout-no-title'); ?>

                </div>

        </section>


        <div class="l-wrapper e-opacity0 wp-fp-port">
                
                <h2 class="section__title--inner u-text-center">My Work</h2>

                <?php get_template_part('template-parts/portfolio/portfolio__sample'); ?>

        </div>

        <div class="l-wrapper e-opacity0 wp-fp-bio">

                <?php get_template_part('template-parts/bio'); ?>              
        </div>


        <?php get_template_part('template-parts/promos/quote'); ?>      
	    
</main>

<?php get_footer(); ?>