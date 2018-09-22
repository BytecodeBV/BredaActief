<?php
$contact_title = get_field('contact_title', 'option');
$contact_subtitle = get_field('contact_subtitle', 'option');
$contact_form = get_field('contact_form', 'option');
$contact_image_id = get_field('contact_image', 'option');
$contact_image_url = wp_get_attachment_image_url($contact_image_id['ID'], 'image-half-block');
?>

<section class="contact">
	<div class="contact__col--left">
		<article class="contact__article">
			<header class="contact__header">
				<h1 class="contact__header--title">{{ $contact_title }}</h1>
				<p class="contact__header--subtitle">{{ $contact_subtitle  }}</p>
			</header>
			{!! $contact_form !!}
		</article>
	</div>
	<div class="contact__col--right" style="background-image:url('{!! $contact_image_url !!}');">
	</div>
</section>