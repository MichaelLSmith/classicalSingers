<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
				<?php
					$image = get_field('footer_image', 'option');
						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
		<div class="flex-container flex-center">
			<?php if( have_rows('footer_social_media', 'option') ): ?>
				<ul class="social-media-list">
				<?php while( have_rows('footer_social_media', 'option') ): the_row();
					// vars
					$image = get_sub_field('social_media_icon', 'option');
					$link = get_sub_field('social_media_url', 'option');
				?>
					<li class="social-media-item">
						<?php if( $link ): ?>
							<a href="<?php echo $link; ?>">
								<?php echo $image ?>
							</a>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
