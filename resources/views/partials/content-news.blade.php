@php
$trimmed = '';

if( is_front_page() ) {
	$trimmed = wp_trim_words( get_the_content(), 23, '...' );
} else {
	$trimmed = wp_trim_words( get_the_content(), 38, '...' );
}

$post_thumb_id = get_post_thumbnail_id();
$post_thumb = wp_get_attachment_image($post_thumb_id, 'image-feat');
@endphp
<article class="news__item">
	<figure class="news__item--img">
		<a href="{{ the_permalink() }}">{!! $post_thumb !!}</a>
	</figure>
	<div class="news__item--text">
		<a href="{{ the_permalink() }}">
			<h3 class="news__item--title">{{ the_title() }}</h3>
			<p class="news__item--intro">{{ $trimmed }}</p>
		</a>
	</div>
</article>