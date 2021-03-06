@php
global $text_domain;
$page_id = get_option('page_for_posts');
@endphp

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual')
	
	@php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
			'paged' => $paged,
		);
	@endphp
	
	@php
		if (isset($_GET['s_news']) && $_GET['s_news'] !== '') {
			$args['s'] = $_GET['s_news'];
		}
		$searchQuery = new WP_Query( $args );
	@endphp
	
	@if($searchQuery->have_posts())
		<section class="news" id="scroll-to">
			<div class="center">
				<header class="news__header">
					<h2>{{ get_the_title($page_id) }}</h2>
					@include('partials.searchform-news')
				</header>
				<div class="news__item-wrapper">
					@while($searchQuery->have_posts()) @php($searchQuery->the_post())
					@include('partials.content-news')
					@endwhile
					<div class="pagination">
						{!! paginate_links( array(
							'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							'total'        => $searchQuery->max_num_pages,
							'current'      => max( 1, get_query_var( 'paged' ) ),
							'format'       => '?paged=%#%',
							'show_all'     => false,
							'type'         => 'plain',
							'end_size'     => 2,
							'mid_size'     => 1,
							'prev_next'    => true,
							'prev_text'    => sprintf( '<i></i> %1$s', __( 'Vorige', $text_domain ) ),
							'next_text'    => sprintf( '%1$s <i></i>', __( 'Volgende', $text_domain ) ),
							'add_args'     => false,
							'add_fragment' => '',
						)) !!}
					</div>
				</div>
			</div>
		</section>
		@php(wp_reset_postdata())
	@endif
@endsection
