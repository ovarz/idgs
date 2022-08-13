<?php 
  $page='home';
  $category='home';
  $status='notconnect';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Pembayaran" class="rancak-main-container">
        <div class="section-title">Silakan pilih metode pembayaran</div>
        <div class="rancak-payment">
          <a aria-label="Coin" title="Coin" class="rancak-payment-button" href="wifi-login/coin/">
            <div class="rancak-payment-frame content_center">
              <div class="rancak-payment-icon content_center">
                <?php require ($_SERVER['IDGS'].'img/icon/payment-coin.svg')?>
              </div>
              <div class="rancak-payment-label">Coin</div>
            </div>
          </a>
          <a aria-label="QRIS" title="QRIS" class="rancak-payment-button" href="wifi-login/qris/">
            <div class="rancak-payment-frame content_center">
              <div class="rancak-payment-icon content_center">
                <?php require ($_SERVER['IDGS'].'img/icon/payment-qris.svg')?>
              </div>
              <div class="rancak-payment-label">QRIS</div>
            </div>
          </a>
          <a aria-label="Member" title="Member" class="rancak-payment-button" href="wifi-login/member/">
            <div class="rancak-payment-frame content_center">
              <div class="rancak-payment-icon content_center">
                <?php require ($_SERVER['IDGS'].'img/icon/payment-member.svg')?>
              </div>
              <div class="rancak-payment-label">Member</div>
            </div>
          </a>
        </div>
	  </section>	
	  
	  
	  
	  <section aria-label="Voucher" class="rancak-main-container">
        <div class="section-title">Atau masukkan kode voucher anda</div>
		<div class="form-box">
		  <input class="form-field" name="" type="text" placeholder="Contoh : IDGS012345">
		  <button class="form-submit-next content_center" onclick="location.href='wifi-login/voucher/';">
		    <?php require ($_SERVER['IDGS'].'img/icon/more.svg')?>
		  </button>
		</div>
	  </section>
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>