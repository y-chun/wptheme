<?php get_header(); ?>
<?php get_template_part('head','content'); ?>
<!-- start content container -->

     <?php if ( have_posts() ) : ?>
     
        <h1 class="classify_head">
					<?php
						if ( is_category() ) ://是否分类页
							single_cat_title();
						elseif ( is_tag() ) ://是否存档页
							single_tag_title();
						elseif ( is_author() ) ://是否作者页
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'first-mag' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
					endif;
					?>
				</h1>
	<div class='page_navigation add'>
	<div class='page_navigation_child'>
<?php if (function_exists('first_mag_breadcrumb') && get_theme_mod( 'breadcrumbs-check', 1 ) != 0) {first_mag_breadcrumb(); } ?> 
</div> 
</div>
      <div class="main_content single_one">

				<div class='add_show_all'>
    <div class=' add_show'>
     <?php while ( have_posts() ) : the_post(); ?>

                        
                   <?php get_template_part( 'content', get_post_format() );?>

                <?php endwhile; ?>
         <div class="paging"><?php Ezhi_pagination(); ?></div>
</div>

</div>
<?php get_sidebar('rightcon');?>
</div>
<div style='clear:both'></div>
   <?php endif; ?>
<div class='footer'>
	<div class='footer_content'><p>本站文章均来自网络收集，且都标明转载地址，不负任何版权责任</p></div>
</div>
<?php get_footer(); ?>
