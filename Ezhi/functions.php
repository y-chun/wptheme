<?php 
  add_theme_support( 'post-thumbnails' );//启动缩略图功能
    set_post_thumbnail_size(80,80, true);//设置默认缩略图大小
add_image_size('Ezhi_slider',653,400,true);
add_image_size('Ezhi_accordion',75,60,true);
add_image_size('Ezhi_main_all',200,140,true);
function  Ezhi_home_stylesheets()
{

	wp_enqueue_style('style_css',get_template_directory_uri().'/style.css',array(), '1', 'all');
	wp_enqueue_style('Ezhi_css',get_template_directory_uri().'/css/Ezhi.css',array(), '1', 'all');
	wp_enqueue_style('Ezhi_use_css',get_template_directory_uri().'/css/Ezhi_use.css',array(), '1', 'all');
	
	//get_template_directory_uri()寻找当前模板目录
}
add_action('wp_enqueue_scripts','Ezhi_home_stylesheets');
function Ezhi_home_js(){
	wp_enqueue_script('jquery.min_js',get_template_directory_uri().'/js/jquery.min.js');
	wp_enqueue_script('Ezhi_js',get_template_directory_uri().'/js/Ezhi.js');
	wp_enqueue_script('Ezhi_use_js',get_template_directory_uri().'/js/Ezhi_use.js');
			
}
add_action('wp_enqueue_scripts','Ezhi_home_js');

register_nav_menus(array('main_nav'=>'header_menu'));
function footer_js_css(){

wp_enqueue_script('yxMobileSlider_js',get_template_directory_uri().'/js/yxMobileSlider.js');
}
add_action('wp_footer_js_css','footer_js_css');
function wp_footer_js_css_carry(){
do_action('wp_footer_js_css');}
function Ezhi_pagination() {
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => __('&larr; Previous', 'first-mag' ),
        'next_text' => __('Next &rarr;', 'first-mag' ),
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}









