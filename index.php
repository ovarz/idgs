<?php 
  $body_margin='yes';
  $page='home';
  $category='home';
  $login='no';  
  $share='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<h1 class="hide">VIAHUB <?php echo $category; ?></h1>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-full">
	    <div class="column-container">
		  <section aria-label="Section" class="section-container">
		    <div>column-full</div>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Section" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terbaru</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 10 ; $i++) { ?>
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
	
	
	
	
	
	  <div class="column-full">
	    <div class="column-container column-allcategory">
		  <section aria-label="Section" class="section-container content-list">
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
		  
		  
		  
		  <section aria-label="Section" class="section-container content-list">
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
		  
		  
		  
		  <section aria-label="Section" class="section-container content-list">
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
		  
		  
		  
		  <section aria-label="Section" class="section-container content-list">
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
		  
		  
		  
		  <section aria-label="Section" class="section-container content-list">
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