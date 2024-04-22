<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
    $current_title = wp_get_document_title();

    // FOR Main Page
    if ( is_home() ) {
      $home_title = crb_get_i18n_theme_option('crb_seo_mainpage_title'); 
      $home_description = crb_get_i18n_theme_option('crb_seo_mainpage_description'); 
      if ($home_title) {
        $current_title = $home_title;
      }
      if ($home_description) {
        $current_description = $home_description;
      }
    }

    if ( is_singular( 'post' ) ) {
      if (carbon_get_the_post_meta('crb_post_title')) {
        $current_title = carbon_get_the_post_meta('crb_post_title');
      }
      if (carbon_get_the_post_meta('crb_post_description')) {
        $current_description = carbon_get_the_post_meta('crb_post_description');
      }
    }
  ?>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>" />
  <?php endif; ?>

  <?php if (get_the_post_thumbnail_url()): ?>
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php else: ?>
    <meta property="og:image" content="https://treba-solutions.com/wp-content/uploads/2023/05/treba.png">
  <?php endif; ?>
  <?php if (is_singular()): ?>
    <meta property="og:title" content="<?php echo $current_title; ?>" />
    <?php if ($current_description): ?>
      <meta property="og:description" content="<?php echo $current_description; ?>" />
    <?php else: ?>
      <?php 
        $content_text_for_description = wp_strip_all_tags( get_the_content() );
      ?>
      <meta property="og:description" content="<?php echo mb_strimwidth($content_text_for_description, 0, 150, '...'); ?>" />
    <?php endif; ?>
    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <meta property="og:url" content="<?php echo $actual_link; ?>" />
    <meta property="og:article:published_time" content="<?php echo get_post_time('Y/n/j'); ?>" />
    <meta property="og:article:article:modified_time" content="<?php echo get_the_modified_time('Y/n/j'); ?>" />
    
    <?php if (carbon_get_the_post_meta('crb_post_author')): ?>
      <meta property="og:article:author" content="<?php echo carbon_get_the_post_meta('crb_post_author'); ?>" />
    <?php else: ?>
      <meta property="og:article:author" content="<?php echo get_the_author(); ?>" />
    <?php endif; ?>
  <?php endif; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1D1E22" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
  
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="bg-white py-4">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center lg:-mx-4">
        <div class="px-4">
          <a href="<?php echo get_home_url(); ?>" class="text-xl lg:text-2xl"><span class="w-[32px] w-min-[32px] h-[32px] h-min-[32px] inline-flex items-center justify-center bg-blue-500 text-white font-black rounded">D</span>ecompose <span class="w-[32px] w-min-[32px] h-[32px] h-min-[32px] inline-flex items-center justify-center bg-red-500 text-white font-black rounded">T</span>ime</a>
        </div>
        <div class="hidden lg:flex px-4">
          <div class="px-4">
            <a href="/all-posts" class="text-gray-700 hover:bg-blue-500">All Posts</a>
          </div>
          <div class="px-4">
            <a href="/interesting-facts" class="text-gray-700 hover:bg-blue-500">Interesting Facts</a>
          </div>
          <div class="px-4">
            <a href="/contact-us" class="bg-blue-500 hover:bg-blue-600 text-white text-center rounded p-3">Contact us</a>
          </div>
        </div>
        <div class="lg:hidden text-gray-600 cursor-pointer menu-js">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
  </header>
  <div class="wrap">