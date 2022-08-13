<?php 
  $page='coin';
  $category='insert';
  $status='notconnect';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Konfirmasi" class="rancak-main-container">
        <div class="section-title">Silakan masukkan coin 500 atau 1000 kedalam mesin WiFi Coin</div>
        <div class="infobox">
          <ul class="infobox-row">
		    <li class="infobox-label">Koin yang diterima</li>
		    <li class="infobox-data">Rp.0</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Durasi Pemakaian</li>
		    <li class="infobox-data">0 Menit</li>
		  </ul>
        </div>
		<div class="default-submit">
		  <button class="btn default-submit-button default-submit-cancel" onclick="location.href='wifi-login/';">
		    Batal
		  </button>
		  <button class="btn default-submit-button" onclick="location.href='wifi-login/coin/success.php';">
		    Selesai
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>