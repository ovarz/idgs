<nav class="menu-bottom mobile-only <?php if($share == 'yes') { ?>menu-bottom-withshare<?php } ?>">  
  <a aria-label="Beranda" title="beranda" class="sticky-link <?php if($kanal == 'beranda') { ?>sticky-curr<?php } ?> content_center" href="index.php">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-home.php')?>
      <?php if($share == 'no') { ?><div class="bottom-name">Beranda</div><?php } ?>
    </div>
  </a>
  
  <button aria-label="Cari" title="Cari" class="sticky-link open-sticky <?php if($kanal == 'cari') { ?>sticky-curr<?php } ?> content_center">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-search.php')?>
      <?php if($share == 'no') { ?><div class="bottom-name">Cari</div><?php } ?>
    </div>
  </button>
  
  <button aria-label="Menu" title="Menu" class="sticky-link open-sticky content_center">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-menu.php')?>
      <?php if($share == 'no') { ?><div class="bottom-name">Menu</div><?php } ?>
    </div>
  </button>
  
  <?php if($share == 'yes') { ?>
  <a aria-label="Share Facebook" title="Share Facebook" class="sticky-link sticky-share sticky-share-fb content_center" 
  href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.viva.co.id%2Fblog%2Fentertainment%2F1437622-wow-girl-grup-kpop-blackpink-setara-pussycat-dolls-dixie-chicks-spice-girls">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-facebook.php')?>
    </div>
  </a>
  
  <a aria-label="Share Twitter" title="Share Twitter" class="sticky-link sticky-share sticky-share-tw content_center" 
  href="https://twitter.com/intent/tweet?text=Blackpink%20Setara%20Pussycat%20Dolls,%20Dixie%20Chicks,%20dan%20Spice%20Girls%20https://www.viva.co.id/blog/entertainment/1437622-wow-girl-grup-kpop-blackpink-setara-pussycat-dolls-dixie-chicks-spice-girls">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-twitter.php')?>
    </div>
  </a>
  
  <a aria-label="Share Whatsapp" title="Share Whatsapp" class="sticky-link sticky-share sticky-share-wa content_center" 
  href="https://api.whatsapp.com/send?text=Blackpink%20Setara%20Pussycat%20Dolls,%20Dixie%20Chicks,%20dan%20Spice%20Girls%20https://www.viva.co.id/blog/entertainment/1437622-wow-girl-grup-kpop-blackpink-setara-pussycat-dolls-dixie-chicks-spice-girls">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-whatsapp.php')?>
    </div>
  </a>
  
  <button title="Copy Link" class="sticky-link sticky-share sticky-share-copy content_center" onclick="CopyURL();">
    <div class="bottom-button">
      <?php require ($_SERVER['ANTVKLIK'].'img/icon/bottom-copylink.php')?>
    </div>
  </button>
  <?php } ?>
</nav>