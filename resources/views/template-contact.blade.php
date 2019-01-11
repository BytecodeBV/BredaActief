{{--
  Template Name: Contact
--}}

@php
	global $text_domain;
	$contact_header = get_field('adres_header');
	$contact_col_1 = get_field('adres_1');
@endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	@while(have_posts()) @php the_post() @endphp

	@if( !empty($contact_header) && !empty($contact_col_1) )
	<section id="scroll-to" class="intro">
		<div class="center center-small">
			<article @php post_class() @endphp>
				<header><h2 class="entry-title">{!! $contact_header !!}</h2></header>
				{!! $contact_col_1 !!}
			</article>
		</div>
	</section>
	@endif
	
	@include('partials.content-contact')
	
	@php
		$args = array(
			'post_type' => 'employee',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC'
		);
		
		$employee_query = new WP_Query($args);
	@endphp
	
	@if($employee_query->have_posts())
		<section class="employee__section">
			<header class="employee__header">
				<div class="center">
					<h2>{!! __('Wie is wie', $text_domain) !!}</h2>
				</div>
			</header>
			<div class="employee__wrapper">
				<div class="center">
					@while($employee_query->have_posts()) @php($employee_query->the_post())
					
					@php($first_name = get_field('first_name'))
					@php($last_name = get_field('last_name'))
					@php($job_title = get_field('job_title'))
					@php($phone = get_field('phone'))
					@php($phone_number = str_replace(' ', '', $phone))
					@php($email = get_field('email'))
					@php($facebook = get_field('facebook'))
					@php($linkedin = get_field('linkedin'))
					@php($post_thumb = get_post_thumbnail_id())
					@php($post_thumb_url = wp_get_attachment_image_src($post_thumb, 'image-feat'))
					
					<article class="employee">
						<figure class="employee__photo">
							<img src="{!! $post_thumb_url[0] !!}" alt="{!! get_the_title($post_thumb) !!}">
						</figure>
						<div class="employee__slide">
							<div class="employee__info">
								<h3 class="employee__info--name">{{ $first_name }} <br /> {{ $last_name }}</h3>
								<p class="employee__info--job">{{ $job_title }}</p>
							</div>
							<div class="employee__slide--out">
								<div class="employee__quote">
									{{ the_content() }}
								</div>
								<div class="employee__contact">
									<p class="employee__contact--phone"><a href="tel:{{ $phone_number }}">{{ $phone }}</a></p>
									<p class="employee__contact--email"><a href="mailto:{{$email}}">{{ $email }}</a></p>
									<ul class="employee__contact--social">
										@if(!empty($facebook))
											<li class="facebook"><a href="{{ $facebook }}" target="_blank">{!! file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg') !!}</a></li>
										@endif
										
										@if(!empty($linkedin))
											<li class="linkedin"><a href="{{ $linkedin }}" target="_blank">{!! file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg') !!}</a></li>
										@endif
										
									</ul>
								</div>
							</div>
						</div>
					</article>
					@endwhile @php(wp_reset_postdata())
				</div>
			</div>
		</section>
	@endif
	
	@include('partials.content-contact-option')
	
	@endwhile
@endsection
