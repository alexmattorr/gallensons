<div>
  <?php
    if( have_rows('sections') ):
      while ( have_rows('sections') ) : the_row();
        $bg_type = get_sub_field('background_type');
        $bg_color = get_sub_field('background_color');
        $bg_image = get_sub_field('background_image')['url'];
        $bg_image_string = 'style="background-image: url(' . $bg_image . ')"';
  ?>

  <?php if($bg_type === 'image') { ?>
  <section class="bg-image" <?= $bg_image_string; ?>>
  <?php } else { ?>
  <section class="<?= $bg_color; ?>">
  <?php } ?>

  <?php
    if( have_rows('layout') ):
      while ( have_rows('layout') ) : the_row();
        if( get_row_layout() == 'cards' ):
          get_template_part('layouts/layout', 'cards');
        elseif( get_row_layout() == 'instagram' ):
          get_template_part('layouts/layout', 'instagram');
        elseif( get_row_layout() == 'hero' ):
          get_template_part('layouts/layout', 'hero');
        endif;
      endwhile;
    endif;
  ?> 

  </section>

  <?php
      endwhile;
    endif;
  ?>
</div>