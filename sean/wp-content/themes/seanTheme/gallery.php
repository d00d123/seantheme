<?php
/**
 * Template Name: Gallery Page
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */

 get_header(); ?>


<div class="container margin-down">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--Start the loop-->
        
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                        <h1 class="text-center"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    
                    <?php endwhile; ?>
                    
                <?php endif; ?>
                
            <!--End the loop-->
        </div> 
    </div>


<!--Start the loop-->
     <?php $query = new WP_Query( array( 'category_name' => 'gallery-image' ) ); ?>
     <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
     <div class="post">
     
         <!-- Display the Title as a link to the Post's permalink. -->
         <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
         <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
         <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
         
        <div class="entry">
      	<?php the_content(); ?>
      </div>
    
      <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
     </div> <!-- closes the first div box -->
    
     <?php endwhile; 
     wp_reset_postdata();
     else : ?>
     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
     <?php endif; ?>
                
            <!--End the loop-->
</div>
<?php get_footer(); ?>