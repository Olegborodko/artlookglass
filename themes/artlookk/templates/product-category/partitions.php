<?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__trust_us.php'; ?>

    <section class="category__products">
        <div class="container">
            <div class="category__products__handles">
                <div class="category__products__header">
                    <h2>System configuration</h2>
                </div>
                <div class="category__products__body">
                    <?php foreach ($products as $product) { ?>
                        <div class="category__product__wrap">
                            <div class="category__product">
                                <a href="<?php echo get_permalink($product); ?>">
                                    <div class="item-image">
                                        <img src="<?php echo Product::getImageUrl($product->ID); ?>"
                                             alt="<?php echo $product->post_title; ?>">
                                        <button class="five-slider__button" tabindex="0">
                                            <i class="fa-sharp fa-solid fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <div class="caption">
                                        <div class="item-title"><?php echo $product->post_title; ?></div>
                                    </div>

                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

	<section id="partitions__quiz__app" class="section__partitions__quiz">
        <div class="container">
			<div class="partitions_page_text_section">
				<p style="font-size: 20px; margin: 50px 0; padding: 0 15px;">Welcome to Artlookglass, your premier destination for bespoke glass partitions. Our expertise lies in crafting and installing custom solutions that redefine elegance in any space. Explore the subtle sophistication of our Frosted Glass Partition Walls, seamlessly balancing privacy and openness. Each partition is a unique masterpiece, blending functionality with artistic expression. Whether for your home or commercial setting, let Artlookglass transform your space into a statement of refined taste. Experience the difference where innovation meets tradition – elevate your surroundings with Artlookglass, where perfection is the standard.</p>
			</div>
		</div>
    </section>


    <section id="partitions__quiz__app" class="section__partitions__quiz">
        <div class="container">
            <div class="section__partitions__quiz__wrap">
                <Transition name="fade">
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
                            <div class="sectionTwo-title__nav nav-section">
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
                        <Transition name="fade">
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
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Kitchen or dinning room"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_2.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Living room</div>
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Living room"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_3.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Bedroom</div>
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Bedroom"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_4.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Office or home office</div>
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Office or home office"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_5.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Gym</div>
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Gym"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                    <div class="partitions__quiz__col partitions__quiz__col_3">
                                        <label class="card__radio">
                                            <div class="card__radio__img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s1_6.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card__radio__title">Other space</div>
                                            <span class="quiz_input__radio">
                                            <input type="radio" value="Other space"
                                                   name="where_would_you_like_to_install_a_glass_partition"
                                                   v-model="form.where_would_you_like_to_install_a_glass_partition"
                                            >
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </Transition>
                        <Transition name="fade">
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
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Frameless Glass Partitions"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_3">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s2_2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Aluminum Glass Partition</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Aluminum Glass Partition"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_3">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s2_3.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Custom Steel Glass Partitions</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Custom Steel Glass Partitions"
                                                   name="what_type_of_system_meets_your_aesthetics"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
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
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Sliding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_2.jpg"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Swing doors</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Swing doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                        </span>
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
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Framed doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_4.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Frameless doors</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Frameless doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                        </span>
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
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Swing doors" name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_6.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Sliding doors</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Sliding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer"
                                            >
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_7.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Bi-folding doors</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Bi-folding doors"
                                                   name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img card__radio__img__long">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partitions-quiz/partitions__quiz_s3_8.png"
                                                         alt="">
                                                </div>
                                                <div class="card__radio__title">Stationary</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Stationary" name="which_door_type_do_you_prefer"
                                                   v-model="form.which_door_type_do_you_prefer">
                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
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
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Low-Iron (Starphire) Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3308-1.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Clear</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Clear" name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3309.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Frosted Glass</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Frosted Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                        </span>
                                            </label>
                                        </div>
                                        <div class="partitions__quiz__col partitions__quiz__col_4">
                                            <label class="card__radio">
                                                <div class="card__radio__img">
                                                    <img src="/wp-content/uploads/2023/10/Rectangle-3311-1.png" alt="">
                                                </div>
                                                <div class="card__radio__title">Tinted Glass</div>
                                                <span class="quiz_input__radio">
                                            <input type="radio" value="Tinted Glass"
                                                   name="what_type_of_glass_do_you_prefer"
                                                   v-model="form.what_type_of_system_meets_your_aesthetics">
                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
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
                                            <div class="partitions__quiz__form__row__body">
                                                <label class="input_upload">
                                                    <input type="file">
                                                    <span class="input_upload_title">Drop files here or</span>
                                                    <span class="input_upload_subtitle">Browse files</span>
                                                    <span class="input_upload_subtext">Add an image in the following formats: .jpg / .gif / .png file size up to 5 mb</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 6 ">
                                <div class="partitions__quiz__step__title">
                                    <span>6</span> Do you need delivery and installation services?
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="partitions__quiz__form__input__simple">
                                        <label class="form__input__simple">
                                    <span class="quiz_input__radio">
                                        <input type="radio" value="I need delivery and installation"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                    </span>
                                            I need delivery and installation
                                        </label>
                                        <label class="form__input__simple">
                                    <span class="quiz_input__radio">
                                        <input type="radio" value="I will pick up and install the product myself"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                    </span>
                                            I will pick up and install <br> the product myself
                                        </label>
                                        <label class="form__input__simple">
                                    <span class="quiz_input__radio">
                                        <input type="radio" value="Only delivery, i will install it mysefl"
                                               name="do_you_need_delivery_and_installation_services"
                                               v-model="form.do_you_need_delivery_and_installation_services">
                                    </span>
                                            Only delivery, i will install it mysefl
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
                            <div class="partitions__quiz__step" v-if=" step === 7 ">
                                <div class="partitions__quiz__step__title">
                                    <span>7</span> I am...
                                </div>
                                <div class="partitions__quiz__step__body">
                                    <div class="form-two__iama iama">
                                        <label class="iama__card" v-for="(role, role_key) in customerRole" :key="role_key">
                                            <i :class="role.icon"></i>
                                            <input type="radio" name="customer-role" v-model="form.customerRole" :value="role.name">
                                            <span v-html="role.name"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                        <Transition name="fade">
                            <div class="partitions__quiz__step partitions__quiz__step__final" v-if=" step === 8 ">
                                <div class="partitions__quiz__step__body">
                                    <div class="final__form">
                                        <div class="final__form__text">
                                            <div class="title">Cost of your <br> partition <span>is ready!</span></div>
                                            <div class="text">Cost of your partition is ready!</div>
                                        </div>
                                        <div class="final__form__form">
                                            <div class="final__form__form__row">
                                                <label>
                                                    <span class="name">Name</span>
                                                    <span class="input__wrap">
                                                    <span class="input__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                                          <path d="M7.32237 2.49048C5.52502 2.49048 4.06798 3.94751 4.06798 5.74486C4.06798 7.54221 5.52502 8.99925 7.32237 8.99925C9.11972 8.99925 10.5768 7.54221 10.5768 5.74486C10.5768 3.94751 9.11972 2.49048 7.32237 2.49048ZM2.44079 5.74486C2.44079 3.04884 4.62635 0.863281 7.32237 0.863281C10.0184 0.863281 12.204 3.04884 12.204 5.74486C12.204 8.44089 10.0184 10.6264 7.32237 10.6264C4.62635 10.6264 2.44079 8.44089 2.44079 5.74486ZM4.06799 13.8808C2.71997 13.8808 1.62719 14.9736 1.62719 16.3216C1.62719 16.771 1.26293 17.1352 0.813597 17.1352C0.36426 17.1352 0 16.771 0 16.3216C0 14.0749 1.8213 12.2536 4.06799 12.2536H10.5768C12.8234 12.2536 14.6447 14.0749 14.6447 16.3216C14.6447 16.771 14.2805 17.1352 13.8311 17.1352C13.3818 17.1352 13.0176 16.771 13.0176 16.3216C13.0176 14.9736 11.9248 13.8808 10.5768 13.8808H4.06799Z" fill="#979AB1"/>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="contact_form_name" placeholder="Your Name" v-model="form.name">
                                                </span>
                                                </label>
                                            </div>
                                            <div class="final__form__form__row">
                                                <label>
                                                    <span class="name">Phone</span>
                                                    <span class="input__wrap">
                                                    <span class="input__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                                                          <path d="M15.0196 17.4853H14.9086C2.08198 16.7477 0.260791 5.925 0.00621737 2.62207C-0.0142953 2.36526 0.0160665 2.10693 0.095563 1.86188C0.175059 1.61682 0.302128 1.38987 0.469488 1.19401C0.636849 0.998146 0.841211 0.837234 1.07087 0.72049C1.30052 0.603746 1.55096 0.533465 1.80782 0.513672H5.40449C5.66596 0.513419 5.92148 0.591683 6.13795 0.738325C6.35442 0.884968 6.52187 1.09323 6.61862 1.33614L7.6108 3.77744C7.70633 4.01475 7.73004 4.27489 7.67898 4.52556C7.62792 4.77622 7.50434 5.00636 7.32359 5.18739L5.93322 6.59081C6.15041 7.82501 6.74145 8.9627 7.6264 9.84998C8.51135 10.7373 9.64748 11.3313 10.8811 11.5517L12.2976 10.1483C12.4813 9.96957 12.7136 9.84887 12.9655 9.80128C13.2174 9.75368 13.4778 9.7813 13.7141 9.88069L16.1749 10.8664C16.4142 10.9661 16.6183 11.1349 16.7613 11.3511C16.9043 11.5674 16.9797 11.8213 16.9778 12.0805V15.527C16.9778 16.0464 16.7715 16.5445 16.4043 16.9117C16.037 17.279 15.5389 17.4853 15.0196 17.4853ZM1.96448 1.81918C1.79136 1.81918 1.62533 1.88795 1.50291 2.01037C1.3805 2.13278 1.31173 2.29881 1.31173 2.47193V2.52415C1.61199 6.38846 3.53762 15.527 14.9804 16.1798C15.0661 16.1851 15.1521 16.1734 15.2333 16.1454C15.3146 16.1174 15.3895 16.0736 15.4538 16.0166C15.518 15.9596 15.5704 15.8905 15.6079 15.8132C15.6454 15.7359 15.6673 15.652 15.6723 15.5662V12.0805L13.2114 11.0948L11.338 12.9552L11.0247 12.916C5.34575 12.2045 4.5755 6.52554 4.5755 6.46679L4.53633 6.15347L6.39015 4.28006L5.41102 1.81918H1.96448Z" fill="#979AB1"/>
                                                        </svg>
                                                    </span>
                                                    <input type="tel" name="contact_form_tel" placeholder="+1 343 23 231232 21" v-model="form.phone">
                                                </span>
                                                </label>
                                                <label>
                                                    <span class="name">Email</span>
                                                    <span class="input__wrap">
                                                    <span class="input__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                                                          <path d="M19.9298 0.333984H1.53306C1.12647 0.333984 0.736529 0.495503 0.449024 0.783008C0.161519 1.07051 0 1.46045 0 1.86705V14.1315C0 14.5381 0.161519 14.9281 0.449024 15.2156C0.736529 15.5031 1.12647 15.6646 1.53306 15.6646H19.9298C20.3364 15.6646 20.7263 15.5031 21.0139 15.2156C21.3014 14.9281 21.4629 14.5381 21.4629 14.1315V1.86705C21.4629 1.46045 21.3014 1.07051 21.0139 0.783008C20.7263 0.495503 20.3364 0.333984 19.9298 0.333984ZM18.2434 1.86705L10.7314 7.06413L3.21943 1.86705H18.2434ZM1.53306 14.1315V2.56459L10.2945 8.62785C10.4228 8.71687 10.5753 8.76457 10.7314 8.76457C10.8876 8.76457 11.04 8.71687 11.1684 8.62785L19.9298 2.56459V14.1315H1.53306Z" fill="#979AB1"/>
                                                        </svg>
                                                    </span>
                                                    <input type="email" name="contact_form_email" placeholder="trartglass@mail.com" v-model="form.email">
                                                </span>
                                                </label>
                                            </div>
                                            <div class="final__form__form__row">
                                                <label>
                                                    <span class="name">Message</span>
                                                    <span class="input__wrap">
                                                    <span class="input__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                                          <path d="M9.03869 8.13597C9.53791 8.13597 9.94261 7.73127 9.94261 7.23205C9.94261 6.73282 9.53791 6.32812 9.03869 6.32812C8.53947 6.32812 8.13477 6.73282 8.13477 7.23205C8.13477 7.73127 8.53947 8.13597 9.03869 8.13597Z" fill="#979AB1"/>
                                                          <path d="M12.6539 8.13597C13.1531 8.13597 13.5578 7.73127 13.5578 7.23205C13.5578 6.73282 13.1531 6.32812 12.6539 6.32812C12.1547 6.32812 11.75 6.73282 11.75 7.23205C11.75 7.73127 12.1547 8.13597 12.6539 8.13597Z" fill="#979AB1"/>
                                                          <path d="M5.42345 8.13597C5.92268 8.13597 6.32738 7.73127 6.32738 7.23205C6.32738 6.73282 5.92268 6.32812 5.42345 6.32812C4.92423 6.32812 4.51953 6.73282 4.51953 7.23205C4.51953 7.73127 4.92423 8.13597 5.42345 8.13597Z" fill="#979AB1"/>
                                                          <path d="M15.3667 0H2.71177C1.99256 0 1.30281 0.285703 0.794258 0.794258C0.285703 1.30281 0 1.99256 0 2.71177V16.2706C0.000276019 16.4308 0.043107 16.588 0.124109 16.7262C0.205111 16.8644 0.321375 16.9785 0.461 17.057C0.596097 17.1336 0.748639 17.174 0.903922 17.1745C1.06616 17.1745 1.2254 17.1308 1.36492 17.048L5.42353 14.5893C5.57355 14.5 5.74623 14.456 5.92069 14.4628H15.3667C16.0859 14.4628 16.7756 14.1771 17.2842 13.6685C17.7927 13.1599 18.0784 12.4702 18.0784 11.751V2.71177C18.0784 1.99256 17.7927 1.30281 17.2842 0.794258C16.7756 0.285703 16.0859 0 15.3667 0ZM16.2706 11.751C16.2706 11.9907 16.1754 12.2206 16.0058 12.3902C15.8363 12.5597 15.6064 12.6549 15.3667 12.6549H5.92069C5.42699 12.6545 4.94255 12.7889 4.51961 13.0436L1.80784 14.6707V2.71177C1.80784 2.47203 1.90308 2.24212 2.0726 2.0726C2.24212 1.90308 2.47203 1.80784 2.71177 1.80784H15.3667C15.6064 1.80784 15.8363 1.90308 16.0058 2.0726C16.1754 2.24212 16.2706 2.47203 16.2706 2.71177V11.751Z" fill="#979AB1"/>
                                                        </svg>
                                                    </span>
                                                    <textarea name="contact_form_message" placeholder="Your Name" v-model="form.message"></textarea>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="final__form__form__footer">
                                                <div class="text">By clicking the “Get estimate”, I confirm my agreement with the
                                                    <a href="/privacy-policy/" target="_blank">privacy policy</a></div>
                                                <button class="btn_b" @click="submit">
                                                    Get estimate
                                                </button>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="partitions__quiz__step__final__footer">
                                        <ul class="hero__contact__social">
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                    <div class="partitions__quiz__block__footer">
                        <ul class="partitions__quiz__pagination">
                            <li v-for="p_step in 8" :key="p_step" :class="{ filled_up: p_step <= step }"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>

<?php require get_template_directory() . '/inc/parts/section_why_artlook.php'; ?>

<?php // require get_template_directory() . '/inc/parts/section__portfolio.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_category_gallery.php'; ?>


<?php include TEMPLATES_DIR . "/HomePage/section-seven.php"; ?>