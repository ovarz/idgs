<header class="content_center">
  <span class="width-max">
	<div class="header-left">
      <a aria-label="Home" title="Home" href="index.php"
	  class="sticky-link <?php if($category == 'home') { ?>sticky-curr<?php } ?> sticky-logo content_center">
	    <?php require ($_SERVER['IDGS'].'img/logo.svg')?>
      </a>
	</div>
  
	<menu id="float-Menu" class="rancak-popup header-center">
      <?php require ($_SERVER['IDGS'].'inc/menu.php')?>
	</menu>
  
	<div class="header-right">
	  <?php if($share == 'yes') { ?>
	  <button title="Share" class="sticky-link open-sticky sticky-share content_center desktop-only">
		<?php require ($_SERVER['IDGS'].'img/icon/share.svg')?>
	  </button>
	  <?php } ?>
      <button title="Cari" 
	  class="sticky-link <?php if($category == 'cari') { ?>sticky-curr<?php } ?> open-sticky sticky-search-open content_center desktop-only">
	    <?php require ($_SERVER['IDGS'].'img/icon/search.svg')?>
      </button>
      <button title="Menu" class="sticky-link open-sticky sticky-menu-open content_center mobile-only">
	    <?php require ($_SERVER['IDGS'].'img/icon/menu.svg')?>
      </button>
	  <a aria-label="Wifi Coin" title="Wifi Coin" href="wifi-coin/"
	  class="sticky-link <?php if($category == 'wifi-coin') { ?>sticky-curr<?php } ?> wifi-coin-button content_center desktop-only">
	    <span>Wifi Coin</span>
      </a>
	</div>
  </span>
</header>