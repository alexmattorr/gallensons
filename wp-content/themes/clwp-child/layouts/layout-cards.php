<?php 
  $card_layout = get_sub_field("card_layout"); 
  $card_type = get_sub_field("card_type"); 
  $count = count(get_sub_field('card'));
  $col = ($count === 2 ? '6' : '4');
?>
<div class="row cards <?= $card_layout; ?> <?= $card_type; ?> <?php if($count > 3 && $card_layout === 'grid') { echo 'card-spacing'; }  ?>">

  <?php
    if( have_rows('card') ):
      while ( have_rows('card') ) : the_row();
        $link = get_sub_field('link');
        $image = get_sub_field('image')['sizes']['large'];
        $size = 'medium';
        $title = get_sub_field('title');
        $text = get_sub_field('text');
  ?>

  <div class="column small-12 <?php if($card_layout != 'carousel') { echo 'medium-' . $col; echo ' large-' . $col; }; ?>">
    <a href="<?= $link['url']; ?>" target="<?= $link['target']; ?>" class="card">
      <figure style="background-image: url(<?= $image; ?>);">
        <?php if($card_type === 'image-cards'): ?>
          <h2><?= $title; ?></h2>
        <?php endif; ?>
      </figure>

      <?php if($card_type === 'text-cards'): ?>
        <div class="card-text">
          <h6><?= $title; ?></h6>
          <p><?= $text; ?></p>
        </div>
      <?php endif; ?>
    </a>
  </div>

  <?php endwhile; endif; ?>

</div>