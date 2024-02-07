<?php




switch ($category->term_id) {
    case 16:
        include TEMPLATES_DIR . "/product-category/railing-systems.php";
        break;
    case 15:
        include TEMPLATES_DIR . "/product-category/partitions.php";
        break;

    default:
        include TEMPLATES_DIR . "/product-category/other.php";

}


