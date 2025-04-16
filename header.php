<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LCCC_Microsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lorainccc-microsite' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-5">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$lorainccc_microsite_description = get_bloginfo( 'description', 'display' );
							if ( $lorainccc_microsite_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $lorainccc_microsite_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
					<div class="cell hide-for-small-only medium-offset-4 medium-3">
					<?php if ( is_active_sidebar( 'lc-search-sidebar' ) ) { 
																		dynamic_sidebar( 'lc-search-sidebar' ); 
										}		?>

					</div>
				</div>
			</div>
			<div class="lc-header">
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell small-12">
							<div class="lc-nav-container show-for-small-only">
								<div id="lc-nav-icon">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="lc-nav-container show-for-medium-only">
								<div id="lc-nav-icon">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="show-for-large">
								<nav id="site-navigation" class="main-navigation">
								<?php
									$lc_align_setting = get_option('lc_navigation_alignment', '');
									if($lc_align_setting == ''){
										$lc_align_setting = 'align-left';
									}

									wp_nav_menu(
										array(
											'theme_location' => 'primary-microsite',
											'menu_id'        => 'primary-microsite',
											'class'			=> 'menu-centered',
											'items_wrap'      => '<ul id="%1$s" class="%2$s ' . $lc_align_setting . '" role="menubar" data-dropdown-menu>%3$s</ul>',
											'walker' => new lc_top_bar_menu_walker,
										)
									);
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
	
	<div id="lc-nav-menu-container" class="show-for-small-only lc-nav-menu-container">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-microsite',
					'menu_id'        => 'primary-microsite',
					'class'			 => 'lc-small-menu',
					'items_wrap'	 => '<ul id="%1$s" class="%2$s" data-drilldown data-parent-link="true" role="menubar">%3$s</ul>',
					'walker'		 => new lc_drill_menu_walker,
				)
			);
			?>
	</div>
	<div id="lc-nav-menu-container" class="show-for-medium-only lc-nav-menu-container">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-microsite',
					'menu_id'        => 'primary-microsite',
					'class'			 => 'lc-small-menu',
					'items_wrap'	 => '<ul id="%1$s" class="%2$s" data-drilldown data-parent-link="true" role="menubar">%3$s</ul>',
					'walker'		 => new lc_drill_menu_walker,
				)
			);
			?>
	</div>


