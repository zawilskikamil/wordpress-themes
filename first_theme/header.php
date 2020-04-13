<!DOCTYPE html>
<html>
	<head>
		
		<title></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class();?>>

		<header class="sticky-top">
			<div class="container pos-f-t">
				<nav class="navbar navbar-expand-xl navbar-dark bg-primary">
				    <div id="navbarToggleExternalContent">
				    	<?php wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_class' => 'navbar-nav',
						'container_class' => 'navbar-collapse',
					)
				);?>
				    </div>
				</nav>
			</div>
				
		</header>
		<div class="container pt-5 pb-5">
