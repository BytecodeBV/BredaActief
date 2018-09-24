<?php
$action = get_permalink( get_option( 'page_for_posts' ));
$name = 's_news';
$id = 'search-form-news';

if( isset($_GET['s_news']) && $_GET['s_news'] !== '') {
	$value = $_GET['s_news'];
} else {
	$value = '';
}

?>

<form id="{{ $id }}" role="search" method="get" class="search-form" action="{{ $action }}">
  <div class="search-form__inner">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Zoeken', 'placeholder', $text_domain ); ?>" value="<?php echo $value; ?>" name="{{ $name }}" />
    <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', $text_domain ); ?></span></button>
  </div>
</form>