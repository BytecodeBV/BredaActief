<?php $page_id = '';

if( is_front_page() ) :
	$page_id = get_option( 'page_on_front' );
elseif( is_home() ) :
	$page_id = get_option( 'page_for_posts' );
else :
	$page_id = get_the_ID();
endif;

$header_visual_id = get_field('header_visual', $page_id)['ID'];
$header_visual_url = wp_get_attachment_image_url($header_visual_id, 'image-header');
$header_title = get_field('header_visual_title', $page_id);
?>

@if($header_visual_id)
	<figure class="header-visual" style="background-image: url('<?php echo $header_visual_url; ?>');">
		<div class="header-visual--title">
			<h1>{!! $header_title !!}</h1>
		</div>
	</figure>
@else
	<figure class="header-visual" style="background-image: url(<?php echo get_site_url() .'/wp-content/uploads/2018/09/voetballende-jongens.jpeg'; ?>);"></figure>
@endif