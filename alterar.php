<!DOCTYPE html>
<?php
session_start();

if($_SESSION["login"]){
 ?>
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
 </head>

 <body>
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

    <div class="container col-md-12">
      <a href="alterarMorador.php">
      <div class="alert alert-warning col-md-6">
        <strong>Morador</strong> <i> Clique aqui para editar Morador.</i>
      </div>
      </a>
      <a href="alterarVisitante.php">
      <div class="alert alert-info col-md-6">
        <strong>Visitante</strong> <i>Clique aqui para editar Visitante.</i>
      </div>
      </a>
    </div>
          <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="jquery/jquery.min.js"></script>
            <script src="jquery/ie10-viewport-bug-workaround.js"></script>
            <script src="jquery/ie-emulation-modes-warning.js.js"></script>
            <script>window.jQuery || document.write('<script src="jquery/jquery.min.js"><\/script>')</script>
            <script src="jquery/bootstrap.min.js"></script>
          </body>

          </html>
          <?php
        }else{
          $_SESSION["fazerLogin"] = "Fazer login";
          header("Location: index.php");
        }
        ?>