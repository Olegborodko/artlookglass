<div class="switch-one__calculated">
    <p class="switch-one__calculated-title"><?php echo $title; ?></p>
    <div class="switch-one__calculated-row">
        <div class="switch-one__calculated-rowOne calc-rowOne">
            <div class="calc-rowOne__structure">
                <?php for($i = 0; $i <= 2; $i++) { ?>
                <div class="calc-rowOne__structure-one">
                    <img
                        src="<?php echo get_template_directory_uri() . $options[$i]["icon"]; ?>"
                        alt=""
                        class="calc-rowOne__structure-image"
                    />
                    <p class="calc-rowOne__structure-title">
                        <?php echo $options[$i]["title"]; ?>
                    </p>
                    <p class="calc-rowOne__structure-text">
                        <?php echo $options[$i]["text"]; ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="switch-one__calculated-rowTwo">
          <!--  <img class="" id="" src="<?php /*echo CustomSteelGlass::getSectionSevenImage("swing_doors_image"); */?>" alt="">-->

			<img class="switch-calc-image" id="calc-image-swing" src="<?php echo CustomSteelGlass::getSectionSevenImage("swing_doors_image"); ?>" alt="" />
            <img class="switch-calc-image" id="calc-image-slidings" src="<?php echo CustomSteelGlass::getSectionSevenImage("sliding_doors_image"); ?>" alt="" />
            <img class="switch-calc-image" id="calc-image-bi-folding" src="<?php echo CustomSteelGlass::getSectionSevenImage("bi-folding_doors_image"); ?>" alt="" />
            <img class="switch-calc-image" id="calc-image-stationary" src="<?php echo CustomSteelGlass::getSectionSevenImage("stationary_doors_image"); ?>" alt="" />

        </div>
        <div class="switch-one__calculated-rowOne">
            <div class="calc-rowOne__structure">
                <?php for($i = 3; $i <= 5; $i++) { ?>
                <div class="calc-rowOne__structure-one">
                    <img
                            src="<?php echo get_template_directory_uri() . $options[$i]["icon"]; ?>"
                            alt=""
                            class="calc-rowOne__structure-image"
                    />
                    <p class="calc-rowOne__structure-title">
                        <?php echo $options[$i]["title"]; ?>
                    </p>
                    <p class="calc-rowOne__structure-text">
                        <?php echo $options[$i]["text"]; ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="switch-one__calculated-button">
        <button class="btn_b" id="estimate3">get a free estimate</button>
    </div>
</div>