<style><?php require ($_SERVER['IDGS'].'css/headline.css') ?></style>
<section aria-label="Headline" class="headline">
  <div class="headline-container">
    <?php $show_description='yes'; $category_link='playstation'; 
    require ($_SERVER['IDGS'].'module/content-list.php') ?>
    <?php for ($i=1; $i <= 3 ; $i++) { ?>
      <?php $show_description='no'; $category_link='playstation'; 
      require ($_SERVER['IDGS'].'module/content-list.php') ?>
    <?php } ?>
  </div>
</section>