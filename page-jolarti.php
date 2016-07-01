<?php get_header(); ?>

<?php 
/* example 1 - nav menu with (top level) menu items 1 to 3 */
$args1 = array(
  'theme_location' => 'hoofdmenu',
  'menu_item_start' => 1,
  'menu_item_end' => 1
);
wp_nav_menu($args1);

/* example 2 - nav menu with only (top level) menu item 5 */
$args2 = array(
  'theme_location' => 'hoofdmenu',
  'menu_item_start' => 2,
  'menu_item_end' => 2
);
wp_nav_menu($args2);

/* example 3 - nav menu with all (top level) menu items from 7 and onward */
$args3 = array(
  'theme_location' => 'hoofdmenu',
  'menu_item_start' => 3,
  'menu_item_end' => 4
);
wp_nav_menu($args3);
 ?>

***

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="meta">
<small><em>Posted on:</em> <?php the_time('F jS, Y') ?> <em>by</em> <?php the_author() ?> in <?php the_category(); ?>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></small>
</div>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
				Posted in <?php the_category( ', ' ) ?> |
				<?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?>
			</div>

		</div>

	<?php endwhile; ?>


	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
        
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

<?php comments_template(); ?>
<?php get_footer(); ?>