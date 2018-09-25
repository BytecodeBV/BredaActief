@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	
	@while(have_posts()) @php the_post() @endphp
	@include('partials.content-intro')
	
	<?php
	
	// check if the flexible content field has rows of data
	if( have_rows('content_blokken') ):
		
		// loop through the rows of data
		while ( have_rows('content_blokken') ) : the_row();
			
			
			switch ( get_row_layout() ) {
				case 'text_block_and_bg_color':
					
					render_text_block_and_bg();
					
					break;
				case 'text_block_and_image':
					
					render_text_block_and_image();
					
					
					break;
				
			}
			
		
		endwhile;
	
	else :
		
		// no layouts found
	
	endif;
	
	?>
	
	@endwhile


@endsection


<?php
	function render_text_block_and_bg() {
		$text_block = get_sub_field('text_block');
		$bg_color = get_sub_field('bg_color');
		$banner_img = get_sub_field('banner_image');
	}
	
	function render_text_block_and_image() {
		$text_block = get_sub_field('text_block');
		$image = get_sub_field('image');
	}
?>