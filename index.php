<?php get_header(); ?>
<!-- dit sjabloon wordt gebruikt voor alle paginas zoals posts de homepagina en de blogroll maar niet voor gewone pages -->
    <?php 
    
    if( have_posts() ):
        
        while( have_posts() ): the_post(); echo "Post format:" . get_post_format();?>
            
            <?php get_template_part('content', get_post_format()); ?>
        
        <?php endwhile;
        
    endif;
            
    ?>

<?php comments_template(); ?> 
<!-- Deze index loop geldt alleen voor de page loop als je geen page.php hebt gemaakt -->
<!-- dit zorgt er ook voor dat de permalink al werkt ook als je nog geen single.php hebt gemaakt -->
<BR>
TEST: INDEX TEMPLATE.

<?php get_footer(); ?>