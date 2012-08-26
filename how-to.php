<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How to use your CordCruncher</title>

    <LINK rel="stylesheet" type="text/css" media="screen" href="common/css/main.css">

</head>

<body class="oneColElsCtrHdr">
	<?php include "inc.new_header.php" ?>
<div id="container">
   <?php include "top-menu.php" ?>
  <div id="header">

  <!-- end #header --></div>
  <div id="mainContent" style="text-align:center">
  <span style="position:relative; left:65px;">
	<?php
		if(isset($_GET["autoplay"])):
	?>
			<iframe src="http://player.vimeo.com/video/44176073?autoplay=1" width="675" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	<?php
        else:
	?>
			<iframe src="http://player.vimeo.com/video/44176073" width="675" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    <?php
		endif;
  	?>
</span>
<?php
// http://av.vimeo.com/01387/669/103527407.mp4?aksessionid=48d2e3ac9eb38f8b761f9d5643d3fd32&token=1339986357_a3baf0fee6e6ff3dd58e52e8ea95af8c
?>
	<!-- end #mainContent --></div>
  <div id="footer">
  <?php include "footer-menu.php" ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
