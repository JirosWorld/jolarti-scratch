<div id="content-image-klasse">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>
<hr>
</div>