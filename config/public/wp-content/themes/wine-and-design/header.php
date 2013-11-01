
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<title><?php bloginfo('name'); ?><?php wp_title();?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" type="text/css" />
  <!--[if IE 8]>
  <link href="stylesheets/ie8.css" media="all" rel="stylesheet" type="text/css" />
  <![endif]-->
  <!--[if IE 9]>
  <link href="stylesheets/ie9.css" media="all" rel="stylesheet" type="text/css" />
  <![endif]-->
  <script src="<?php bloginfo('template_directory'); ?>/javascripts/all.js" type="text/javascript"></script>

<?php wp_head(); ?>

</head>

<body>
    <div class="sticky-wrapper">
      <div class="wrapper">
        <div class="mainnav">
          <div class="mainnav__link__left">
            <a href="<?php echo home_url(); ?>">Home</a>
          </div>
          <div class="mainnav__link__left">
            <a class="nav" href="<?php echo home_url(); ?>/about">About</a>
          </div>
          <div class="mainnav__logo">
            <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
          </div>
          <div class="mainnav__link__right">
            <a class="nav" href="<?php echo home_url(); ?>/contact">Contact</a>
          </div>
          <div class="mainnav__link__right">
            <a class="nav" href="<?php echo home_url(); ?>/blogmain">Blog</a>
          </div>
        </div>
        <div class="mainnav responsive">
          <div class="mainnav__logo">
            <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
          </div>
          <div class="mainnav__link__left">
            <a href="<?php echo home_url(); ?>">Home</a>
          </div>
          <div class="mainnav__link__left">
            <a class="nav" href="<?php echo home_url(); ?>/about">About</a>
          </div>
          <div class="mainnav__link__right">
            <a class="nav" href="<?php echo home_url(); ?>/contact">Contact</a>
          </div>
          <div class="mainnav__link__right">
            <a class="nav" href="<?php echo home_url(); ?>/blogmain">Blog</a>
          </div>
        </div>
      </div>
