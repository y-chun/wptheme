
 <div class='content_main_all'>
    
  <div class='content_main_picture'>
  	<a href='<?php  the_permalink() ?>'>
      <?php if ( has_post_thumbnail() ) {?> 
  <div ><?php the_post_thumbnail('Ezhi_main_all'); ?></div> 
   <?php } else{ ?>
    <div class='suolue'><img src='<?php  echo get_template_directory_uri()?>/images/Ezhi.png'></div>
     <?php }?>
  	</a>
  	</div>
   
  	     <div class='content_main_detail'>
  		   <div class='content_main_detail_title'>
  			<a href='<?php the_permalink();?>'> <?php $titles = get_the_title();  echo wp_trim_words( $titles , '20', $more = '...' ); ?></a>
  		</div>
  		<div class='content_main_detail_con'>
            <p><?php $content = get_the_content();  echo wp_trim_words( strip_shortcodes($content) , '150', $more = '...' ); ?> </p>
          </div>
              <div class='time'><p>Time:<?php the_time('Y-m-d');  ?></p></div>
  	</div>
  

</div>
