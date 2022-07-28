<style><?php require ($_SERVER['IDGS'].'css/widget-wificoin.css') ?></style>
<section aria-label="Widget Wifi Coin" class="widget-wificoin">
  <div class="widget-wificoin-bg flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/wificoin-bg-portrait.jpg" />
  </div>
  <div class="widget-wificoin-container">
    <div class="wwcc-top">
	  <div class="wwcc-logo content_center"><?php require ($_SERVER['IDGS'].'img/idgs-icon.svg')?></div>
	  <h1 class="wwcc-title">Wifi Coin</h1>
	  <h2 class="wwcc-desc"><?php echo $random_desc[array_rand($random_desc)]; ?></h2>
	</div>
    <div class="wwcc-bottom">
	  <a aria-label="Wifi Coin" title="Wifi Coin" href="wifi-coin/" class="btn wwcc-button content_center">
		<span class="wwcc-button-label">Selengkapnya</span>
		<?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
	  </a>
	</div>
  </div>
</section>