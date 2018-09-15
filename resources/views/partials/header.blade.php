<?php global $text_domain; ?>
<header class="banner" role="banner">
  <nav class="nav-top" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', $text_domain ); ?>">
    <div class="center">
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
    <div class="center">
      <?php
        $args = array(
            'theme_location' => 'primary_navigation'
        );
        wp_nav_menu($args);
      ?>
      <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
      <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Zoeken', 'placeholder', $text_domain ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', $text_domain ); ?></span></button>
      </form>
    </div>
  </nav>
  <a class="logo" href="/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81.59 71.41"><title>Logo</title><g id="Laag_2" data-name="Laag 2"><g id="Sticky_menu" data-name="Sticky menu"><g id="Logo"><path class="cls-1" d="M40.73,8c.88-.78,1.75-1.56,2.64-2.33A22.5,22.5,0,0,1,60.6.14a23.37,23.37,0,0,1,20,16.55,23,23,0,0,1-.22,13.9A25,25,0,0,1,74,40.35Q67.17,47.24,60.28,54.1a5.77,5.77,0,1,1-8.17-8.16c1.55-1.56,3.09-3.14,4.67-4.68.38-.37.36-.6,0-1-1.81-1.78-3.61-3.58-5.4-5.38a5.73,5.73,0,0,1,1.89-9.64,5.37,5.37,0,0,1,6,1.17c2,1.89,3.9,3.87,5.84,5.8.17.18.3.42.58.11a15.79,15.79,0,0,0,3.8-5.51,11,11,0,0,0-.65-8.71A11.4,11.4,0,0,0,60,11.73a10.18,10.18,0,0,0-7.76,1.73,46.89,46.89,0,0,0-5.66,5.16q-5.48,5.46-11,10.93a5.78,5.78,0,0,1-9.35-6.42,6.5,6.5,0,0,1,1.46-2.05c1.62-1.63,3.23-3.27,4.84-4.9.22-.2.45-.39.66-.6,1.7-1.7,3.41-3.38,5.09-5.1A21.34,21.34,0,0,0,40.73,8Z"/><path class="cls-2" d="M40.73,8a21.34,21.34,0,0,1-2.41,2.53c-1.68,1.72-3.39,3.4-5.09,5.1-.21.21-.44.4-.66.6-1.8-1.7-3.61-3.43-6.07-4.11a11.25,11.25,0,0,0-10.91,2.51,11.05,11.05,0,0,0-3.72,6.47,10.58,10.58,0,0,0,2.16,9,89.19,89.19,0,0,0,6.22,6.53q5.3,5.33,10.61,10.65l11,11c1.18,1.18,2.41,2.32,3.52,3.56A5.78,5.78,0,0,1,43.13,71a5.52,5.52,0,0,1-6.27-1.34Q23.59,56.39,10.33,43.11a51.16,51.16,0,0,1-6.1-6.64A23.75,23.75,0,0,1,.75,29.08,22.6,22.6,0,0,1,.56,18.3,22.59,22.59,0,0,1,5.88,7.9a23.22,23.22,0,0,1,23.73-7,25,25,0,0,1,11,6.94A.75.75,0,0,1,40.73,8Z"/></g></g></g></svg></a>
</header>

