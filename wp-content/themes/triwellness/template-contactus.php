<?php 

/* Template Name: Contact Us 
*/ 
?>

<?php get_header();?>



<section class="page-wrap">
<div class="container">

    <h1> <?php the_title();?></h1>

    <div class="row">
    
            <div class=" col-lg-6"> 
            <h4>This is where to contact us! </h4>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In fugit molestiae sit reiciendis consequatur possimus, sapiente, earum delectus
         doloremque laudantium aut distinctio, aperiam voluptatibus? Quisquam, et beatae commodi vitae ullam unde distinctio explicabo praesentium hic deleniti pariatur corporis odio culpa quis autem amet. Est tempora voluptate eaque illo sequi asperiores.</p>
            
            <div class=" col-lg-6"> 
            
            <?php get_template_part('includes/section','content');?>

            </div>
    
    </div>


</div>
</section>


<?php get_footer();?>

