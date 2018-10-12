<?php $count = count(get_sub_field('images')); ?>

<div class="hero<?php if($count > 1) { echo ' carousel'; } ?>">

  <?php
    if( have_rows('images') ):
      while ( have_rows('images') ) : the_row();
        $image = get_sub_field('image')['url'];
        $title = get_sub_field('title');
        $subtext = get_sub_field('subtext');
        $add_button = get_sub_field('add_button');
  ?>
  <div class="hero-image" style="background-image: url(<?= $image; ?>);">
    <div class="column">
      <div>
        <?php if($title): ?>
          <h2 class="h1"><?= $title; ?></h2>
        <?php endif; ?>

        <?php if($subtext): ?>
          <h2 class="h1"><?= $subtext; ?></h2>
        <?php endif; ?>

        <?php 
          if($add_button === 'yes'): 
            if( have_rows('button') ):
              while ( have_rows('button') ) : the_row();
                $link = get_sub_field('link');
                $type = get_sub_field('type');
        ?>
          <div class="buttons">
            <a href="<?= $link['url']; ?>" class="<?= $type; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a>
          </div>
        <?php endwhile; endif; endif; ?>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>

</div>
