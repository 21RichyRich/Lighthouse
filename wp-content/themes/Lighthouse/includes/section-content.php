<?php if( have_posts() ): while( have_posts() ): the_post();?>
<!-- if you have the content post the content -->

    <?php the_content();?>

<?php endwhile; else: endif;?>