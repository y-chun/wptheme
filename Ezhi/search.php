<?php get_header(); ?>
<?php get_template_part('head','content'); ?>
 	<div class='page_navigation add'>
	<div class='page_navigation_child'>
    <?php
                if (function_exists('first_mag_breadcrumb') && get_theme_mod( 'breadcrumbs-check', 1 ) != 0) {first_mag_breadcrumb(); } 
                 $total_results = $wp_query->found_posts;

                 echo "<div class='rsrc-post-content'><h2 class='text-center'></h2></div>";

        ?>
        </div> 
</div>
     <div class="main_content single_one">

				<div class='add_show_all'>
    <div class=' add_show'>
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        
                   <?php get_template_part( 'content', get_post_format() );?>

                <?php endwhile; ?>
         <div class="paging"><?php Ezhi_pagination(); ?></div>
         <?php else: ?>

                   <?php get_template_part('maincon','404');?>

            <?php endif; ?>
</div>

</div>
<?php get_sidebar('rightcon');?>
</div>
<div style='clear:both'></div>
  
<div class='footer'>
	<div class='footer_content'><p>本站文章均来自网络收集，且都标明转载地址，不负任何版权责任</p></div>
</div>
<?php get_footer(); ?>