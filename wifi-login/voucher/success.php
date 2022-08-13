<?php 
  $page='voucher';
  $category='success';
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
		  <b>Selamat</b>
		  WiFi Coin berhasil terhubung
		</div>
        <div class="infobox">
          <ul class="infobox-row">
		    <li class="infobox-label">Kode Voucher</li>
		    <li class="infobox-data">IDGS012345</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Nominal Voucher</li>
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
		  <button title="Kembali ke halaman utama" class="btn default-submit-button" onclick="location.href='wifi-login/';">
		    Kembali ke halaman utama
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>