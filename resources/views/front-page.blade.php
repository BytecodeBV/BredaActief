<?php
global $text_domain;
$page_id = get_the_ID();
?>

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual')
	
	@while(have_posts()) @php the_post() @endphp
		@include('partials.content-intro')
	@endwhile
	
	@include('partials.content-feat-blocks')
	
	@php
	$banner_visual_id = get_field('banner_visual')['ID'];
	$banner_visual = wp_get_attachment_image($banner_visual_id, 'image-banner');
	@endphp
	
	@if( $banner_visual_id )
		<section class="banner__visual">
			<figure class="banner__visual--figure">
				{!! $banner_visual !!}
			</figure>
		</section>
	@endif
	
	@include('partials.content-agenda')
	
	<?php
	$args_news = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'order' => 'DESC',
		'orderby' => 'date'
	);
	
	$news = new WP_Query($args_news);
	
	if( $news->have_posts()) :
	?>
	<section class="news">
		<div class="center">
			<header class="news__header">
				<h1><?php echo __('Nieuws', $text_domain); ?></h1>
			</header>
			<div class="news__item-wrapper">
				
				<?php while( $news->have_posts()) : $news->the_post(); ?>
				<?php
					$trimmed = wp_trim_words( get_the_content(), 23, '...' );
					$post_thumb_id = get_post_thumbnail_id();
					$post_thumb = wp_get_attachment_image($post_thumb_id, 'image-feat');
				?>
				<article class="news__item">
					<a href="{{ the_permalink() }}">
						<figure class="news__item--img">{!! $post_thumb !!} </figure>
						<div class="news__item--text">
							<h2 class="news__item--title">{{ the_title() }}</h2>
							<p class="news__item--intro">{{ $trimmed }}</p>
						</div>
					</a>
				</article>
				<?php endwhile; ?>
				
			</div>
			<a class="show__all" href="#"><?php echo __('Bekijk alles >', $text_domain); ?></a>
		</div>
	</section>
	<?php wp_reset_postdata(); endif; ?>
	
	@include('partials.content-contact')

@endsection
