<?php 
  $page='home';
  $category='home';
  $subcategory='';
  $share='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['IDGS'].'inc/sample.php')?>
<?php require ($_SERVER['IDGS'].'inc/meta.php')?>
<?php require ($_SERVER['IDGS'].'inc/header.php')?>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-full column-big">
	    <div class="column-container">
          <style>
            .pagelist ul{padding-left:18px;}
            .pagelist > ul{list-style:disc;}
            .pagelist > ul > li > ul{list-style:circle;}
            .pagelist-row{padding:7px 0; display:block;}
			.pagelist a{color:var(--color-text-3); font-weight:bold;}
          </style>

            <div class="pagelist">
              <ul>
                <li>
                  <a class="pagelist-row" href="index.php">Halaman Utama</a>
                </li>
                <li>
                  <a class="pagelist-row" href="wifi-coin/">Halaman WiFi Coin</a>
                </li>
                <li>
                  <div class="pagelist-row">Halaman Kategori</div>  
                  <ul>
                    <li><a class="pagelist-row" href="console/">Halaman Kategori</a></li>
                    <li><a class="pagelist-row" href="playstation/">Halaman Sub Kategori</a></li>
                    <li><a class="pagelist-row" href="playstation/detail.php">Halaman Detail</a></li>
                  </ul>
                </li>
                <li>
                  <a class="pagelist-row" href="tag/">Halaman Tag</a>
                </li>
                <li>
                  <div class="pagelist-row">Halaman Pencarian</div>  
                  <ul>
                    <li><a class="pagelist-row" href="search/">Hasil Pencarian Default</a></li>
                    <li><a class="pagelist-row" href="search/empty.php">Hasil Pencarian Tidak Ditemukan</a></li>
                  </ul>
                </li>
                <li>
                  <a class="pagelist-row" href="author/">Halaman Author</a>
                </li>
                <li>
                  <div class="pagelist-row">Halaman Informasi</div>  
                  <ul>
                    <li><a class="pagelist-row" href="informasi/#peta-situs">Peta Situs</a></li>
                    <li><a class="pagelist-row" href="informasi/#tentang-kami">Tentang Kami</a></li>
                    <li><a class="pagelist-row" href="informasi/#kontak-kami">Kontak Kami</a></li>
                    <li><a class="pagelist-row" href="informasi/#pedoman-media-siber">Pedoman Media Siber</a></li>
                    <li><a class="pagelist-row" href="informasi/#panduan-kebijakan">Panduan Kebijakan</a></li>
                    <li><a class="pagelist-row" href="informasi/#disclaimer">Disclaimer</a></li>
                    <li><a class="pagelist-row" href="informasi/#karir">Karir</a></li>
                  </ul>
                </li>
                <li>
                  <div class="pagelist-row">Halaman Login Wifi</div>  
                  <ul>
                    <li><a class="pagelist-row" href="wifi-login/">Halaman Utama</a></li>
                    <li><a class="pagelist-row" href="wifi-login/coin/">Halaman Isi Coin</a></li>
                    <li><a class="pagelist-row" href="wifi-login/coin/success.php">Halaman Coin Berhasil Digunakan</a></li>
                    <li><a class="pagelist-row" href="wifi-login/member/">Halaman Login Member</a></li>
                    <li><a class="pagelist-row" href="wifi-login/member/error.php">Halaman Login Gagal</a></li>
                    <li><a class="pagelist-row" href="wifi-login/member/success.php">Halaman Login Berhasil</a></li>
                    <li><a class="pagelist-row" href="wifi-login/voucher/">Halaman Konfirmasi Penggunaan Voucher</a></li>
                    <li><a class="pagelist-row" href="wifi-login/voucher/success.php">Halaman Voucher Berhasil Digunakan</a></li>
                  </ul>
                </li>
			  </ul>
			</div>
		</div>
	  </div>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['IDGS'].'inc/nav-bottom.php')?>
<?php require ($_SERVER['IDGS'].'inc/footer.php')?>
<?php require ($_SERVER['IDGS'].'inc/base-bottom.php')?>