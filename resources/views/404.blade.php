@php global $text_domain @endphp

@extends('layouts.app')

@section('content')
  @include('partials.header-visual')

  @if (!have_posts())
    <section id="scroll-to" class="intro">
      <div class="center center-small">
        <article id="post-{{ get_the_ID() }}" class="page-article">
          <div class="intro__article--content">
            <h1>{{ __('Pagina niet gevonden', $text_domain) }}</h1>
            <p>{{ __('Sorry, deze pagina bestaat niet.', $text_domain) }}</p>
          </div>
        </article>
      </div>
    </section>
  @endif
@endsection
