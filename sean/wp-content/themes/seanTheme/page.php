<?php
/**
 * The template for displaying the page type
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */

 get_header(); ?>


<div class="container">
    <!--Start the loop-->
    
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                
                <?php the_title(); ?>
                <?php the_content(); ?>
            
            <?php endwhile; ?>
            
        <?php endif; ?>
        
    <!--End the loop-->
</div>

<?php get_footer(); ?>