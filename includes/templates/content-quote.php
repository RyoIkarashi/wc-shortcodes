<div id="post-<?php the_ID(); ?>" <?php post_class('wc-shortcodes-post-box'); ?>>
	<div class="wc-shortcodes-post-border">
		<?php if ( $atts['excerpt'] ) : ?>
			<div class="wc-shortcodes-entry-quote">
				<?php the_content(); ?>
			</div><!-- .entry-summary -->
		<?php endif; ?>

		<div class="wc-shortcodes-post-content">

			<?php include('entry-meta.php'); ?>

		</div><!-- .wc-shortcodes-post-content -->
	</div><!-- .wc-shortcodes-post-border -->
</div><!-- #post -->
