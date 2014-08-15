<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />

  <title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php

  echo css(array(
    'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic|Playfair+Display:400,700,900,400italic,700italic,900italic|Inconsolata',
  ));

  ?>

  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/jquery-1.11.0.min.js') ?>
  <?php echo js('assets/js/lightbox.min.js') ?>
  <?php echo js('//www.google-analytics.com/analytics.js') ?>

</head>
<body>

  <header class="cf" role="banner">
    <a class="branding" href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a>
    <?php snippet('menu') ?>
  </header>