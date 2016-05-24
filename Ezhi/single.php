<?php get_header() ?>
<?php get_template_part('head','content'); ?>
<div class='page_navigation add'>
	<div class='page_navigation_child'>
<?php if (function_exists('first_mag_breadcrumb') && get_theme_mod( 'breadcrumbs-check', 1 ) != 0) {first_mag_breadcrumb(); } ?> 
</div> 
</div>
<div class='main_content single_one'>
	<?php get_template_part('content','single'); ?>
	<?php get_sidebar('rightcon');?>
</div>
<div style='clear:both'></div>
<div class='footer'>
	<div class='footer_content'><p>本站文章均来自网络收集，且都标明转载地址，不负任何版权责任</p></div>
</div>
<?php wp_footer()?>