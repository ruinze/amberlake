<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->
<?php wp_head(); ?>
<script type="application/ld+json">
	{
	  "@context": "http://schema.org/",
	  "@type": "Service",
	  "serviceType": "Good Samaritan Retirement Home",
	  "provider": {
	    "@type": "Organization",
		"image": "http://goodsamalf.com/wp-content/uploads/2017/06/cropped-Home_03.png",
	    "name": "Good Samaritan Retirement Home",
        "address": {
          "@type": "PostalAddress",
          "addressCountry": "US",
          "addressLocality": "Florida City",
          "postalCode": "32696",
          "streetAddress": "507 se 1st Ave, Williston, Florida, 32696"
          },
         "telephone": "352-528-2722"
	  },
	
	  
	  "areaServed": {
	    "@type": "City",
	    "name": "Florida"
	  },
	  "hasOfferCatalog": {
	    "@type": "OfferCatalog",
	    "name": "Retirement Home",
	    "itemListElement": [
	      {
	        "@type": "OfferCatalog",
	        "name": "Retirement Home",
	        "itemListElement": [
	          {
	            "@type": "Offer",
				  "itemOffered": {
	              "@type": "Service",
	              "name": "24/7 Warchful Oversight"
	            }
	          },
				   {
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "24/7 Warchful Oversight"
	                }
	               },
	          {
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Arrangement For Transportation"
	            }
	          },
					{
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Arrangement For Transportation"
	                }
	               },
	          {
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Assistance In Securing Healthcare Needs"
	            }
	          },  
					{
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Assistance In Securing Healthcare Needs"
	                }
	               },
	          {
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Holistic Wellness Activity Programs"
	            }
	          },
 					{
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Holistic Wellness Activity Programs"
	                }
	               },
			{
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Refreshments And Snacks"
	            }
	          },
					{
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Refreshments And Snacks"
	                }
	               },
	          {
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Three Nutritious Home- Cooked Meals"
	            }
	          },
				  {
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Three Nutritious Home- Cooked Meals"
	                }
	               },
					
	            {
	            "@type": "Offer",
	            "itemOffered": {
	              "@type": "Service",
	              "name": "Assistance With Medication"
	            }
	          },
					{
	                 "@type": "Offer",
	                 "itemOffered": {
	                 "@type": "Blog",
					 "author": "Good Samaritan Retirement Home",
	                 "name": "Assistance With Medication"
	                }
	               },
                   
            {
"@type": "WebPage",
"url": "http://goodsamalf.com/contact-us/, http://goodsamalf.com/about/,http://goodsamalf.com/gallery/,http://goodsamalf.com/employee-login/, http://goodsamalf.com/services/",
"author":{
"@type": "Person",
"name": "Good Samaritan Retirement Home"
}
}
	        ]
	      }
	    ]
	  }
	}
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
                                        <div class="col-md-3">
						<?php the_custom_logo(); ?>
					</div>   
					<div class="col-md-9">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div>
					<!--<div class="col-md-4 for_desktop">
					 	<?php /*get_search_form(); */?> <i class="fa fa-search" aria-hidden="true"></i>
                                                 <i class="fa fa-times btnclse" aria-hidden="true"></i>
					</div>-->
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
