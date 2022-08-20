<div class="column-right column-small">
  <div class="column-container column-sticky">
    <?php require ($_SERVER['IDGS'].'iklan/iklan-300x250.php')?>
	<?php if($page != 'home' && $page != 'category' && $page != 'subcategory') { ?>
	  <?php require ($_SERVER['IDGS'].'module/widget-wificoin.php')?>
	<?php } ?>
	
	
	
    <section aria-label="Trending" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Trending</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
          require ($_SERVER['IDGS'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	
	
	
	<?php require ($_SERVER['IDGS'].'iklan/iklan-300x250.php')?>
  </div>
</div>