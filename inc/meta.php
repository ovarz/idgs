<?php $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y') ?>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="IDGS">
<link rel="preconnect" href="https://www.ov4rz.com"> <!-- ganti href preconnect dengan link asset viva (hapus comment ini di production) -->
<link rel="dns-prefetch" href="https://www.ov4rz.com" /> <!-- ganti href dns-prefetch dengan link asset viva (hapus comment ini di production) -->
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com" />
<title>IDGS</title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />
<link rel="preload" href="fonts/dmsans/rP2Hp2ywxg089UriCZOIHQ.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/dmsans/rP2Cp2ywxg089UriASitCBimCw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="img/logo.svg" as="image">
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<?php if($page == 'detail') { ?>
  <link rel="preload" href="css/detail.css?<?php echo $anticache; ?>" as="style">
  <link rel="preload" href="https://thumb.intipseleb.com/media/frontend/thumbs3/2021/10/18/616cea4dcc1ad-blackpink_375_211.jpeg" as="image"> 
  <!-- link image detail article (hapus comment ini di production) -->
<?php } ?>
<style><?php require ($_SERVER['IDGS'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../vivanetworks/global-js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/rancak-desktop.css?<?php echo $anticache; ?>" media="(min-width:1024px)">
<?php if($page == 'detail') { ?>
  <link rel="stylesheet" type="text/css" href="css/detail.css?<?php echo $anticache; ?>"/>
<?php } ?>
</head>
<body>