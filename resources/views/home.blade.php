<?php
global $text_domain;
$page_id = get_option('page_for_posts');

?>

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual')
	
	<?php if(have_posts()) : ?>
	<section class="news">
		<div class="center">
			<header class="news__header">
				<h2>{{ get_the_title($page_id) }}</h2>
				@include('partials.searchform')
			</header>
			<div class="news__item-wrapper">
				<?php while( have_posts()) : the_post(); ?>
				@include('partials.content-news')
				<?php endwhile; ?>
				
				<?php
				the_posts_pagination(
					array(
						'prev_text'          => '< <span class="screen-reader-text">' . __( 'Previous page', $text_domain ) . '</span>',
						'next_text'          => '> <span class="screen-reader-text">' . __( 'Next page', $text_domain ) . '</span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', $text_domain ) . ' </span>',
					)
				);
				?>
			</div>
		</div>
	</section>
	<?php wp_reset_postdata(); endif; ?>

@endsection
