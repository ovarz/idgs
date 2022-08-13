<?php 
  $page='member';
  $category='login';
  $status='notconnect';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/header.php')?>
<div class="rancak-container content_center">
  <span class="width-max">
    <div class="rancak-main">
	  
	  <section aria-label="Konfirmasi" class="rancak-main-container">
        <div class="section-title">Member Login</div>
        <div class="form-member">
          <div class="form-box">
            <input class="form-field" name="" type="text" placeholder="Masukkan Username">
          </div>
          <div class="form-box form-box-error">
            <input class="form-field" name="" type="password" placeholder="Masukkan Password">
            <button class="form-password-toggle form-password-hidden content_center">
              <?php require ($_SERVER['IDGS'].'img/icon/password-hidden.svg')?>
              <?php require ($_SERVER['IDGS'].'img/icon/password-show.svg')?>
            </button>
			<div class="form-note">Password tidak sesuai</div>
          </div>
        </div>
		<div class="default-submit">
		  <button class="btn default-submit-button default-submit-cancel" onclick="location.href='wifi-login/';">
		    Batal
		  </button>
		  <button class="btn default-submit-button" onclick="location.href='wifi-login/member/success.php';">
		    Login
		  </button>
		</div>
	  </section>	
		
	</div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'wifi-login/inc/footer.php')?>