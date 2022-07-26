<a aria-label="Link_Title" title="Link_Title" class="content-link content_center" href="<?php echo $category_link; ?>/detail.php">
  <div class="content-thumb">
    <div class="content-thumb-frame flex_ori thumb-loading">
      <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg"
      data-srcset="img/sample/minisample-<?php echo rand(1,20); ?>.jpg 640w, img/sample/sample-<?php echo rand(1,20); ?>.jpg 1920w" />
    </div>
  </div>
  
  <div class="content-link-info">
    <span>
	  <h2 class="content-link-title"><?php echo $random_title[array_rand($random_title)]; ?></h2>
      <?php if($show_category == 'yes') { ?>
        <h3 class="content-link-category"><?php echo $random_category[array_rand($random_category)]; ?></h3>
      <?php } ?>
      <div class="content-link-date">00 Jan 0000</div>
      <?php if($show_description == 'yes') { ?>
        <h4 class="content-link-desc desktop-only"><?php echo $random_desc[array_rand($random_desc)]; ?></h3>
      <?php } ?>
    </span>
  </div>
</a>