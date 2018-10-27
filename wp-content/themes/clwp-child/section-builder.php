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
        if( get_row_layout() == 'button' ):
          get_template_part('layouts/layout', 'button');
        elseif( get_row_layout() == 'cards' ):
          get_template_part('layouts/layout', 'cards');
        elseif( get_row_layout() == 'instagram' ):
          get_template_part('layouts/layout', 'instagram');
        elseif( get_row_layout() == 'side_by_side' ):
          get_template_part('layouts/layout', 'side-by-side');
        elseif( get_row_layout() == 'hero' ):
          get_template_part('layouts/layout', 'hero');
        elseif( get_row_layout() == 'title' ):
          get_template_part('layouts/layout', 'title');
        elseif( get_row_layout() == 'used_guns' ):
          get_template_part('layouts/layout', 'used-guns');
        elseif( get_row_layout() == 'wysiwyg' ):
          get_template_part('layouts/layout', 'wysiwyg');
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