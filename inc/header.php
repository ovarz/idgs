<header class="content_center">
  <span class="width-max">
	<div class="header-left">
      <a aria-label="Home" title="Home" href="index.php"
	  class="sticky-link <?php if($channel == 'home') { ?>sticky-curr<?php } ?> sticky-logo content_center">
	    <?php require ($_SERVER['IDGS'].'img/logo.svg')?>
      </a>
	</div>
  
	<menu class="header-center">
	  <a aria-label="Home" title="Home" href="index.php"
	  class="sticky-link <?php if($channel == 'home') { ?>sticky-curr<?php } ?> content_center">
	    <span>Home</span>
      </a>
	  <a aria-label="News" title="News" href="console/"
	  class="sticky-link <?php if($channel == 'news') { ?>sticky-curr<?php } ?> content_center">
	    <span>News</span>
      </a>
	  <a aria-label="PC" title="PC" href="console/"
	  class="sticky-link <?php if($channel == 'pc') { ?>sticky-curr<?php } ?> content_center">
	    <span>PC</span>
      </a>
	  <a aria-label="Console" title="Console" href="console/"
	  class="sticky-link <?php if($channel == 'console') { ?>sticky-curr<?php } ?> content_center">
	    <span>Console</span>
      </a>
	  <a aria-label="Mobile" title="Mobile" href="console/"
	  class="sticky-link <?php if($channel == 'mobile') { ?>sticky-curr<?php } ?> content_center">
	    <span>Mobile</span>
      </a>
	  <a aria-label="Esports" title="Esports" href="console/"
	  class="sticky-link <?php if($channel == 'esports') { ?>sticky-curr<?php } ?> content_center">
	    <span>Esports</span>
      </a>
	</menu>
  
	<div class="header-right">
      <button title="Search" 
	  class="sticky-link <?php if($channel == 'cari') { ?>sticky-curr<?php } ?> open-sticky sticky-search-open content_center desktop-only">
	    <?php require ($_SERVER['IDGS'].'img/icon/search.svg')?>
      </button>
      <button title="Menu" class="sticky-link open-sticky sticky-menu-open content_center mobile-only">
	    <?php require ($_SERVER['IDGS'].'img/icon/menu.svg')?>
      </button>
	  <a aria-label="Wifi Coin" title="Wifi Coin" href="wifi-coin/"
	  class="sticky-link <?php if($channel == 'wifi-coin') { ?>sticky-curr<?php } ?> wifi-coin-button content_center desktop-only">
	    <span>Wifi Coin</span>
      </a>
	</div>
  </span>
</header>