<?php
$queried_object = get_queried_object();

$block_types = get_field( "types", $queried_object );

if (!$block_types) $block_types = get_field( "types", get_term($queried_object->parent) );
if ($block_types) {
    if ( $block_types['cards'] && count( $block_types['cards'] ) ) { ?>
    <section class="section__hardware">
        <div class="container">
            <div class="section__hardware__wrap">
                <div class="section__hardware__header">
                    <div class="section__hardware__title"><?=$block_types['title']?></div>
                </div>
                <div class="section__hardware__body">
                    <?php foreach ($block_types['cards'] as $card ) { ?>
                        <div class="section__hardware__item__wrap">
                            <div class="section__hardware__item<?php if ($card['url']) { ?> click-active<?php } ?>" <?php if ($card['url']) { ?> onclick="location.href = '<?=$card['url']?>';" <?php } ?>>
                                <div class="hardware__item__thumb">
                                    <?php echo wp_get_attachment_image($card['img']['ID'], array('360', '360'), "", array( "class" => "img-responsive" ) );  ?>
                                </div>
                                <div class="hardware__item__caption">
                                    <div class="hardware__item__caption__title"><?=$card['name']?></div>
                                    <div class="hardware__item__caption__text"><?=$card['text']?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
				<div class="text_type_description"><?=$block_types['text_type_description']?></div>
            </div>
        </div>
    </section>
<?php
    }
} ?>