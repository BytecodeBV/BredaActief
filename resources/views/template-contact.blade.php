{{--
  Template Name: Contact
--}}

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
		
		<p>Wie is wie</p>
	
	@include('partials.content-contact-option')
	
	@endwhile
@endsection
