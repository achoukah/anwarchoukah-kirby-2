<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />

  <title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?= url('assets/favicon/favicon.png') ?>">


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
    <h1><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
    <h2><?php echo html($site->subtitle()) ?></h2>
    <?php snippet('menu') ?>
  </header>
