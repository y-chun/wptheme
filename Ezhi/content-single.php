<div class='page_right'>
	
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<header class='page_header'>
	<h2><?php  the_title();?></h2>
</header>
<div class='content_detail'>
<?php the_content();?>
</div>
   <?php wp_link_pages(); ?> 

<?php endwhile; ?> 
<?php endif;?>
</div>