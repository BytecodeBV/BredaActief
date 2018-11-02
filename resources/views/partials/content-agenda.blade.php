@php
	global $text_domain;
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
@endphp

@if( $events->have_posts())
	<section class="agenda">
		<header class="agenda__header">
			<div class="center">
				<h2>{!! __('Agenda', $text_domain) !!}</h2>
			</div>
		</header>
		<div class="slider-wrapper">
			<div class="center">
				<div class="slider">
					@while($events->have_posts() ) @php $events->the_post() @endphp
					@include('partials.content-agenda-block')
					@endwhile
				</div>
			</div>
		</div>
		<div class="center">
			<a class="show__all" href="#">{!! __('Bekijk alles', $text_domain) !!}</a>
		</div>
	</section>
	@php wp_reset_postdata() @endphp
@endif

