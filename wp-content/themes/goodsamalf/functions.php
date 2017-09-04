<?php 


function render_dom_now($html){
	
	$doc = new DOMDocument();
	$doc->loadHTML($html);    
	$selector = new DOMXPath($doc);
	$result = $selector->query('//div[contains(@class, "mo_block")]');
	
	$arr_return = array();
	
	foreach($result as $rrr){
		$htmlString = $doc->saveHTML($rrr);
		$id_a 			= $rrr->getAttribute('id');
		$arr_return[$id_a] = do_shortcode($htmlString);
	}
	
	return $arr_return;
}/***/



include_once('inc/functions-child.php');


add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Downloads Menu', 'Downloadable Files', 'downloadables', 'user-downloads', 'download_files');
}



function download_files(){

	include_once('template-parts/custom-temp/downloadfiles.php');

}

// Changing excerpt length
function new_excerpt_length($length) {
return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');


function employee_shortcode(){
	ob_start();
	include('template-parts/custom-temp/employeelist.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;

}

add_shortcode('employees', 'employee_shortcode');


function services_shortcode(){
	ob_start();
	include('template-parts/custom-temp/servicelist.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;

}

add_shortcode('services', 'services_shortcode');

function pricelist_shortcode(){
	ob_start();
	include('template-parts/custom-temp/pricelist.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;

}

add_shortcode('pricelist', 'pricelist_shortcode');


function gallerypics_shortcode(){
	ob_start();
	include('template-parts/custom-temp/gallerypics.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;

}
add_shortcode('gallerypics', 'gallerypics_shortcode');


function downloadables_shortcode(){

	ob_start();
	include('template-parts/custom-temp/downloadfiles.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;


}

add_shortcode('downloadables', 'downloadables_shortcode');


function homepageinfo_shortcode(){

	ob_start();
	include('template-parts/custom-temp/homepageinfo.php');
	$content_ret = ob_get_contents();
	ob_end_clean();
	return $content_ret;


}

add_shortcode('homepageinfo', 'homepageinfo_shortcode');

