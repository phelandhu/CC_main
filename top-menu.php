<?php
 $siteBase = "http://www.cordcruncher.com/";
 $currentFile = $_SERVER["PHP_SELF"];
 $parts = Explode('/', $currentFile);
 $sitePage = $parts[count($parts) - 1];
?>
<div id="top-menu">
<?php

$howTo = "how-to.php";
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
echo " <a href=\"" . $siteBase . "\"><img src=\"imgs/cordcruncher-zipper-logo-01.png\" height=\"118\" width=\"226\"></a>";
?>
<span id="top-menu-navigation">
<!--
 <a href="how-to.php">How to Crunch</a>
 <a href="shop.php">Shop</a>
 <a href="interact.php">Interact</a>
 <a href="contact.php">Contact</a>
 -->
 
 <span id="how-to"><a href="<?php echo $howTo; ?>"><img src="imgs/howToCrunch.png"  /></a></span>
 <span id="shop"><a href="<?php echo $shop; ?>"><img src="imgs/shop.png"  /></a></span>
 <span id="interact"><a href="<?php echo $interact; ?>"><img src="imgs/interact.png"  /></a></span>
 <span id="contact"><a href="<?php echo $contact; ?>"><img src="imgs/contact.png"  /></a></span>
 <span id="cart"><a href="<?php echo $cart; ?>"><img src="imgs/cart.png"  /></a></span>
</span>
</div>
<?php

?>