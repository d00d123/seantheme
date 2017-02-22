<?php
/**
 *The home page
 *
 * This is the homepage theme
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
 
 get_header(); ?>

<div class="jumbotron gradient-bg margin-neg-20">
    <div class="container">
        <h1>This is the homepage.</h1>
    </div>
</div>


<div class="container">
    <!--Start the loop-->
    <div class="row">
        <div class="col-md-8">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                        <h2>This is a single blog post</h2>
                        <!--PHP function adds post tags as classes to a div wrapper for the post-->
                            <div class="<?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                  foreach($posttags as $tag) {
                                    echo $tag->name . ' '; 
                                  }
                                }
                                ?>">
                                <?php the_title(); ?>
                        <?php the_content(); ?>
                        
                        <?php
                            wp_link_pages( array(
                                        
                                    )
                                );
                        ?>
                        </div>
                    <?php endwhile; ?>
                    
                <?php endif; ?>
                
            <!--End the loop-->
            </div> <!--end columns for posts-->
            

    </div>
</div>

<?php get_footer(); ?>