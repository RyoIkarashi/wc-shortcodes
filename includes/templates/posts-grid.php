<div id="post-<?php the_ID(); ?>" <?php post_class('wc-shortcodes-post-box'); ?>>
	<div class="wc-shortcodes-post-border">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="wc-shortcodes-entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php endif; ?>

		<div class="wc-shortcodes-post-content">
			<div class="wc-shortcodes-entry-header">
				<<?php echo $atts['heading_type']; ?> class="wc-shortcodes-entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</<?php echo $atts['heading_type']; ?>>
			</div><!-- .entry-header -->

			<div class="wc-shortcodes-entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<div class="wc-shortcodes-footer-entry-meta wc-shortcodes-clearfix">
				<div class="wc-shortcodes-clearfix">
					<?php if ( 'post' == get_post_type() ) : ?>
						<?php if ( comments_open() ) : ?>
							<span class="wc-shortcodes-comments-link">
								<?php comments_popup_link( '<span class="wc-shortcodes-leave-reply">' . __( '0', 'wordpresscanvas' ) . '</span>', __( '1', 'wordpresscanvas' ), __( '%', 'wordpresscanvas' ) ); ?>
							</span><!-- .comments-link -->
						<?php endif; // comments_open() ?>
					<?php endif; ?>

					<?php
					// Post author
					if ( 'post' == get_post_type() ) {
						printf( '<span class="wc-shortcodes-author"><span class="wc-shortcodes-by">By</span> <a class="wc-shortcodes-url" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
							esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
							get_the_author(),
							get_the_author()
						);
						echo '<span class="wc-shortcodes-sep">|</span>';
					}
					?>
					<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
						<span class="wc-shortcodes-featured-post"><?php echo __( 'Sticky', 'wordpresscanvas' ); ?></span>
						<span class="wc-shortcodes-sep">|</span>
					<?php endif; ?>

					<?php
					if ( ! has_post_format( 'link' ) && 'post' == get_post_type() ) {
						$date = sprintf( '<span class="wc-shortcodes-date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="wc-shortcodes-entry-date" datetime="%3$s">%4$s</time></a></span>',
							esc_url( get_permalink() ),
							esc_attr( sprintf( __( 'Permalink to %s', 'wordpresscanvas' ), the_title_attribute( 'echo=0' ) ) ),
							esc_attr( get_the_date( 'c' ) ),
							esc_html( sprintf( '%2$s', get_post_format_string( get_post_format() ), get_the_date('M t, Y') ) )
						);
						echo $date;
					}
					?>
				</div>

			</div><!-- .wc-shortcodes-footer-entry-meta -->

		</div><!-- .wc-shortcodes-post-content -->
	</div><!-- .wc-shortcodes-post-border -->
</div><!-- #post -->