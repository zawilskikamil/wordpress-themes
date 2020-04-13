<!DOCTYPE html>
<html>
	<head>
		
		<title></title>
		<?php wp_head();?>
	</head>
	<body <?php body_class();?>>

		<header class="sticky-top">
			<div class="container pos-f-t">
				<nav class="navbar navbar-dark bg-primary navbar-dark indigo darken-2">
					<a class="navbar-brand" href="#">Navbar</a>

				    <button class="navbar-toggler third-button" type="button" data-toggle="collapse" 
				    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" 
				    aria-expanded="false" aria-label="Toggle navigation">
				    	<div class="burger">
				    		<span></span>
				    		<span></span>
				    		<span></span>
				    	</div>
				  	</button>
				    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
				    	<?php wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_class' => 'navbar-nav mr-auto',
						'container_class' => 'navbar-collapse',
					)
				);?>
				    </div>
				</nav>
			</div>
				
		</header>
		<div class="container pt-5 pb-5">

