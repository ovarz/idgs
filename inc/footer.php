<footer class="footer-all content_center">
  <span class="width-max">
	footer
  </span>
</footer>



<div id="btt" class="content_center" title="Return To Top">
  <?php require ($_SERVER['IDGS'].'img/icon/back-to-top.svg')?>
</div>



<menu id="float-Menu" class="float-bottom float-menu mobile-only">
  menu
</menu>



<?php if($iklan == 'yes') { ?>
<div class="sticky-bottom slotiklan slotiklan-320x50 mobile-only content_center">
  <button aria-label="sticky bottom close" title="Close" class="sticky-bottom-close content_center">
    <svg class="svgicon svgicon-close" width="11" height="16" viewBox="0 0 320 512"><path d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"/></svg>
  </button>
  <iframe title="iklan" class="lazyload" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" data-original="iklan/inc/sticky-bottom.php" width="320" height="50"></iframe>
</div>
<?php } ?>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>

<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js"></script>
</body>
</html>