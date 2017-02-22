<?php
/**
 * The template for displaying the footer
 * 
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

    <?php wp_footer(); ?>

        <!--scripts-->
        <script>
            //this script hacks the bootstrap 4 classes onto the wordpress nav items
            $(document).ready(function () {
                //$('li.menu-item').addClass('nav-item');
                $('li.menu-item > a').addClass('nav-link');
                //$('li.current-menu-item').addClass('active');
            });
        </script>

        </body>

        </html>