<div class="content-media">
  <div class="content-media-frame flex_ori thumb-loading">
    <?php if($media_type == 'video') { ?>
      <iframe width="560" height="315" class="lazyload content-media-video" 
      data-original="https://www.youtube.com/embed/jOAnaixPtRg?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<?php } ?>
    <?php if($media_type == 'image') { ?>
	  <img alt="img_title" data-sizes="auto" class="lazyload" 
	    data-original="img/sample/minisample-1.jpg"
		data-srcset="img/sample/minisample-1.jpg 300w, img/sample/sample-1.jpg 640w"
      />
	<?php } ?>
  </div>
  <?php if($media_type == 'image') { ?>
    <div class="content-media-caption">Source : www.ov4rz.com</div>
  <?php } ?>
</div>