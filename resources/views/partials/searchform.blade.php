@php
$action = '/';
$name = 's';
$id = 'search-form';
$value = get_search_query();
@endphp

<form id="{{ $id }}" role="search" method="get" class="search-form" action="{{ $action }}">
  <div class="search-form__inner">
    <input type="search" class="search-field" placeholder="{!! esc_attr_x( 'Zoeken', 'placeholder', $text_domain ) !!}" value="{!! $value !!}" name="{{ $name }}" />
    <button type="submit" class="search-submit"><span class="screen-reader-text">{!! _x( 'Search', 'submit button', $text_domain ) !!}</span></button>
  </div>
</form>