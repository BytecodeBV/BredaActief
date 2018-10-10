{{--
  Template Name: Contact
--}}

@php global $text_domain; @endphp

<?php
	$contact_header = get_field('adres_header');
	$contact_col_1 = get_field('adres_1');
?>

@extends('layouts.app')

@section('content')
	@include('partials.header-visual')
	@while(have_posts()) @php the_post() @endphp
	
	<section id="scroll-to" class="intro">
		<div class="center center-small">
			<article @php post_class() @endphp>
				<header><h2 class="entry-title"><?php echo $contact_header; ?></h2></header>
				<?php echo $contact_col_1; ?>
			</article>
		</div>
	</section>
	
	@include('partials.content-contact')
	
	<?php
		$args = array(
			'post_type' => 'employee',
			'posts_per_page' => -1,
		);
		
		$employee_query = new WP_Query($args);
	
	if($employee_query->have_posts()) : ?>
	<section class="employee__section">
		<header class="employee__header">
			<div class="center">
				<h2><?php echo __('Wie is wie', $text_domain); ?></h2>
			</div>
		</header>
		<div class="employee__wrapper">
			<div class="center">
				<?php while($employee_query->have_posts()) : $employee_query->the_post();
					$first_name = get_field('first_name');
					$last_name = get_field('last_name');
					$job_title = get_field('job_title');
					$phone = get_field('phone');
					$phone_number = str_replace(' ', '', $phone);
					$email = get_field('email');
					$facebook = get_field('facebook');
					$linkedin = get_field('linkedin');
					$post_thumb = get_post_thumbnail_id();
					$post_thumb_url = wp_get_attachment_image_src($post_thumb, 'image-feat');
				?>
				<article class="employee">
					<figure class="employee__photo">
						<img src="<?php echo $post_thumb_url[0]; ?>" alt="<?php echo get_the_title($post_thumb); ?>">
					</figure>
					<div class="employee__slide">
						<div class="employee__info">
							<h3 class="employee__info--name">{{ $first_name }} <br /> {{ $last_name }}</h3>
							<p class="employee__info--job">{{ $job_title }}</p>
						</div>
						<div class="employee__slide--out">
							<div class="employee__quote">
								{{ the_content() }}
							</div>
							<div class="employee__contact">
								<p class="employee__contact--phone"><a href="tel:{{ $phone_number }}">{{ $phone }}</a></p>
								<p class="employee__contact--email"><a href="mailto:{{$email}}">{{ $email }}</a></p>
								<ul class="employee__contact--social">
									<?php
										if(!empty($email)):
											echo '<li class="mail"><a href="{{ $email }}" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_mail.svg').'</a></li>';
										endif;
									
										if(!empty($facebook)):
											echo '<li class="facebook"><a href="{{ $facebook }}" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_fb.svg').'</a></li>';
										endif;
										
										if(!empty($linkedin)):
											echo '<li class="linkedin"><a href="{{ $linkedin }}" target="_blank">'.file_get_contents(get_template_directory_uri() . '/assets/images/icon_linkedin.svg').'</a></li>';
										endif;
									 ?>
								</ul>
							</div>
						</div>
					</div>
				</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	
	@include('partials.content-contact-option')
	
	@endwhile
@endsection
