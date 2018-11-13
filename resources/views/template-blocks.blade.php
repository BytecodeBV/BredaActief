{{--
  Template Name: Blocks
--}}

@php
	global $text_domain;
@endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	@while(have_posts()) @php the_post() @endphp
	
	@include('partials.content-intro')
	
	@if(have_rows('blocks'))
		<section class="blocks">
			@while (have_rows('blocks')) @php(the_row())
			
			@php($block_type = get_sub_field('block_type'))
			@php($block_img_id = get_sub_field('block_image'))
			@php($block_img_url = wp_get_attachment_image_url( $block_img_id, 'image-square-block' ))
			@php($block_bg_color = get_sub_field('block_bg_color'))
			@php($block_text_color = get_sub_field('block_text_color'))
			@php($block_subtitle = get_sub_field('block_subtitle'))
			@php($block_logo_id = get_sub_field('block_logo'))
			@php($block_logo_url = wp_get_attachment_image_url( $block_logo_id, 'image-square' ))
			@php($block_title = get_sub_field('block_title'))
			@php($block_intro = get_sub_field('block_intro'))
			@php($block_link = get_sub_field('block_link'))
			@php($block_link_url = get_sub_field('block_link_url'))
			
			
			@if( $block_type == 'block_text')
				<article class="block block__type--text <?php echo ($block_text_color == 'white' ? 'block__text--white' : 'block__text--blue' ) ?>" style="background-color: {{ $block_bg_color }};">
					<div class="block__content">
						<p class="block__subtitle">{{ $block_subtitle }}</p>
						<header class="block__header">
							@if( !empty($block_logo_id) )
								<figure class="block__figure"><img class="block__image" src="{{ $block_logo_url }}" alt="{!! get_the_title($block_logo_id) !!}"></figure>
							@endif
							<h1 class="block__header--title">{!! $block_title !!}</h1>
						</header>
						<div class="block__intro">
							{!! $block_intro !!}
						</div>
						<a class="block__link" href="{{ $block_link_url }}">{{ $block_link }}</a>
					</div>
				</article>
			@endif
			
			@if($block_type == 'block_img')
				<article class="block block__type--img" style="background-image:url('{{ $block_img_url }}');">
				</article>
			@endif
			
			@endwhile
		</section>
		
		@php($tabs = get_field('tab'))
		
		@if($tabs)
			<section class="tabs">
				<div class="center center-small">

					<ul class="tab-links">
						@php( $i = 1 )
						@foreach($tabs as $tab)
							<li class="@if($i == 1) {{'active'}} @endif"><a href="#tab{{$i}}">{{ $tab['tab_title'] }}</a></li>
							@php( $i++ )
						@endforeach
					</ul>
					
					<div class="tab-content">
						
						@php( $i = 1 )
						@foreach($tabs as $tab)
							<div id="tab{{$i}}" class="tab @if($i == 1) {{'active'}} @endif">
								{!! $tab['tab_content'] !!}
							</div>
							@php( $i++ )
						@endforeach
					
					</div>
				</div>
			</section>
		@endif
	@endif
	
	@endwhile
@endsection