function first_mag_breadcrumb() {
global $post, $wp_query;
	$home = __('Home', 'first-mag');
	$delimiter = ' &raquo; ';
	$homeLink = home_url();
	if (is_home() || is_front_page()) {
		// no need for breadcrumbs in homepage
	}
	else {
		echo '<div id="breadcrumbs" >';
		echo '<div class="breadcrumbs-inner text-right">';
		// main breadcrumbs lead to homepage
		echo '<span><a href="' . esc_url($homeLink) . '">' . '<i class="fa fa-home"></i><span>' . esc_attr($home) . '</span>' . '</a></span>' . $delimiter . ' ';
		if (is_category()) {
			$thisCat =new WP_Query( 'category_name=UI' );
			if ($thisCat->parent != 0) {
				$category_link = get_category_link($thisCat->parent);
				echo '<span><a href="' . esc_url($category_link) . '">' . '<span>' . esc_attr(get_cat_name($thisCat->parent)) . '</span>' . '</a></span>' . $delimiter . ' ';
			}
			$category_id = get_cat_ID(single_cat_title('', false));
			$category_link = get_category_link($category_id);
			echo '<span><a href="' . esc_url($category_link) . '">' . '<span>' . esc_attr(single_cat_title('', false)) . '</span>' . '</a></span>';
		}
		elseif (is_single() && !is_attachment()) {
			if (get_post_type() != 'post') {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<span><a href="' . esc_url($homeLink) . '/' . $slug['slug'] . '">' . '<span>' . esc_attr($post_type->labels->singular_name) . '</span>' . '</a></span>';
				echo ' ' . $delimiter . ' ' . get_the_title();
			}
			else {
				$category = get_the_category();
				if ($category) {
					foreach($category as $cat) {
						echo '<span><a href="' . esc_url(get_category_link($cat->term_id)) . '">' . '<span>' . esc_attr($cat->name) . '</span>' . '</a></span>' . $delimiter . ' ';
					}
				}
				echo get_the_title();
			}
		}
		elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404() && !is_search()) {
			$post_type = get_post_type_object(get_post_type());
			echo $post_type->labels->singular_name;
		}
		elseif (is_attachment()) {
			$parent = get_post($post->post_parent);
			echo '<span><a href="' . esc_url(get_permalink($parent)) . '">' . '<span>' . esc_attr($parent->post_title) . '</span>' . '</a></span>';
			echo ' ' . $delimiter . ' ' . get_the_title();
		}
		elseif (is_page() && !$post->post_parent) {
			$get_post_slug = $post->post_name;
			$post_slug = str_replace('-', ' ', $get_post_slug);
			echo '<span><a href="' . esc_url(get_permalink()) . '">' . '<span>' . esc_attr(ucfirst($post_slug)) . '</span>' . '</a></span>';
		}
		elseif (is_page() && $post->post_parent) {
			$parent_id = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<span><a href="' . esc_url(get_permalink($page->ID)) . '">' . '<span>' . esc_attr(get_the_title($page->ID)) . '</span>' . '</a></span>';
				$parent_id = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs) - 1) echo ' ' . $delimiter . ' ';
			}
			echo $delimiter . '<span><a href="' . esc_url(get_permalink()) . '">' . '<span>' . esc_attr(the_title_attribute('echo=0')) . '</span>' . '</a></span>';
		}
		elseif (is_tag()) {
			$tag_id = get_term_by('name', single_cat_title('', false) , 'post_tag');
			if ($tag_id) {
				$tag_link = get_tag_link($tag_id->term_id);
			}
			echo '<span><a href="' . esc_url($tag_link) . '">' . '<span>' . esc_attr(single_cat_title('', false)) . '</span>' . '</a></span>';
		}
		elseif (is_author()) {
			global $author;
			$userdata = get_userdata($author);
			echo '<span><a href="' . esc_url(get_author_posts_url($userdata->ID)) . '">' . '<span>' . esc_attr($userdata->display_name) . '</span>' . '</a></span>';
		}
		elseif (is_404()) {
			echo __('Error 404', 'first-mag');
		}
		elseif (is_search()) {
			echo 'Search results for "' . esc_attr(get_search_query()) . '"';
		}
		elseif (is_day()) {
			echo '<span><a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . '<span>' . esc_attr(get_the_time('Y')) . '</span>' . '</a></span>' . $delimiter . ' ';
			echo '<span><a href="' . esc_url(get_month_link(get_the_time('Y')) , get_the_time('m')) . '">' . '<span>' . esc_attr(get_the_time('F')) . '</span>' . '</a></span>' . $delimiter . ' ';
			echo '<span><a href="' . esc_url(get_day_link(get_the_time('Y')) , get_the_time('m') , get_the_time('d')) . '">' . '<span>' . esc_attr(get_the_time('d')) . '</span>' . '</a></span>';
		}
		elseif (is_month()) {
			echo '<span><a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . '<span>' . esc_attr(get_the_time('Y')) . '</span>' . '</a></span>' . $delimiter . ' ';
			echo '<span><a href="' . esc_url(get_month_link(get_the_time('Y') , get_the_time('m'))) . '">' . '<span>' . esc_attr(get_the_time('F')) . '</span>' . '</a></span>';
		}
		elseif (is_year()) {
			echo '<span><a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . '<span>' . esc_attr(get_the_time('Y')) . '</span>' . '</a></span>';
		}
		if (get_query_var('paged')) {
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
			echo __('Page', 'first-mag') . ' ' . get_query_var('paged');
			if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
		}
		echo '</div></div>';
	}
}
/*remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'locale_stylesheet' );
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );
remove_action( 'wp_head', 'noindex', 1 );
remove_action( 'wp_head', 'wp_print_styles', 8 );
remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
remove_action( 'wp_head', 'wp_generator' );
//remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_footer', 'wp_print_footer_scripts' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
global $wp_widget_factory;
remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
*/
?>


