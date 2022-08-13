<?php 
  $page='qris';
  $category='form';
  $status='notconnect';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Konfirmasi" class="rancak-main-container">
        <div class="section-title">Pembayaran via QRIS</div>
        <div class="form-qris">
          <div class="form-box">
            <input id="wifiplace_name" class="form-field" name="" type="text" placeholder="Masukkan Lokasi WiFi Coin">
          </div>
          <div class="form-box">
            <input class="form-field" name="" type="text" placeholder="Masukkan Nama Anda">
          </div>
          <div class="form-box">
            <input class="form-field" name="" type="text" placeholder="Masukkan No Whatsapp">
          </div>
          <div class="form-box">
            <select class="form-field">
			  <option value="0">- Pilih Nominal Voucher -</option>
			  <option value="1">1 Hari - Rp.10.000</option>
			  <option value="2">7 Hari - Rp.100.000</option>
			  <option value="3">30 Hari - Rp.200.000</option>
			</select>
          </div>
        </div>
		<div class="default-submit">
		  <button title="Batal" class="btn default-submit-button default-submit-cancel" onclick="location.href='wifi-login/';">
		    Batal
		  </button>
		  <button title="Submit" class="btn default-submit-button" onclick="location.href='wifi-login/qris/confirmation.php';">
		    Submit
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<script defer rancak-hold="wifi-login/js/autocomplete.js"></script>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>