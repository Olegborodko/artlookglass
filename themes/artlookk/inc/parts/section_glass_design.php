<?php
// $queried_object = get_queried_object();
// $block_glass_design = get_field( "glass_design", $queried_object );
$block_glass_design = get_field('glass_design', 'option');
if ( $block_glass_design['cards'] && count( $block_glass_design['cards'] ) ) { ?>
    <section class="section__glass__design">
        <div class="container">
            <div class="section__glass__design__wrap">
                <div class="section__glass__design__header">
                    <div class="design__header__title"><?=$block_glass_design['title']?></div>
                    <div class="design__header__text"><?=$block_glass_design['text']?></div>

                    <div class="nav-section">
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
                <div class="section__glass__design__body">
                    <div class="glass__design__slider__wrap">
                        <div class="glass__design__slider">
                            <?php foreach ($block_glass_design['cards'] as $card ) { ?>
                                <div class="glass__design__item__wrap">
                                    <div class="glass__design__item">
                                        <div class="design__item__thumb">
                                            <?php echo wp_get_attachment_image($card['img']['ID'], array('360', '460'), "", array( "class" => "img-responsive" ) );  ?>
                                        </div>
                                        <div class="design__item__caption">
                                            <div class="design__item__caption__title">
                                                <span><?=$card['name']?></span>
                                                <div class="help__icon">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.3524 6.9561C11.0188 6.9561 11.5043 6.423 11.5043 5.82326C11.5043 5.15689 11.0188 4.65234 10.3714 4.65234C9.75266 4.65234 9.21004 5.15689 9.21004 5.82326C9.21004 6.423 9.75266 6.9561 10.3524 6.9561ZM12.6562 16.3901V15.7903C11.5424 15.6475 11.4472 15.5524 11.4472 14.3434V8.1651C10.5523 8.47925 9.51467 8.70772 8.46751 8.84099V9.41217C9.43851 9.56449 9.53371 9.60257 9.53371 10.7544V14.3434C9.53371 15.5714 9.40043 15.6475 8.34375 15.7903V16.3901H12.6562Z" fill="#232C2E"/>
                                                        <rect x="0.5" y="1.02148" width="20" height="19" rx="9.5" stroke="#232C2E"/>
                                                    </svg>
                                                    <div class="switch-finishes__right-textDesc" style="/* display: none; */">
                                                        <ul class="switch-finishes__right-textDesc-list">
                                                            <li class="switch-finishes__right-textDesc-item">
                                                                <img src="/wp-content/themes/artlookk/assets/icons/pipet-desc.svg" alt="">
                                                                <strong>Color:</strong>
                                                                <span><?=$card['color']?></span>
                                                            </li>
                                                            <li class="switch-finishes__right-textDesc-item">
                                                                <img src="/wp-content/themes/artlookk/assets/icons/pattern-desc.svg" alt="">
                                                                <strong>Pattern:</strong>
                                                                <span><?=$card['pattern']?></span>
                                                            </li>
                                                            <li class="switch-finishes__right-textDesc-item">
                                                                <img src="/wp-content/themes/artlookk/assets/icons/eye-desc.svg" alt="">
                                                                <strong>Privacy:</strong>
                                                                <span><?=$card['privacy']?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $( document ).ready(function() {
                $('.glass__design__slider').slick({
                    dots:false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    centerMode: false,
                    draggable:true,
                    prevArrow: $('.section__glass__design .prev-left'),
                    nextArrow: $('.section__glass__design .next-right'),
                    responsive: [
                        {
                            breakpoint: 1640,
                            settings: {
                                slidesToShow: 3,
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
<?php } ?>