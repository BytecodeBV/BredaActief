<article @php post_class() @endphp>
  <div class="center">
    <header>
      <h3 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
