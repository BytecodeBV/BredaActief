@php global $text_domain @endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	
	<div class="archive__page-header">
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
@endsection
