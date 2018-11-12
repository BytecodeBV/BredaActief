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
			<div class="center center-small">
				<ul class="tab-links">
					<li class="active"><a href="#tab1">Missie</a></li>
					<li><a href="#tab2">Visie</a></li>
					<li><a href="#tab3">Ambitie</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="tab1" class="tab active">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
					</div>
					
					<div id="tab2" class="tab">
						<p>Breda Actief wil de spil zijn binnen sport en vrijwilligerswerk in Breda. Breda Actief inspireert, stimuleert, adviseert en faciliteert alle inwoners en organisaties tot deelname aan en ontwikkeling van sport en vrijwilligerswerk. Dit doen we door vraag en aanbod te verbinden, door te adviseren over mogelijkheden, door proactief in te spelen op ontwikkelingen en kansen, door activiteiten en ontmoetingen te organiseren en te faciliteren, en door cursussen en workshops te geven, door op te leiden en te begeleiden.</p>
					</div>
					
					<div id="tab3" class="tab">
						<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
					</div>
				
				</div>
			</div>
		</section>
	@endif
	
	@endwhile
@endsection
