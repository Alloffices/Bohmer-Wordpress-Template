<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bohmer_Bags
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Breadcrumb area Start -->
	<div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--20 pb--20 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
					<ul class="breadcrumb justify-content-center">
						<li><a href="index.html">Home</a></li>
						<li class="current"><span>Cart</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb area End -->
	
	<?php bohmer_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bohmer' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'bohmer' ),
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
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
