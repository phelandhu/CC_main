<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="common/ns/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="common/ns/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="common/ns/css/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="common/ns/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
    </script>
</head>
<body>
    <div id="wrapper">
        <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a>

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>

</body>
</html>