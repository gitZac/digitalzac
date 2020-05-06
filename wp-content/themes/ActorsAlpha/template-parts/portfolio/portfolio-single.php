<section class="page-intro__text-box page-intro__text-box--blog e-fade-in-bottom">

    <!-- PROJECT TYPE LIST -->
    
    <?php 

        $servs = get_field('services');    

            if( $servs ):  ?>

        <div class="port__plist--blog">

            <?php foreach ($servs as $serv): ?>
               <p class="port__plist-item port__plist-item--blog"><?php echo $serv; ?> </p>
            <?php endforeach; ?>

        </div>

    <?php endif; ?>

    <!-- END PROJECT TYPE LIST -->

    <?php the_field('case_study'); ?>

</section>