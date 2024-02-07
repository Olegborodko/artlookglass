<div class="aluminim-page__system system">
    <p class="aluminim-page__system-title"><?php echo $section["title"]; ?></p>
    <div class="frameless-items">
        <?php $item = $section["items"][0]; ?>
        <div class="frameless-items__column-one">
            <div class="frameless-items__column-itemOne">
                <div class="frameless-items__column-image">
                    <?php echo $item["icon"];?>
                </div>
                <div class="frameless-items__column-title">
                    <p><?php echo $item["title"];?></p>
                </div>
                <div class="frameless-items__column-about">
                    <p><?php echo $item["text"];?></p>
                </div>
            </div>
        </div>
        <?php $item = $section["items"][1]; ?>
        <div class="frameless-items__column-two">
            <div class="frameless-items__column-itemOne">
                <div class="frameless-items__column-image">
                    <?php echo $item["icon"];?>
                </div>
                <div class="frameless-items__column-title">
                    <p><?php echo $item["title"];?></p>
                </div>
                <div class="frameless-items__column-about">
                    <p><?php echo $item["text"];?></p>
                </div>
            </div>
        </div>
        <?php $item = $section["items"][2]; ?>
        <div class="frameless-items__column-three">
            <div class="frameless-items__column-itemOne">
                <div class="frameless-items__column-image">
                    <?php echo $item["icon"];?>
                </div>
                <div class="frameless-items__column-title">
                    <p><?php echo $item["title"];?></p>
                </div>
                <div class="frameless-items__column-about">
                    <p><?php echo $item["text"];?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="system__button">
        <button id="aluminum-order3">
            order now
        </button>
    </div>
</div>
