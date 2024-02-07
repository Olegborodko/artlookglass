<div class="switch-one__handles section_six">
    <div class="switch-one__handless-title">
        <p><?php echo $title; ?></p>

        <div class="sectionTwo-title__nav nav-section">
            <button type="button" class="nav-section__item handless-prev-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
                Prev.
            </button>
            <button type="button" class="nav-section__item handless-next-right">
                Next
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
            </button>
        </div>

    </div>
    <div class="handles-swich-swing-slick switch-one__handless-content handless-item">
        <?php foreach($content as $item) { ?>
        <div class="handless-item__item">
            <div class="handless-item__item-image">
                <a href="<?php echo $item["image"]; ?>" data-fancybox="type-of-handless-fancy">
                    <img src="<?php echo $item["image"]; ?>" alt="">
                </a>
            </div>
            <div class="handless-item__item-title">
                <p><?php echo $item["title"]; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

