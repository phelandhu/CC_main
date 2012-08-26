<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to CordCruncher</title>
    <link rel="stylesheet" href="common/ns/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="common/ns/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="common/ns/css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- include Cycle plugin -->
    <script type="text/javascript" src="common/ns/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
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
<LINK href="common/css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="oneColElsCtrHdr">

<div id="container">
    <?php include "top-menu.php" ?>
  <div id="header">

  <!-- end #header --></div>

  <div id="mainContent" >
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
<a href="<?php echo $shop; ?>"><img src="http://www.cordcruncher.com/imgs/blue_landing_text.jpg" data-transition="slideInLeft" /></a>
<a href="<?php echo $howTo; ?>"><img src="http://www.cordcruncher.com/imgs/splash_frame_how_to_crunch.jpg" data-transition="slideInLeft" /></a>
<a href="/video.php"><img src="http://www.cordcruncher.com/imgs/splash_frame_lifestyle.jpg" data-transition="slideInLeft" /></a>
            </div>
        </div>

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
