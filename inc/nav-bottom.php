<nav class="mobile-only">
  <a aria-label="Home" title="Home" href="index.php"
  class="sticky-link <?php if($channel == 'home') { ?>sticky-curr<?php } ?> content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/home.svg')?>
	<span class="sticky-label">Home</span>
  </a>
  <a aria-label="Wifi Coin" title="Wifi Coin" href="index.php"
  class="sticky-link <?php if($channel == 'wifi-coin') { ?>sticky-curr<?php } ?> content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/home.svg')?>
	<span class="sticky-label">Wifi Coin</span>
  </a>
  <a aria-label="Cari" title="Cari" href="index.php"
  class="sticky-link <?php if($channel == 'cari') { ?>sticky-curr<?php } ?> content_center">
    <?php require ($_SERVER['IDGS'].'img/icon/search.svg')?>
	<span class="sticky-label">Cari</span>
  </a>
</nav>