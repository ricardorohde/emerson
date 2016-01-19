<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>page</title>
	
	<!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
		
	<!-- CSS -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<!-- JSSOR SLIDER BEGIN -->
	
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div style="display: none;">
                <img data-u="image" src="img/red.jpg" />
            </div>
            <div style="display: none;">
                <img data-u="image" src="img/purple.jpg" />
            </div>
            <div style="display: none;">
                <img data-u="image" src="img/blue.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:123px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:123px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
    </div>

    <!-- JSSOR SLIDER END -->
	
	
	<?php include "includes/main_page.inc"; ?>
	
	<?php include "includes/popup.inc"; ?>
	
	
	<!-- Jssor Slider is free under MIT license. -->
    <!-- Development Reference http://www.jssor.com/development. -->
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Local Script -->
	<script src="js/script.js"></script>
	
</body>
</html>