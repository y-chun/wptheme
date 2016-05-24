<?php if ( has_nav_menu( 'main_nav' ) ) : ?>

		<div class='menu_980'>
       <div class='header_effect'></div>
         <?php
         wp_nav_menu(
         	array(
                   'theme_location'=>'main_nav',
                   'depth'=>'6',
                   'container'=>'div',
                   'container_class'=>'menu_parent',
                   'menu_class'=>'nav menu_child',


         		))
          ?>
		</div>
<?php endif; ?>