<div class="aluminim-page__top">
    <div class="aluminim-page__left">
        <div class="aluminim-page__left-text">
            <p class="aluminim-page__left-title">
                <?php echo $section["section_title"]; ?>
            </p>
            <p class="aluminim-page__left-about">
                <?php echo $section["section_text"]; ?>
            </p>
        </div>
        <button id="aluminum-order1" class="aluminim-page__left-button">
            order now
        </button>
    </div>
    <div class="aluminim-page__right">
        <img
            class="aluminim-page__right-circle"
            src="<?php echo get_template_directory_uri(); ?>/assets/icons/one_circle_label.svg"
            alt=""
        />

        <img
            class="aluminim-page__right-square"
            src="<?php echo $section["section_image"]; ?>"
            alt=""
        />
    </div>
</div>
