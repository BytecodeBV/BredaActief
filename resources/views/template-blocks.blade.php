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
	
	@if(have_rows('blocks'))
	<section class="blocks">
		@while (have_rows('blocks')) @php(the_row())
		
			@php($block_type = get_sub_field('block_type'))
			@php($block_img = get_sub_field('block_image'))
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
			<article class="block block__type--img">
				<figure class="block__figure"><img class="block__image" src="http://placehold.it/1000x1000" alt=""></figure>
			</article>
			@endif
			
		@endwhile
	</section>
	
	<section class="tabs">
		<ul class="tab-links">
			<li class="active"><a href="#tab1">Tab #1</a></li>
			<li><a href="#tab2">Tab #2</a></li>
			<li><a href="#tab3">Tab #3</a></li>
		</ul>
		
		<div class="tab-content">
			<div id="tab1" class="tab active">
				<p>Tab #1 content goes here!</p>
				<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
			</div>
			
			<div id="tab2" class="tab">
				<p>Tab #2 content goes here!</p>
				<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
			</div>
			
			<div id="tab3" class="tab">
				<p>Tab #3 content goes here!</p>
				<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
			</div>
			
		</div>
	</section>
	@endif
	
	@endwhile
@endsection
