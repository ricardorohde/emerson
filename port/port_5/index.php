<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema De Estoque</title>
  </head>
  <body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/estoque/assets/css/styles.css">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/estoque/index.php">Home</a>
        </div><!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul id="main-nav" class="nav navbar-nav">
            <li><a href="produtos" class="action-view">Produtos </a></li>
            <li><a href="clientes" class="action-view">Clientes </a></li>
            <li><a href="pedidos" class="action-view">Pedidos </a></li>
          </ul>
            
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        
          <ul class="nav navbar-nav navbar-right">
            <li><a href="pedidos" class="action-create">Novo Pedido</a></li>
          </ul>
        </div><!-- /.collapse -->
      </div><!-- /.container-fluid -->
    </nav>



    <!--
    <div id="loader">
      <img src="assets/img/preload.gif">
    </div>
    -->



    <!-- Wraps results of view actions (a.acion-view) when they're clicked via ajax -->  
    <div id="common-wrapper">

      <!-- TOTAL -->  
      <div class="list-group front-resume-list">
        <a href="produtos" class="list-group-item action-view">
          <span class="badge"><?php //$count->getCountPr(); ?></span>
          Produtos
        </a>
        <a href="clientes" class="list-group-item action-view">
          <span class="badge"><?php //$count->getCountC(); ?></span>
          Clientes
        </a>
        <a href="pedidos" class="list-group-item action-view">
          <span class="badge"><?php //$count->getCountPe(); ?></span>
          Pedidos
        </a>
      </div><!-- /.list-group -->

    </div><!-- /#common-wrapper -->
  



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>