<div id="content-standaard-klasse"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
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

<hr>   
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div>