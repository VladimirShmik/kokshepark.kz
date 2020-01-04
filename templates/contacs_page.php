<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
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
<?php get_footer(); ?>