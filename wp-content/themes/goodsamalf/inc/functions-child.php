<?php


function my_wp_nav_menu_args( $args = '' ) {

	if( is_user_logged_in() ){
		$userid = get_current_user_id();
		  $user_info = get_userdata($userid);
	      $user_role = implode($user_info->roles);

			if( $user_role == 'administrator' ) { 
				$args['menu'] = 'Administrator Menu';
			} elseif($user_role == 'employee') { 
				$args['menu'] = 'Staff Menu';
			} 
		}else {
			$args['menu'] = 'Top Menu';
		}		

		return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );


add_action( 'admin_menu', 'my_work_sched_menu_admin' );
function my_work_sched_menu_admin() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Work Schedule', 'Work Schedule Menu', 'employee_capability', 'work-sched', 'my_work_sched_admin');
}

function my_work_sched_admin(){

	echo do_shortcode('[master_schedule]');

}

add_action( 'admin_menu', 'my_work_sched_menu_employee' );
function my_work_sched_menu_employee() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'My Schedule', 'My Schedule', 'employee_capability', 'my-work-sched-employee', 'my_work_sched_employee');
}

function my_work_sched_employee(){

	echo do_shortcode('[your_schedule]');

}



add_action( 'admin_menu', 'today_shift_menu' );
function today_shift_menu() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Today Shift', 'Today Shift Menu', 'employee_capability', 'today-shift', 'today_shift');
}

function today_shift(){

	echo do_shortcode('[today]');

}


add_action( 'admin_menu', 'extra_shift_menu' );
function extra_shift_menu() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Extra Shift', 'Extra Shift Menu', 'employee_capability', 'extra-shift', 'extra_shift');
}

function extra_shift(){

	echo do_shortcode('[extra_work]');

}

add_action( 'admin_menu', 'record_exp_menu' );
function record_exp_menu() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Record Expense', 'Record Expense Menu', 'employee_capability', 'record-exp', 'record_exp');
}

function record_exp(){

	echo do_shortcode('[record_expense]');

}



function the_breadcrumb() {
		echo '<p class="crumbtitle">';
		echo the_title();
		echo '</p>';
		/*echo '<p class="dots">';
		echo '.....';
		echo '</p>';*/
		echo '<ul id="crumbs">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> / ";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo the_title();
		}
		echo "</li>";
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}

add_shortcode('breadcrumb_slider', 'the_breadcrumb');

function the_breadcrumb2() {
		echo '<p class="crumbtitle">';
		echo the_title();
		echo '</p>';
		/*echo '<p class="dots">';
		echo '.....';
		echo '</p>';*/
		echo '<ul id="crumbs">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> / Services >";
		echo the_title();
		echo "</li>";
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}

add_shortcode('breadcrumb_slider2', 'the_breadcrumb2');


function remove_menus(){

	$userid = get_current_user_id();
	$user_info = get_userdata($userid);
	$user_role = implode($user_info->roles);

	if($user_role == 'manager') {

		  remove_menu_page( 'index.php' );                  //Dashboard
		  remove_menu_page( 'jetpack' );                    //Jetpack* 
		  remove_menu_page( 'edit.php' );                   //Posts
		  remove_menu_page( 'upload.php' );                 //Media
		  remove_menu_page( 'edit.php?post_type=page' );    //Pages
		  remove_menu_page( 'edit-comments.php' );          //Comments
		  remove_menu_page( 'themes.php' );                 //Appearance
		  remove_menu_page( 'plugins.php' );                //Plugins
		  remove_menu_page( 'tools.php' );                  //Tools
		  remove_menu_page( 'options-general.php' );
		  remove_menu_page('edit.php?post_type=employee');
		  remove_menu_page('edit.php?post_type=goodsamservices');
		  remove_menu_page('edit.php?post_type=food_menu');
		  remove_menu_page('wpcf7'); 



  }       //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

function scrisoft_remove_ataglance() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary-hide', 'dashboard', 'normal' );
	remove_meta_box( 'wpdm_dashboard_widget-hide', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'scrisoft_remove_ataglance' );

?>