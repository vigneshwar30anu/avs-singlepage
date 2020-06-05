<?php

require_once('lib/customize.php');
require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/function-admin.php');
require_once('lib/require-plugin.php');
// require_once('lib/sidebars.php');
// require_once('lib/theme-support.php');
require_once('lib/navigation.php');
// require_once('lib/include-plugins.php');
// require_once('lib/comment-callback.php');
// require_once('lib/images.php');
// require_once('lib/portfolio.php');
// require_once('lib/delete-post.php');
// require_once('lib/most-recent-widget.php');




function filter_by_category_shortcode($atts)
{
        // set up default parameters
        $atts = shortcode_atts(
            array(
              'cat_id' => '',
            ), $atts, 'sh_code' );
            
        
        
        
          $cat_id = $atts['cat_id'];
          //$cat_id ="cat_id";
$category_id = get_cat_ID($cat_id);

if(!empty($cat_id))
{

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
// $args = array (
//     'nopaging'               => false,
//     'paged'                  => $paged,
//     'posts_per_page'         => '1',
//     'post_type'              => 'post'
    
// );

// The Query
//echo $category_id;
$query = new WP_Query( 'cat=' .$category_id .'&posts_per_page=30&post_type=post&paged='.$paged.'nopaging=false' );

// The Loop
if ( $query->have_posts() ) {

    global $post;
    
echo '<div class="row" style="margin-top:40px;margin-bottom:40px;">';
    while ( $query->have_posts() ) {
        $query->the_post();
        echo '<div class="news-item col-md-4" style="text-align:center;border:2px solid #c3c3c3;margin-bottom:10px">';
            // post stuff here
                
                echo '<div><a href='.get_the_permalink( $post->id ).'>'.the_content( ).'</a></div>';
                echo get_permalink( $post->id );
             //   echo '<a href='.get_permalink(  ).'><h1 class="page-title screen-reader-text" >' . the_title() . '</h1></a>';
        echo '</div>';
    }
    echo '</div>'
    ?>
            <div class="row">
                <div class="col-md-6">  <?php previous_posts_link( '« Newer Entries' ); ?>
            </div>
            <div class="col-md-6" style="text-align:right"> 
                    <?php
                next_posts_link( 'Older Entries »', $query->max_num_pages );
                ?>
                </div>
        </div>
    <?php

} else {
    // no posts found
    echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
}


}

// Restore original Post Data
wp_reset_postdata();
}

add_shortcode( 'sh_code', 'filter_by_category_shortcode');


?>