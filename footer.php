<?php
wp_footer();
?>

<footer>
    <div class="container">
        <div class="ft-wrapper">
            <div class="widget flex-line">
                <div class="copyright">
                    <p>Copyright © <a href="#">WPEssential</a></p>
                </div>
                <ul class="socials">
                    <?php

                    wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            // 'container' => 'div',
                            // 'container_class' => 'col-lg-12',
                            // 'container_id'         => 'navbarResponsive',
                            // Change this to match your HTML structure
                            'menu_class' => 'socials',
                            // Adjust the class names as needed
                    
                        )
                    );

                    ?>
                    <!-- <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>

</html>