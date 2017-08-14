<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Courtyard-blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php courtyard_entry_link(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'courtyard' ), array(
					'span' => array(
						'class' => array(),
					),
				) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'courtyard' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php courtyard_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

