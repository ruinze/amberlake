<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">
		<div class="site-branding-text">
			<div class="col-md-12 ">
				<section class="fa fa-map-marker addr"> 
                                   <span class="name_add for_desktop">2411 Fortune Road, Kissimmee, F1 34744<span class="separator">|</span> </span>
                                   <span class="name_add for_mobile">2411 Fortune Road, <br />Kissimmee, F1 34744<span class="separator">|</span> </span>   
                                </section>  
                                <section class="fa fa-envelope-o eaddr"> 
                                   <span class="name_eadd">amberlakeassistedliving@yahoo.com<span class="separator">|</span> </span>
                                </section>
                                <section class="hphone">
                                    <div class="col-sm-2">
                                         <i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="col-sm-10">
                                         <div class="home_num">Tel: (407) 348-6100</div>
                                         <div class="home_fax">Fax: (407) 348-0031</div>
                                    </div>
                                </section> 
                                <section class="sm_links">
		                   <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		                   <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		                   <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		                   <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		                   <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
	                        </section>  
                                  
			</div>

                      

		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->

<div class="col-md-4 for_mobile_search">
	<?php get_search_form(); ?> <i class="fa fa-search ss" aria-hidden="true"></i>
        <i class="fa fa-times btnclse ss" aria-hidden="true"></i>
</div>
