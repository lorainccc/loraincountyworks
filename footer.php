<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Framework
 */
?>

</div>
</div>
<?php //closing page-wrapper and page-content-wrapper before footer so footer can be sticky ?>
<footer id="colophon" class="site-footer hide-for-print" role="contentinfo">
	<div class="grid-container">	
		<div class="grid-x grid-margin-x">
		    <div class="cell medium-3"> 
				<a href="/" title="OhioMeansJobs - Lorain County Home"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/footer-logo.png" alt="OhioMeansJobs - Lorain County Home" width="135" height="110"/></a>				
     		</div>
    		<div class="cell medium-6">
				<div class="grid-x grid-padding-x small-up-1 medium-up-2 lcw-footer-menu">
					<?php
						// Menu Location
						$lcw_menu_name = 'primary-microsite';

						if( ( $lcw_locations = get_nav_menu_locations() ) && isset( $lcw_locations[ $lcw_menu_name ] ) ){
							$lcw_primary_menu = wp_get_nav_menu_object( $lcw_locations[ $lcw_menu_name ] );
							$lcw_primary_menu_items = wp_get_nav_menu_items($lcw_primary_menu->term_id);

							foreach ( (array) $lcw_primary_menu_items as $key => $lcw_menu_item ) {
								if ($lcw_menu_item->post_name != 'home'){
									echo '<div class="cell"><a href="' . $lcw_menu_item->url . '">' . $lcw_menu_item->title . '</a></div>';
								}
							}
						}

					?>
				</div>
			</div>
			<div class="cell medium-3">
				<?php
					$lcw_google_maps_embed = get_option('lcw_google_maps_field', '');
					if ($lcw_google_maps_embed != ''){
						echo html_entity_decode($lcw_google_maps_embed);
					}
				?>				
			</div>
		</div>
		<div class="grid-x grid-x-margin">
			<div class="small-12 cell">
				<p>&copy; <?php echo the_date('Y'); ?> | OhioMeansJobs - Lorain County
				<?php 
				// Look for footer content custom fields and display the data.
				$lcw_footer_address_field = get_option('lcw_address_field', '');
				$lcw_footer_phone_field = get_option('lcw_phone_field', '');
				$lcw_footer_contact_page_field = get_option('lcw_contact_page_field', ''); 

				if($lcw_footer_address_field != "" && $lcw_footer_phone_field != "" && $lcw_footer_contact_page_field !=""){
					$lcw_contact_page_url = get_permalink( $lcw_footer_contact_page_field );

					echo '</br>' . $lcw_footer_address_field . ' | Phone: ' . $lcw_footer_phone_field . ' | <a href="' . $lcw_contact_page_url . '">Contact Us</a>';
				}else{
					echo '</p>';
				}
				?>
			</div>
		</div>
	</div>
</div>	
</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
