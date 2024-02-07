<div class="switch-one__custom-steel switch-custom">
    <p class="switch-custom__title"><?php echo $section["title"]; ?></p>
    <div class="switch-custom__content">
        <div class="switch-custom__right">
            <?php echo $section["content"]; ?>
        </div>
        <div class="switch-custom__left">
            <?php foreach($section["partitions"] as $partition) { ?>
                <div class="switch-custom__left-one switch-leftOne">
                <div class="switch-leftOne__text">
                    <div class="switch-leftOne__text-content">
                        <p class="switch-leftOne__title">
                            <?php echo $partition["title"]; ?>
                        </p>
                        <p class="switch-leftOne__about">
                            <?php echo $partition["text"]; ?>
                        </p>
                    </div>
                </div>
                <div class="switch-leftOne__image">
                    <img src="<?php echo $partition["image"]; ?>" alt="" />
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>