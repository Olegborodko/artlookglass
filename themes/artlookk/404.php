<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package artlookglass
 */

get_header();
?>

	<main id="primary" class="site-main">



        <section class="page-error">
            <div class="page-error__body">
                <div class="page-error__items">
                    <div class="page-error__image">
                        <img class="error-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>



	</main><!-- #main -->

<?php
get_footer();
