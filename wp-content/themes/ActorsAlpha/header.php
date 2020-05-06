<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
	
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        
        <link href="https://fonts.googleapis.com/css?family=Arimo|Lora|Merriweather|Oswald|Raleway" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    
	</head>
	
<body <?php body_class(); ?>>

<header class="main-nav">

    <div class="l-wrapper">

        <div class="row">

            <div class="col-1-of-4">

                <div class="main-nav__logo-container">
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/digitalzac.com_logo2.png" alt="digitalzac.com -- Custom web design, content writing and SEO." class="main-nav__logo-image">
                    </a> 
                    <div class="main-nav__mobile-icon">
                        <a href="#" class="main-nav__burgernav"><i class="fa fa-bars"></i></a>
                    </div>

                </div>

            </div>

            <div class="col-2-of-4">
                <?php html5blank_nav(); ?>
            </div>

            <div class="col-1-of-4">

                <div class="main-nav__social">

                    <?php html5blank_social(); ?>

                </div>

            </div>

        </div>

    </div>

</header>
	
