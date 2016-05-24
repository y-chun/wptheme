  <div class='content_right_show'>
     <div class='content_right_show_one'>
        <div class='content_right_one_title'>
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
                      <div class='content_right_one_picture'>
                        <div class='shaderight'></div>
                        <div class='shaderight_pic'></div>
                      </div>
                      <div class='content_right_one_detail'>
                         <a href='<?php the_permalink();?>'> <?php $titles = get_the_title();  echo wp_trim_words( $titles , '35', $more = '...' ); ?></a>
                      </div>
                   </li>
         <?php endwhile; wp_reset_query(); ?>                        
              </ul>
     </div>
     <div class='content_right_show_two'>
       <div class='content_right_two_title'>
        <h3>精彩推荐</h3>
       </div>
        <ul >                                                  
    <?php $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => 10,
            'post_type'             => 'post',
            'category_name'   => 'UI'
         ) );
         while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();         
    ?>   
                   <li> 
                     
                      <a href='<?php the_permalink();?>'>
                        <?php $titles = get_the_title();  echo wp_trim_words( $titles , '20', $more = '...' ); ?>
                      </a>
                    
                   </li>
         <?php endwhile; wp_reset_query(); ?>                        
              </ul>
     </div>
  </div>
