<?php
/*
Template Name: Шаблон статей
*/
$category = get_queried_object();
$current_cat_id = $category->term_id;
$current_cat_name = $category->name;

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
				<h1><?=$current_cat_name;?></h1>
				<br>
                <?php 
				
			


				$args = array(
                 'numberposts' => 30,
                 'orderby'     => 'date',
                 'order'       => 'DESC',
                 'include'     => array(),
                 'exclude'     => array(),
				 'category' => $current_cat_id,
                 'post_type'   => 'post',
				 
                 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ); 
                $posts = get_posts($args);?>
                <ul>
                    <?php foreach ( $posts as $post ):?>
                    <li>
                        <p>
                <a href="<?php echo the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
                       </p>
                         </li>
                       
                <?php  setup_postdata($post)?>
                <?php  wp_reset_postdata(); ?>
                   <?php endforeach; ?>
                </ul>
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
                'walker'            => new wp_bootstrap_navwalker()
           ) );
        ?>
            </ul>
            <?php dynamic_sidebar( 'sidebar-left' ); ?>
        </div><!-- .sidebar#sideLeft -->
        <div class="sidebar" id="sideRight">
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        </div>
    </div><!-- .inner-wrapper -->
</div><!-- #middle-->

</div><!-- #wrapper -->
<?php get_footer(); ?>  
