<?php 
  $page='member';
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
		    <li class="infobox-label">Username</li>
		    <li class="infobox-data">ov4rz</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Masa Berlaku</li>
		    <li class="infobox-data">30 Hari</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Batas Waktu</li>
		    <li class="infobox-data">00 September 0000</li>
		  </ul>
        </div>
		<div class="default-submit">
		  <button class="btn default-submit-button" onclick="location.href='wifi-login/';">
		    Kembali ke halaman utama
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>