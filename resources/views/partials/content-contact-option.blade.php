@php
$page_id = 'option';
$show_block = get_field('show_contact_blok_option', $page_id);
$contact_title = get_field('contact_title_option', $page_id);
$contact_subtitle = get_field('contact_subtitle_option', $page_id);
$contact_form = get_field('contact_form_option', $page_id);
$contact_image_id = get_field('contact_image_option', $page_id);
$contact_image_url = wp_get_attachment_image_url($contact_image_id['ID'], 'image-half-block');
$contact_bg = get_field('contact_bg_option', $page_id);
$contact_text_color = get_field('contact_text_color_option',$page_id);
$contact_reverse = get_field('contact_reverse_option', $page_id);
@endphp

@if($show_block[0] == 'show')
<section class="section-contact {!! $contact_reverse[0] == 'reverse' ? 'reverse' : '' !!}" style="background: {!! $contact_bg !!}">
	<div class="contact__col--left">
		<article class="contact__article" style="color: {!! $contact_text_color !!}">
			<header class="contact__header">
				<h2 class="contact__header--title">{!! $contact_title !!}</h2>
				<div class="contact__header--subtitle">{!! $contact_subtitle !!}</div>
			</header>
			<div class="contact__content">
				{!! $contact_form !!}
			</div>
		</article>
	</div>
	<div class="contact__col--right" style="background-image:url('{!! $contact_image_url !!}');">
	</div>
</section>
@endif