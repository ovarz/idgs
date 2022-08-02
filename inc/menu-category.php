<style><?php require ($_SERVER['IDGS'].'css/menu-category.css')?></style>
<div class="category-carousel">
  <?php if($subcategory == 'playstation') { ?>
    <a aria-label="Playstation" title="Playstation" href="playstation/"
    class="category-link <?php if($subcategory == 'playstation') { ?>category-curr<?php } ?> content_center">
      Playstation
    </a>
  <?php } ?>
  <a aria-label="Console" title="Console" href="console/"
  class="category-link <?php if($subcategory == '') { ?>category-curr<?php } ?> content_center">
    All
  </a>
  <a aria-label="Nintendo" title="Nintendo" href="playstation/"
  class="category-link <?php if($subcategory == 'nintendo') { ?>category-curr<?php } ?> content_center">
    Nintendo
  </a>
  <?php if($subcategory != 'playstation') { ?>
    <a aria-label="Playstation" title="Playstation" href="playstation/"
    class="category-link <?php if($subcategory == 'playstation') { ?>category-curr<?php } ?> content_center">
      Playstation
    </a>
  <?php } ?>
  <a aria-label="Xbox" title="Xbox" href="playstation/"
  class="category-link <?php if($subcategory == 'xbox') { ?>category-curr<?php } ?> content_center">
    Xbox
  </a>
</div>




