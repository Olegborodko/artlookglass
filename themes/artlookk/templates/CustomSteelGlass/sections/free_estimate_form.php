<div class="switch-one__online switch-online">
    <div class="switch-online__step1 online-step1">
        <div class="online-step1__title">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $sub_title; ?></p>
        </div>
        <form class="form-custom-steel" id="customForm">
            <div class="tabs step-1 tab-active">
                <div class="online-step1__row online-form">
                    <div class="online-form__step1 online-form1">
                        <p class="online-form1__form-title">1. Select opening configuration</p>
                        <div class="online-form1__left">
                            <?php foreach ($configuration_items as $item) { ?>
                                <?php if ($item["id"] == "swing") { ?>
                                    <div class="online-form1__input">
                                        <div class="online-form1__input-<?php echo $item["id"]; ?>">
                                            <label class="configuration__label" for="<?php echo $item["id"]; ?>__input">
                                                <input type="radio" value="swing" <?php if ($item["id"] == "swing") { ?> checked <?php } ?>
                                                       id="<?php echo $item["id"]; ?>__input" name="configuration"/>
                                                <i></i><img
                                                        src="<?php echo get_template_directory_uri() . $item["icon"]; ?>"
                                                        alt=""/> <span><?php echo $item["title"]; ?></span>
                                            </label>
                                        </div>
                                        <div class="online-form1__input-select">
                                            <div class="online-form1__input-double">
                                                <label for="double"
                                                ><input
                                                            type="radio"
                                                            checked
                                                            id="double"
                                                            name="tpe"
                                                            value="double"
                                                            class="online-form1__double"
                                                    />double</label
                                                ></div>
                                            <div class="online-form1__input-double">
                                                <label for="single"
                                                ><input
                                                            type="radio"
                                                            id="single"
                                                            name="tpe"
                                                            value="single"
                                                            class="online-form1__single"
                                                    />single</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="online-form1__input-<?php echo $item["id"]; ?>">
                                        <label class="configuration__label" for="<?php echo $item["id"]; ?>">
                                            <input type="radio" value="<?php echo $item["title"]; ?>" <?php if ($item["id"] == "swing") { ?> checked <?php } ?>
                                                   id="<?php echo $item["id"]; ?>" name="configuration"/>
                                            <i></i><img
                                                    src="<?php echo get_template_directory_uri() . $item["icon"]; ?>"
                                                    alt=""/> <span><?php echo $item["title"]; ?></span>
                                        </label>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <button class="btn_b online-form1__button btn-next">continue</button>
                    </div>
                    <div class="online-form1__right">
                        <img id="select_config_estimate"
                             src="<?php echo get_template_directory_uri(); ?>/assets/img/calc-image.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="tabs step-2">
                <div class="online-form__step2 online-form2">
                    <p class="online-form1__form-title">01. System type<span
                                class="online-form1__form-title-span">*</span></p>
                    <div class="online-form2__one">
                        <div class="online-form2__one-label">
                            <label for="enter">
                                <input type="radio" checked name="enter" id="enter"/>
                                <i></i>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/sliding-doors.svg" alt=""  />
                                <span>Sliding</span>
                            </label>
                        </div>
                        <div class="online-form2__one-buttom btn-edit">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pen.svg" alt=""> Edit
                        </div>
                    </div>
                    <div class="form-three__section-one form-one">
                        <div class="form-one__personal">
                            <p class="form-one__presonal-title">02. Personal info<span>*</span></p>
                        </div>
                        <div class="form-one__input">
                            <div class="form-one__input-name">
                                <p>Name</p>
                                <div class="form-one__input-item">
                                    <img class="form-one__input-img"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-human.svg"
                                         alt="">
                                    <input type="text" name="name" placeholder="Alexander Priss">
                                </div>
                            </div>
                            <div class="form-one__phone-email">
                                <div class="form-one__input-phone">
                                    <p>Phone</p>
                                    <div class="form-one__input-item">
                                        <img class="form-one__input-img"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-phone.svg"
                                             alt="">
                                        <input type="tel" name="phone" placeholder="+1 929 265 2652">
                                    </div>
                                </div>
                                <div class="form-one__input-email">
                                    <p>Email</p>
                                    <div class="form-one__input-item">
                                        <img class="form-one__input-img"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-email.svg"
                                             alt="">
                                        <input type="email" name="email" placeholder="artlook@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-one__input-message">
                                <p>Message</p>
                                <div class="form-one__input-items">
                                    <div class="form-one__input-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-message.svg"
                                             alt=""></div>
                                    <textarea type="text" name="message"
                                              placeholder="Dimensions (width and height) or floor plans"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-three__section-two form-two">
                        <div class="form-one__personal">
                            <p class="form-one__presonal-title">03. I am a...<span>*</span></p>
                        </div>
                        <div class="form-two__iama iama">
                            <label class="iama__card">
                                <i class="_icon-homeowner"></i>
                                <input type="radio" name="customer-role" value="Homeowner">
                                <span>Homeowner</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-businessowner"></i>
                                <input type="radio" name="customer-role" value="Business Owner">
                                <span>Business Owner</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-designer"></i>
                                <input type="radio" name="customer-role" value="Designer">
                                <span>Designer</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-architect"></i>
                                <input type="radio" name="customer-role" value="Architect">
                                <span>Architect</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-contractor"></i>
                                <input type="radio" name="customer-role" value="Contractor">
                                <span>Contractor</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-glasscompany"></i>
                                <input type="radio" name="customer-role" value="Glass Company">
                                <span>Glass Company</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-realestate"></i>
                                <input type="radio" name="customer-role" value="Real Estate / Developer">
                                <span>Real Estate/Developer</span>
                            </label>
                            <label class="iama__card">
                                <i class="_icon-other"></i>
                                <input type="radio" name="customer-role" value="Other" checked>
                                <span>Other ...</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-three__section-three form-thre">
                        <div class="form-one__personal">
                            <p class="form-one__presonal-title">03. Additions</p>
                        </div>
                        <label class="form-thre__drop">
                            <div class="form-thre__drop-title">
                                <input type="file" name="input_file" id="estimate_input_file" style="display: none;"/>
                                <p>Drop files here or</p>
                                <span>Browse files</span>
                            </div>
                        </label>
                    </div>
                    <div class="form-three__section-four form-four">
                        <div class="form-four__checkbox">
                            <input type="checkbox" id="form-four__checkbox-title">
                            <label for="form-four__checkbox-title" class="form-four__checkbox-title">
                                By clicking the “Send”, I confirm my agreement with the privacy policy <span>*</span>
                            </label>
                        </div>
                        <button class="btn_b" type="submit">
                            send
                            <span class="wpcf7-spinner"></span>
                        </button>
                    </div>
                    <div class="results__block">
                        <div class="result__block"></div>
                        <div class="error__list"></div>
                    </div>
                    <hr class="hr-sections">
                    <div class="article-three__required">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt=""
                             srcset="">
                        <p>Items with a prefix -<span>*</span> are required</p>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<script>

    $( document ).ready(function() {

        $('.form-custom-steel .tabs.step-1 .btn-next').click( function (event){
            $('.form-custom-steel .tabs').removeClass('tab-active');
            $('.form-custom-steel .tabs.step-2').addClass('tab-active');
            let configuration = $('.form-custom-steel .configuration__label:has([type=radio]:checked ');
            document.querySelector('.switch-one__online').scrollIntoView({ behavior: "smooth"  });
            $('.form-custom-steel .online-form2__one-label').html('<label for="enter">' + configuration.html().replace('name="', 'name="r_') + '</label>');
            event.preventDefault();
        } );

        $('.form-custom-steel .tabs.step-2 .btn-edit').click( function (event){
            $('.form-custom-steel .tabs').removeClass('tab-active');
            $('.form-custom-steel .tabs.step-1').addClass('tab-active');
            document.querySelector('.switch-one__online').scrollIntoView({ behavior: "smooth"  });
            event.preventDefault();
        } );

        $( ".form-custom-steel" ).on( "submit", function( event ) {

            $('.form-custom-steel').addClass('loading');

            let formData = $(".form-custom-steel").serializeArray();

            $('.form-custom-steel .results__block .result__block').html('');
            $(".form-custom-steel .results__block .error__list").html('');

            if (
                !$(".form-custom-steel .form-one__input-name input").val().length
                || !$(".form-custom-steel .form-one__input-phone input").val().length
                || !$(".form-custom-steel .form-one__input-email input").val().length
            ) {
                $('.form-custom-steel .results__block .error__list').html('Required fields are not filled!');
                $('.form-custom-steel').removeClass('loading');
                return false;
            }

            $.ajax({
                url: '/wp-json/wp/v2/send_message_rest',
                type: 'post',
                data: formData,
                success: ( response ) => {
                    if (response['text']) {
                        $('.form-custom-steel .results__block .result__block').html(response['text'])
                    }
                },
                error: ( response, textStatus, errorThrown ) => {
                    console.log("error", response, textStatus, errorThrown );
                },
                complete: () => {
                    $('.form-custom-steel').removeClass('loading');
                }
            });

            event.preventDefault();
        });

    });


</script>
