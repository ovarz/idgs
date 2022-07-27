<div id="float-Cari" class="rancak-popup popup-search hide">
  <?php require ($_SERVER['IDGS'].'module/search-box.php')?>
</div>



<div id="float-Share" class="rancak-popup popup-share hide">
  <div class="popup-share-overlay"></div>
  <div class="popup-share-container content_center">
    <div class="popup-share-box">
	  <div class="popup-share-head">
	    <div class="popup-share-title">Bagikan artikel ini melalui :</div>
		<button title="Close" class="popup-share-close">
		  <?php require ($_SERVER['IDGS'].'img/icon/close.svg')?>
		</button>
	  </div>
	  <div class="popup-share-list">
	    <a aria-label="Facebook" title="Facebook" class="popup-share-link popup-share-facebook content_center" href="">
		  <?php require ($_SERVER['IDGS'].'img/icon/facebook-circle.svg')?>
		</a>
	    <a aria-label="Twitter" title="Twitter" class="popup-share-link popup-share-twitter content_center" href="">
		  <?php require ($_SERVER['IDGS'].'img/icon/twitter-circle.svg')?>
		</a>
	    <a aria-label="Whatsapp" title="Whatsapp" class="popup-share-link popup-share-whatsapp content_center" href="">
		  <?php require ($_SERVER['IDGS'].'img/icon/whatsapp-circle.svg')?>
		</a>
	  </div>
	  <div class="popup-share-copyurl">
	    <input type="text" class="psc-field" id="CopyLinkField" value="https://www.indogamers.com/">
		<button title="Copy URL" class="psc-button" onclick="CopyLink()">
		  <span>Salin URL</span>
		</button>
	  </div>
	</div>
  </div>
</div>



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
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>

<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js"></script>



</body>
</html>