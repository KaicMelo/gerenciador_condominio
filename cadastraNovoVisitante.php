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
    <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
      <div class="cadastro">
        
        <h2>Ficha de Visitantes</h2>
        <h2><img src="img/avatar.png" alt="Avatar" class="avatar" style="vertical-align: middle;border-radius: 50%;width: 30%;"></h2>
        <?php
        if(isset($_SESSION['cadastroRealizado'])){
          ?>

          <span class="badge badge-success col-md-12" style="background-color:rgba(0, 128, 0, 0.56);">
            <?php
            echo $_SESSION['cadastroRealizado'];
            sleep(2);
            flush();
            unset ($_SESSION['cadastroRealizado']);
            ?>
          </span>
          <br>
          <?php
        }
        ?>
        <?php
        if(isset($_SESSION['alteraçãoRealizada'])){
          ?>

          <span class="badge badge-success col-md-12" style="background-color:rgba(0, 128, 0, 0.56);">
            <?php
            echo $_SESSION['alteraçãoRealizada'];
            sleep(2);
            flush();
            unset ($_SESSION['alteraçãoRealizada']);
            ?>
          </span>

          <br>
          <?php
        }
        if(isset($_SESSION['dadosDeletado'])){
          ?>

          <span class="badge badge-success col-md-12" style="background-color:rgba(0, 128, 0, 0.56);">
            <?php
            echo $_SESSION['dadosDeletado'];
            sleep(2);
            flush();
            unset ($_SESSION['dadosDeletado']);
            ?>
          </span>

          <br>
          <?php
        }
        ?>



        <form action="php/CadastraVisitantes.php" method="POST">



          <div class="form-grup col-md-4  ">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" maxlength="70">
          </div>
          <div class="form-grup col-md-4  ">
            <label for="nome">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" maxlength="70">
          </div>
          <div class="form-group col-md-2 ">
            <label for="bloco">Bloco</label>
            <input type="text" class="form-control" name="bloco" id="bloco" maxlength="1">
          </div>
          <div class="form-group col-md-2 ">
            <label for="apartamento">Apartemento</label>
            <input type="text" class="form-control" name="apartamento" id="apartamento">
          </div>

          <div class="form-group col-md-6">
            <label for="cpf">CPF&nbsp;<sub>Somente numeros</sub></label>
            <input class="form-control" name="cpf" type="number" maxlength="11">
          </div>
          <div class="form-group col-md-6">
            <label for="rg">RG:</label>
            <input class="form-control" name="rg" type="number" maxlength="9">
          </div>
          <div class="form-group col-md-2">
            <label for="dataNascimento">Data Nascimento</label>
            <input class="form-control" name="dataNascimento" type="date">
          </div>
          <div class="form-group col-md-2 ">
            <label for="ddd">DDD</label>
            <input type="number" class="form-control " name="ddd" id="ddd">
          </div>
          <div class="form-group col-md-4 ">
            <label for="celular">Celular</label>
            <input type="number" class="form-control " name="celular" id="celular" maxlength="9">
          </div>

          <div class="form-group col-md-4">
            <label for="telefoneResidencial">Telefone residencia</label>
            <input type="number" class="form-control" name="telefoneResidencial" id="telefoneResidencial">
          </div>


          <div class="form-group col-md-3">

            <input class="form-control" type="submit" value="Cadastrar" name="cadastrar">
          </div>



        </form>

        <a href="menu.php" class="btn btn-danger" >
         Voltar
       </a>
</div>
     </div>
   

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