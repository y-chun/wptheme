<div class='page_right'>
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<header class='page_header'>
	<h2><?php  the_title();?></h2>
</header>
<div>
<?php the_content();?>
</div>
</div>
<?php endwhile; ?> 
<?php endif;?>