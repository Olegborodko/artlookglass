<?php
$queried_object = get_queried_object();
$block_choose_a_category = get_field( "choose_a_category", $queried_object );
if (!$block_choose_a_category) $block_choose_a_category = get_field( "choose_a_category", get_term($queried_object->parent) );
if ($block_choose_a_category) {
if ( $block_choose_a_category['cards'] && count( $block_choose_a_category['cards'] ) ) { ?>
    <section class="section__handles__categories">
        <div class="container">
            <div class="section__handles__categories__wrap">
                <div class="handles__categories__header">
                    <div class="handles__categories__title"><?=$block_choose_a_category['title']?></div>
                    <div class="handles__categories__text"><?=$block_choose_a_category['text']?></div>
                </div>
                <div class="handles__categories__body">
                    <div class="handles__categories__wrap">
                        <?php foreach ($block_choose_a_category['cards'] as $card ) { ?>
                            <a href="#" class="handles__category__item">
                                <div class="handles__category__thumb">
                                    <?php echo wp_get_attachment_image($card['img']['ID'], array('360', '460'), "", array( "class" => "img-responsive" ) );  ?>
                                </div>
                                <div class="handles__category__caption">
                                    <div class="handles__category__title"><?=$card['name']?></div>
                                    <?=$card['text']?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
} ?>