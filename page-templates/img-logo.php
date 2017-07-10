<?php
    $logo = get_field($name);
    if( !empty($logo) ):
      $alt = $logo['alt'];
      $caption = $logo['caption'];

      // thumbnail
      $size = 'large';
      $thumb = $logo['sizes'][ $size ];
      $width = $logo['sizes'][ $size . '-width' ];
      $height = $logo['sizes'][ $size . '-height' ];
    endif;
  ?>

      <a href="<?php the_field($url); ?>" title="<?php echo $title; ?>">
        <img class="logo-img <?php echo $name ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
      </a>
      <?php if(!empty($caption) ): ?>
        <div class="caption">
          <?php echo $caption ?>
        </div>
      <?php endif; ?>
