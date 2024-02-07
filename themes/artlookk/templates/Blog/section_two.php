<section class="main__blog-section blog-section">
    <div class="blog-section__container container">
        <div class="blog-section__body">
            <div class="blog-section__main blog-main">
                <?php global $post;
                $args = array('numberposts' => 0, 'category' => 1, 'orderby' => 'date');
                $myposts = get_posts($args);
                foreach ($myposts as $post) {
                    setup_postdata($post); ?>
                    <div class="blog-main__item">
                        <?php get_template_part( 'template-parts/content', 'blog-post' ); ?>
                    </div>
                <?php }
                wp_reset_postdata(); ?>
            </div>
            <div class="blog-section__bottom">
                <?php the_posts_navigation(); ?>
            </div>
        </div>
    </div>
</section>
