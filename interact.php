<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interact</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'slideX' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
<LINK href="css/main.css" rel="stylesheet" type="text/css">

<body class="oneColElsCtrHdr">

<div id="container">
   <?php include "top-menu.php" ?>
  <div id="header">
  <!-- end #header --></div>
  <div id="mainContent" style="text-align:center">
    <a href="https://twitter.com/#!/CordCruncher" target="_blank"><img src="imgs/twitter_-logo.gif" height="200" width="200" /></a></p><br />
    <a href="http://www.facebook.com/CordCruncherHeadphones" target="_blank"><img src="imgs/facebook-logo-vector-01.png" height="200" width="200" /></a><br />
    <p><a href="http://www.kickstarter.com/projects/1587181400/cordcruncher-earbud-headphones" target="_blank"><img src="imgs/Kickstarter_logo.png" height="24" width="200" /></a></p>
	<!-- end #mainContent --></div>
  <div id="footer">
  <?php include "footer-menu.php" ?>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
