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
?>

@if( $events->have_posts())
<section class="agenda">
	<header class="agenda__header">
		<div class="center">
			<h1><?php echo __('Agenda', $text_domain); ?></h1>
		</div>
	</header>
	<div class="slider">
		@while($events->have_posts() ) @php $events->the_post() @endphp

		@php
		$post_thumb_id = get_post_thumbnail_id();
		$post_thumb = wp_get_attachment_image($post_thumb_id, 'image-feat');
		@endphp
	
		<article class="agenda__event">
			<figure class="agenda__event--img">{!! $post_thumb !!}</figure>
			<span class="agenda__event--date" style="background-color: {{ the_field('event_date_color') }};">{{ the_field('event_date') }}</span>
			<div class="agenda__event--text">
				<h2 class="agenda__event--title">{{ the_title() }}</h2>
				<p class="agenda__event--subtitle">{{ the_field('event_subtitle')  }}</p>
			</div>
		</article>
		@endwhile
	</div>
	<div class="center">
		<a class="show__all" href="#"><?php echo __('Bekijk alles >', $text_domain); ?></a>
	</div>
</section>
@php wp_reset_postdata() @endphp
@endif

