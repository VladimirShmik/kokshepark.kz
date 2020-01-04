<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ragctheme
 */
?>
<?php get_header(); ?>
<main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="error_block">
                        <h2 class="branches_h">Извините, страницы не существует.</h2>
                        <div class="error_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/404.svg" alt="" style="width: 250px" class="error_image"></div>
                        <p class="error_text">Вы можете вернутся на <a href="https://ragc.kz" class="link_hover"> главную</a>
                            и продолжить поиск необходимого.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
