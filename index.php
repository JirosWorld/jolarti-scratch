<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="meta">
    <em>Posted on:</em> <?php the_time('F jS, Y') ?>
    <em>by</em> <?php the_author() ?>
    <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
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

<div class="navigation">
    <div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

    <?php else : ?>

        <h2>Not Found</h2>

    <?php endif; ?>

<div class="navigation">
    <div class="next-posts">
        <?php next_posts_link('&laquo; Older Entries') ?>
    </div>
    <div class="prev-posts">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
    </div>
</div>

<?php get_footer(); ?>