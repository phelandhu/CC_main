<?php
 $siteBase = "http://www.cordcruncher.com/";
 $currentFile = $_SERVER["PHP_SELF"];
 $parts = Explode('/', $currentFile);
 $sitePage = $parts[count($parts) - 1];
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30608667-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div id="top-menu">
<?php

$howTo = "how-to.php?autoplay=1";
$shop = "shop.php";
$interact = "interact.php";
$contact = "contact.php";
$cart = "cart.php";
/*
	if( $sitePage != "index.php" ) {
		echo " <a href=\"" . $siteBase . "\">Main</a>";
	}
	if( $sitePage != "how-to.php" ) {
		echo " <a href=\"how-to.php\">How to Crunch</a>";
	}
	if( $sitePage != "shop.php" ) {
		echo " <a href=\"shop.php\">Shop</a>";
	}
	if( $sitePage != "interact.php" ) {
		echo " <a href=\"interact.php\">Interact</a>";
	}
	if( $sitePage != "contact.php" ) {
		echo " <a href=\"contact.php\">Contact</a>";
	}
*/
echo " <a href=\"" . $siteBase . "\"><img src=\"imgs/cordcruncher-zipper-logo-01.png\" height=\"118\" width=\"226\" alt=\"\" /></a>";
?>

<!--
 <a href="how-to.php">How to Crunch</a>
 <a href="shop.php">Shop</a>
 <a href="interact.php">Interact</a>
 <a href="contact.php">Contact</a>
 -->
      
<a href="<?php echo $howTo; ?>"><img src="imgs/howto.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;"/></a><a href="<?php echo $shop; ?>"><img src="imgs/shop.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;" /></a><a href="<?php echo $interact; ?>"><img src="imgs/blog.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;" /></a><a href="<?php echo $contact; ?>"><img src="imgs/contact.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;" /></a><a href="http://www.facebook.com/CordCruncherHeadphones" target="_blank"><img src="imgs/fb.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;" /></a><a href="https://twitter.com/#!/CordCruncher" target="_blank"><img src="imgs/twit.jpg" alt="" style="position: relative;
left: 220px; bottom: 15px;"  /></a>
<?php

?>