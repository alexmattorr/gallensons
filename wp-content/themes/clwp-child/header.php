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
        <?php $home_url = get_home_url(); ?>
        <a href="<?= $home_url; ?>" class="logo">Gallenson<sup>’</sup>s<span>gun shop</span></a>
        <ul>
          <li><a href="">Brands</a></li>
          <li><a href="">Used Guns</a></li>
          <li><a href="">Current Sales</a></li>
          <li>
            <a href="">NFA</a>
            <ul>
              <div class="arrow"></div>
              <li><a href="">Suppressors</a></li>
              <li><a href="">Short Barrel Rifles</a></li>
              <li><a href="">Short Barrel Shotguns</a></li>
            </ul>
          </li>
          <li>
            <a href="">How To</a>
            <ul>
              <div class="arrow"></div>
              <li><a href="">Purchase a firearm</a></li>
              <li><a href="">Purchase a NFA item</a></li>
              <li><a href="">Submit an FFL transfer</a></li>
            </ul>
          </li>
          <li><a href="https://goo.gl/maps/vy9ycPgu5TH2" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </header>

  <?php
    do_action('clwp_after_header'); 
  ?>