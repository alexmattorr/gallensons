<?php
  $link = get_sub_field('link');
  $type = get_sub_field('type');
?>

<div class="row">
  <div class="column small-12 text-center">
    <a href="<?= $link['url']; ?>" class="button <?= $type; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a>
  </div>
</div>