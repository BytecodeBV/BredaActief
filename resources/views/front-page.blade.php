<?php
global $text_domain;
$page_id = get_the_ID();
?>

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual')
	
	@while(have_posts()) @php the_post() @endphp
	<section class="intro">
		<div class="center">
			<article id="post-{{ get_the_ID() }}">
				<header class="intro__article--header">
					<h1>{{ the_title() }}</h1>
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
							<h1 class="featured__content--title"><span class="featured__content--inner">{{ get_the_title($post->ID) }}</span></h1>
							<p class="featured__content--intro">{{ $trimmed }} <a class="featured__content--link" href="{{ get_the_permalink($post->ID) }}"><?php echo __('Lees meer >', $text_domain); ?></a></p>
						</div>
					</article>
					<?php wp_reset_postdata(); ?>
				@endif
				@endwhile
			</div>
		</section>
	@endif
	
	<?php
	$banner_visual_id = get_field('banner_visual')['ID'];
	$banner_visual = wp_get_attachment_image($banner_visual_id, 'image-banner');
	?>
	
	@if( $banner_visual_id )
		<section class="banner__visual">
			<figure class="banner__visual--figure">
				{!! $banner_visual !!}
			</figure>
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
				<h1><?php echo __('Agenda', $text_domain); ?></h1>
			</div>
		</header>
		<div class="slider">
			<?php while($events->have_posts() ) : $events->the_post(); ?>
			<?php
				$post_thumb_id = get_post_thumbnail_id();
				$post_thumb = wp_get_attachment_image($post_thumb_id, 'image-feat');
				?>
			<article class="agenda__event">
				<figure class="agenda__event--img">{!! $post_thumb !!}</figure>
				<span class="agenda__event--date" style="background-color: {{ the_field('event_date_color') }};">{{ the_field('event_date') }}</span>
				<div class="agenda__event--text">
					<h2 class="agenda__event--title">{{ the_title() }}</h2>
					<p class="agenda__event--subtitle">{{ the_field('event_subtitle')  }}</p>
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
