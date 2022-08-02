<?php 
  $page='search';
  $category='search';
  $subcategory='';
  $share='no'; 
  $search_page='search/empty.php'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-full">
	    <div class="column-container">
		  <section aria-label="Hasil Pencarian" class="section-container search-page">
		    <style><?php require ($_SERVER['IDGS'].'css/search-page.css')?></style>
		    <?php require ($_SERVER['IDGS'].'module/search-box.php')?>
			<div class="search-note">
			  Hasil pencarian <b><?php echo $random_topic[array_rand($random_topic)]; ?></b>
			</div>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Terbaru" class="section-container content-list">
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 15 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='yes'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
            <button title="Link_Title" class="section-more">
              <span>Muat Artikel Berikutnya</span>
              <?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
            </button>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <?php require ($_SERVER['IDGS'].'inc/sidebar.php')?>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'inc/nav-bottom.php')?>
<?php require ($_SERVER['IDGS'].'inc/footer.php')?>
<?php require ($_SERVER['IDGS'].'inc/base-bottom.php')?>