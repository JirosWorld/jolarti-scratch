<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<!-- welcome to JirosWorld ::: Wordpress ::: Template -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head says Bootstrap protocol; any other head content must come *after* these tags -->
    <meta name="keywords" content="Jiro, Ghianni, web developer" />
    <meta name="description" content="Welcome to JirosWorld Wordpress template" />
<!-- Welkom in de bron van mijn lekker simpele homepage - copyright Jiro Ghianni 2016 -->
<!-- =^.x.^= -->

<title>
   <?php
      if (function_exists('is_tag') && is_tag()) {
         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
         wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || (is_page())) {
         wp_title(''); echo ' - '; }
      elseif (is_404()) {
         echo 'Not Found - '; }
      if (is_home()) {
         bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
          bloginfo('name'); }
      if ($paged>1) {
         echo ' - page '. $paged; }
   ?>
</title>

<meta name="msvalidate.01" content="8C3799DDBAFD89B9A991FED30C380748" />

<?php wp_head(); ?>
</head>

<body id="body-id" <?php body_class(); ?>>
	
<div id="header"><header>
<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
<div class="description"><?php bloginfo('description'); ?></div>
</header></div><!-- einde header-div -->

<!-- Navigation navbar needs Bootstrap JS when collapsing on smaller screens -->
<nav class="navbar navbar-default navbar-fixed-top topnav rood" id="site-navigation" class="main-navigation" role="navigation">
        
  <div class="container topnav">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jolarti' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></span>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav nav-pills navbar-right">
    <li role="presentation">
    <a href="#home" class="smoothScroll"><button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jolarti' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></a>
    </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->

</nav>