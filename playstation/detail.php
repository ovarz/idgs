<?php 
  $page='detail';
  $category='console';
  $subcategory='playstation'; 
  $share='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-full">
	    <div class="column-container">
		  <section aria-label="Header Berita" class="section-container content-head">
		    <div class="breadcrumb">
			  <a aria-label="Home" title="Home" class="breadcrumb-link" href="index.php"><?php require ($_SERVER['IDGS'].'img/icon/home.svg')?></a>
			  <span>/</span>
			  <a aria-label="<?php echo $category; ?>" title="<?php echo $category; ?>" class="breadcrumb-link" href="<?php echo $category; ?>/">
			    <?php echo $category; ?>
			  </a>
			  <span>/</span>
			  <a aria-label="<?php echo $subcategory; ?>" title="<?php echo $subcategory; ?>" class="breadcrumb-link" href="<?php echo $subcategory; ?>/">
			    <?php echo $subcategory; ?>
			  </a>
			</div>
			
		    <h1 class="content-title">Kominfo Blokir Steam, Epic Games, Dota 2, Hingga CS:GO Pada Sabtu Hari Ini</h1>
			
			<div class="content-misc">
			  <div class="content-misc-date">Senin, 00 September 0000.</div>
			  <div class="content-misc-other">
			    <span>Oleh : </span>
                <a aria-label="<?php echo $random_author[array_rand($random_author)]; ?>" title="<?php echo $random_author; ?>" class="breadcrumb-link" href="author/">
                  <?php echo $random_author[array_rand($random_author)]; ?>
                </a>
			  </div>
			</div>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Isi Berita" class="section-container content-article">
            <main class="content-article-detail">
			  <?php $media_type='image'; require ($_SERVER['IDGS'].'module/content-media.php')?>
              <h2 class="content-article-summary">Kementerian Komunikasi dan Informatika (Kominfo) dilaporkan telah memblokir sejumlah Penyelenggara Sistem Elektronik (PSE) Lingkup Privat mulai hari Sabtu ini.</h2>
			  <p><a aria-label="Link Title" title="Link Title" href="index.php">IDGS</a>, Sabtu, 30 Juli 2022 – Pagi ini menjadi pagi yang ramai di dunia maya Indonesia di mana banyak warganet yang marah-marah ketika mengetahui Kominfo telah memblokir sejumlah PSE Lingkup Privat dengan jumlah pengguna yang terbilang besar di Indonesia.</p>
			  <p>Tak hanya awam saja yang kebakaran jenggot, para gamer juga menjadi histeris karena nama-nama besar platform digital penyedia gim juga masuk dalam daftar PSE Lingkup Privat yang diblokir oleh Kominfo.</p>
			  <?php require ($_SERVER['IDGS'].'module/baca-juga.php')?>
			  <p>Setidaknya ada lima platform digital yang berkaitan dengan video gim dan telah diblokir Kominfo pada Sabtu pagi ini, antara lain:</p>
              <ul>
                <li>Steam (Valve, steampowered.com)
                <li>Epic Games Store (Epic Games, epicgames.com)
                <li>Dota 2 (Valve, dota2.com)
                <li>Counter StrikeL Global OFfensive (Valve, blog.counter-strike.net)
                <li>Origin (EA, origin.com)
              </ul>
			  <p>Sedangkan platform-platform digital lain yang juga diblokir oleh Kominfo pada 30 Juli ini antara lain mencakup Paypal hingga Amazon Inc.</p>
			  <?php require ($_SERVER['IDGS'].'module/baca-juga.php')?>
			  <p>Kelima platform digital video gim tersebut diblokir Kominfo karena hingga batas waktu yang ditentukan (29 Juli 2022 pukul 23.59 WIB), mereka belum terdaftar di Kominfo meski telah dikirimi surat teguran pada Sabtu 23 Juli pekan lalu. Kewajiban pendaftaran ini merupakan amanat Peraturan Menteri Kominfo Nomor 5 Tahun 2020 tentang Penyelenggara Sistem Elektronik (PSE) Lingkup Privat.</p>
			  <p>Situs-situs resmi platform digital di atas juga telah masuk dalam daftar pemblokiran TRUST Positif, situs yang dibuat Kominfo untuk menampung aduan-aduan dari masyarakat terkait konten internet.</p>
			  <p>Dari pantauan Indogamers, memang benar adanya bahwa situs-situs resmi dari platform-platform digital yang disebutkan di atas tidak bisa lagi diakses kecuali menggunakan VPN/DNS/bypass. Selain itu Kompas.com juga melaporkan bahwa pengguna jaringan internet fixed broadband dari Oxygen.id, IndiHome, MyRepublic, dan Biznet juga masih bisa mengakses platform maupun situs yang disebutkan di atas.</p>
			  <?php require ($_SERVER['IDGS'].'module/baca-juga.php')?>
			  <p>Bahkan sampai Dokter Tirta pun yang notabene bukan tokoh di bidang video gim dan eSports, turut angkat suara mengenai pemblokiran Steam.</p>
			  <?php $media_type='video'; require ($_SERVER['IDGS'].'module/content-media.php')?>
			  <h3>Masih ada harapan</h3>
			  <p>Meski telah diblokir, masih ada harapan bagi para gamer, yakni agar platform-platform digital video gim yang diblokir Kominfo bersedia melengkapi pendaftaran PSE lewat sistem Online SIngle Submission Risk Based Approach (OSS-RBA).</p>
			  <p>Dengan kata lain, pemblokiran ini bersifat sementara sampai platform-platform digital tersebut bersedia mendaftar ke Komnfo.</p>
			  <p>Bagaimana menurut kalian?</p>
            </main>
		  </section>
		  
		  
		  
		  <section aria-label="Topik Terkait" class="section-container topic-list">
		    <div class="section-title">
			  <div class="section-title-name">Topik Terkait</div>
			</div>
		    <div class="topic-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <a aria-label="img_title" title="img_title" class="btn topic-link" href="tag/">
				  <?php echo $random_topic[array_rand($random_topic)]; ?>
				</a>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Berita Terkait" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Berita Terkait</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_category='yes'; $show_description='yes'; $category_link='playstation'; 
				require ($_SERVER['IDGS'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <?php require ($_SERVER['IDGS'].'inc/sidebar.php')?>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'inc/nav-bottom.php')?>
<?php require ($_SERVER['IDGS'].'inc/footer.php')?>
<?php require ($_SERVER['IDGS'].'inc/base-bottom.php')?>