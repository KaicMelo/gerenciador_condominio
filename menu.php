<!DOCTYPE html>
<?php
session_start();

if($_SESSION["login"]){
   ?>

   <!DOCTYPE html>
   <html>
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <link rel="icon" href="img/icon.png">
       <title>METOS</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">
       <!-- Style Config-->
       <link href="css/index.css" rel="stylesheet">
       <style>

       img{
          margin: 0px auto;

      }
  </style>
</head>
<body>


  <!-- Static navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="menu.php">METOS</a> </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="cadastraMoradorOuLocatario.php">Cadastrar Morador</a></li>
                    <li><a href="cadastraNovoVisitante.php">Cadastrar Cliente</a></li>
                    <li><a href="alterar.php">Alterar Cadastro</a></li>
                    <li><a href="minhaVaga.php">Minha Vaga</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitação<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="solicitar_churrasqueira.php">Churrasqueira</a></li>
                            <li><a href="solicitar_salao.php">Salão de Festa</a></li>
                            <li><a href="solicitar_controle.php">Controle</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="consultarMoradorOuLocatario.php">Morador</a></li>
                            <li><a href="consultarNovoVisitante.php">Visitante</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="aviso.php">Aviso</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="php/sessio_destroy.php" >sair

                    </a>
                  </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
    <div class="col-md-12">
        <thead class="thead-dark">
            <tr>
                <p ><img src="img/logo.jpg" class="img-responsive" alt="Cinque Terre"></p>
            </tr>
        </thead>
    </div>
    <div class="copyright"> <span class="pull-left">&copy; <b>Todos os direitos reservados</b></span> <span class="pull-right">
        <a style="color:#3c228b;" href="https://suporteboole.freshdesk.com/support/solutions/articles/36000021638-notas-da-versão-1-0-1" target="_blank">
            &nbsp; versão 1.0
        </a>

    </span> </div>

</body>
</html>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/ie10-viewport-bug-workaround.js"></script>
<script src="jquery/ie-emulation-modes-warning.js.js"></script>
<script>window.jQuery || document.write('<script src="jquery/jquery.min.js"><\/script>')</script>
<script src="jquery/bootstrap.min.js"></script>
<?php
}else{
    $_SESSION["fazerLogin"] = "Fazer login";
    header("Location: index.php");
}



?>