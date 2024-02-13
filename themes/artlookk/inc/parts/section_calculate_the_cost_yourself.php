<?php
  $contact_form_id = 2210;
?>

<section id="partitions__quiz__app" class="section__partitions__quiz art_calculate_cost">
        <div class="container">
          <div class="m_contact_form_success_id" id="m_contact_form_success_id_<?=$contact_form_id?>">
            <div>Thanks for<br> submitting the form</div>
            <div>Our manager will contact you soon.</div>
          </div>
          <div id="m_contact_form_id_<?=$contact_form_id?>">
            <div class="section__partitions__quiz__wrap">
                <Transition data-step="0" name="fade">
                <div class="partitions__quiz__block" v-if="step === 0">
                    <div class="partitions__quiz__block__start">
                        <div class="partitions__quiz__block__start__content">
                            <div class="title">
                                You can <span>calculate</span> <br> <span>the cost</span> yourself
                            </div>
                            <div class="text">
                                Do it with our online calculator
                            </div>
                            <div class="block__info__wrap">
                                <div class="block__info__col">
                                    <div class="title_i">
                                        <span>7</span>
                                        questions
                                    </div>
                                    <div class="text_i">simple and quick</div>
                                </div>
                                <div class="block__info__col">
                                    <div class="title_i">
                                        <span>2</span>
                                        mins
                                    </div>
                                    <div class="text_i">or less to complete</div>
                                </div>
                            </div>
                            <button class="start__btn" @click="step = 1">
                                Start
                            </button>
                        </div>
                        <div class="partitions__quiz__block__start__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_main.png" alt="">
                        </div>
                    </div>
                </div>
                </Transition>
                <div class="partitions__quiz__block"  v-if="step !== 0">
                    <div class="partitions__quiz__block__header">
                        <div class="artitions__quiz__title">Calculate <span>partition</span> cost
                            <div class="artitions__quiz__subtitle">Answer 7 quick questions</div>
                        </div>
                        <div class="artitions__quiz__nav">
                            <div class="sectionTwo-title__nav nav-section art_arrows_block">
                                <button v-if="step > 1" type="button" class="nav-section__item port-prev-left slick-arrow" @click="paginationF(-1)">
                                    <img src="/wp-content/themes/artlookk/assets/icons/left_arrow.svg" alt="left_arrow">
                                    Prev.
                                </button>
                                <button v-if="step < 8" type="button" class="nav-section__item port-next-right slick-arrow" @click="paginationF(1)">
                                    Next
                                    <img src="/wp-content/themes/artlookk/assets/icons/right-arrow.svg" alt="arrow">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="partitions__quiz__steps" :class="status">
                        <Transition data-step="1" name="fade">
                        <div class="partitions__quiz__step" v-if=" step === 1">
                            <div class="partitions__quiz__step__title">
                                <span>1</span> Where would you like to install a glass partition?
                            </div>
                            <div class="partitions__quiz__step__body">
                                <div class="partitions__quiz__row">
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Kitchen or dinning room</div>
                                            <input type="radio" value="Kitchen or dinning room"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_2.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Living room</div>
                                            <input type="radio" value="Living room"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_3.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Bedroom</div>
                                            <input type="radio" value="Bedroom"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_4.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Office or home office</div>
                                            <input type="radio" value="Office or home office"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_5.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Gym</div>
                                            <input type="radio" value="Gym"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_6.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Other space</div>
                                            <input type="radio" value="Other space"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </Transition>
                        <Transition data-step="2" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 2 ">
                                <div class="partitions__quiz__step__title">
                                    <span>2</span> What type of system meets your aesthetics?
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__row">
                                        <div class="partitions__quiz__col partitions__quiz__col_3">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s2_1.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Frameless Glass Partitions</div>
                                            <input type="radio" value="Frameless Glass Partitions"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_3">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s2_2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Aluminum Glass Partition</div>
                                            <input type="radio" value="Aluminum Glass Partition"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_3">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s2_3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Custom Steel Glass Partitions</div>
                                            <input type="radio" value="Custom Steel Glass Partitions"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition data-step="3" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 3 ">
                                <div class="partitions__quiz__step__title">
                                    <span>3</span> Which door type do you prefer?
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__row" v-if="form.what_type_of_system_meets_your_aesthetics == 'Frameless Glass Partitions'">
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_1.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Sliding doors</div>
                                            <input type="radio" value="Sliding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Swing doors</div>
                                            <input type="radio" value="Swing doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="partitions__quiz__row" v-if="form.what_type_of_system_meets_your_aesthetics == 'Aluminum Glass Partition'">
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_3.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Framed doors</div>
                                            <input type="radio" value="Framed doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_4.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Frameless doors</div>
                                            <input type="radio" value="Frameless doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="partitions__quiz__row" v-if="form.what_type_of_system_meets_your_aesthetics == 'Custom Steel Glass Partitions'">
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_5.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Swing doors</div>
                                            <input type="radio" value="Swing doors" name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_6.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Sliding doors</div>
                                            <input type="radio" value="Sliding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_7.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Bi-folding doors</div>
                                            <input type="radio" value="Bi-folding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_8.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Stationary</div>
                                            <input type="radio" value="Stationary" name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition data-step="4" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 4 ">
                                <div class="partitions__quiz__step__title">
                                    <span>4</span> What type of glass do you prefer?
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__row">
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3308.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Low-Iron (Starphire) Glass</div>
                                            <input type="radio" value="Low-Iron (Starphire) Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3308-1.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Clear</div>
                                            <input type="radio" value="Clear" name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3309.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Frosted Glass</div>
                                            <input type="radio" value="Frosted Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3311-1.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Tinted Glass</div>
                                            <input type="radio" value="Tinted Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition data-step="5" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 5 ">
                                <div class="partitions__quiz__step__title">
                                    <span>5</span> Dimensions of the opening or floor plan
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__form__rows">
                                        <div class="partitions__quiz__form__row">
                                            <div class="partitions__quiz__form__row__title">01. Dimensions, inch</div>
                                            <div class="partitions__quiz__form__row__body">

                                                <div class="input_inch">
                                                    <label>
                                                        <input type="text" name="dimensions_inch_1" placeholder="Width"v-model="form.dimensions_inch_1">
                                                    </label>
                                                    <span class="x_part">x</span>
                                                    <label>
                                                        <input type="text" name="dimensions_inch_2" placeholder="Height" v-model="form.dimensions_inch_2">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="partitions__quiz__form__row">
                                            <div class="partitions__quiz__form__row__title">02. Additions</div>
                                            <div id="art_step5_block_files" class="partitions__quiz__form__row__body">
                                                <!-- <label class="input_upload">
                                                    <input type="file">
                                                    <span class="input_upload_title">Drop files here or</span>
                                                    <span class="input_upload_subtitle">Browse files</span>
                                                    <span class="input_upload_subtext">Add an image in the following formats: .jpg / .gif / .png file size up to 5 mb</span>
                                                </label> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="btn_b next_step_6">
                                    Next Step
                                </button> -->
                            </div>
                        </Transition>
                        <Transition data-step="6" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 6 ">
                                <div class="partitions__quiz__step__title">
                                    <span>6</span> Do you need delivery and installation services?
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__form__input__simple">
                                        <label class="form__input__simple">
                                        <input type="radio" value="I need delivery and installation"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                            I need delivery and installation
                                        </label>
                                        <label class="form__input__simple">
                                        <input type="radio" value="I will pick up and install the product myself"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                            I will pick up and install <br> the product myself
                                        </label>
                                        <label class="form__input__simple">
                                        <input type="radio" value="Only delivery, i will install it mysefl"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                            Only delivery, i will install it mysefl
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition class="art_i_am" data-step="7" name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 7 ">
                                <div class="partitions__quiz__step__title">
                                    <span>7</span> I am...
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="form-two__iama iama">
                                        <!-- <label class="iama__card" v-for="(role, role_key) in customerRole" :key="role_key">
                                            <i :class="role.icon"></i>
                                            <input type="radio" name="customer-role" v-model="form.customerRole" :value="role.name">
                                            <span v-html="role.name"></span>
                                        </label> -->
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
                            <span>Real Estate <br> /Developer</span>
                        </label>
                        <label class="iama__card">
                            <i class="_icon-other"></i>
                            <input type="radio" name="customer-role" value="Other">
                            <span>Other ...</span>
                        </label>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition data-step="8" name="fade" style="" class="art_cost_final_step">
                            <div class="partitions__quiz__step partitions__quiz__step__final" v-if=" step === 8 ">
                                <div class="partitions__quiz__step__body">
                                    <div class="final__form">
                                        <div class="final__form__text">
                                            <div class="title">Cost of your <br> partition <span>is ready!</span></div>
                                            <div class="text">Cost of your partition is ready!</div>
                                        </div>
                                        <div class="final__form__form">
                                        <?php echo do_shortcode('[contact-form-7 id="'.$contact_form_id.'" title="CALCULATE PARTITION COST"]'); ?>
                                        </div>

                                    </div>
                                    <div class="partitions__quiz__step__final__footer">
                                        <!-- <ul class="hero__contact__social">
                                            <li class="social__item">
                                                <a href="<?php echo get_site_option( 'social_facebook' ); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="<?php echo get_site_option( 'social_instagram' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt=""></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="<?php echo get_site_option( 'social_twitter' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt=""></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="<?php echo get_site_option( 'social_youtube' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <div class="partitions__quiz__block__footer art_pagination_steps">
                      <span data-id="1"></span>
                      <span data-id="2"></span>
                      <span data-id="3"></span>
                      <span data-id="4"></span>
                      <span data-id="5"></span>
                      <span data-id="6"></span>
                      <span data-id="7"></span>
                      <span data-id="8"></span>
                    </div>
                </div>
            </div>
          </div>
        </div>


    </section>