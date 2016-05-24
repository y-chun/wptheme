<?php get_header() ?>
<?php get_template_part('head','content'); ?>
<div class='content'>
<?php get_template_part('maincon','slider'); ?>
<?php get_sidebar('righttop') ?>
<div style='clear:both'></div>
</div>
<div class='main_content'>
	<?php get_template_part('maincon','main');?>

</div>
<div style='clear:both'></div>
<div class='footer'>
	<div class='footer_content'><p>本站文章均来自网络收集，且都标明转载地址，不负任何版权责任</p></div>
</div>
<?php  get_footer()?>
