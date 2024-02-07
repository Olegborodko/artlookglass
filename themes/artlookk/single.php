<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package artlookglass
 */

get_header();
?>
	<main id="primary" class="site-main">
        <section class="article__section-one article-one">
            <div class="article-one__title-image img-title">
                <div class="img-title__image">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/article-image.jpg" alt=""  />
                       <?php } ?>
                </div>
                <div class="img-title__content container">
                    <div class="img-title__item">
                        <div class="img-title__crumbs">
                            <a href="/" class="img-title__crumbs-one">ArtLook Glass</a>
                            <i class="_icon-menu_arrow img-title-icon"></i>
                            <a href="/blog" class="img-title__crumbs-one">Blog</a>
                            <i class="_icon-menu_arrow img-title-icon"></i>
                            <?php the_title( '<p class="img-title__crumbs-two">', '</p>' ); ?>
                        </div>
                        <div class="img-title__banner">
                            <div class="img-title__info">
                                <p><i class="fa-regular fa-clock"></i><?php echo get_the_date('j F Y'); ?></p>
                                <p><i class="fa-solid fa-eye"></i><?= pvc_get_post_views( get_the_ID() ) ?> Views</p>
                            </div>
                            <?php the_title( '<h1 class="img-title__title"><p>', '</p></h1>' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="article__section-two article-two">
            <div class="article-two__container container">
                <hr class="hr-section" />
                <div class="article-two__body">
                    <div class="article-two__content">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            the_content(
                                sprintf(
                                    wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'artlookglass' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post( get_the_title() )
                                )
                            );
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <hr class="hr-section" />
            </div>
        </section>

        <div class="about-page__section-four about-four">
            <div class="container">
            <div class="m_contact_form_success_id" id="m_contact_form_success_id_493">
            <div>Thanks for<br> submitting the form</div>
            <div>Our manager will contact you soon.</div>
            </div>
                <div id="m_contact_form_id_493" class="article-three__contents">
                    <div class="article-three__content-form">
                        <div class="article-three__title">
                            <p>request a quote</p>
                        </div>
                        <div class="article-three__form form-three">
                            <div class="form-three__content">
                                <div class="form-three__section-one form-one">
                                    <div class="form-one__personal">
                                        <p class="form-one__presonal-title">01. Personal info<span>*</span></p>
                                    </div>
                                    <div class="form-one__input">
                                        <?php echo do_shortcode('[contact-form-7 id="493" title="Get Estimate About"]'); ?>
                                    </div>
                                </div>
                                <hr class="hr-section">
                                <div class="article-three__required">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt="" srcset="" />
                                    <p>Items with a prefix -<span>*</span> are required</p>
                                </div>
							
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
		
		<div class="container">
		<hr class="hr-section" />
		</div>
		
		<div class="container">
		
		<section class="main__section-seven section-seven">
		<div class="section-seven__container container">
			<div class="section-seven__body ">
				<div class="section-seven__main main-seven">
					<div class="main-seven__top">
						<div class="main-seven__blog">our latest blogs</div>
						<div class="sectionTwo-title__nav nav-section">
							<button type="button" class="nav-section__item prev-left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
								Prev.
							</button>
							<button type="button" class="nav-section__item next-right">
								Next
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
							</button>
						</div>
					</div>
					<div class="row">
						<div class="slick__slider main-seven__bottom seven-slider">
							<?php global $post; $args = array( 'numberposts' => 0, 'category' => 1, 'orderby' => 'date');
							$myposts = get_posts( $args );
							foreach( $myposts as $post ){ setup_postdata($post); ?>
								<div class="main-seven__slider__item">
									<?php get_template_part( 'template-parts/content', 'blog-post' ); ?>
								</div>
							<?php }
							wp_reset_postdata(); ?>
						</div>
					</div>

					<a class="btn_b" href="/blog/">
						<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
							<rect x="3.5" y="9" width="14" height="2" fill="white"/>
							<rect x="11.5" y="3" width="14" height="2" transform="rotate(90 11.5 3)" fill="white"/>
						</svg>
						all blog
					</a>

				</div>
			</div>
		</div>
		<script>

			$( document ).ready(function() {
				$('.seven-slider').slick({
					dots:false,
					slidesToShow: 5,
					slidesToScroll: 5,
					infinite: true,
					centerMode: false,
					draggable:true,
					prevArrow: $('.section-seven .prev-left'),
					nextArrow: $('.section-seven .next-right'),
					responsive: [
						{
							breakpoint: 1640,
							settings: {
								slidesToShow: 4,
								slidesToScroll: 4,
							}
						},
						{
							breakpoint: 1340,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
							}
						},
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 370,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
				});

			});
		</script>
	</section>
		
	</div>	

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
