<?php
  /* Template Name: Brands */
  get_header();
?> 

<!-- featured brands -->
<section class="row cards grid image-cards">

  <div class="column small-12 title">
    <h2>Featured Brand Partners</h2>
  </div>

  <?php
    $query = array(
      'post_type' => 'brands',
      'category_name' => 'featured'
    );

    $loop = new WP_Query($query);
    while ( $loop->have_posts() ) : $loop->the_post();
      $title = get_the_title();
      $link = get_field('company_website');
  ?>
  <div class="column small-12 medium-4 large-4">
    <a href="<?php the_permalink(); ?>" class="card">
      <figure class="shadow" style="background-image: url(<?= $image; ?>);">
        <h2><?= $title; ?></h2>
      </figure>
    </a>
  </div>
  <?php endwhile; wp_reset_query(); ?>

</section>

<!-- All Brands -->
<section class="row cards grid image-cards">

  <div class="column small-12 title">
    <h1 class="h3"><?php the_title(); ?></h1>
  </div>

  <?php
    $query = array(
      'post_type' => 'brands',
      'category__not_in' => 'featured',
      'order' => 'asc',
      'orderby' => 'title',
    );

    $loop = new WP_Query($query);
    while ( $loop->have_posts() ) : $loop->the_post();
      $title = get_the_title();
      $link = get_field('company_website');
  ?>
  <div class="column small-12 medium-4 large-3">
    <a href="<?= $link; ?>" target="_blank" class="card">
      <figure class="shadow" style="background-image: url(<?= $image; ?>);">
        <h4><?= $title; ?></h4>
      </figure>
    </a>
  </div>
  <?php endwhile; wp_reset_query(); ?>
  
</section>

<?php get_footer(); ?>
