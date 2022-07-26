<nav class="mobile-only">
  <a aria-label="Home" title="Home" href="index.php"
  class="sticky-link <?php if($category == 'home') { ?>sticky-curr<?php } ?> content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/home.svg')?>
	<span class="sticky-label">Home</span>
  </a>
  <a aria-label="Wifi Coin" title="Wifi Coin" href="wifi-coin/"
  class="sticky-link <?php if($category == 'wifi-coin') { ?>sticky-curr<?php } ?> wifi-coin-button content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/home.svg')?>
	<span class="sticky-label">Wifi Coin</span>
  </a>
  <button title="Cari" 
  class="sticky-link <?php if($category == 'cari') { ?>sticky-curr<?php } ?> open-sticky sticky-search-open content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/search.svg')?>
	<span class="sticky-label">Cari</span>
  </button>
</nav>