
<div class='content_left_show'>
  <div class='content_left_show_title'>
  	<h3>精彩推荐</h3>
  </div>
	<ul >										        									     
    <?php $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => 3,
            'post_type'             => 'post',
            'category_name'   => 'UI'
         ) );
         while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();         
    ?>   
     <li> 
      <div class='content_main_all'>
        <div class='content_main_picture'>
          <?php if ( has_post_thumbnail() ) { ?>                                           
                 <div ><?php the_post_thumbnail('Ezhi_main_all'); ?></div> 
          <?php } ?>
        </div>
      </div>
     </li>
         <?php endwhile; wp_reset_query(); ?>                        
  </ul>    
   </div>
   <?php get_sidebar('rightcon')?>




