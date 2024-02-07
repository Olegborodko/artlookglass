<?php
$block_our_products_list = get_field('our_products_list', 'option');
$block_our_products_title = get_field('our_products_title', 'option');
$block_our_products_text = get_field('our_products_text', 'option');
if (count($block_our_products_list)) {
?>
<section class="section__our__products">
    <div class="container">
        <div class="our__products__header">
            <div class="our__products__title"><?=$block_our_products_title?></div>
            <?=$block_our_products_text?>
        </div>
        <div class="our__products__body">
            <div class="products__list">
                <?php foreach ($block_our_products_list as $product_block ) { ?>
                    <div class="product__item__wrap">
                        <div class="product__item">
                            <div class="product__item__img">
                                <?php echo wp_get_attachment_image($product_block['image']['ID'], 'medium', "", array( "class" => "img-responsive" ) );  ?>
                            </div>
                            <a href="<?=trim($product_block['url'])?>" class="btn_b"><?=$product_block['name']?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>