<div class='right_show'>
  <div class='right_show_title'>
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
            <div class='right_show_classify'>
   	       <h5>
   		<?php $titles = get_the_title();  echo wp_trim_words( $titles , '50', $more = '...' ); ?>
   	        </h5>
   	        
           </div>
           <div class='accordion_content'>
              <div>
            <?php if ( has_post_thumbnail() ) { ?>        												           
                 <div class='accordion_picture'><?php the_post_thumbnail('Ezhi_accordion'); ?></div> 
          <?php }  else{?>
                 <div class='accordion_picture'><img src='<?php  echo get_template_directory_uri()?>/images/Ezhi.png'></div> 
                 <?php }?>
                 <div class='accordion_detail'>
          <a href="<?php the_permalink(); ?>"><?php $content = get_the_content();  echo wp_trim_words( strip_shortcodes($content) , '70', $more = '...' ); ?> 
          </a>
                 </div>
              </div>    
           </div>                  
    </li>  											     
    <?php endwhile; wp_reset_query(); ?>  										   
  </ul>		 
</div>