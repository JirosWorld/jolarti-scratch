<?php get_header(); ?>

    <?php 
    
    if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
        
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
            
            <p><?php the_content(); ?></p>
            
            <hr>
        
        <?php endwhile;
        
    endif;
            
    ?>
<!-- Deze index loop geldt alleen voor de page loop als je geen page.php hebt gemaakt -->
<!-- dit zorgt er ook voor dat de permalink al werkt ook als je nog geen single.php hebt gemaakt -->

<?php get_footer(); ?>