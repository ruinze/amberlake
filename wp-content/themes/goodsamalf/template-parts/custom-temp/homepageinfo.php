<?php 

	$count = 1;
?>

<div class="col-md-12 header2"><?php echo get_post_meta(get_the_ID(), 'home_title', true); ?></div>
<div class="col-md-12"><?php echo get_post_meta(get_the_ID(), 'about_us_intro', true); ?></div>

<div class="col-md-12 home_offers">
	<?php for ($x = 1; $x <= 5; $x++) {

		$content = get_post_meta(get_the_ID(), 'content'.$x, true);
		if ( ! empty( $content ) ) {

		?>
			<?php if($count <= 5){?> 
                                    
		   <div class="col-md-2 service_content">
		   	
				<div class="row image_header"><img src='<?php echo get_field("image".$x);?>' ></div>

				<div class="row"><?php echo $content ?></div>
					
			</div>
			<?php } ?>

				

		<?php }
					
		} ?>	

</div>