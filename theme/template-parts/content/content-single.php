<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppc
 */

?>

<article id="post-<?php the_ID(); ?>" class="max-w-[770px] mx-auto">
	<?php if ( ! is_page() ) : ?>
		<div class="entry-meta">
			<?php ppc_entry_meta(); ?>
		</div>
	<?php endif; ?>

	<h1 class="text-[36px] text-green font-semibold my-[40px]"><?= get_the_title() ?></h1>

	<?php ppc_post_thumbnail(); ?>

	<div class="flex-col gap-[60px] mt-[60px]">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'ppc' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'ppc' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<hr class="mt-[60px]">

</article><!-- #post-${ID} -->
