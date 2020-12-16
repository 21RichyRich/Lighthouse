<footer>
    
    <div class="container">
        <?php 
        wp_nav_menu(


            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar'
               // 'menu' => 'Top Bar' - this will hard code the menu 
                
            )
        );
        ?>
    </div>

</footer

<?php wp_footer();?>
