<!doctype html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
    do_action( 'clwp_after_body' );
    do_action( 'clwp_layout_start' );
  ?>

  <div class="max-container">

    <header>
      <div class="column">
        <h4 class="logo">gallensons</h4>
      </div>
      <div class="column">
        <ul>
          <li><a href="">Featured Brands</a></li>
          <li><a href="">Used Guns</a></li>
          <li><a href="">Current Sales</a></li>
          <li><a href="">Info</a></li>
          <li><a href="">Visit Us</a></li>
        </ul>
      </div>
    </header>

  <?php
    do_action('clwp_after_header'); 
  ?>