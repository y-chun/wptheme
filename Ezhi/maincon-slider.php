<div class='slider'>
  <ul class="slides">										        									     
    <?php $get_featured_posts = new WP_Query( array(
            'posts_per_page'        => 3,
            'post_type'             => 'post',
            'category_name'   => 'UI'
         ) );
         while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();         
    ?>                    	     
    <li>                    	        
    <div class="flex-img">                    	           
      <a href="<?php the_permalink(); ?>">                                         
        <?php if ( has_post_thumbnail() ) { ?>        												           
          <div class="featured-thumbnail"><?php the_post_thumbnail('Ezhi_slider'); ?></div>      											         
        <?php } else { ?>                                       
          <img src="<?php echo get_template_directory_uri(); ?>/img/noprew-slider.jpg" alt="<?php the_title(); ?>">       									               
        <?php } ?>                              
      </a>                                                                
    </div>                               
             <div class='hea'>
          <h2 class="page-header">                                
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'first-mag' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>                            
          </h2> 
        </div>                        
    </li>  											     
    <?php endwhile; wp_reset_query(); ?>  										   
  </ul>		 
</div>