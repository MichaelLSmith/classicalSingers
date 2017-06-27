<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
			//the_title( '<h1 class="entry-title">', '</h1>' );
		?>

	</header><!-- .entry-header -->

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

		<?php if( get_field('text_grey_background') ): ?>

			<div class="jumbotron">
				<?php the_field('text_grey_background'); ?>
			</div>
		<?php endif; ?>

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