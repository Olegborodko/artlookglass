<section class="portfolio-page">
    <div class="portfolio-page__container container">
        <div class="portfolio-page__body">
            <div class="portfolio-page__main main-portfolio">
                <div class="main-blog__crumbs">
                    <a href="/" class="main-blog__crumbs-one">ArtLook Glass</a>
                    <i class="_icon-menu_arrow rotate_icon"></i>
                    <p class="main-blog__crumbs-two"><?php the_title( '', '' ); ?></p>
                </div>
                <div class="main-video__title video-title">
                    <h1 class="video-title__title"><?php the_title( '', '' ); ?></h1>
                    <div class="video-title__welcome"><?php the_content(); ?></div>
                </div>
                <hr class="hr-section">
                <div class="main-portfolio__item portfolio-item">
                    <?php
                    $ppp = get_option('posts_per_page');
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page' => $ppp,
                        'paged' => $paged,
                        'post_type' => 'project'
                    );
                    $postslist = new WP_Query( $args );
                    if ( $postslist->have_posts() ) : ?>
                        <div class="portfolio-item__containers">
                            <?php
                                while ( $postslist->have_posts() ) : $postslist->the_post();
                                    get_template_part('template-parts/content', 'project-post');
                                endwhile;
                            ?>
                        </div>
                    <div class="portfolio__pagination">
                        <?php next_posts_link( 'Older Entries', $postslist->max_num_pages ); ?>
                        <?php previous_posts_link( 'Next Entries &raquo;' );?>
                    </div>
                    <?php wp_reset_postdata();  endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>