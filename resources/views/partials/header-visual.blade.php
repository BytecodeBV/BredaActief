<?php
$header_visual = get_field('header_visual');
$header_title = get_field('header_visual_title');
?>

@if($header_visual)
	<figure class="header-visual" style="background-image: url('{{$header_visual['url']}}');">
		<div class="header-visual--title">
			<h1>{!! $header_title !!}</h1>
		</div>
	</figure>
@endif