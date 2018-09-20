<?php
$header_visual_id = get_field('header_visual')['ID'];
$header_visual_url = wp_get_attachment_image_url($header_visual_id, 'image-header');
$header_title = get_field('header_visual_title');
?>

@if($header_visual_id)
	<figure class="header-visual" style="background-image: url('{{ $header_visual_url }}');">
		<div class="header-visual--title">
			<h1>{!! $header_title !!}</h1>
		</div>
	</figure>
@endif