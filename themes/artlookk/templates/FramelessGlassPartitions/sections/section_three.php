<section class="aluminum-image-fill">
    <div class="aluminum-tooltips">
        <img src="<?php echo $dots["background"]; ?>" alt="" />
        <div class="aluminum-all-tooltips">
            <?php foreach($dots["pin_dots"] as $pin) { ?>
            <div class="aluminum-tooltip">
                <div class="aluminum-pin" style="left: <?php echo $pin["pin_left"]; ?>%;top:<?php echo $pin["pin_top"]; ?>%;">
                    <span class="aluminum-pin-dot"></span>
                </div>
                <div class="aluminum-tooltip-content" style="left: calc(<?php echo ($pin["pin_left"] - 1); ?>% - 240px);top: calc(<?php echo($pin["pin_top"]); ?>% - 150px);">
                    <img class="aluminum-tooltip-content__image" src="<?php echo $pin["pin_image"]; ?>" alt="">
                    <div class="aluminum-tooltip-content__title">
                        <p class="aluminum-tooltip-content__title-one"><?php echo $pin["pin_title"]; ?></p>
                        <p class="aluminum-tooltip-content__title-two"><?php echo $pin["pin_text"]; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
