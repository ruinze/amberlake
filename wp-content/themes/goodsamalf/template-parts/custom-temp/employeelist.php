<?php 

$the_query1 = new WP_Query( array( 'post_type' => 'employee', 'posts_per_page'  => -1, 'order' => 'asc' ) );

?>

<?php foreach($the_query1->posts as $pp):$the_query1 -> the_post(); ?>
	<div class="col-md-3">
		<div class="row"><img src="<?php echo get_field("employee_image");?>"></div>
		<div class="row sub-header"><?php echo get_post_meta(get_the_ID(), 'employees_name', true); ?></div>
		<div class="row sub-content">
			<?php echo get_post_meta(get_the_ID(), 'affiliation', true); ?>
		</div>
		<div class="row sub-content">
			<?php echo get_post_meta(get_the_ID(), 'employee_intro', true); ?>
		</div>
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

<?php endforeach; ?>