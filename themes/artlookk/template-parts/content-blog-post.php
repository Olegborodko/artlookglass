<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artlookglass
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post_home">
        <div class="post-img_home">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>
        <div class="post-txt_home">
            <div class="entry-meta">
                <div class="meta_the_date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                        <path d="M8.65733 3.51334H7.33942V8.78499L11.5128 11.289L12.1718 10.2083L8.65733 8.12603V3.51334ZM8.21802 -0.00109863C3.85134 -0.00109863 0.310547 3.5397 0.310547 7.90638C0.310547 12.2731 3.84255 15.8139 8.21802 15.8139C12.5847 15.8139 16.1255 12.2731 16.1255 7.90638C16.1255 3.5397 12.5847 -0.00109863 8.21802 -0.00109863ZM8.21802 14.0566C4.81781 14.0566 2.06776 11.3066 2.06776 7.90638C2.06776 4.50616 4.81781 1.75612 8.21802 1.75612C11.6182 1.75612 14.3683 4.50616 14.3683 7.90638C14.3683 11.3066 11.6182 14.0566 8.21802 14.0566Z" fill="#979AB1"/>
                    </svg>
                    <?php echo get_the_date('j F Y'); ?>
                </div>

                <div class="meta_views">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="14" viewBox="0 0 19 14" fill="none">
                        <path d="M9.30462 0.648193C5.13251 0.648193 1.56953 3.24325 0.125977 6.90636C1.56953 10.5695 5.13251 13.1645 9.30462 13.1645C13.4767 13.1645 17.0397 10.5695 18.4833 6.90636C17.0397 3.24325 13.4767 0.648193 9.30462 0.648193ZM9.30462 11.0785C7.00161 11.0785 5.13251 9.20936 5.13251 6.90636C5.13251 4.60335 7.00161 2.73425 9.30462 2.73425C11.6076 2.73425 13.4767 4.60335 13.4767 6.90636C13.4767 9.20936 11.6076 11.0785 9.30462 11.0785ZM9.30462 4.40309C7.91948 4.40309 6.80135 5.52122 6.80135 6.90636C6.80135 8.2915 7.91948 9.40962 9.30462 9.40962C10.6898 9.40962 11.8079 8.2915 11.8079 6.90636C11.8079 5.52122 10.6898 4.40309 9.30462 4.40309Z" fill="#979AB1"/>
                    </svg>
                    <?= pvc_get_post_views( get_the_ID() ) ?> Views
                </div>

            </div>
            <h3 class="post-h3_home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="post-except_home"> <?php the_excerpt(); ?> </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
