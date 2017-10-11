<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */

if ( ! function_exists( '_pixformance_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function _pixformance_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
	
			$time_string
		);

		

		echo '<span class="posted-on"><strong>'.		esc_html_x( 'Published on',  '_pixformance' ) .'</strong><br/> ' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( '_pixformance_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function _pixformance_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', '_pixformance' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<div class="cat-links blog-links m1-b"><strong>'. esc_html__( 'Category', '_pixformance' ) .'</strong><br />' . esc_html__( '%1$s', '_pixformance' ) . '</div>', $categories_list ); // WPCS: XSS OK.
			}

			// /* translators: used between list items, there is a space after the comma */
			// $tags_list = get_the_tag_list( '', esc_html_x( '', 'list item separator', '_s' ) );
			// if ( $tags_list ) {
			// 	/* translators: 1: list of tags. */

			// 	printf( '<div class="tags-links blog-links"><strong>'. esc_html__( 'Tags', '_pixformance' ) .'</strong><br />' . esc_html__( '%1$s', '_pixformance' ) . '</div>', $tags_list ); // WPCS: XSS OK.
				
			// }


		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', '_pixformance' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', '_pixformance' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
