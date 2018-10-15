<?php
  $title = get_sub_field('title');
  $subtext = get_sub_field('subtext');
?>

<div class="row">
  <div class="column small-12 title">
    <?php if($title): ?>
      <h4><?= $title; ?></h4>
    <?php endif; ?>

    <?php if($subtext): ?>
      <p><?= $subtext; ?></p>
    <?php endif; ?>
  </div>
</div>