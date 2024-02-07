<div class="b-popup estimate-popup" id="popup2">
    <div class="estimate-popup-content estimate-form">
        <div class="popup-form__close">
            <button id="close-popupe"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/close.svg" alt=""></button>
        </div>
        <div class="estimate-form__content">
            <div class="estimate-form__up-title estimate-title">
                <p class="estimate-title__one">Get a free estimate for Steel Partitions</p>
                <p class="estimate-title__two">Just fill out a short form and our manager will contact you soon. </p>
            </div>
            <div class="estimate-form__type-system type-system">
                <div class="type-system__title">
                    <p class="type-system__title-text">01. System type<span>*</span> </p>
                </div>
                <div class="type-system__input">
                    <div class="type-system__input-swinge">
                        <label for="sliding"
                        ><input type="radio" value="sliding" id="sliding" name="type-system-input" />
                            <i></i><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/sliding-doors.svg" alt=""/> <span>Sliding</span> </label>
                    </div>
                    <div class="type-system__input-swinge">
                        <label for="swinge"
                        ><input type="radio" value="swinge" id="swinge" name="type-system-input" />
                            <i></i><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icons/swing-doors.svg"
                                alt=""
                            /> <span>Swing</span> </label
                        >
                    </div>
                    <div class="type-system__input-swinge">
                        <label for="divider"
                        ><input type="radio" value="divider" id="divider" name="type-system-input" />
                            <i></i><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icons/stationary.svg"
                                alt=""
                            /> <span>Divider</span> </label
                        >
                    </div>
                    <div class="type-system__input-swinge">
                        <label for="bi-folding"
                        ><input type="radio" value="bi-folding" id="bi-folding" name="type-system-input" />
                            <i></i><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/icons/bi-folding-doors.svg"
                                alt=""
                            /> <span>Bi-folding</span> </label
                        >
                    </div>
                </div>
            </div>
            <div class="estimate-form__dimensions popup-dimensions">
                <div class="popup-dimensions__title">
                    <p class="popup-dimensions__title-text">02. Dimensions, inch<span>*</span> </p>
                </div>
                <div class="popup-dimensions__input">
                    <input type="text" name="width" id="width" placeholder="Width">
                    <p>x</p>
                    <input type="text" name="height" id="height" placeholder="Height">
                </div>
            </div>
            <div class="estimate-form__delivery popup-delivery">
                <div class="popup-delivery__title">
                    <p class="popup-delivery__title-text">03. Opening ready?<span>*</span> </p>
                </div>
                <div class="popup-delivery__input">
                    <div class="popup-delivery__input-delivery">
                        <label for="delivery">
                            <div class="popup-delivery__input-content">
                                <input type="radio" name="delivery" id="delivery">
                                <i></i>
                                <span>Delivery</span>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup.jpg" alt="">
                        </label>
                    </div>
                    <div class="popup-delivery__input-delivery">
                        <label for="install">
                            <div class="popup-delivery__input-content">
                                <input type="radio" name="delivery" id="install">
                                <i></i>
                                <span>Delivery & Installation</span>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popup2.jpg" alt="">
                        </label>
                    </div>
                </div>
            </div>
            <div class="estimate-form__opening-ready opening-ready">
                <div class="opening-ready__title">
                    <p class="opening-ready__title-text">04. Opening ready?<span>*</span> </p>
                </div>
                <div class="opening-ready__input">
                    <div class="opening-ready__input-select">
                        <label for="yes">
                            <input type="radio" name="yes" id="yes">
                            <i></i>
                            <span>Yes</span>
                        </label>
                    </div>
                    <div class="opening-ready__input-select">
                        <label for="no">
                            <input type="radio" name="yes" id="no">
                            <i></i>
                            <span>No</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="online-form__step2 online-form2 popup-contact">
                <div class="form-three__section-one form-one">
                    <div class="form-one__personal">
                        <p class="form-one__presonal-title">05. Personal info<span>*</span></p>
                    </div>
                    <div class="form-one__input input-form-contact">
                        <div class="form-one__input-name">
                            <p>Name</p>
                            <div class="form-one__input-item">
                                <img class="form-one__input-img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-human.svg" alt="">
                                <input type="text" name="name" placeholder="Alexander Priss">
                            </div>
                        </div>
                        <div class="form-one__phone-email popup-columns">
                            <div class="form-one__input-phone">
                                <p>Phone</p>
                                <div class="form-one__input-item">
                                    <img class="form-one__input-img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-phone.svg" alt="">
                                    <input type="tel" name="phone" placeholder="+1 929 265 2652">
                                </div>
                            </div>
                            <div class="form-one__input-email">
                                <p>Email</p>
                                <div class="form-one__input-item">
                                    <img class="form-one__input-img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-email.svg" alt="">
                                    <input type="email" name="email" placeholder="artlook@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-one__input-message">
                            <p>Message</p>
                            <div class="form-one__input-items">
                                <div class="form-one__input-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/form-message.svg" alt=""></div>
                                <textarea type="text" name="message" placeholder="Dimensions (width and height) or floor plans"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-three__section-two form-two">
                    <div class="form-one__personal">
                        <p class="form-one__presonal-title">06. I am a...<span>*</span></p>
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
                            <span>Real Estate <br> /Developer</span>
                        </label>
                        <label class="iama__card">
                            <i class="_icon-other"></i>
                            <input type="radio" name="customer-role" value="Other">
                            <span>Other ...</span>
                        </label>
                    </div>
                </div>
                <div class="form-three__section-three form-thre">
                    <div class="form-one__personal">
                        <p class="form-one__presonal-title">07. Additions</p>
                    </div>
                    <div class="form-thre__drop">
                        <div class="form-thre__drop-title">
                            <input type="file" name="input_file" id="estimate_input_file" style="display: none;"/>
                            <p>Drop files here or</p>
                            <a href="#" id="estimate_input_file_button" onclick="return false;"><span>Browse files</span></a>
                        </div>
                    </div>
                </div>
                <div class="form-three__section-four form-four">
                    <div class="form-four__checkbox">
                        <input type="checkbox">
                        <p class="form-four__checkbox-title">By clicking the “Send”, I confirm my agreement with
                            the privacy policy<span>*</span></p>
                    </div>
                    <button>send</button>
                </div>
                <hr class="hr-sections">
                <div class="article-three__required popup-requery">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt="" srcset="">
                    <p>Items with a prefix -<span>*</span> are required</p>
                </div>
            </div>
        </div>
    </div>
</div>
