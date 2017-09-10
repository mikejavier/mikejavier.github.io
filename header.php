<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title><?php wp_title(''); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <!-- FAVICON E TOUCH ICON IN THE ROOT DIRECTORY -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png">
    <?php wp_head(); ?>
    </head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php if(is_singular( $post_type ) && !is_singular('portfolio')  ):
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );   
    ?>
        <header class="single-header" style="background:transparent url( <?php echo $url; ?> ) fixed top center no-repeat;"></header>
    <?php else: ?>    
    <header class="about">
        <div class="wrap">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/ms.png"  alt="Michael Santillán Avatar" class="about-avatar">
            <h1 class="about-name">Michael Santillán</h1>
            <h2 class="about-role">Front-End Developer</h2>
            <div class="social-icons">
                <a href="http://www.facebook.com/zmike.javier" target="_blank" class="social-icons-link"><i class="fa fa-facebook md-effect-light"></i></a>
                <a href="http://www.twitter.com/zmiike" target="_blank" class="social-icons-link"><i class="fa fa-twitter md-effect-light"></i></a>
                <a href="http://br.linkedin.com/in/mikejavier/" target="_blank" class="social-icons-link"><i class="fa fa-linkedin md-effect-light"></i></a>
                <a href="https://github.com/mikejavier" target="_blank" class="social-icons-link"><i class="fa fa-github md-effect-light"></i></a>
            </div>
            <a target="_blank" href="https://docs.google.com/document/d/1Ay3gMvsL_Oqv9HQm3iH3mjO5vU0vNCQe4KvD7ewx4EA/edit?usp=sharing" class="raised-button md-effect-light">download <i class="fa fa-download"></i> curriculum</a>
        </div>
    </header>
    <?php endif; ?>