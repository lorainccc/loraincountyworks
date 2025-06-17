<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCCC_Microsite
 */

get_header();

/* global $post;

if (has_post_thumbnail($post->ID)) {
 $image = get_the_post_thumbnail_url( $post->ID , 'full' );

 echo "<style>";
 echo ".lc-hero-image{background-image: URL('". $image ."');background-size: cover;width: 100%;height: 55vh;background-position: top;}";
 echo "</style>";

 /**
  *  The extra div is for the floating header to attach to and push the hero image down so the floating header doesn't cut it off.
  */

/*  echo '<div class="cell small-12 lc-hero-spacer">&nbsp;</div>';
 echo '<div class="cell small-12 lc-hero-image"></div>';

/* } else {
 echo '<div class="grid-container">';
 echo '  <div class="cell small-12 lc-hero-spacer">&nbsp;</div>';
 echo '</div>';
} */

?>




					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

<?php
get_sidebar();
get_footer();
