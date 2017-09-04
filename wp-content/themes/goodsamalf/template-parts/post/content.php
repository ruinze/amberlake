<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	
	<header class="entry-header">
		<?php echo do_shortcode('[rev_slider alias="breadcrumb-slider2"]');?>
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
	<?php	if ( get_post_type( get_the_ID() ) == 'goodsamservices' ) {
    //if is true ?>
		<div class="col-md-7">
	<?php } ?>
			<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>" alt="<?php echo get_post_meta(get_the_ID(), 'image_alt_text', true); ?>">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php echo $pp->post_content; ?>
			<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
			
			/* added 7-14-2017 */
			$thiscate = get_the_ID();
			
			//echo $thiscate; 
			
			$terms = get_the_terms( $thiscate , 'categories' ); //change speaker to whatever you call your taxonomy
			//then you can use just the first term
			$term_id = $terms[0]->term_id;
			
			/* end of added 7-14-2017 */
			
			//echo $term_id;
			
				if ( get_post_type( get_the_ID() ) == 'goodsamservices' ) {
		                        if ($term_id==45 ){
		                        	echo do_shortcode('[pricelist]');
		                        }   
				}
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
	<?php /*if ( get_post_type( get_the_ID() ) == 'food_menu' ) { */?>
		</div>
		<div class="col-md-5">
			<div class="row contact-us">
				<div class="row">
					<h1>Contact us</h1>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="78" title="Contact form 1"]'); ?>
			</div>
			<div class="row services-list">
				<div class="row sub-header">Services</div>
				<div class="row sub-content">

					<?php 
						$the_query1 = new WP_Query( array( 'post_type' => 'goodsamservices', 'posts_per_page'  => -1, 'order' => 'asc' ) );

						foreach($the_query1->posts as $pp):$the_query1 -> the_post(); ?>
						<a href="<?php echo $pp->guid; ?>">
							<?php echo $pp->post_title; ?>
						</a>
					<?php endforeach; ?>
				</div>

			</div>
		</div>
		<?php /*}*/ ?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>
</article><!-- #post-## -->
