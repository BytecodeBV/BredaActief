<?php
global $text_domain;
$page_id = get_the_ID();
$feat_pages = get_field('feat_blocks');
$banner_visual = get_field('banner_visual');
?>

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual');
	
	@while(have_posts()) @php the_post() @endphp
	<section class="intro">
		<div class="center">
			<article id="post-{{ get_the_ID() }}">
				<header class="intro__article--header">
					<h2>{{ the_title() }}</h2>
				</header>
				<div class="intro__article--content">
					{{ the_content() }}
				</div>
			</article>
		</div>
	</section>
	@endwhile
	
	@if(have_rows('feat_blocks'))
		<section class="featured">
			<div class="center">
				@while (have_rows('feat_blocks')) @php(the_row())
				<?php
				$block_color = get_sub_field('block_color');
				$post_object = get_sub_field('block');
				?>
				@if( $post_object )
					<?php
					// override $post
					$post = $post_object;
					setup_postdata( $post );
					
					$trimmed = wp_trim_words( get_the_content(), 17, '...' );
					?>
					<article class="featured__item" style="background: {{ $block_color }}">
						<figure class="featured__figure">
							@if ( has_post_thumbnail( $post->ID ))
								{!! get_the_post_thumbnail($post->ID, 'image-feat' ) !!}
							@endif
						</figure>
						<div class="featured__content--wrapper">
							<h2 class="featured__content--title"><span class="featured__content--inner">{{ get_the_title($post->ID) }}</span></h2>
							<p class="featured__content--intro">{{ $trimmed }} <a class="featured__content--link" href="{{ get_the_permalink($post->ID) }}"><?php echo __('Lees meer >', $text_domain); ?></a></p>
						</div>
					</article>
					<?php wp_reset_postdata(); ?>
				@endif
				@endwhile
			</div>
		</section>
	@endif
	
	
	@if( $banner_visual )
		<section class="banner__visual">
			<div class="center">
				<figure class="banner__visual--figure">
					<img src="{{ $banner_visual['url'] }}" alt="{{ $banner_visual['title'] }}">
				</figure>
			</div>
		</section>
	@endif
	
	<?php
	$today = date('Ymd');
	$args_events = array(
		'post_type' => 'agenda',
		'posts_per_page' => 10,
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key' => 'event_date',
				'value' => $today,
				'type' => 'DATE',
				'compare' => '>='
			)
		),
		'meta_key' => 'event_date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
	);
	
	$events = new WP_Query($args_events);
	
	if( $events->have_posts()) :
	?>
	<section class="agenda">
		<header class="agenda__header">
			<div class="center">
				<h2><?php echo __('Agenda', $text_domain); ?></h2>
			</div>
		</header>
		<div class="slider">
			<?php while($events->have_posts() ) : $events->the_post(); ?>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">{{ the_field('event_date') }}</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">{{ the_title() }}</h3>
					<p class="agenda__event--subtitle">{{ the_content() }}</p>
				</div>
			</article>
			<?php endwhile; ?>
		</div>
		<div class="center">
			<a class="show__all" href="#"><?php echo __('Bekijk alles >', $text_domain); ?></a>
		</div>
	</section>
	<?php wp_reset_postdata(); endif; ?>
	
	
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
				<h2><?php echo __('Nieuws', $text_domain); ?></h2>
			</header>
			<div class="news__item-wrapper">
				
				<?php while( $news->have_posts()) : $news->the_post(); ?>
				<?php $trimmed = wp_trim_words( get_the_content(), 23, '...' ); ?>
				<article class="news__item">
					<a href="{{ the_permalink() }}">
						<figure class="news__item--img"><img src="http://placehold.it/290x290" alt=""></figure>
						<div class="news__item--text">
							<h3 class="news__item--title">{{ the_title() }}</h3>
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
