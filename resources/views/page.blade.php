@php global $text_domain @endphp

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	
	@while(have_posts()) @php the_post() @endphp
	
		@include('partials.content-intro')
		
		@include('partials.content-blocks')
	
	@endwhile
	
	@include('partials.content-agenda')

@endsection
