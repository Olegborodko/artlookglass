<div class="about-page__section-two about-two">
    <div class="about-two__title">
        <p><?php echo $section["title"]; ?></p>
    </div>
    <div class="about-two__benefits">
        <?php foreach($section["items"] as $item) { ?>
        <div class="about-two__benefits-one">
            <img class="about-two__benefits-image" src="<?php echo get_template_directory_uri() . $item["icon"]; ?>" alt="">
            <p class="about-two__benefits-title"><?php echo $item["title"]; ?></p>
            <p class="about-two__benefits-about"><?php echo $item["text"]; ?></p>
        </div>
        <?php } ?>
    </div>
    <hr class="hr-section">
</div>