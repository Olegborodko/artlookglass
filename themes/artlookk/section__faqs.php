<?php
$queried_object = get_queried_object();

$faq_select_a_category = get_field( "faq_select_a_category",  $queried_object);

print_r($faq_select_a_category);

$__lastposts = get_posts( array(
    'numberposts' => 5,
    'post_type'        => 'faq',
    'tax_query' => array(
        array(
            'taxonomy' => 'faqs',
            'field' => 'term_id',
            'terms' => $faq_select_a_category,
            'include_children' => false
        )
    )
) );
?>

<?php if ( $__lastposts ) { ?>
<section class="section__faqs">
    <div class="container">
        <div class="section__faqs__wrap">
            <div class="section__faqs__header">
                <div class="section__faqs__title">Frequently Asked Questions</div>
                <div class="section__faqs__text">We are here to be your personal consultant, <br>
                    we are ready to help you choose the right model <br>
                    that will become a real highlight of your interior.</div>
                <div class="section__faqs__btns">
                    <a class="btn_b" href="/contacts/">
                        Ask a consultant
                    </a>
                </div>
            </div>
            <div class="section__faqs__body">
                <ul class="accordion">
                     <?php foreach ( $__lastposts as $post ) : setup_postdata( $post );
                     ?>
                         <li class="accordion__item">
                             <input type="checkbox" checked>
                             <i class="accordion__arrow"></i>
                             <h2 class="accordion__title"><?= $post->post_title; ?></h2>
                             <div class="accordion__content"><?php the_content(); ?></div>
                         </li>

                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php }  ?>