<div class="switch-one__configuration-item swith-configuration">
    <?php foreach($content as $item) { ?>
    <div class="swith-configuration__item">
        <a href="<?php echo $item["image"]; ?>" data-fancybox="system-configuration-items" class="swith-configuration__item-image">
            <img src="<?php echo $item["image"]; ?>" alt="" />
        </a>
        <div class="swith-configuration__item-text">
            <p><?php echo $item["title"]; ?></p>
        </div>
    </div>
    <?php } ?>
</div>
