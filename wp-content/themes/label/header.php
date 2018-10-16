<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package label
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="turbolinks-cache-control" content="no-cache">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="avenir site flex flex-column h-100">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'label' ); ?></a>

	<header id="masthead" class="site-header avenir">

		<nav id="site-navigation" class="w-100 border-box pa3 ph5-ns flex flex-row">
            <?php
            $menu_name = 'main_nav';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
            $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
            ?>

            <a href="/">
              <div style="background: #fff url(<?php echo esc_url( $image[0] ); ?>) no-repeat center center;"
                   class="tc br-100 h3 w3 h4-ns w4-ns dib cover">
              </div>
            </a>


            <div class="nav flex flex-row flex-auto justify-end align-center">
              <?php

              $menu_name = 'menu-1';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menuitems = wp_get_nav_menu_items( $menu, array( 'order' => 'DESC' ) );

              foreach ( $menuitems as $item ):

                  $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                  $page = get_page( $id );
                  $link = get_page_link( $id ); ?>

                  <a href="<?php echo $link; ?>" class="title flex items-center link dim dark-gray f3 dib ml3 ml4-ns">
                      <?php echo $page->post_title; ?>
                  </a>

              <?php endforeach; ?>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content flex flex-column flex-auto">
