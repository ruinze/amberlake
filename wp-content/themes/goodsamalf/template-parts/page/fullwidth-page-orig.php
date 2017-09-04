<?php 

/**
 * Template Name: Full Width Orig
 *
 * @package kikirt
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			
			//echo '<pre>';
			//$xx = get_post_meta($post->ID,related_article);
			//print_r($xx);
			//echo '</pre>';
			//related_article	
			//die();
					
				//echo $post->ID;
				for($x=1;$x<=10;$x++){
					if($blockxx = get_post_meta($post->ID, 'block0'.$x)){
						echo '<div class="row block_0'.$x.'">';
						echo do_shortcode($blockxx[0]);
						echo '</div>';
					}
				}/*Endfor*/
		
				
				//if($block2 = get_post_meta($post->ID, 'block02')){echo do_shortcode($block2[0]);}
				//if($block3 = get_post_meta($post->ID, 'block03')){echo do_shortcode($block3[0]);}
				//if($block4 = get_post_meta($post->ID, 'block04')){echo do_shortcode($block4[0]);}
				
				/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				//get_template_part( 'template-parts/content', 'page' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
