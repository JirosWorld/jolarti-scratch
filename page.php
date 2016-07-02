<?php get_header(); ?>
<!-- Dit template wordt alleen gebruikt voor gewone pages die geen homepage zijn, en geen blogroll zijn en geen post zijn -->
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); echo "Post format:" . get_post_format();?>
			
			<?php get_template_part('content', get_post_format()); ?>
		
		<?php endwhile;
		
	endif;
			
	?>

***<br>
general PAGE template
<?php get_footer(); ?>