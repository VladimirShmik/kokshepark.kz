<?php
/*
Template Name: Медиа
*/
?>
<?php get_header(); ?>
<div id="middle">
    <div class="inner-wrapper">
        <div id="container">
            <div id="content">
                <div class="content-info-bar">
                    <div class="weather-info">

                    </div>
                </div>
                <div class="news-list">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                    <p>Извините ничего не найдено.</p>
                    <?php endif; ?>
                </div>
                <br>
            </div><!-- #content-->
        </div><!-- #container-->
        <div class="sidebar" id="sideLeft">
            <ul class="sidebar-nav">
                <?php
            wp_nav_menu( array(
                'menu'              => 'left menu',
                'theme_location'    => 'left menu',
                'depth'             => 0,
                'container'         => 'false',
                'container_class'      => 'sidebar',
                'container_id'      => 'sideLeft',
                'menu_class'      => '',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

            </ul>
            <?php dynamic_sidebar( 'sidebar-left' ); ?>
        </div><!-- .sidebar#sideLeft -->
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
        <div class="sidebar" id="sideRight">
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        </div>
        <?php endif; ?>
    </div><!-- .inner-wrapper -->
</div><!-- #middle-->

</div><!-- #wrapper -->
<?php get_footer(); ?>