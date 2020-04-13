<?php get_header();?>

<h1><?php single_cat_title();?></h1>
<?php if (have_posts()) : while (have_posts()) : the_post()
	 the_title()
	 the_excerpt()
endwhile; endif;?>

<?php get_footer();?>