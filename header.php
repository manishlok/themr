<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rjulab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-light'); ?>>
<div id="page" class="site d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rjulab' ); ?></a>
<h5 class="my-0 mr-md-auto font-weight-normal"><a class="navbar-brand text-dark" href="https://rjulab.com">
                    RJU Lab
                </a></h5>
        
      <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Connect</a>
        <a class="p-2 text-dark" href="#">Blog</a>
        <a class="p-2 text-dark" href="#">Forum</a>
      </nav>
        <div class="btn-group">
                        <a class="btn btn-outline-primary float-right ml-2" href="https://ejanakpur.com/login">Sign In</a>
            <a class="btn btn-danger float-right ml-2" href="https://ejanakpur.com/start">Sign Up</a>
                    </div>
    </div>
    <div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$rjulab_description = get_bloginfo( 'description', 'display' );
			if ( $rjulab_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $rjulab_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rjulab' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
