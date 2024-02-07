<?php

$queried_object = get_queried_object();

$block_category_gallery = get_field( "category_gallery", $queried_object );

if (!$block_category_gallery) $block_category_gallery = get_field( "category_gallery", get_term($queried_object->parent) );
if ($block_category_gallery) {
if ( $block_category_gallery['gallery'] && count( $block_category_gallery['gallery'] ) ) { ?>
    <section class="section__category__gallery">
        <div class="container">
            <div class="section__category__gallery__wrap">
                <div class="section__category__gallery__header">
                    <div class="section__category__gallery__title"><?=$block_category_gallery['title']?></div>
                    <?=$block_category_gallery['text']?>
                </div>
                <div class="section__category__gallery__body">
                    <div class="category__gallery__wrap">
                        <div class="category__gallery">
                            <?php foreach ($block_category_gallery['gallery'] as $image ) { ?>
                                <div class="category__gallery__item">
                                    <div class="category__gallery__img">

                                        <a class="gallery__item" href="<?= wp_get_attachment_image_url($image['ID'], 'full') ?>"
                                           data-fancybox="gallery_<?=get_the_ID();?>"
                                            data-height="1200"
                                        >
                                            <?php echo wp_get_attachment_image($image['ID'], array('810', '610'), "", array( "class" => "img-responsive" ) );  ?>
                                        </a>


                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
				
				<div class="category_shower-doors_text">
					<?=$block_category_gallery['text_gallery_description']?>
				</div>
				
            </div>
        </div>
        <script>
            $( document ).ready(function() {
                $('.category__gallery').slick({
                    dots:true,
                    variableWidth: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: true,
                    draggable:true,
                    prevArrow:`<button type='button' class='slick-prev pull-left'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
  <line x1="19.9668" y1="8.81055" x2="1.03399" y2="8.81055" stroke="white"/>
  <path d="M7.04082 16.5098L1.03359 8.82488L7.04101 0.490246" stroke="white"/>
</svg></button>`,
                    nextArrow:`<button type='button' class='slick-next pull-right'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
  <line x1="0.0332031" y1="8.18945" x2="18.966" y2="8.18945" stroke="white"/>
  <path d="M12.9592 0.490234L18.9664 8.17512L12.959 16.5098" stroke="white"/>
</svg></button>`,
                    responsive: [
                        {
                            breakpoint: 1640,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 1340,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
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
<?php } } ?>