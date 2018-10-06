@php global $text_domain @endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	
	<div id="scroll-to" class="archive__page-header">
		<div class="center">
			<h1>Aankomende <br />activiteiten</h1>
		</div>
	</div>
	
	<?php
	$today = date('Ymd');
	$today_plus_three_months = date('Ymd', strtotime("+3 months", strtotime($today)));
	
	$args = array(
		'post_type' => 'agenda',
		'posts_per_page' => -1,
		'orderby'	=> 'meta_value_num',
		'order'		=> 'ASC',
		'meta_query' => array(
			'relation' => 'AND',
			array(
				'key'		=> 'event_date',
				'compare'	=> '>=',
				'value'		=> $today,
			),
			array(
				'key'		=> 'event_date',
				'compare'	=> '<=',
				'value'		=> $today_plus_three_months,
			)
		),
	);
	
	$event_query = new WP_Query($args);
	?>
	
	<section class="agenda__archive">
		<?php
		for ($i = 0; $i <= 2; $i++) { ?>
		<div class="agenda__archive--row row-<?php echo $i; ?>">
			<div class="center group">
				<div class="agenda__archive--month">
					<span class="month-name"><?php $month = date('M', strtotime('+'.$i.' months')); echo $month; ?></span>
				</div>
				
				<?php if($event_query->have_posts()) : ?>
				<div class="agenda__archive--slider">
					<?php while($event_query->have_posts()) : $event_query->the_post();
					
					$event_month = date("M",strtotime(get_field('event_date', false, false)));
					
					if ($event_month == $month ) : ?>
					
					@include('partials.content-agenda-block')
					
					
					<?php endif; ?>
					
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php
		}
		?>
	</section>
	
	<?php
	$more_block = get_field('more_block', 'option');
	
	if( $more_block ): ?>
	<section class="more__block text__color--light">
		<div class="center center-small">
			<article class="more__block--article">
				<header class="more__block--header">
					<p class="more__block--subtitle"><?php echo $more_block['more_subtitle']; ?></p>
					<h2 class="more__block--title"><?php echo $more_block['more_title']; ?></h2>
				</header>
				<?php
				$post_object = $more_block['more_page'];
				
				if($post_object) :
				
				$post = $post_object;
				setup_postdata($post);
				?>
				<div class="more__block--excerpt">
					<p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
					<p class="group"><a class="show__all more__block--link right" href="{{ the_permalink() }}"><?php echo __('Meer informatie', $text_domain ); ?></a></p>
				</div>
				<?php wp_reset_postdata(); endif; ?>
			</article>
		</div>
	</section>
	<?php endif; ?>
@endsection
