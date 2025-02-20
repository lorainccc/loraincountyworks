<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LCCC_Microsite
 */

 get_header();

 global $post;
 
  echo '<div class="grid-container">';
  echo '  <div class="cell small-12 lc-hero-spacer">&nbsp;</div>';
  echo '</div>';

 ?> 
 
 <div class="grid-container">
		 <div class="grid-x grid-margin-x lc-page-padding">
			 <div class="cell small-12">
					 <?php

						$query = new WP_Query(
							array(
								'post_type'              => 'page',
								'title'                  => '404 Content',
								'post_status'            => 'all',
								'posts_per_page'         => 1,
								'no_found_rows'          => true,
								'ignore_sticky_posts'    => true,
								'update_post_term_cache' => false,
								'update_post_meta_cache' => false,
								'orderby'                => 'post_date ID',
								'order'                  => 'ASC',
							)
						);
						
						if ( ! empty( $query->post ) ) {
							$page_got_by_title = $query->post;
						} else {
							$page_got_by_title = null;
						}

						echo $page_got_by_title->post_content;
						echo '</div>';
					?>
 
 <?php
 get_sidebar();
 get_footer();
 
