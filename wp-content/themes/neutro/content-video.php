<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package Neutro
 * @subpackage Template
 * @since 1.0
 */
?>

<?php if ( is_singular( get_post_type() ) ) { ?>
	
	<article <?php hybrid_post_attributes(); ?>>
	
		<header class="entry-header">

			<div <?php neutro_video_embed_attribute(); ?>>
				<?php global $post;
					echo ( has_shortcode( $post->post_content, 'playlist' ) ? '' : $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true ) )  );
				?>
			</div>

			<h1 <?php ( function_exists('neutro_title_attribute') ? neutro_title_attribute() : '' ) ?>> <?php single_post_title(); ?> </h1>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="single-entry-meta">' . __( '[entry-published] [entry-terms taxonomy="category"] [entry-terms] [entry-edit-link]', 'neutro' ) . '</div>' ); ?>

		</footer><!-- .entry-footer -->

	</article>

	

<?php } else { ?>

			<article <?php hybrid_post_attributes(); ?>>
				<div <?php neutro_video_embed_attribute(); ?> >
					<?php global $post;	
						echo ( has_shortcode( $post->post_content, 'playlist' ) ? do_shortcode(neutro_embed_playlist_shortcode() ) : $video = hybrid_media_grabber( array( 'type' => 'video', 'split_media' => true )) );
					?>
				</div>

				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>
					<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'neutro' ) . '</span>', 'after' => '</p>' ) ); ?>
				</div><!-- .entry-summary -->
				
				<footer class="entry-meta">
					<?php echo apply_atomic_shortcode( 'entry_byline', '<p class="article-meta-extra">' . __( '[entry-author] | <a href="' . get_permalink() . '"> [entry-published] </a> | [entry-terms before="In " taxonomy="category"] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'neutro' ) . '</p>' ); ?>
					
				</footer><!-- .entry-footer -->

			</article><!-- .hentry -->

<?php } ?>

	