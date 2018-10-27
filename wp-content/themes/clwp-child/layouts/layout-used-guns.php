<?php $amount = get_sub_field('amount_to_show'); ?>

<div class="row cards text-cards <?php if($amount <= 6) { echo 'carousel'; } else { echo 'grid'; } ?> <?php if($amount > 3) { echo 'card-spacing'; } ?>">
  <?php
    $query = array(
      'post_type' => 'used_guns',
      'posts_per_page' => $amount,
      'order' => 'asc',
      'orderby' => 'date',
    );

    $loop = new WP_Query($query);
    while ( $loop->have_posts() ) : $loop->the_post();
      $title = get_the_title();
      $price = get_field('price');
  ?>
  <div class="column small-12 medium-4 large-4">
    <a href="tel:801-328-2016" class="card">
      <figure style="background-image: url(<?= $image; ?>);"></figure>
      <div class="card-text">
        <div class="flex-between">
          <h6 class="no-margin"><?= $title; ?></h6>
          <p class="no-margin red">$<?= $price; ?></p>
        </div>
        <p class="no-margin">Call to reserve</p>
      </div>
    </a>
  </div>
  <?php endwhile; wp_reset_query(); ?>
</div>