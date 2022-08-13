<?php 
  $page='voucher';
  $category='confirmation';
  $status='notconnect';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Konfirmasi" class="rancak-main-container">
        <div class="section-title">Konfirmasi voucher yang akan digunakan</div>
        <div class="infobox">
          <ul class="infobox-row">
		    <li class="infobox-label">Kode Voucher</li>
		    <li class="infobox-data">IDGS012345</li>
		  </ul>
          <ul class="infobox-row">
		    <li class="infobox-label">Nominal Voucher</li>
		    <li class="infobox-data">Rp.0.000.000,-</li>
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
		  <button class="btn default-submit-button default-submit-cancel" onclick="location.href='wifi-login/';">
		    Batal
		  </button>
		  <button class="btn default-submit-button" onclick="location.href='wifi-login/voucher/success.php';">
		    Gunakan
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>