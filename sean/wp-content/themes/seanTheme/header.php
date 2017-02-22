<?php
/**
 * The template for displaying the header
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */

?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta name="description" content="My first custom WordPress theme.">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
            <?php wp_head(); ?>
                <!--This is the hook so you can drop in plugins-->
    </head>

    <?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>


        <!--Navigation is first-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--input WordPress nav-->
                    <?php 
                            wp_nav_menu( array( 
                                'theme_location' => 'primary',
                                'menu_class'     => 'primary-menu',
                                'container'      => false,
                                'items_wrap'     => '%3$s'
                            ) );
                        ?>
                </ul>
            </div>
            <a class="navbar-brand" href="//mattpr.info/sean">Sean Greenburg</a>

        </nav>