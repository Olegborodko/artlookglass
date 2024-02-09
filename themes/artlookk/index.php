<?php
/*
 * Template name: Home
 */
$post = get_post();
$tax = get_post_taxonomies();


?>

<?php get_header(); ?>
<main class="main">
    <?php if(in_array("post_format", $tax)) { ?>
        <?php Blog::render(); ?>
    <?php } else { ?>
        <?php HomePage::render(); ?>
    <?php } ?>



</main>
<?php get_footer(); ?>
