@extends('layouts.app')

@section('content')
	@while(have_posts()) @php the_post() @endphp
	<figure class="header-visual" style="background-image: url('http://placehold.it/1400x950');"></figure>
	<section class="intro">
		<div class="container">
			<article id="post-&lt;?php the_ID(); ?&gt;">
				<header class="intro__article-header">
					<h1>Aan de slag</h1>
				</header>
				<div class="intro__article-content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat nulla facilisis at vero eros et Lorem ipsum dolor sit amet, consectetuer adipiscing elisequat, vel illum dolore eu feugiat eros et accumsan et iusto odio...</p>
				</div>
			</article>
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
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport dit is een langere titel</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
			<article class="featured__item">
				<figure class="featured__figure">
					<img alt="" src="http://placehold.it/640x640">
				</figure>
				<div class="featured__content--wrapper">
					<h2 class="featured__content--title">Ik zoek een sport</h2>
					<p class="featured__content--intro">Je kunt op allerlei manieren sporten en bewegen via Breda Actief. We hebben voor ieder wat wils</p>
				</div>
			</article>
		</div>
	</section>
	<section class="banner__visual">
		<div class="container">
			<figure class="banner__visual-figure">
				<img alt="" src="http://placehold.it/1400x520">
			</figure>
		</div>
	</section>
	@endwhile
@endsection


