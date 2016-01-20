<!DOCTYPE html>
<html lang="pt-br" ng-app="store">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Emerson Mendonça</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-default">
            
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"><h1>{{"Emerson " + "Mendonça"}}</h1></a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="nav-menu" class="nav navbar-nav">
                <!--    <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>    -->
                <li><a href="#panel-1">Sobre Mim </a></li>
                <li><a href="#panel-2">Portfólio </a></li>
                <li><a href="#panel-3">Contato </a></li>
                <li><a href="https://amareisblog.wordpress.com/" target="_blank">Blog </a></li>
            </ul>		      
        </div><!-- /.navbar-collapse -->
        
    </nav>
	
        <div id="panel-1" class="jumbotron">
            
        <h2 class="title">Sobre Mim</h2>
        <!--<span class="legend">Onde mora, como vive, do que se alimenta...</span>-->
        
        <div class="content">
            <?php include 'includes/sobremim.php'; ?>
        </div>
        
    </div>
    
    
    <div id="media-wrapper" class="jumbotron">
        
        <a href="https://www.linkedin.com/in/emersonmdca" target="_blank">
            <div class="media-box">
                <img src="imgs/linkedin.png" />
                <span>LinkedIn.</span>
            </div>
        </a>
        <a href="https://br.pinterest.com/emersonmdca/" target="_blank">
            <div class="media-box">
                <img src="imgs/pinterest.png" />
                <span>Pinterest.</span>
            </div>
        </a>
        <a href="https://amareisblog.wordpress.com/" target="_blank">
            <div class="media-box">
                <img src="imgs/wordpress.png" />
                <span>Blog.</span>
            </div>
        </a>
        
    </div>
    
    
    

    <div id="panel-2" class="jumbotron">
        
        <h2 class="title">Portfólio</h2>
        <!--<span class="legend">Separe um tempinho para apreciar meus trabalhos!</span>-->
        
        <div class="content">
            <?php include 'includes/portfolio.php'; ?>
        </div>
                
    </div>

    <div id="panel-3" class="jumbotron">
        
        <h2 class="title">Contato</h2>
        <!--<span class="legend">Fale comigo, me mande uma pergunta, sugestão, elogio ou, quem sabe, uma proposta! ;)</span>-->
        
        <div class="content">
            <?php include 'includes/contato.php'; ?>
        </div>        		
    </div>


    
    
    <footer>
		<a href="https://www.linkedin.com/in/emersonmdca" target="_blank"><img src="imgs/linkedin.png" /></a>
		<a href="https://br.pinterest.com/emersonmdca/" target="_blank"><img src="imgs/pinterest.png" /></a>
		<a href="https://amareisblog.wordpress.com/" target="_blank"><img src="imgs/wordpress.png" /></a>
	</footer>
    	
</body>
</html>