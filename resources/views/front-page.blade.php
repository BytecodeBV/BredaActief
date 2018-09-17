<?php
global $text_domain;
$page_id = get_the_ID();
$feat_pages = get_field('feat_blocks');
$banner_visual = get_field('banner_visual');
?>

@extends('layouts.app')

@section('content')
	
	@include('partials.header-visual');
	
	@while(have_posts()) @php the_post() @endphp
	<section class="intro">
		<div class="center">
			<article id="post-{{ get_the_ID() }}">
				<header class="intro__article--header">
					<h2>{{ the_title() }}</h2>
				</header>
				<div class="intro__article--content">
					{{ the_content() }}
				</div>
			</article>
		</div>
	</section>
	@endwhile
	
	@if(have_rows('feat_blocks'))
		<section class="featured">
			<div class="center">
				@while (have_rows('feat_blocks')) @php(the_row())
					<?php
					$block_color = get_sub_field('block_color');
					$post_object = get_sub_field('block');
					?>
					@if( $post_object )
						<?php
						// override $post
						$post = $post_object;
						setup_postdata( $post );
						
						$trimmed = wp_trim_words( get_the_content(), 17, '...' );
						?>
						<article class="featured__item" style="background: {{ $block_color }}">
							<figure class="featured__figure">
								@if ( has_post_thumbnail( $post->ID ))
									{!! get_the_post_thumbnail($post->ID, 'image-feat' ) !!}
								@endif
							</figure>
							<div class="featured__content--wrapper">
								<h2 class="featured__content--title"><span class="featured__content--inner">{{ get_the_title($post->ID) }}</span></h2>
								<p class="featured__content--intro">{{ $trimmed }} <a class="featured__content--link" href="{{ get_the_permalink($post->ID) }}"><?php echo __('Lees meer >', $text_domain); ?></a></p>
							</div>
						</article>
						<?php wp_reset_postdata(); ?>
					@endif
				@endwhile
			</div>
		</section>
	@endif
	
	
	@if( $banner_visual )
	<section class="banner__visual">
		<div class="center">
			<figure class="banner__visual--figure">
				<img src="{{ $banner_visual['url'] }}" alt="{{ $banner_visual['title'] }}">
			</figure>
		</div>
	</section>
	@endif
	
	<section class="agenda">
		<header class="agenda__header">
			<div class="center">
				<h2><?php echo __('Agenda', $text_domain); ?></h2>
			</div>
		</header>
		<div class="slider">
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
			<article class="agenda__event">
				<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
				<span class="agenda__event--date">24/05</span>
				<div class="agenda__event--text">
					<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
					<p class="agenda__event--subtitle">Sportvelden - Breda</p>
				</div>
			</article>
		</div>
		<div class="center">
			<a class="show__all" href="#">Bekijk alles ></a>
		</div>
	</section>
	
	<section class="news">
		<div class="center">
			<header class="news__header">
				<h2><?php echo __('Nieuws', $text_domain); ?></h2>
			</header>
			<div class="news__item-wrapper">
				<article class="news__item">
					<figure class="news__item--img"><img src="http://placehold.it/290x290" alt=""></figure>
					<div class="news__item--text">
						<h3 class="news__item--title">Sportdag groot succes!</h3>
						<p class="news__item--intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...</p>
					</div>
				</article>
				<article class="news__item">
					<figure class="news__item--img"><img src="http://placehold.it/290x290" alt=""></figure>
					<div class="news__item--text">
						<h3 class="news__item--title">Sportdag groot succes!</h3>
						<p class="news__item--intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...</p>
					</div>
				</article>
				<article class="news__item">
					<figure class="news__item--img"><img src="http://placehold.it/290x290" alt=""></figure>
					<div class="news__item--text">
						<h3 class="news__item--title">Sportdag groot succes!</h3>
						<p class="news__item--intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...</p>
					</div>
				</article>
				<article class="news__item">
					<figure class="news__item--img"><img src="http://placehold.it/290x290" alt=""></figure>
					<div class="news__item--text">
						<h3 class="news__item--title">Sportdag groot succes!</h3>
						<p class="news__item--intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...</p>
					</div>
				</article>
			</div>
			<a class="show__all" href="#">Bekijk alles ></a>
		</div>
	</section>
	<section class="contact">
		<div class="contact__col--left">
			<article class="contact__article">
				<header class="contact__header">
					<h2 class="contact__header--title">Vragen</h2>
					<p class="contact__header--subtitle">Neem contact met ons op</p>
				</header>
				<form action="#">
					<div class="group">
						<div class="field-wrapper left">
							<label for="">Naam</label>
							<input type="text" name="name">
						</div>
						<div class="field-wrapper right">
							<label for="">E-mail</label>
							<input type="email" name="email">
						</div>
					</div>
					<div class="field-wrapper field-textarea">
						<label for="">Hoe kunnen we je helpen</label>
						<textarea name="" id="" cols="30" rows="10"></textarea>
					</div>
					<div class="field-wrapper field-submit group">
						<input type="submit" value="versturen >">
					</div>
				</form>
			</article>
		</div>
		<div class="contact__col--right" style="background-image:url('http://placehold.it/600x750');">
		</div>
	</section>

@endsection
