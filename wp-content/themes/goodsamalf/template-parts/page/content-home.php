<?php 
 ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php echo do_shortcode('[rev_slider alias="homebanner"]'); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	<section class="first-content">
		<div class="col-md-12 divlimiter inner-content1">
			<?php echo do_shortcode('[homepageinfo]'); ?>
		</div>
		<div class="col-md-12 inner-content2">	
			<div class="col-md-12 divlimiter homeservices">
				<div class="col-md-3 servicelist"> 
                                    <h2> Our Services </h2>
                                    <p>A Homelike Environment which provides:</p>
                                    <a href="/services/" class="hf_btn"><button class="see_all">See all</button></a>
                                </div>
						<?php echo do_shortcode('[services]'); ?>				
				
			</div>
		</div>
	</section>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
