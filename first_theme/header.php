<!DOCTYPE html>
<html>
	<head>
		<?php wp_head();?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body <?php body_class();?>>
		<header>
			<nav class="navbar navbar-dark sticky-top navbar-expand-md bg-primary">
			    <button class="navbar-toggler third-button" data-toggle="collapse" data-target="#top-menu">
			    	<div class="burger">
			    		<span></span>
			    		<span></span>
			    		<span></span>
			    	</div>
			  	</button>
			  	<?php
					if ( has_custom_logo() ) {
					 the_custom_logo();
					}	 
				?>
			    <div class="collapse navbar-collapse" id="top-menu">
			    	<?php wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'menu_class' => 'navbar-nav mr-auto',
							'container_class' => 'navbar-collapse',
						)
					);?>
			    </div>
			</nav>				
		</header>
		<div class="container pt-5 pb-5">