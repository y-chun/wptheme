
<div class='content_left_show'>
  <div class='content_left_show_one'>
  <div class='content_left_show_title'>
  	<h3>精彩推荐</h3>
  </div>
	<ul >										        									     
    <?php $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => 5,
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
           <?php } else{ ?>
    <div class='suolue'><img src='<?php  echo get_template_directory_uri()?>/images/Ezhi.png'></div>
     <?php }?>
        </div>
        <div class='content_main_detail'>
          <div class='content_main_detail_title'>
            <a href='<?php the_permalink();?>'> <?php $titles = get_the_title();  echo wp_trim_words( $titles , '20', $more = '...' ); ?></a>
          </div>
         
          <div class='content_main_detail_con'>
            <p><?php $content = get_the_content();  echo wp_trim_words( strip_shortcodes($content) , '130', $more = '...' ); ?> </p>
         
          </div>
           <div class='time'><p>Time:<?php the_time('Y-m-d');  ?></p></div>
        </div>
      </div>
     </li>
         <?php endwhile; wp_reset_query(); ?>                        
  </ul>
  </div>    
          <div class='content_left_show_two'>
            <div class='content_left_two_title'>
              <h3>UI</h3>
            </div>
              <ul >                                                  
    <?php $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => 6,
            'post_type'             => 'post',
            'category_name'   => 'UI'
         ) );
         while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();         
    ?>   
                   <li>
                    <a href='<?php the_permalink();?>'>
                    <div class='shade_parent'>
                      <?php the_post_thumbnail('Ezhi_main_all'); ?>
<div class='shade'></div>
<div class='shade_pic'></div>
                    </div>
                    </a>

                    <div class='rectangle'></div>
                    <div class='rectangle_title'><a href='<?php the_permalink();?>'><?php $titles = get_the_title();  echo wp_trim_words( $titles , '17', $more = '...' ); ?></a></div>
                   </li>
         <?php endwhile; wp_reset_query(); ?>                        
              </ul>
          </div>




   </div>

<?php get_sidebar('rightcon');



