@if(have_rows('feat_blocks'))
	<section class="featured">
		<div class="center">
			@while (have_rows('feat_blocks')) @php(the_row())
			
			@php($block_color = get_sub_field('block_color'))
			@php($post_object = get_sub_field('block'))
			
				@if( $post_object )
					@php($post = $post_object)
					@php(setup_postdata( $post))
					@php($trimmed = wp_trim_words( get_the_content(), 12, '...' ))
					<article class="featured__item" style="background: {{ $block_color }}">
						<figure class="featured__figure">
							@if ( has_post_thumbnail( $post->ID ))
								{!! get_the_post_thumbnail($post->ID, 'image-feat' ) !!}
							@endif
						</figure>
						<div class="featured__content--wrapper">
							<h3 class="featured__content--title"><span class="featured__content--inner">{{ get_the_title($post->ID) }}</span></h3>
							<p class="featured__content--intro">{{ $trimmed }} <a class="featured__content--link" href="{{ get_the_permalink($post->ID) }}"><?php echo __('Lees meer >', $text_domain); ?></a></p>
						</div>
					</article>
					@php(wp_reset_postdata())
				@endif
				
			@endwhile
		</div>
	</section>
@endif