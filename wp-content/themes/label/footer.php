<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package label
 */

?>

	</div><!-- #content -->

    <footer id="colophon" class="site-footer pv4 ph3 ph5-ns flex justify-start items-end">
      <p class="f4 mv0">
        <a target="_blank" class="link" href="https://github.com/dshvimer">github.com/dshvimer</a>
      </p>
      <div id="hamburger" class="dn-l hamburger">
          <span class="top"></span>
          <span class="middle"></span>
          <span class="bottom"></span>
      </div>
      <div id="overlay" class="avenir overlay flex">
          <nav class="flex flex-column flex-auto justify-center items-center f1">
              <?php
              $menu_name = 'main_nav';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
              ?>
              <?php

              $menu_name = 'menu-1';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menuitems = wp_get_nav_menu_items( $menu, array( 'order' => 'DESC' ) );

              foreach ( $menuitems as $item ):

                  $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                  $page = get_page( $id );
                  $link = get_page_link( $id ); ?>

                  <a href="<?php echo $link; ?>" class="link dim white dib ma3 w-100 tc hover-moon-gray">
                    <?php echo $page->post_title; ?>
                  </a>

              <?php endforeach; ?>
          </nav>
      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
