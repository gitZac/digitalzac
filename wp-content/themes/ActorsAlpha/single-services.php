<?php get_header(); ?>

<main role="main" class="u-padding-top-15">

    <?php get_template_part('template-parts/hero-blog'); ?>
    
    <section class="page-intro__text-box page-intro__text-box--blog e-fade-in-bottom">

        <?php the_field('page_content'); ?>

    </section>

    <?php get_template_part('template-parts/promos/quote'); ?>
    
</main>

<?php get_footer(); ?>