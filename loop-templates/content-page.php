<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="d-flex p-2 mb-3">
		<div class="featured-img mx-auto">
			<?php echo get_the_post_thumbnail( $post->ID, 'large', array('class' => '') ); ?>
			<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
			  <figcaption class="caption"><?php echo $caption; ?></figcaption>
			<?php endif; ?>
		</div>
	</div>

	<div class="entry-content">

		<?php the_content(); ?>



		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
