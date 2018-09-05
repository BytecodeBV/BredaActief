<?php global $text_domain; ?>
<header class="banner" role="banner">
  <nav class="nav-top" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', $text_domain ); ?>">
    <div class="container">
      <ul class="nav-top__menu">
        <li class="nav-top__item nav-top__item-read">
          <a href=""><?php echo __('Lees voor', $text_domain); ?></a>
        </li>
        <li class="nav-top__item nav-top__item-contrast">
          <a href=""><?php echo __('Hoog contrast', $text_domain); ?></a>
        </li>
        <li class="nav-top__item nav-top__item-font">
          <a href=""><a href=""><?php echo __('Lettergrootte', $text_domain); ?></a></a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="nav-primary" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', $text_domain ); ?>">
    <div class="container">
      <?php
        $args = array(
            'theme_location' => 'primary_navigation'
        );
        wp_nav_menu($args);
      ?>
      <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
      <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="<?php echo $unique_id; ?>">
          <span class="screen-reader-text"><?php echo _x( 'Zoeken naar:', 'label', $text_domain ); ?></span>
        </label>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Zoeken', 'placeholder', $text_domain ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', $text_domain ); ?></span></button>
      </form>
    </div>
  </nav>
</header>

