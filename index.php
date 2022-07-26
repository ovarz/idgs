<?php 
  $page='home'; 
  $kanal='home'; 
  $subkanal=''; 
  $iklan='yes'; 
  $login='no';  
  $share='no'; 
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<h1 class="hide">IDGS <?php echo $kanal; ?></h1>
<div class="site-container">
  <span>
    <?php require ($_SERVER['IDGS'].'iklan/iklan-skin.php')?>
    <?php require ($_SERVER['IDGS'].'iklan/iklan-top-desktop.php')?>
		
    <div class="main-container main-container-split">
	  <div class="column-full">
	    <div class="column-full-container">
		  tes
		</div>
	  </div>
	  
	  
	  
      <div class="column-big">
        <div class="column-big-container">

          <section aria-label="Terbaru" class="base-container article-list">
            tes
          </section>
		  
        </div>
      </div>
	  
	  <?php require ($_SERVER['IDGS'].'inc/sidebar.php')?>
	  
    </div>
  </span>
</div>

<?php require ($_SERVER['IDGS'].'inc/footer.php')?>