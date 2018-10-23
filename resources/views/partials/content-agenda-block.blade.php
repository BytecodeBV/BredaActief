@php
	$post_thumb_id = get_post_thumbnail_id();
	$post_thumb = wp_get_attachment_image($post_thumb_id, 'image-feat');
@endphp

<article class="agenda__event">
	<a href="{{ the_permalink() }}">
		<figure class="agenda__event--img">{!! $post_thumb !!}</figure>
		<span class="agenda__event--date" style="background-color: {{ the_field('event_date_color') }};">{{ the_field('event_date') }}</span>
		<div class="agenda__event--text">
			<h3 class="agenda__event--title">{{ the_title() }}</h3>
			<p class="agenda__event--subtitle">{{ the_field('event_subtitle')  }}</p>
		</div>
	</a>
</article>