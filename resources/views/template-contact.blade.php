{{--
  Template Name: Contact
--}}

@php global $text_domain; @endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	@while(have_posts()) @php the_post() @endphp
	
	<section class="intro">
		<div class="center center-small">
			<article @php post_class() @endphp>
				<header><h2 class="entry-title">GEGEVENS</h2></header>
				<ul>
					<li>
						<h3>Postadres</h3>
						<p>Postbus 5765 <br />
							4801RB Breda
						</p>
					</li>
					<li>
						<h3>Bezoekadres</h3>
						<p>Heerbaan 100 <br />
							4817 NL Breda
						</p>
					</li>
					<li>
						<h3>Contact</h3>
						<p><a href="mailto:info@breda-actief.nl">info@breda-actief.nl</a> <br />
							<a href="tel:07652335655">076 523 356 55</a>
						</p>
					</li>
				</ul>
			</article>
		</div>
	</section>
	
	@include('partials.content-contact')
	
	<section class="employee__section">
		<header class="employee__header">
			<div class="center">
				<h2><?php echo __('Wie is wie', $text_domain); ?></h2>
			</div>
		</header>
		<div class="employee__wrapper">
			<div class="center">
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/employee.png'; ?>" alt="">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">Voornaam <br /> Achternaam</h3>
							<p class="employee__info--job">Functie</p>
						</div>
						<div class="employee__quote">
							<p>"Bij mij draait alles om passie! passie voor sport en bewegen, passie voor vrijwillige inzet en passie voor communicatie en marketing."</p>
						</div>
						<div class="employee__contact">
							<p class="employee__contact--phone"><a href="tel:0640746651">06 40 74 66 51</a></p>
							<p class="employee__contact--email"><a href="mailto:e.stadhouders@breda-actief.nl">e.stadhouders@breda-actief.nl</a></p>
							<ul class="employee__contact--social">
								<?php echo '<li class="mail"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>'; ?>
								<?php echo '<li class="facebook"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>'; ?>
								<?php echo '<li class="linkedin"><a href="#" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>'; ?>
							</ul>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>
	
	@include('partials.content-contact-option')
	
	@endwhile
@endsection
