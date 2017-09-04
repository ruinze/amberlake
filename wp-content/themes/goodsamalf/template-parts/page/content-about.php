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
		<div class="inner-content">
			<div class="col-md-12 divlimiter">
				<div class="col-md-6"><img src="/wp-content/uploads/2017/06/AboutUs_05.jpg"></div>
				<div class="col-md-6">
					<div class="row sub-header"><h2>Introduction to living in an assisted living community</h2></div>
					<div class="row sub-content">
						<?php echo get_post_meta(get_the_ID(), 'about_us_intro', true);?>

					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-6 msv">
					<div class="row sub-header"><h3>Mission</h3></div>
					<div class="row sub-content"><?php echo get_post_meta(get_the_ID(), 'mission', true);?></div>
				</div>
				<div class="col-md-6 msv">
					<div class="row sub-header"><h3>Vision</h3></div>
					<div class="row sub-content"><?php echo get_post_meta(get_the_ID(), 'vision', true);?></div>
				</div>
				<!--<div class="invis">
				<div class="clearfix"></div>
				<div class="row header"> Meet our staff</div>
				<div class="clearfix"></div>
				<div class="col-md-6"><img src="<?php /*echo get_field("ceo_image");?>"> </div>
				<div class="col-md-6">
					<div class="row sub-header"><?php echo get_post_meta(get_the_ID(), 'ceo_name', true);?></div>
					<div class="row desc">Chief Executive Officer</div>
					<div class="row sub-content"><?php echo get_post_meta(get_the_ID(), 'ceo_intro', true);?></div>
					<div class="row social links">
						<a href="<?php echo get_post_meta(get_the_ID(), 'twitter_link', true);?>">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="<?php echo get_post_meta(get_the_ID(), 'facebook_link', true);?>">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="<?php echo get_post_meta(get_the_ID(), 'google_email', true);?>">
						<img src="/wp-content/uploads/2017/06/google-plus-logo.png">
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 stafflist">
					<?php echo do_shortcode('[employees]');*/ ?>

				</div>
				</div>-->
			</div><!-- divlimiter-->
		</div>
		
	</section>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
