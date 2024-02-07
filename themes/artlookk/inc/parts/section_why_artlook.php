<?php
$queried_object = get_queried_object();
$why_artlook_section = get_field( "why_artlook_section",  $queried_object );

if (!$why_artlook_section) $why_artlook_section = get_field( "why_artlook_section", get_term($queried_object->parent) );
if ($why_artlook_section) {
if ( $why_artlook_section['answers'] && count( $why_artlook_section['answers'] ) ) { ?>
    <section class="main__section-four section-four why_artlook_section">
        <div class="section-four__container container">
            <div class="section-four__body ">
                <div class="section-four__main main-four">

                    <div class="main-four__content content-four">
                        <div class="content-four__main">
                            <div class="content-four__benefits benefits-list">
                                <div>
                                    <div class="main-four__why">
                                        <p><?=$why_artlook_section['section_title']?></p>
                                    </div>
                                    <div class="main-four__why__text">
                                        <?=$why_artlook_section['section_text']?>
                                    </div>
                                </div>
                                <hr class="hr-section">
                                <?php foreach ($why_artlook_section['answers'] as $answer ) { ?>
                                    <div class="benefits-list__originality">
                                        <div class="benefits-list__originality-icon">
                                            <img src="<?=$answer['icon']['url']?>" alt="">
                                            <p><?=$answer['name']?></p>
                                        </div>
                                        <div class="benefits-list__originality-text">
                                            <p><?=$answer['text']?></p>
                                        </div>
                                    </div>
                                    <hr class="hr-section">
                                <?php } ?>
                            </div>
                            <div class="content-four__form form-content">
                            <div class="m_contact_form_success_id" id="m_contact_form_success_id_6">
                              <div>Thanks for<br> submitting the form</div>
                              <div>Our manager will contact you soon.</div>
                            </div>
                                <div id="m_contact_form_id_6" class="form-content__view">
                                    <div class="form-content__view-content">
                                        <div class="form-content__body">
                                            <div class="form-content__text">
                                                <p class="form-content__item-one">Get a free estimate!</p>
                                                <p class="form-content__item-two">Just fill out short form and our manager will
                                                    contact with you soon</p>
                                            </div>
                                            <div class="form-content__input">
                                                <?php echo do_shortcode('[contact-form-7 id="6" title="Get Estimate"]'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="section_why_artlook_description">
							<?=$why_artlook_section['section_why_artlook_description']?>
						</div>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    }
}
?>