<?php 
  $body_margin='yes';
  $page='home';
  $channel='home';
  $login='no';  
  $share='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<h1 class="hide">VIAHUB <?php echo $channel; ?></h1>
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
		  <?php for ($i=1; $i <= 20 ; $i++) { ?>
		  <section aria-label="Section" class="section-container">
		    <div>column-big</div>
		  </section>
		  <?php } ?>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-right column-small">
	    <div class="column-container column-sticky">
		  <section aria-label="Section" class="section-container">
		    <div>column-small</div>
		  </section>
		</div>
	  </div>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'inc/nav-bottom.php')?>
<?php require ($_SERVER['IDGS'].'inc/footer.php')?>
<?php require ($_SERVER['IDGS'].'inc/base-bottom.php')?>