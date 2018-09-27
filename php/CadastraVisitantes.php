<?php
session_start();
include_once("conexao.php");

if($_SESSION["login"]){
 ?>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;

}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÃRIO !

$nome= isset($_POST ["nome"])?$_POST ["nome"]:"Erro";
$sobrenome= isset($_POST ["sobrenome"])?$_POST ["sobrenome"]:"Erro";
$bloco= isset($_POST ["bloco"])?$_POST ["bloco"]:"Erro";
$apartamento= isset($_POST ["apartamento"])?$_POST ["apartamento"]:"Erro";
$cpf= isset($_POST ["cpf"])?$_POST ["cpf"]:"Erro";
$rg= isset($_POST ["rg"])?$_POST ["rg"]:"Erro";
$dataNascimento= isset($_POST ["dataNascimento"])?$_POST ["dataNascimento"]:"Erro";
$ddd= isset($_POST ["ddd"])?$_POST ["ddd"]:"Erro";
$celular= isset($_POST ["celular"])?$_POST ["celular"]:"Erro";
$telefoneResidencial= isset($_POST ["telefoneResidencial"])?$_POST ["telefoneResidencial"]:"Erro";




function get_post_action($name) 
{ 
  $params = func_get_args(); 

  foreach ($params as $name) { 
    if (isset($_POST[$name])) { 
      return $name; 
    } 
  } 
} 
switch (get_post_action('cadastrar', 'buscar', 'alterar', 'excluir', 'alteraVisitante')) {

  case 'cadastrar':
  $result_visitantes = "INSERT INTO `visitantes` (`nome`, `sobre_nome`, `bloco`, `apartamento`, `cpf`, `rg`, `data_nascimento`, `ddd`, `celular`, `telefone_residencial`) VALUES ('$nome', '$sobrenome', '$bloco', '$apartamento', '$cpf', '$rg', '$dataNascimento', '$ddd', '$celular', '$telefoneResidencial')";

  $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());
  if($resultado){
    $_SESSION["cadastroRealizado"] = "Cadastro Realizado Com Sucesso ";
    header("Location: ../cadastraNovoVisitante.php");
    mysqli_close($conn);
  }else{
    header("Location: menu.php");  
    mysqli_close($conn);
  }


  break;

  case 'buscar':
       // header("Location: ../CadastraNovoVisitante.php");
  $result_visitantes = "SELECT `id`,`nome`, `sobre_nome`, `bloco`, `apartamento`, `cpf`, `rg`, `data_nascimento`, `ddd`, `celular`, `telefone_residencial` FROM `visitantes` WHERE rg = '$rg' or (bloco = '$bloco' and apartamento = '$apartamento') ";
  $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());


  ?>
  <html>
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <link rel="icon" href="../img/icon.png">
   <title>METOS</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link rel="stylesheet" type="text/css" href="../css/ie10-viewport-bug-workaround.css">
   <!-- Style Config-->
   <link href="../css/index.css" rel="stylesheet">
 </head>
 <body>


  <!-- Static navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="../menu.php">METOS</a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="../cadastraMoradorOuLocatario.php">Cadastrar Morador</a></li>
            <li><a href="../cadastraNovoVisitante.php">Cadastrar Cliente</a></li>
            <li><a href="../minhaVaga.php">Minha Vaga</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitação<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../solicitar_churrasqueira.php">Churrasqueira</a></li>
                <li><a href="../solicitar_salao.php">Salão de Festa</a></li>
                <li><a href="../solicitar_controle.php">Controle</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../consultarMoradorOuLocatario.php">Morador</a></li>
                <li><a href="../consultarNovoVisitante.php">Visitante</a></li>
              </ul>
            </li>
            <li class="active"><a href="../aviso.php">Aviso</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="sessio_destroy.php" >sair

              </a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
    <form action="CadastraVisitantes.php" method="POST">

      <table class="form-inline" role="form">
        <?php
        while($row = mysqli_fetch_array( $resultado)){   
          ?>

          <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
            <div class="row" >
              <div class="consulta">
                <input  type="hidden" class="form-contol" name="id" maxlength="70" value="<?php echo $row["id"] ?>">
                <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" ><?php echo $row["nome"] ?></h1> 
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Sobrenome:</strong> <?php echo $row["sobre_nome"] ?></p>
                <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Bloco:</strong> <?php echo $row["bloco"] ?></p>
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Apartamento:</strong> <?php echo $row["apartamento"] ?></p>
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>CPF:</strong> <?php echo $row["cpf"] ?></p>
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>RG:</strong> <?php echo $row["rg"] ?></p>
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>NASCIMENTO:</strong> <?php echo $row["data_nascimento"] ?></p>
                <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Residencial:</strong> <?php echo $row["telefone_residencial"] ?></p>


              </div>

            </div>
          </div>


          <?php } ?>
          <div class="container">
            <a href="../consultarNovoVisitante.php" class="btn btn-danger" >
             Voltar
           </a>
         </div>
       </table>
     </form>
     </html>

     <script src="../jquery/jquery.min.js"></script>
     <script src="../jquery/ie10-viewport-bug-workaround.js"></script>
     <script src="../jquery/ie-emulation-modes-warning.js.js"></script>
     <script>window.jQuery || document.write('<script src="../jquery/jquery.min.js"><\/script>')</script>
     <script src="../jquery/bootstrap.min.js"></script>



     <?php
     mysqli_close($conn); 
     break;

     case 'alterar':
     $id= isset($_POST ["id"])?$_POST ["id"]:"Erro"; 


     $result_visitantes = "UPDATE `visitantes` SET `nome`='$nome', `sobre_nome`='$sobrenome',`bloco`='$bloco' , `apartamento`='$apartamento', `cpf`='$cpf', `rg`='$rg', `data_nascimento`='$dataNascimento', `ddd`='$ddd', `celular`='$celular', `telefone_residencial`='$telefoneResidencial' WHERE `id` = '$id' ";


     $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

     if($resultado){

      $_SESSION["alteraçãoRealizada"] = "alteraçãoRealizada Realizada Com Sucesso ";
      header("Location: ../alterarVisitante.php");
      mysqli_close($conn);
    }else{
      header("Location: ../menu.php"); 
      mysqli_close($conn);  
    }
    break;

    case 'excluir':
    $id= isset($_POST ["id"])?$_POST ["id"]:"Erro"; 


    $result_visitantes = "DELETE FROM `visitantes` WHERE id='$id' ";


    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

    if($resultado){

      $_SESSION["dadosDeletado"] = "Visitante excluido com sucesso ";
      header("Location: ../alterarVisitante.php");
      mysqli_close($conn);
    }else{
      header("Location: ../menu.php");  
      mysqli_close($conn);
    }

    ;
    break;

    case 'alteraVisitante':
    
    $result_visitantes = "SELECT `id`,`nome`, `sobre_nome`, `bloco`, `apartamento`, `cpf`, `rg`, `data_nascimento`, `ddd`, `celular`, `telefone_residencial` FROM `visitantes` WHERE rg = '$rg' or (bloco = '$bloco' and apartamento = '$apartamento') ";
    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());


    ?>

    <html>
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <link rel="icon" href="../img/icon.png">
     <title>METOS</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <link rel="stylesheet" type="text/css" href="../css/ie10-viewport-bug-workaround.css">
     <!-- Style Config-->
     <link href="../css/index.css" rel="stylesheet">
   </head>
   <body>


    <!-- Static navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="../menu.php">METOS</a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="../cadastraMoradorOuLocatario.php">Cadastrar Morador</a></li>
              <li><a href="../cadastraNovoVisitante.php">Cadastrar Cliente</a></li>
              <li><a href="../minhaVaga.php">Minha Vaga</a></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitação<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../solicitar_churrasqueira.php">Churrasqueira</a></li>
                  <li><a href="../solicitar_salao.php">Salão de Festa</a></li>
                  <li><a href="../solicitar_controle.php">Controle</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../consultarMoradorOuLocatario.php">Morador</a></li>
                  <li><a href="../consultarNovoVisitante.php">Visitante</a></li>
                </ul>
              </li>
              <li class="active"><a href="../aviso.php">Aviso</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="sessio_destroy.php" >sair

                </a>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </nav>
      <form action="CadastraVisitantes.php" method="POST">
        <table class="form-inline" role="form">
        
          <?php
          while($row = mysqli_fetch_array( $resultado)){   
            ?>
            <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
              <div class="cadastro">

                <input type="hidden" class="form-contol" name="id" maxlength="70" value="<?php echo $row["id"] ?>">

                <div class="form-grup col-md-4  ">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" maxlength="70" value="<?php echo $row["nome"] ?>">
                </div>
                <div class="form-grup col-md-4  ">
                  <label for="nome">Sobrenome</label>
                  <input type="text" class="form-control" name="sobrenome" maxlength="70" value="<?php echo $row["sobre_nome"] ?>">
                </div>
                <div class="form-group col-md-2 ">
                  <label for="bloco">Bloco</label>
                  <input type="text" class="form-control" name="bloco" id="bloco" maxlength="1" value="<?php echo $row["bloco"] ?>">
                </div>
                <div class="form-group col-md-2 ">
                  <label for="apartamento">Apartemento</label>
                  <input type="text" class="form-control" name="apartamento" id="apartamento" value="<?php echo $row["apartamento"] ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="cpf">CPF&nbsp;<sub>Somente numeros</sub></label>
                  <input class="form-control" name="cpf" type="number" maxlength="11" value="<?php echo $row["cpf"] ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="rg">RG:</label>
                  <input class="form-control" name="rg" type="number" maxlength="9" value="<?php echo $row["rg"] ?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="dataNascimento">Data Nascimento</label>
                  <input class="form-control" name="dataNascimento" type="date" value="<?php echo $row["data_nascimento"] ?>">
                </div>
                <div class="form-group col-md-2 ">
                  <label for="ddd">DDD</label>
                  <input type="number" class="form-control " name="ddd" id="ddd" value="<?php echo $row["ddd"] ?>">
                </div>
                <div class="form-group col-md-4 ">
                  <label for="celular">Celular</label>
                  <input type="number" class="form-control " name="celular" id="celular" maxlength="9" value="<?php echo $row["celular"] ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="telefoneResidencial">Telefone residencia</label>
                  <input type="number" class="form-control" name="telefoneResidencial" id="telefoneResidencial" value="<?php echo $row["telefone_residencial"] ?>">
                </div>

                <div class="form-group col-md-3">

                  <input class="form-control" type="submit" value="Alterar" name="alterar" >
                </div>
                <div class="form-group col-md-3">

                  <input class="form-control" type="submit" value="Excluir" name="excluir" >
                </div>
              </div>
            </div>
            <br>
                                    <?php } ?>
                                  </table>
                                </form> 
                                <div class="container">
                                 <a href="../alteraVisitante.php" class="btn btn-danger">
                                 Voltar
                               </a> 

                                </div>
                                
                                </html>

                                <script src="../jquery/jquery.min.js"></script>
                                <script src="../jquery/ie10-viewport-bug-workaround.js"></script>
                                <script src="../jquery/ie-emulation-modes-warning.js.js"></script>
                                <script>window.jQuery || document.write('<script src="../jquery/jquery.min.js"><\/script>')</script>
                                <script src="../jquery/bootstrap.min.js"></script>

                                
                               <?php


                               mysqli_close($conn); 
                               break;
                               
                             }
                             ?>
                             <?php
                           }else{
                            $_SESSION["fazerLogin"] = "Fazer login";
                            header("Location: index.php");
                          }
                          ?>
