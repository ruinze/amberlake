<?php 
 ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="nobanner-header">		
			<h1 class="site-title">
			<?php echo do_shortcode('[rev_slider alias="breadcrumb-slider"]');?>
			</h1>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<section class="first-content">
		<div class="col-md-12 divlimiter">
			<?php echo do_shortcode('[gallerypics]') ?>
		</div>
		
	</section>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->