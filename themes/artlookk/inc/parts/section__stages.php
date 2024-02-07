<?php
$queried_object = get_queried_object();
$stages__title = get_field( "stages__title",  $queried_object);
if (!$stages__title) {
    $_stages_id = get_term($queried_object->parent);
    $stages__title = get_field( "investment_title", $_stages_id );
} else {
    $_stages_id = $queried_object;
}
$stages__text = get_field( "stages__text",  $_stages_id);
$stages__html = get_field( "stages__html",  $_stages_id);
?>


<section class="section__stages">
    <div class="container">
        <div class="section__stages__wrap">
            <div class="section__stages__header">
                <div class="section__stages__title"><?=$stages__title?></div>
                <div class="section__stages__text"><?=$stages__text?></div>
            </div>
            <?=$stages__html?>
        </div>
    </div>
</section>
