<header class="content_center">
  <span class="width-max">
    <a aria-label="Wifi Coin" title="Wifi Coin" class="header-idgs content_center" href="wifi-login/">
	  <?php require ($_SERVER['IDGS'].'img/idgs-icon.svg')?>
	  <h1 class="header-idgs-title">Wifi Coin</h1>
	</a>
	<div class="header-info content_center">
	  <div class="header-info-name">Wifi Coin <?php echo rand(1,99); ?></div>
	  <div class="header-info-status header-info-<?php echo $status;?>">
	    <?php if($status == 'notconnect') { ?>Disconnect<?php } ?>
	    <?php if($status == 'connect') { ?>Connect<?php } ?>
	  </div>
	</div>
  </span>
</header>