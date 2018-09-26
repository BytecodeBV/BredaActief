@php global $text_domain; @endphp

@extends('layouts.app')

@section('content')
  
  @include('partials.header-visual')
  
  <div class="search__wrapper">
    <div class="search__page-header">
      <div class="center">
        <h1>{{ __('Zoekresultaten', $text_domain) }}</h1>
        <p class="search__value">{{ __('U zocht naar: ', $text_domain) }}<strong>{!! get_query_var('s') !!}</strong> </p>
      </div>
    </div>
    
    @if (!have_posts())
      <div class="search__no-results">
        <div class="center">
          <div class="alert alert-warning">
            {{ __('Sorry, er zijn geen zoekresultaten. Probeer het nogmaals.', $text_domain) }}
          </div>
        </div>
      </div>
    @endif
    
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
    @endwhile
    
    <div class="search__pagination">
      <div class="center">
        @php
          the_posts_pagination(
		  array(
		  'prev_text'          => '< <span class="screen-reader-text">' . __( 'Previous page', $text_domain ) . '</span>',
		  'next_text'          => '> <span class="screen-reader-text">' . __( 'Next page', $text_domain ) . '</span>',
		  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', $text_domain ) . ' </span>',
		  )
		  );
        @endphp
      </div>
    </div>
  </div>
@endsection
