<?php 
  $page='qris';
  $category='confirmation';
  $status='connect';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Konfirmasi" class="rancak-main-container">
        <div class="section-title">
		  Silakan scan atau download QRIS dibawah ini untuk melanjutkan pembayaran.
		</div>
		
        <div class="qrcode-display">
          <img alt="QRIS" src="wifi-login/img/qr.png" />
        </div>
		
		
        <div class="infobox">
          <ul class="infobox-row">
		    <li class="infobox-label">Nominal Pembelian</li>
		    <li class="infobox-data">Rp.0.000.000</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Durasi Pemakaian</li>
		    <li class="infobox-data">365 Hari</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Sisa Pemakaian</li>
		    <li class="infobox-data">7 Hari</li>
		  </ul>
        </div>
		<div class="default-submit">
		  <button title="Download QR Code" class="btn" onclick="location.href='wifi-login/qris/success.php';">
		    Download QR Code
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>