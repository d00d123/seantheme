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
        <?php wp_head(); ?> <!--This is the hook so you can drop in plugins-->
    </head>
    
    <?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
        <!--Navigation is first-->
        <nav class="navbar navbar-default navbar-fixed-top gradient-bg main-theme-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://wordpress-testing-d00d123.c9users.io/" class="navbar-brand">Brand</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
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
            </div>
        </nav>