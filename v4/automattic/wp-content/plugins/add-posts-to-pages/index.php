<?php
/*
Plugin Name: Add Posts to Pages
Plugin URI: http://www.webmechanix.com/wordpress-plugins/add-posts-pages/
Description: Easily add posts to pages with this super lightweight plugin. Just select the number of posts to show & the category to pull them from and voila, you've added a set of posts anywhere on any page.
Version: 1.2.6
Author: Arsham Mirshah
Author URI: http://www.webmechanix.com/
License: GPL2
*/

/*
** Function: add_posts_func
** Purpose: shortcode to allow easy addition of filtered posts to pages in WordPress
** Inputs: 
** show - number of posts to show
** category - the slug of the category to be shown
** tag - the slug of the tag to be shown
** Output: an unordered list of posts matching the input filter parameters using query_posts() WordPress function
*/
function add_posts_func( $atts ) {

	//extracting input parameters (attributes of shortcode)
	extract( shortcode_atts( array(
		'show' => 5,
		'category' => '',
		'tag' => '',
		'full' => false,
		'h' => '2',
		'img' => false,
		'size' => 64
	), $atts ) );


/***************************************************Config*********************************************************/

$h = 'h'.$h;

//querying posts on input filter parameters
query_posts('category_name='.$category.'&posts_per_page='.$show.'&tag='.$tag);



/***************************************************Out***********************************************************/

//setting the output variable and setting it with a targetable class
global $out;
$out = '<div class="add_posts">';

//if NOT full & No images output, start a unordered list
if(!$full && !$img)
$out .= '<ul>';

//START famous WordPress loop
if(have_posts()) : while(have_posts()) : the_post();

//Setting permalinm & title for ease of use later
$permalink = get_permalink();
$title = get_the_title();

//If there's an image, add the image to the output
if($img){

 $out .= '<a class="post-thumb alignleft" style="float:left; margin-right:15px; clear:both;" href="' . $permalink . ' ">'
 		 .get_the_post_thumbnail(get_the_id(), array($size,$size))
 		 .'</a>';
 		 
}

if($full){
	$content = get_the_content();
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);

	//output full post
	$out .= '<div class="add_posts_content" style="clear:both;">';
	$out .= '<'.$h.' class="title" style="clear: none;"><a href="' . $permalink . '">' . $title . '</a></'.$h.'>';
	$out .= '<div class="post-content" style="clear:both";>'.$content.'</div>';
	$out .= '<hr style="margin:10px 0">';
	$out .= '</div>';

//If NOT full, output either the <li> or <h#> tags & the title of the post
} else {
	
	//If images: <h#>, else: <li>
	if($img){$out .= '<'.$h.' class="title" style="clear: none;">';} else {$out .= '<li>';}

	//output permalinked title no matter what :)
	$out .= '<a href="' . $permalink . '">' . $title . '</a>';	

	//cleaning up
	if($img){$out .= '</'.$h.'>';} else {$out .= '</li>';}
}


//END famous WordPress loop
endwhile; endif;

//reset query so rest of page can load.
wp_reset_query();

//if NOT full output and no images, close the unordered list
if(!$full && !$img)
$out .= '</ul>';

//End class="add_posts" 
$out .= '</div>';
$out .= '<div style="clear: both;"></div>';

//returning the output to page
return $out;
}

//instantiate the shortcode
add_shortcode( 'add_posts', 'add_posts_func' );

?>