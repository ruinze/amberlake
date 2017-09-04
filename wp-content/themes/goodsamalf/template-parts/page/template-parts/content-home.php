<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package SoSimple
 */

	$this_post = get_post(get_the_ID())

?>
<?php
//echo "<pre>";
//var_dump($this_post);
//echo "</pre>";

?>


<div class="entry-content">
	<section class="first-content">
		<div class="col-md-12 divlimiter inner-content1">
                        <?php if ( has_post_thumbnail() ) : ?>
			<div class="col-md-12 header2"> Some of our services </div>
			<div class="col-md-4">
				<div class="row services-img"> <?php the_post_thumbnail( 'medium' ); ?></div>
				<div class="row sub-header2">24/7 Warchful Oversight</div>
				<div class="row sub-content">
					<?php the_excerpt(); ?>
				</div>
				<button class="lm"><a href="<?php echo $this_post ->guid;?>">Learn more</a></button>
			</div>
			<div class="col-md-4">
				<div class="row services-img"> <?php the_post_thumbnail( 'medium' ); ?></div>
				<div class="row sub-header2">Assistance With Medication</div>
				<div class="row sub-content">
					<?php the_excerpt(); ?>
				</div>
				<button class="lm"><a href="<?php echo $this_post ->guid;?>">Learn more</a></button>
			</div>
			<div class="col-md-4">
				<div class="row services-img"><?php the_post_thumbnail( 'medium' ); ?></div>
				<div class="row sub-header2">Holistic Wellness Activity Programs</div>
				<div class="row sub-content">
					<?php the_excerpt(); ?>
				</div>
				<button class="lm"><a href="<?php echo $this_post ->guid;?>">Learn more</a></button>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 sm"> See more &rarr;</div>
		</div>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="block1 hasThumb">
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'medium' ); ?>
		</div>
	</div>
	<div class="block2 hasThumb">
	<?php else: ?>
	<div class="block1 noThumb">
	</div>
	<div class="block2 noThumb">
	<?php endif; ?>
		<header class="entry-header">
			<a href="<?php echo get_permalink(); ?>">
				<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
			</a>
		</header><!-- .entry-header -->
		<div class="entry-meta">
			<aside class="na-author">By <?php echo get_the_author(); ?></aside>
			<aside class="na-date"><time class="timeago" datetime="<?php echo $this_post->post_date; ?>"></time></aside>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<a href="https://www.bookdepository.com/?a_aid=Caper" class="but-rev">Buy Now</a>
			<?php the_excerpt(); ?>
			<a href="<?php echo $this_post ->guid;?>" class="but-rev">More</a>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sosimple' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'sosimple' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

