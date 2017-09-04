<div class="container downloadfiles">

<?php 
if( is_user_logged_in() ){

		  $userid = get_current_user_id();
		  $user_info = get_userdata($userid);
	      $user_role = implode($user_info->roles);
	      	echo $role_id;

	      if( $user_role == 'manager' || $user_role == 'administrator' ) { 

	      	$role_id = 17;

	      }elseif ($user_role == 'employee') {

	      	$role_id = 18;

	      }


$the_query1 = new WP_Query( array( 'post_type' => 
								   'wpdmpro', 
								   'posts_per_page'  => -1,
								   'tax_query' => array(
													array(
																'taxonomy' => 'wpdmcategory',
																'field'    => 'term_id',
																'terms'    => $role_id,
																),
															),
									 ) );

foreach($the_query1->posts as $pp):$the_query1 -> the_post(); ?>
					
					<div class="col-md-3">
						<div class="row"><img src="/common/001-pdf.png">
						</div>
						<div class="row">
						<?php echo $pp->post_title; ?>
						</div>
						<div class="row">
							<?php $download_link = $_SERVER['SERVER_URL'].'/download/'.$pp->post_name.'/?wpdmdl='.$pp->ID;
								//echo $download_link;
							  ?>
							<a class="wpdm-download-link wpdm-download-locked [btnclass]" rel="nofollow" href="#" onclick="location.href='<?php echo $download_link; ?>';return false;">
								Download Here
							</a>
						</div>
						<!-- <pre>
							<?php //print_r($pp); ?>
						</pre> -->
					</div>
<?php endforeach; ?>


<?php } ?>

</div>