<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to CordCruncher</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'slideX',
		speed: 100,
   		speedIn: 25,  // speed of the "in" transition 
    	speedOut: 20,  // speed of the "out" transition 
	});
});

function jchange(object, imgObject) {
	var fold_image = new Array();
	fold_image[0] = "imgs/openarrow.gif";
	fold_image[1] = "imgs/closedarrow.gif"; 
	if(document.getElementById(object).style.display=='none') { 
		document.getElementById(object).style.display='block'; 
		if(document.getElementById(imgObject)) { 
			document.getElementById(imgObject).src=fold_image[0]; 
		} 
	} else { 
		document.getElementById(object).style.display='none';   
		if(document.getElementById(imgObject)) { 
			document.getElementById(imgObject).src=fold_image[1]; 
		} 
	} 
}
</script>
<LINK href="css/main.css" rel="stylesheet" type="text/css">
<style>
	.slideshow { height: 470px; width: 840px; margin: auto; position:relative; top:-20px; }
	.slideshow img { padding: 0px; background-color: #eee; }
</style>
</head>

<body class="oneColElsCtrHdr">

<div id="container">
    <?php include "top-menu.php" ?>
  <div id="header">

  <!-- end #header --></div>

  <div id="mainContent" >
	<div class="slideshow">
		<a href="<?php echo $interact; ?>"><img src="http://www.cordcruncher.com/wp-content/uploads/2012/06/Splash-Frame-Yoga.jpg" width="840" height="470" /></a>
		<a href="<?php echo $howTo; ?>"><img src="http://www.cordcruncher.com/wp-content/uploads/2012/06/Splash-Frame-Peace.jpg" width="840" height="470" /></a>
		<a href="<?php echo $contact; ?>"><img src="http://www.cordcruncher.com/wp-content/uploads/2012/04/Phone-Guy-small.jpg" width="840" height="470" /></a>
		 <a href="<?php echo $shop; ?>"><img src="http://www.cordcruncher.com/imgs/CCavail.jpg" width="840" height="470" /></a>	
    </div>

    <div id="news-feed">
    <!--
    <h2>News Feed Updates</h2>
    -->
    <?php 
	// read from a database to display the newsfeeds as they show
	?>
    <p>
<?php //include "news.php"; ?>
</p>
    </div>
	<!-- end #mainContent --></div>
  <div id="footer">
        <?php include "footer-menu.php" ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
