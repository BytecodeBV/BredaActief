<section class="intro">
	<div class="center center-small">
		<article id="post-{{ get_the_ID() }}" class="page-article">
			<header class="intro__article--header">
				<h1>{{ the_title() }}</h1>
			</header>
			<div class="intro__article--content">
				{{ the_content() }}
			</div>
		</article>
	</div>
</section>