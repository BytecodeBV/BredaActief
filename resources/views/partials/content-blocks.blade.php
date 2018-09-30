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