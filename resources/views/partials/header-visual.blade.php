@php
	global $text_domain;
	$page_id = '';
	
	if( is_front_page() ) :
		$page_id = get_option( 'page_on_front' );
	elseif( is_home() ) :
		$page_id = get_option( 'page_for_posts' );
	elseif(is_post_type_archive('agenda')) :
		$page_id = 'option';
	else :
		$page_id = get_the_ID();
	endif;
	
	$header_visual_id = get_field('header_visual', $page_id)['ID'];
	$header_overlay_color = get_field('header_visual_overlay_color', $page_id);
	
	if (!empty($header_visual_id)) {
		$header_visual_url = wp_get_attachment_image_url($header_visual_id, 'image-header');
	} else {
		$header_visual_url = get_site_url() .'/wp-content/uploads/2018/09/voetballende-jongens.jpeg';
	}
	
	$header_title = get_field('header_visual_title', $page_id);
@endphp

<figure class="header-visual @php echo !empty($header_overlay_color) ? $header_overlay_color : ''; @endphp" style="background-image: url('{!! $header_visual_url !!}');">
	
	<div class="header-visual--title">
		@if(!empty($header_title))
			<h1>{!! $header_title !!}</h1>
		@elseif( is_404() )
			<h1>{!! __('404', $text_domain) !!}</h1>
		@endif
	</div>
	
	<a href="#scroll-to" class="header-visual--scroll">
		{!! file_get_contents( get_template_directory_uri() . '/assets/images/header_arrow.svg') !!}
	</a>
</figure>
