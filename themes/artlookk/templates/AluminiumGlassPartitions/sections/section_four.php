
<section class="aluminum__section">
    <div class="aluminum__section__header">
        <div class="aluminum__section__title"><?php echo $section["title"]; ?></div>
    </div>
    <div class="aluminum__section__body">
        <div class="aluminum__section__row">
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/Systems1.png" alt="Push Handset for Doors">
                    </div>
                    <div class="aluminum__section__card__decs">
                        1-Wall Systems
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/Systems2.png" alt="Replacement Door Hinges with Fasteners">
                    </div>
                    <div class="aluminum__section__card__decs">
                        2-Wall Systems
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/Systems3.png" alt="Automatic door closer">
                    </div>
                    <div class="aluminum__section__card__decs">
                        3-Wall Systems
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/Systems4.png" alt="Replacement Door Lock">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Multi-Wall Systems
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="aluminim-page__system system">
    <p class="aluminim-page__system-title">Description & Specifications</p>
    <div class="aluminim-page__system-item system-items">
        <?php $i = 1; ?>
        <?php foreach($section["items"] as $item) { ?>
        <div class="system-items__item-<?php echo AluminiumGlassPartition::getItemName($i); ?>">
            <div class="system-items__item-column">
                <div class="system-items__item-image">
                    <img src="<?php echo $item["image"]; ?>" alt="">
                </div>
                <div class="system-items__item-title">
                    <h1><?php echo $item["number"]; ?></h1>
                    <p><?php echo $item["text"]; ?></p>
                </div>
            </div>
        </div>
        <?php $i++; } ?>
    </div>
<!--    <div class="system__button">
        <button id="aluminum-order3">
            order now
        </button>
    </div>-->
</div>
<hr class="hr-section">


<section class="aluminum__section">
    <div class="aluminum__section__header">
        <div class="aluminum__section__title">Additional Services</div>
    </div>
    <div class="aluminum__section__body">
        <div class="aluminum__section__row">
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/fittings-1.png.png" alt="Push Handset for Doors">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Push Handset for Doors
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/fittings-2.png.png" alt="Replacement Door Hinges with Fasteners">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Replacement Door Hinges with Fasteners
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/fittings-3.png.png" alt="Automatic door closer">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Automatic door closer
                    </div>
                </div>
            </div>
            <div class="col_4">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/fittings-4.png.png" alt="Replacement Door Lock">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Replacement Door Lock
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="hr-section">

<section class="aluminum__section">
    <div class="aluminum__section__header">
        <div class="aluminum__section__title">Color solution for systems</div>
        <div class="aluminum__section__subtitle">The settings apply both to single door systems and to double door systems</div>
    </div>
    <div class="aluminum__section__body">
        <div class="aluminum__section__row">
            <div class="col_3">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/doorS-1.png" alt="Clear Anodized">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Clear Anodized
                    </div>
                </div>
            </div>
            <div class="col_3">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/doorS-2.png" alt="Black Painted / Matted">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Black Painted / Matted
                    </div>
                </div>
            </div>
            <div class="col_3">
                <div class="aluminum__section__card">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/doorS-3.png" alt="Automatic door closer">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Automatic door closer
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="hr-section">

<section class="aluminum__section">
    <div class="aluminum__section__header">
        <div class="aluminum__section__title">Typical Details</div>
        <div class="aluminum__section__subtitle">The Artlook Glass system for office spaces is an extremely easy-to-install option, making it
            <br> an excellent choice for convenient and quick implementation in your work environment.</div>
    </div>
    <div class="aluminum__section__body">
        <div class="aluminum__section__row aluminum__section__row__canter">
            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-1.jpg.png" alt="Single-Glazed System">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Single-Glazed System
                    </div>
                </div>
            </div>
            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-2.jpg.png" alt="Double-Glazed System">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Double-Glazed System
                    </div>
                </div>
            </div>


            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-3.jpg.png" alt="90 Corner Aluminum Proﬁle">
                    </div>
                    <div class="aluminum__section__card__decs">
                        90 Corner Aluminum Proﬁle
                    </div>
                </div>
            </div>

            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-4.jpg.png" alt="360 Corner Aluminum Proﬁle">
                    </div>
                    <div class="aluminum__section__card__decs">
                        360 Corner Aluminum Proﬁle
                    </div>
                </div>
            </div>
            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-5.jpg.png" alt="360 Corner Aluminum Proﬁle">
                    </div>
                    <div class="aluminum__section__card__decs">
                        End Cap
                    </div>
                </div>
            </div>

            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-6.jpg.png" alt="T-Bracket Connection Single Glazed System">
                    </div>
                    <div class="aluminum__section__card__decs">
                        T-Bracket Connection Single Glazed System
                    </div>
                </div>
            </div>

            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-7.jpg.png" alt="T-Bracket Connection Double Glazed System">
                    </div>
                    <div class="aluminum__section__card__decs">
                        T-Bracket Connection Double Glazed System
                    </div>
                </div>
            </div>

            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-8.jpg.png" alt="Door Profile">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Door Profile
                    </div>
                </div>
            </div>

            <div class="col_5">
                <div class="aluminum__section__card no__outline">
                    <div class="aluminum__section__card__img">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/t-details-9.jpg.png" alt="Bottom Bracket Connection">
                    </div>
                    <div class="aluminum__section__card__decs">
                        Bottom Bracket Connection
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<hr class="hr-section">

<section class="aluminum__section aluminum__two__section">
    <div class="aluminum__section__row aluminum__section__row__two">
        <div class="aluminum__section__header">
            <div class="aluminum__section__title">
                Framing to <br> <span>create</span> any design
            </div>
            <div class="aluminum__section__subtitle">ur extruded aluminum profiles guarantee a reliable construction and create attractive accents for your office solution. Regardless of the size of your space, our glass partition systems offer efficient use of space with an elegant and versatile design.</div>
            <div class="aluminum__section__content">
                <div class="aluminum__section__content_t">Factory applied finishes:</div>
                <div class="aluminum__section__content_cards">
                    <div class="aluminum__section__content_card">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/mask-group.png" alt="Matte Black">
                        <div class="aluminum__section__content_card_body">
                            <b>Matte Black</b>
                            RAL 9005
                        </div>
                    </div>
                    <div class="aluminum__section__content_card">
                        <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/mask-group-2.png" alt="Anodized">
                        <div class="aluminum__section__content_card_body">
                            <b>Anodized</b>
                            Aluminum
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aluminum__section__body">
            <img src="<?=get_template_directory_uri()?>/assets/img/aluminum/image 79.png" alt="Single-Glazed System">
        </div>
    </div>

    <div class="aluminum__two__section__btns">
        <button class="btn_b show__popup__contact">
            Get a Free estimate
        </button>
    </div>

</section>
