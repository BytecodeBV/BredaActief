@php global $text_domain @endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	
	@while(have_posts()) @php the_post() @endphp
	@include('partials.content-intro')
	
	<?php
	if( have_rows('content_blokken') ):

		while ( have_rows('content_blokken') ) : the_row();
			
			switch ( get_row_layout() ) {
				case 'text_block_and_bg_color':
					
					echo render_text_block_bg();
					
					break;
				case 'text_block_and_image':
					
					echo render_text_block();
					
					break;
			}
			
		endwhile;
	
	else :
		// no layouts found
	endif;
	?>
	
	@endwhile
	
	@include('partials.content-agenda')

@endsection


<?php
	function render_text_block_bg() {
		$text_block = get_sub_field('text_block');
		$bg_color = get_sub_field('bg_color');
		$banner_img = get_sub_field('banner_image');
		$text_color = get_sub_field('text_color');

		$html = '';
		$html .= '<section class="flexible-block block__text--bg text__color--'.$text_color.'" style="background-color: '.$bg_color.'">';
			if( !empty($banner_img)) :
			$html .= '<figure class="block__text--banner"><img src="'.$banner_img['url'].'" alt="'.$banner_img['alt'].'"></figure>';
			endif;
			$html .= '<article class="block__text--article page-article">';
				$html .= '<div class="center center-small">';
					$html .= $text_block;
				$html .= '</div>';
			$html .= '</article>';
		$html .= '</section>';
		
		return $html;
	}
	
	function render_text_block() {
		$text_block = get_sub_field('text_block');
		$image = get_sub_field('image');
		$text_color = get_sub_field('text_color');
		
		$html = '';
		$html .= '<section class="flexible-block block__text text__color--'.$text_color.'">';
			$html .= '<div class="center center-small">';
			if(!empty($image)) :
				$html .= '<figure class="block__text--figure"><img src="http://placehold.it/490x440" alt=""></figure>';
			endif;
				$html .= '<article class="block__text--article page-article">';
					$html .= $text_block;
				$html .= '</article>';
			$html .= '</div>';
		$html .= '</section>';
		
		return $html;
	}
?>

