@php global $text_domain; @endphp
<header class="banner" role="banner">
  <nav class="nav-top" role="navigation" aria-label="{!! esc_attr_e( 'Top Menu', $text_domain ) !!}">
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
      
      @include('partials.searchform')
      
      <a class="search-toggle" href="#">
		  <?php echo file_get_contents( get_template_directory_uri() . '/assets/images/search_toggle.svg'); ?>
      </a>
      <a class="mob-menu-toggle" href="#mob-menu">
        <div id="mob-icon" class="hamburger hamburger--slider js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </a>
      <nav id="mob-menu" class="mob-menu">
		  <?php wp_nav_menu($args); ?>
      </nav>
    </div>
  </nav>
  <a class="logo" href="/"><?php echo file_get_contents(get_template_directory_uri() . '/assets/images/logo.svg'); ?></a>
</header>

