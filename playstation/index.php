<?php 
  $page='category';
  $category='console';
  $subcategory='playstation';
  $share='no'; 
  $search_page='search/'; 
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
		  <?php require ($_SERVER['IDGS'].'inc/menu-category.php')?>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <?php $show_category='no'; require ($_SERVER['IDGS'].'module/headline.php')?>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-right column-small column-special">
	    <div class="column-container">
		  <?php require ($_SERVER['IDGS'].'iklan/iklan-300x250.php')?>
		  <?php require ($_SERVER['IDGS'].'module/widget-wificoin.php')?>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Terbaru" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terbaru</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 10 ; $i++) { ?>
			    <?php $show_category='no'; $show_description='yes'; $category_link='playstation'; 
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
	
	
	
	
	
	  <div class="column-full">
	    <div class="column-container column-allcategory">
		  <section aria-label="News" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">News</div>
			  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="console/">
			    <span>Selengkapnya</span>
				<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
			  </a>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="PC" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">PC</div>
			  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="console/">
			    <span>Selengkapnya</span>
				<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
			  </a>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Console" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Console</div>
			  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="console/">
			    <span>Selengkapnya</span>
				<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
			  </a>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Mobile" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Mobile</div>
			  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="console/">
			    <span>Selengkapnya</span>
				<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
			  </a>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Esports" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Esports</div>
			  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="console/">
			    <span>Selengkapnya</span>
				<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
			  </a>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='no'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		</div>
	  </div>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'inc/nav-bottom.php')?>
<?php require ($_SERVER['IDGS'].'inc/footer.php')?>
<?php require ($_SERVER['IDGS'].'inc/base-bottom.php')?>