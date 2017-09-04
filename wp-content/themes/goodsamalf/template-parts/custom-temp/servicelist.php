<?php 

if(is_front_page()){

		$perpage = 3;
}else{

	$perpage = -1;
}

$the_query1 = new WP_Query( array( 'post_type' => 'goodsamservices', 'posts_per_page'  => $perpage, 'order' => 'asc' ) );
	
$count = 1;


//echo '<pre>' . print_r($the_query1). '</pre>';
?>

<?php foreach($the_query1->posts as $pp):$the_query1 -> the_post(); ?>
	
	<?php

	if ( is_front_page() && is_home() ) {

		// Default homepage

		//echo 'home1';


	} elseif ( is_front_page()){ ?>

	<div class="col-md-3 servicelist">
		<div class="row"><a href="<?php echo $pp->guid; ?>"><img src="<?php echo get_field("service_image");?>" alt="<?php echo get_post_meta(get_the_ID(), 'image_alt_text', true); ?>"></a></div>
		<div class="row sub-header"><a href="<?php echo $pp->guid; ?>"><?php echo $pp->post_title; ?></a></div>		
	</div>

<?php	

	} elseif ( is_home()){

		//Blog page

	
	} else { ?>


	<div class="col-md-4 servicelist">
		<div class="row">                  
                   <a href="<?php echo $pp->guid; ?>"><img src="<?php echo get_field("service_image");?>" alt="<?php echo get_post_meta(get_the_ID(), 'image_alt_text', true); ?>"></a>
                </div>
                <div class="content_services">
		<div class="row sub-header"><?php echo $pp->post_title; ?></div>
		<div class="row sub-content contnt1">
			<?php echo $pp->post_excerpt; ?> ...
		</div>
		<div class="row sub-content">
			<a href="<?php echo $pp->guid; ?>"><button class="lm">Click for details</button></a>
		</div>
                </div>
	</div>

		
<?php } ?>

<?php endforeach; ?>