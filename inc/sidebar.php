<div class="column-right column-small">
  <div class="column-container column-sticky">
    <section aria-label="Section" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Trending</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
          require ($_SERVER['IDGS'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
  </div>
</div>