<div class="aluminim-page__kompas">
    <div class="aluminim-page__kompas-left">
        <img src="<?php echo $section["image"]; ?>" alt="">
    </div>
    <div class="aluminim-page__kompas-right kompas-right">
        <div class="kompas-right__text">
            <p class="kompas-right__title"><?php echo $section["title"]; ?></p>
            <div class="kompas-right__subtitle">It is known and proven your all-in-one solution for your home or office with a modern minimalist design. This is an easy, strong and durable way of zoning your interior.</div>
            <div class="kompas-right__list">
                <?php foreach($section["list"] as $item) { ?>
                    <div class="kompas-right__item">
                        <span><?php echo $item["number"]; ?></span>
                        <p><?php echo $item["text"]; ?></p>
                    </div>
                <?php } ?>
            </div>
            <button id="aluminum-order2" class="kompas-right__button">
                Get a Free estimate
            </button>
        </div>

    </div>
</div>
