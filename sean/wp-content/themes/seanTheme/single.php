<?php
/**
 * Template for single blog posts
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
 
 get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_date(); ?></p>
                    <?php the_content(); ?>
                    
                    <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages', 'customtheme') . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'customtheme' ) . '</span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>'
                        ));
                    ?>
                    
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php
    if ( is_singular( 'post' ) ) {
        the_post_navigation( array(
            'next_text' => 'Next',
            'prev_text' => 'Previous'
        ) );
    }
?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->


<?php get_footer(); ?>