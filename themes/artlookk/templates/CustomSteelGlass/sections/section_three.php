<section class="image-fill">
    <div class="tooltips">
        <img src="<?php echo $content["background"]; ?>" alt="" />
        <div class="all-tooltips">
            <?php foreach ($content["pin_dots"] as $dot) { ?>
            <div class="tooltip">
                <div class="pin" style="left: <?php echo $dot["pin_left"]; ?>%;top:<?php echo $dot["pin_top"]; ?>%;">
                    <span class="pin-dot"></span>
                </div>
                <div class="tooltip-content" style="left: calc(<?php echo ($dot["pin_left"] - 1); ?>% - 240px);top: calc(<?php echo($dot["pin_top"]); ?>% - 150px);">
                    <img class="tooltip-content__image" src="<?php echo $dot["pin_image"]; ?>" alt="">
                    <div class="tooltip-content__title">
                        <p class="tooltip-content__title-one"><?php echo $dot["pin_title"]; ?></p>
                        <p class="tooltip-content__title-two"><?php echo $dot["pin_text"]; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
