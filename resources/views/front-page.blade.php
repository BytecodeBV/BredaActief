@extends('layouts.app')

@section('content')
	@while(have_posts()) @php the_post() @endphp
	<figure class="header-visual" style="background-image: url('http://placehold.it/1400x950');">
		<div class="header-visual--title">
			<p>Iedereen <br />in beweging</p>
		</div>
	</figure>
	<section class="intro">
		<div class="container">
			<article id="post-&lt;?php the_ID(); ?&gt;">
				<header class="intro__article--header">
					<h1>Aan de slag</h1>
				</header>
				<div class="intro__article--content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat nulla facilisis at vero eros et Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat eros et accumsan et iusto odio...</p>
				</div>
			</article>
		</div>
		</div>
	</section>
	
	<style>
		.intro {
			position: relative;
			width: 100%;
			margin: 0 auto;
			overflow: hidden;
			padding: 20px;
			text-align: center;
		}
		.intro:after {
			content: '';
			position: absolute;
			width: 1100%; height: 1100%;
			top: 20px; left: -500%;
			background: rgba(255,255,255,.8);
			transform-origin: 54% 0;
			transform: rotate(45deg);
			z-index: -1;
		}
	</style>
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
	@endwhile
@endsection


