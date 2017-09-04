
			
<div class="pricelist">
	<div class="row sub-header1">Menu</div>
	<div class="col-md-3">
		<div class="row price-header">
			<span class="frst"></span> <br />
			<!--<span class="sec">$300</span> <br />
			<span class="trd">per Month</span>-->
		</div>
		<div class="row price-content">SUNDAY</div>
		<div class="row price-content">MONDAY</div>
		<div class="row price-content">TUESDAY</div>
		<div class="row price-content">WEDNESDAY</div>
		<div class="row price-content">THURSDAY</div>
		<div class="row price-content">FRIDAY</div>
		<div class="row price-content">SATURDAY</div>
	</div>
	<div class="col-md-3">
		<div class="row price-header">
			<span class="frst">Breakfast</span> <br />
			<!-- <span class="sec">$700</span> <br /> 
			<span class="trd">per Month</span>-->
		</div>
		<div class="row price-content">

			<?php $the_query1b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 33,
								),
							),
			) ); 
                               
                                
				foreach($the_query1b->posts as $pp):$the_query1b -> the_post(); 
					echo the_content();					
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query2b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 34,
								),
							),
			) ); 

				foreach($the_query2b->posts as $pp):$the_query2b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query3b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 35,
								),
							),
			) ); 

				foreach($the_query3b->posts as $pp):$the_query3b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query4b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 36,
								),
							),
			) ); 

				foreach($the_query4b->posts as $pp):$the_query4b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query5b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
							'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 37,
								),
							),
			) ); 

				foreach($the_query5b->posts as $pp):$the_query5b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query6b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
							'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 38,
								),
							),
			) ); 

				foreach($the_query6b->posts as $pp):$the_query6b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query7b = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
							'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 30,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 39,
								),
							),
			) ); 

				foreach($the_query7b->posts as $pp):$the_query7b -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
	</div>
	
	
	
	<div class="col-md-3">
		<div class="row price-header">
			<span class="frst">Lunch</span> <br />
			<!-- <span class="sec">$700</span> <br /> 
			<span class="trd">per Month</span>-->
		</div>
		<div class="row price-content">

			<?php $the_query1l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 33,
								),
							),
			) ); 

				foreach($the_query1l->posts as $pp):$the_query1l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query2l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 34,
								),
							),
			) ); 

				foreach($the_query2l->posts as $pp):$the_query2l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query3l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 35,
								),
							),
			) ); 

				foreach($the_query3l->posts as $pp):$the_query3l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query4l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 36,
								),
							),
			) ); 

				foreach($the_query4l->posts as $pp):$the_query4l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query5l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
									'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 37,
								),
							),
			) ); 

				foreach($the_query5l->posts as $pp):$the_query5l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query6l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 38,
								),
							),
			) ); 

				foreach($the_query6l->posts as $pp):$the_query6l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query7l = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 31,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 39,
								),
							),
			) ); 

				foreach($the_query7l->posts as $pp):$the_query7l -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
	</div>
	
	
	
	<div class="col-md-3">
		<div class="row price-header">
			<span class="frst">Supper</span> <br />
			<!-- <span class="sec">$700</span> <br /> 
			<span class="trd">per Month</span>-->
		</div>
		<div class="row price-content">

			<?php $the_query1s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 33,
								),
							),
			) ); 

				foreach($the_query1l->posts as $pp):$the_query1s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query2s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 34,
								),
							),
			) ); 

				foreach($the_query2s->posts as $pp):$the_query2s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query3s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 35,
								),
							),
			) ); 

				foreach($the_query3s->posts as $pp):$the_query3s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query4s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 36,
								),
							),
			) ); 

				foreach($the_query4s->posts as $pp):$the_query4s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query5s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 37,
								),
							),
			) ); 

				foreach($the_query5s->posts as $pp):$the_query5s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query6s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 38,
								),
							),
			) ); 

				foreach($the_query6s->posts as $pp):$the_query6s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
		<div class="row price-content">

			<?php $the_query7s = new WP_Query( array( 'post_type' => 'food_menu', 'tax_query' => array(
								'relation' => 'AND',
							array(
									'taxonomy' => 'food_time',
									'field'    => 'term_id',
									'terms'    => 32,
								),
							array(
									'taxonomy' => 'food_day',
									'field'    => 'term_id',
									'terms'    => 39,
								),
							),
			) ); 

				foreach($the_query7s->posts as $pp):$the_query7s -> the_post(); 
					echo the_content();
				
				endforeach; ?>
		</div>
	</div>




</div>