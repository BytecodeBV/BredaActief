@php global $text_domain; @endphp
<header class="banner" role="banner">
  <nav class="nav-top" role="navigation" aria-label="{{ esc_attr_e( 'Top Menu', $text_domain ) }}">
    <div class="center">
      <ul class="nav-top__menu">
        <li class="nav-top__item nav-top__item-read">
          <a href="#">{!! __('Lees voor', $text_domain) !!}</a>
        </li>
        <li class="nav-top__item nav-top__item-contrast">
          <a href="#">{!! __('Hoog contrast', $text_domain) !!}</a>
        </li>
        <li class="nav-top__item nav-top__item-font">
          <a href="#">{!! __('Lettergrootte', $text_domain) !!}</a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="nav-primary" role="navigation" aria-label="{{ esc_attr_e( 'Primary Menu', $text_domain )}} ">
    <div class="center">
      @php
        $args = array(
			'theme_location' => 'primary_navigation'
		);
		wp_nav_menu($args);
		
		$unique_id = esc_attr( uniqid( 'search-form-' ) );
      @endphp
      
      @include('partials.searchform')
      
      <a class="search-toggle" href="#">
		  {!! file_get_contents( get_template_directory_uri() . '/assets/images/search_toggle.svg') !!}
      </a>
      <a class="mob-menu-toggle" href="#mob-menu">
        <div id="mob-icon" class="hamburger hamburger--slider js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </a>
      <nav id="mob-menu" class="mob-menu">
		  @php wp_nav_menu($args); @endphp
      </nav>
    </div>
  </nav>

  @php
    $custom_body_class = get_field('custom_body_class', 'option');
  @endphp

  <a class="logo" href="/">
    @if($custom_body_class() === 'stichting')
      @php(_e('Stichting Breda Actief'))
    @else
      {!! file_get_contents(get_template_directory_uri() . '/assets/images/logo.svg') !!}
    @endif
  </a>

</header>

