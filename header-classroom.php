<?php
/**
 * The general header for all pages except Classroom
 *
 * Displays all of the <head> section and everything up until <main>
 *
 *
 * @package Kotuku
 */

 ?>
<!doctype html>
<html lang="en-UK">
<head>
  <link rel="stylesheet" href="style.css">
  <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	<?php wp_head(); ?>
</head>

<body>
  <header id="site-header">
    <img class="c-secondary-logo" src="" alt="">
  </header> <!-- .site-header-->

  <main>
