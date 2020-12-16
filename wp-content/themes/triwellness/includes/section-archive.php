<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <div class="card mb-3"> 
        <div class="card-body">
        <!-- php the_title reffers to the contents title -->
        <h3><?php the_title();?></h3>
        <!-- For seo purposes don't make too many h1 & h2 tags  -->

            <!--  < ?php the_content(); > |refferes to the full content| -->

            <?php the_excerpt();?>
            <!-- < ?php the_excerpt()  |Grabs a portion of the content from the post then displays it| -->
            <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
        <!-- permalink function will link your archive to it's original post -->
        </div>

    </div>

<?php endwhile; else: endif;?>