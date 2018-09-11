<?php global $text_domain; ?>
@extends('layouts.app')

@section('content')
	@while(have_posts()) @php the_post() @endphp
	<figure class="header-visual" style="background-image: url('http://placehold.it/1400x950');">
		<div class="header-visual--title">
			<h1>Iedereen <br />in beweging</h1>
		</div>
	</figure>
	<section class="intro">
		<div class="container">
			<article id="post-&lt;?php the_ID(); ?&gt;">
				<header class="intro__article--header">
					<h2>Aan de slag</h2>
				</header>
				<div class="intro__article--content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat nulla facilisis at vero eros et Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat eros et accumsan et iusto odio...</p>
				</div>
			</article>
		</div>
		</div>
	</section>
	<section class="featured">
		<div class="container">
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			
			
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport dit is een langere titel</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
					<a class="featured__content--link" href="#">Lees meer ></a>
				</div>
			</article>
		
		</div>
	</section>
	<section class="banner__visual">
		<div class="container">
			<figure class="banner__visual--figure">
				<img alt="" src="http://placehold.it/1400x520">
			</figure>
		</div>
	</section>
	
	<section class="agenda">
		<div class="container">
			<header class="agenda__header"><h2><?php echo __('Agenda', $text_domain); ?></h2></header>
			<div class="slider">
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event--text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event-text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event-text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event-text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event-text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
				<div class="agenda__event">
					<figure class="agenda__event--img"><img width="290" height="290" src="http://placehold.it/290x290" alt=""></figure>
					<span class="agenda__event--date">24/05</span>
					<div class="agenda__event-text">
						<h3 class="agenda__event--title">Voetbal<br />Tournooi</h3>
						<p class="agenda__event--subtitle">Sportvelden - Breda</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endwhile
@endsection


