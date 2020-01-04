<?php
/**
 * The header for our theme
 * @package kokshepark
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <section>
            <body class="ru front sideright">
                <div id="wrapper">
                    <div id="header">
                        <div class="bottom-background">
                            <div class="inner-wrapper"
                                style="background: url('<?php bloginfo('template_url'); ?>/assets/img/bitch.png') top center no-repeat">
                                <div id="top-bar">
                                    <div id="login">
                                    </div>
                                    <div id="langs">
                                   <?php pll_the_languages($args); ?>
                                    </div>
                                </div><!-- #top-bar-->
                                <div class="kazakhstan-gerb"></div>
                                <div id="search-form">
                                    <form action="/search/index">
                                        <div class="search-box">
                                            <input name="q" type="text">
                                        </div>
                                        <div class="search-button">
                                            <?php get_search_form(); ?>
                                        </div>
                                    </form>
                                </div><!-- #search-form-->
                                <div class="social">
                                    <a href="https://www.facebook.com/profile.php?id=100026041072998"
                                        target="_blank"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png"
                                            width="32px" /></a>
                                    <a href="https://www.instagram.com/kokshetau_mutp/" target="_blank"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/insta.png"
                                            width="32px" /></a>
                                    <a href="https://www.youtube.com/channel/UCKEmTa9N-UcxclhyIisEtKg"
                                        target="_blank"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/youtube.png"
                                            width="32px" /></a>
                                </div>
                                    <?php
                                        wp_nav_menu( array(
                                            'menu'              => 'top menu',
                                            'theme_location'    => 'top menu',
                                            'depth'             => 0,
                                            'container'         => 'false',
                                            'menu_id'      => 'main-nav',
                                            )
                                        );
                                    ?>
                                    <div id="header-slider">
                    <ul>
                    <?php echo do_shortcode( '[masterslider id="1"]' ); ?>
                      
                        </ul>
                    </div>
             
            </div>
        </div><!-- .inner-wrapper-->
    </div><!-- .bottom-background-->
</div><!-- #header-->
</section>