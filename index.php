<!DOCTYPE html>
<html lang="pt-br" ng-app="store">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Emerson Mendonça</title>
    <link rel="icon" type="image/png" href="imgs/favicon.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>

    <h1>Emerson Mendonça</h1>
    <p id="header-span">Front-End Developer</p>
		<a href="https://github.com/emersonmdca" target="_blank" style="float:right; margin:10px 20px;"><img src="imgs/github-mark.png" /></a>

    <div id="panel-2" class="jumbotron">
        <h2 class="title">Portfólio</h2>
        <div class="content">
            <?php include 'includes/portfolio.php'; ?>
        </div>
    </div>

    <div id="panel-1" class="jumbotron col">
        <h2 class="title">Sobre Mim</h2>
        <div class="content">
            <?php include 'includes/sobremim.php'; ?>
        </div>
    </div>

    <div id="panel-3" class="jumbotron col">
        <h2 class="title">Contato</h2>
        <div class="content">
            <?php include 'includes/contato.php'; ?>
        </div>
    </div>

    <footer>
        <div class="media-box">
            <a href="https://github.com/emersonmdca" target="_blank">
                <img src="imgs/github.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://plus.google.com/111551378075736234890/posts" target="_blank">
                <img src="imgs/gplus.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://www.linkedin.com/in/emersonmdca" target="_blank">
                <img src="imgs/linkedin.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://br.pinterest.com/emersonmdca/" target="_blank">
                <img src="imgs/pinterest.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://player.spotify.com/user/emersonmendon%C3%A7a" target="_blank">
                <img src="imgs/spotify.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://twitter.com/emersonmdca" target="_blank">
                <img src="imgs/twitter.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://wordpress.com/" target="_blank">
                <img src="imgs/wordpress.png" />
            </a>
        </div>

        <div class="media-box">
            <a href="https://www.youtube.com/channel/UCVwAyvJuhpTjsFiAmcmm9-w" target="_blank">
                <img src="imgs/youtube.png" />
            </a>
        </div>
    </footer>
</body>
</html>
