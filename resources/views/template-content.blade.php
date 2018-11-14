{{--
  Template Name: Content
--}}

@php
	global $text_domain;
@endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	@while(have_posts()) @php the_post() @endphp
	
	@include('partials.content-intro')
	
	@if(have_rows('content'))
		<section class="content__rows">
			@while (have_rows('content')) @php(the_row())
			
			@php($content_type = get_sub_field('content_type'))
			@php($content_text_block = get_sub_field('content_text_block'))
			@php($content_text_block_link = get_sub_field('content_text_block_link'))
			@php($content_image_id = get_sub_field('content_image_block'))
			@php($content_image = wp_get_attachment_image($content_image_id, 'image-banner'))
			
			@if( $content_type == 'text')
				<article class="article__content">
					<div class="center center-small">
						{!! $content_text_block !!}
						
						@if(!empty($content_text_block_link))
							<div class="group">
								<a class="article__content--link" href="{{$content_text_block_link}}">{{ __('Lees meer', $text_domain) }}</a>
							</div>
						@endif
					</div>
				</article>
			@endif
			
			@if($content_type == 'image')
				<figure class="article__image--container">
					<div class="center center-small">
						{!! $content_image !!}
					</div>
				</figure>
			@endif
			
			@endwhile
		</section>
	@endif
	
	@endwhile
@endsection
