<footer class="footer">
    <hr class="hr_footer">
    <div class="footer__wrapper">
        <div class="footer__container container">
            <div class="footer__body">
                <div class="footer__main">
					 <h1 class="footer__main_title-1">Contacts</h1>
                    <div class="footer__contact contact">
                        <div class="contact__contacts">
                            <a href="/" class="contact__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="ArtLook" class="footer__logo"></a>

<?php
/**    <h1>Customer Service</h1>
<ul class="contacts__list">
<li class="contacts__item">
<a href="tel: <?php echo trim(get_site_option( 'theme_contact_phone' )); ?>" ><i class="fa-solid fa-phone"></i><?php echo get_site_option( 'theme_contact_phone' ); ?></a>
</li>
<li class="contacts__item">
<a href="mailto: <?php echo get_site_option( 'theme_email' ); ?>"><i class="fa-solid fa-envelope"></i><?php echo get_site_option( 'theme_email' ); ?></a>
</li>
<li class="contacts__item time_work">
<i class="fa-solid fa-clock"></i>
<?php echo get_site_option( 'theme_workdays' ); ?>
</li>
<li class="contacts__item">
<i class="fa-solid fa-location-dot"></i> <?php echo get_site_option( 'theme_address' ); ?>
</li>
</ul>
 */
?>
							
		<h1 class="footer__main_title-2">Customer Service</h1>
		<ul class="contacts__list">
			<li class="contacts__item">
				<a href="tel: <?php echo trim(get_site_option( 'theme_contact_phone' )); ?>" ><i class="fa-solid fa-phone"></i><?php echo get_site_option( 'theme_contact_phone' ); ?></a>
			</li>
			<li class="contacts__item">
				<a href="mailto: <?php echo get_site_option( 'theme_email' ); ?>"><i class="fa-solid fa-envelope"></i><?php echo get_site_option( 'theme_email' ); ?></a>
			</li>
		</ul>					

                            <ul class="social__list">
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_facebook' ); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_instagram' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_twitter' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_youtube' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                      <div class="contact__map">
						  <!--
                            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Artlook%20Glass%20Inc,%20238%20Bay%20Ridge%20Pkwy,%20Brooklyn,%20NY%2011209,%20%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5%20%D0%A8%D1%82%D0%B0%D1%82%D1%8B+(Artlook%20Glass%20Inc)&amp;t=h&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe> -->
						  <div style="width: 100%"><iframe width="100%" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=285&amp;hl=en&amp;q=238%20Bay%20Ridge%20Pkwy,%20Brooklyn,%20NY%2011209,%20United%20States+(Artlook%20Glass%20Inc)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>
                        </div>
                    </div>
                    <?php $footer_menu = wp_get_nav_menu_items("Footer Menu"); ?>
                    <div class="footer_rows">
                        <div class="footer__menu foomenu">
                            <nav class="foomenu__body">
                                <ul class="foomenu__list">
                                    <li class="foomenu__item"><span class="top-catalog__toggle">Products</span></li>
                                    <?php foreach($footer_menu as $menu_item) { ?>
                                        <li class="foomenu__item"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                            <div class="foomenu__quest">
                                <div class="foomenu__ask">
                                    <h1>Have any questions?</h1>
                                    <p>Ask them now</p>
                                </div>
                                <div id="show-popup" class="foomenu__button">Ask a question</div>
                            </div>
                        </div>
                        <?php

                        /**
                        <hr class="hr_footer"><div class="footer__other other">
                        <div class="other__item">
                        <div class="other__glass">
                        <h4>glass</h4>
                        <?php $footer_glass = wp_get_nav_menu_items("Footer Glass"); ?>
                        <ul class="other__glass_list">
                        <?php foreach($footer_glass as $menu_item) { ?>
                        <li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                        <?php } ?>
                        </ul>
                        </div>
                        <div class="other__mirror">
                        <h4>mirror</h4>
                        <?php $footer_mirror = wp_get_nav_menu_items("Footer Mirror"); ?>
                        <ul class="other__mirror_list">
                        <?php foreach($footer_mirror as $menu_item) { ?>
                        <li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                        <?php } ?>
                        </ul>
                        </div>
                        <div class="other__shower">
                        <h4>shower doors</h4>
                        <?php $footer_doors = wp_get_nav_menu_items("Footer Shower Doors"); ?>
                        <ul class="other__shower_list">
                        <?php foreach($footer_doors as $menu_item) { ?>
                        <li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                        <?php } ?>
                        </ul>
                        </div>
                        <div class="other__services">
                        <h4>services</h4>
                        <?php $footer_services = wp_get_nav_menu_items("Footer Services"); ?>
                        <ul class="other__services_list">
                        <?php foreach($footer_services as $menu_item) { ?>
                        <li><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                        <?php } ?>
                        </ul>
                        </div>
                        </div>
                        <div class="other__hidden">

                        </div>
                        </div>
                         */

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr_footer">
        <div class="footer__copyright">
            <p>© Copyright 2015-2023 Artlookglass.com</p>
        </div>
    </div>
</footer>
</div>
<?php Popups::renderContact(); ?>
<?php Popups::renderEstimate(); ?>
<?php wp_footer(); ?>

</body>
</html>
