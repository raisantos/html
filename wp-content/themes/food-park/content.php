<?php
/**
 * @package foodpark
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$foodpark = get_theme_mods(); 
		if( ! isset($foodpark['featured_image']) && has_post_thumbnail() ) : ?>
			<div class="post-thumb">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : 
				$featured_image = get_theme_mod( 'featured_image' );
				if( $featured_image && has_post_thumbnail() ) : ?>
			<div class="post-thumb">
				<?php the_post_thumbnail(); ?>
			</div>			
			<?php 
				endif; 
			endif; ?>
	<header class="entry-header">
		<div class="published-date">
			<span class="dd-mm"><?php the_time('j M'); ?></span><br>
			<span class="y"><?php the_time('Y'); ?> </span>
		</div>
		<div class="title-meta">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php foodpark_author(); ?>
				<?php foodpark_comments_meta(); ?> 
				<?php //foodpark_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<br class="clear">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'foodpark' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'foodpark' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php foodpark_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->