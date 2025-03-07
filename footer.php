<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Framework
 */
?>
		</div><!-- #content -->
	</div><!--close grid margin container -->
</div><!-- close grid-container -->

<footer id="colophon" class="site-footer hide-for-print" role="contentinfo">
	<div class="grid-container">	
		<div class="grid-x grid-margin-x">
		    <div class="cell medium-3"> <a href="/" title="Lorain County Community College Home"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/footer-logo.png" alt="Lorain County Works Home" width="135" height="110"/></a>
				<h2>Connect with LCCC</h2>
				<ul class="menu footer-sm-links footer-social">
				<?php 
					$lc_social_media_icons = get_option('lc_social_media_icon_style', '');
					$theme_directory = "/wp-content/themes/lorainccc-microsite";

					$lc_fb_path = get_option('lc_facebook_link', '');
					$lc_fb_label = get_option('lc_facebook_label', '');

					$lc_tw_path = get_option('lc_twitter_link', '');
					$lc_tw_label = get_option('lc_twitter_label', '');

					$lc_ln_path = get_option('lc_linkedin_link', '');
					$lc_ln_label = get_option('lc_linkedin_label', '');

					$lc_ig_path = get_option('lc_instagram_link', '');
					$lc_ig_label = get_option('lc_instagram_label', '');

					switch ( $lc_social_media_icons ){
						case "filled-circle":
							echo '<li><a href="' . $lc_fb_path . '" title="' . $lc_fb_label . '" target="_blank"><img src="' . $theme_directory .'/images/icons/facebook_white.svg" height="30" width="30" alt="' . $lc_fb_label . '" /></a></li>';
							echo '<li><a href="' . $lc_tw_path . '" title="' . $lc_tw_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/x_white.svg" height="30" width="30" alt="' . $lc_tw_label . '" /></a></li>';
							echo '<li><a href="' . $lc_ln_path . '" title="' . $lc_ln_path . '" target="_blank"><img src="' . $theme_directory . '/images/icons/linkedin_white.svg" height="30" width="30" alt="' . $lc_ln_path . '" /></a></li>';
							echo '<li><a href="' . $lc_ig_path . '" title="' . $lc_ig_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/instagram_white.svg" height="30" width="30" alt="' . $lc_ig_label . '" /></a></li>';
						break;

						case "filled-rounded-square":
							echo '<li><a href="' . $lc_fb_path . '" title="' . $lc_fb_label . '" target="_blank"><img src="' . $theme_directory .'/images/icons/rounded_square_facebook.svg" height="30" width="30" alt="' . $lc_fb_label . '" /></a></li>';
							echo '<li><a href="' . $lc_tw_path . '" title="' . $lc_tw_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/rounded_square_twitter.svg" height="30" width="30" alt="' . $lc_tw_label . '" /></a></li>';
							echo '<li><a href="' . $lc_ln_path . '" title="' . $lc_ln_path . '" target="_blank"><img src="' . $theme_directory . '/images/icons/rounded_square_linkedin.svg" height="30" width="30" alt="' . $lc_ln_path . '" /></a></li>';
							echo '<li><a href="' . $lc_ig_path . '" title="' . $lc_ig_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/rounded_square_instagram.svg" height="30" width="30" alt="' . $lc_ig_label . '" /></a></li>';
						break;

						case "filled-sharp-square":
							echo '<li><a href="' . $lc_fb_path . '" title="' . $lc_fb_label . '" target="_blank"><img src="' . $theme_directory .'/images/icons/sharp_square_facebook.svg" height="30" width="30" alt="' . $lc_fb_label . '" /></a></li>';
							echo '<li><a href="' . $lc_tw_path . '" title="' . $lc_tw_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/sharp_square_twitter.svg" height="30" width="30" alt="' . $lc_tw_label . '" /></a></li>';
							echo '<li><a href="' . $lc_ln_path . '" title="' . $lc_ln_path . '" target="_blank"><img src="' . $theme_directory . '/images/icons/sharp_square_linkedin.svg" height="30" width="30" alt="' . $lc_ln_path . '" /></a></li>';
							echo '<li><a href="' . $lc_ig_path . '" title="' . $lc_ig_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/sharp_square_instagram.svg" height="30" width="30" alt="' . $lc_ig_label . '" /></a></li>';
						break;

						case "just-letter":
							echo '<li><a href="' . $lc_fb_path . '" title="' . $lc_fb_label . '" target="_blank"><img src="' . $theme_directory .'/images/icons/just_letter_facebook.svg" height="30" width="30" alt="' . $lc_fb_label . '" /></a></li>';
							echo '<li><a href="' . $lc_tw_path . '" title="' . $lc_tw_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/just_letter_twitter.svg" height="30" width="30" alt="' . $lc_tw_label . '" /></a></li>';
							echo '<li><a href="' . $lc_ln_path . '" title="' . $lc_ln_path . '" target="_blank"><img src="' . $theme_directory . '/images/icons/just_letter_linkedin.svg" height="30" width="30" alt="' . $lc_ln_path . '" /></a></li>';
							echo '<li><a href="' . $lc_ig_path . '" title="' . $lc_ig_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/just_letter_instagram.svg" height="30" width="30" alt="' . $lc_ig_label . '" /></a></li>';
						break;

						default:
							echo '<li><a href="' . $lc_fb_path . '" title="' . $lc_fb_label . '" target="_blank"><img src="' . $theme_directory .'/images/icons/facebook_white.svg" height="30" width="30" alt="' . $lc_fb_label . '" /></a></li>';
							echo '<li><a href="' . $lc_tw_path . '" title="' . $lc_tw_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/x_white.svg" height="30" width="30" alt="' . $lc_tw_label . '" /></a></li>';
							echo '<li><a href="' . $lc_ln_path . '" title="' . $lc_ln_path . '" target="_blank"><img src="' . $theme_directory . '/images/icons/linkedin_white.svg" height="30" width="30" alt="' . $lc_ln_path . '" /></a></li>';
							echo '<li><a href="' . $lc_ig_path . '" title="' . $lc_ig_label . '" target="_blank"><img src="' . $theme_directory . '/images/icons/instagram_white.svg" height="30" width="30" alt="' . $lc_ig_label . '" /></a></li>';
						break;
					}
				?>


				</ul>
				<?php if( !isset($_GET['siteurl'])){ ?>
				<p class="website-feedback">
				<a href="/website-feedback?siteurl=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" title="Provide Feedback about this Page" target="_blank">Feedback about this page</a>
				</p>
				<?php } ?>
     		</div>
    		<div class="cell medium-3">
				<h2>Contact LCCC</h2>
				<p>1005 N Abbe Rd<br />
					Elyria, OH 44035<br />
					1-800-995-LCCC (5222)<br />
										or (440) 365-5222<br />
				<a href="mailto:info@lorainccc.edu" title="Email LCCC for more information">info@lorainccc.edu</a> </p>
				<ul class="underline"> 
					<li><a href="/about/map-and-directions-to-lccc/" title="Map and Directions to LCCC">Map and Directions</a></li>
					<li><a href="/about/contact-lorain-county-community-college/" title="Contact LCCC">Contact LCCC</a></li>
					<li><a href="/getting-started/visit-lccc/" title="Visit LCCC">Visit LCCC</a></li>
				</ul>
			</div>
			<div class="cell medium-3">
					<h2>Campus Locations</h2>
				<?php if ( has_nav_menu( 'footer-campus-location-nav' ) ) : ?>
						<nav id="campus-location-navigation" class="footer-navigation" role="navigation" aria-labelledby="menu-footer-campus-locations">
							<?php
								// Primary Footer navigation menu.
								wp_nav_menu( array(
									'menu_class'     => 'underline',
									'theme_location' => 'footer-campus-location-nav',
								) );
							?>
						</nav><!-- .main-navigation -->
					<?php endif; ?>
			</div>
			<div class="cell medium-3">
				<h2>Quick Links</h2>
				<?php if ( has_nav_menu( 'footer-quicklinks-microsite' ) ) : ?>
					<nav id="quicklinks-navigation" class="footer-navigation" role="navigation" aria-labelledby="menu-footer-quicklinks"> 
						<?php
							// Primary Footer navigation menu.
							wp_nav_menu( array(
								'menu_class'     => 'underline',
								'theme_location' => 'footer-quicklinks-microsite',
							) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>
			</div>
		</div>
		<div class="grid-x grid-x-margin">
			<div class="small-12 cell">
				<p>&copy; <?php echo the_date('Y'); ?> | OhioMeansJobs - Lorain County</p>
			</div>
		</div>
	</div>
</div>	
</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
