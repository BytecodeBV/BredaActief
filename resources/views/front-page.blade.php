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
		<div class="center">
			<article id="post-&lt;?php the_ID(); ?&gt;">
				<header class="intro__article--header">
					<h2>Aan de slag</h2>
				</header>
				<div class="intro__article--content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat nulla facilisis at vero eros et Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat eros et accumsan et iusto odio...</p>
				</div>
			</article>
		</div>
	</section>
	<section class="featured">
		<div class="center">
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
		<div class="center">
			<figure class="banner__visual--figure">
				<img alt="" src="http://placehold.it/1400x520">
			</figure>
		</div>
	</section>
	
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
		<a class="show__all" href="#">Bekijk alles ></a>
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
	@endwhile
@endsection
