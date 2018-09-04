<header class="banner" role="banner">
  <nav class="nav-top" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'sage' ); ?>">
    <div class="container">
      <ul class="nav-top__menu">
        <li class="nav-top__item nav-top__item-read">
          <a href=""><?php echo __('Lees voor', 'bredaactief'); ?></a>
        </li>
        <li class="nav-top__item nav-top__item-contrast">
          <a href=""><?php echo __('Hoog contrast', 'bredaactief'); ?></a>
        </li>
        <li class="nav-top__item nav-top__item-font">
          <a href=""><a href=""><?php echo __('Lettergrootte', 'bredaactief'); ?></a></a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="nav-primary" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'sage' ); ?>">
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
          <span class="screen-reader-text"><?php echo _x( 'Zoeken naar:', 'label', 'sage' ); ?></span>
        </label>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Zoeken', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span></button>
      </form>
    </div>
  </nav>
  <figure class="header-visual" style="background-image: url('http://placehold.it/1400x950');">
  </figure>
</header>

