<?php
session_start();
include_once("conexao.php");

if($_SESSION["login"]){
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="menu.php">METOS</a> </div>
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
  <?php

  $digVeiculo= isset($_POST ["digVeiculo"])?$_POST ["digVeiculo"]:"Erro";
  $numVeiculo= isset($_POST ["numVeiculo"])?$_POST ["numVeiculo"]:"Erro";
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÃRIO !



  function get_post_action($name) 
  { 
    $params = func_get_args(); 

    foreach ($params as $name) { 
        if (isset($_POST[$name])) { 
            return $name; 
        } 
    } 
} 
switch (get_post_action( 'buscar', 'alterar', 'excluir')) {


    case 'buscar':

    $result_visitantes = "SELECT `id`,`nome`, `sobre_nome`, `bloco`, `apartamento`,`proprietarioLocatario`, `cpf`, `rg`,  `ddd`, `celular`, `email`, `telefoneResidencial`, `telefoneComercial`, `cidade`, `profissao`, `dataNascimento`, 
    `nomeUrgencia`, `parentescoUrgencia`, `celularUrgencia`, `telefoneFixoUrgencia`,
    `nomeUrgencia1`, `parentescoUrgencia1`, `celularUrgencia1`, `telefoneFixoUrgencia1`, 
    `nomeMoradoresResidencia`, `parentescoMoradoresResidencia`,`nascimentoMoradoresResidencia`,
    `nomeMoradoresResidencia1`, `parentescoMoradoresResidencia1`, `nascimentoMoradoresResidencia1`,
    `nomeMoradoresResidencia2`, `parentescoMoradoresResidencia2`, `nascimentoMoradoresResidencia2`,
    `nomeMoradoresResidencia3`, `parentescoMoradoresResidencia3`, `nascimentoMoradoresResidencia3`,
    `nomeMoradoresResidencia4`, `parentescoMoradoresResidencia4`, `nascimentoMoradoresResidencia4`, 
    `nomeEmpregada`, `rgEmpregada`, 
    `nomeEmpregada1`, `rgEmpregada1`, 
    `tipoVeiculo`, `marcaModeloVeiculo`, `vagaVeiculo`,`digVeiculo`,`numVeiculo`,
    `tipoVeiculo1`, `marcaModeloVeiculo1`, `vagaVeiculo1`,`digVeiculo1`,`numVeiculo1`,
    `tipoVeiculo2`, `marcaModeloVeiculo2`, `vagaVeiculo2`,`digVeiculo2`,`numVeiculo2`,
    `quantidadeAnimais`, `especieAnimais` FROM `morador` WHERE (digVeiculo = '$digVeiculo' and numVeiculo = '$numVeiculo')or(digVeiculo1 = '$digVeiculo' and numVeiculo1 = '$numVeiculo')or(digVeiculo2 = '$digVeiculo' and numVeiculo2 = '$numVeiculo')";
    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());
    $cont =mysqli_num_rows($resultado);

    ?>
    
    <table class="table" role="form">
        <?php
        if($cont){   
            while($row = mysqli_fetch_array( $resultado)){ 
                ?>
                <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
                    <div class="row" >
                        <div class="consulta">
                            <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" ><?php echo $row["nome"] ?></h1> 
                            <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Apartamento:</strong> <?php echo $row["apartamento"] ?></p>
                            <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Bloco:</strong> <?php echo $row["bloco"] ?></p>
                            <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php echo $row["celular"] ?></p>
                            <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Residencial:</strong> <?php echo $row["telefoneResidencial"] ?></p></div>
                        </div>
                    </div>


                    <?php 
                    
                }
            }else{
               $_SESSION["veiculo"] = "Veiculo não cadastrado";
               header("Location: ../minhaVaga.php");
               mysqli_close($conn);
           } 
           ?>


       </table>

       </html>


       <script src="../jquery/jquery.min.js"></script>
       <script src="../jquery/ie10-viewport-bug-workaround.js"></script>
       <script src="../jquery/ie-emulation-modes-warning.js.js"></script>
       <script>window.jQuery || document.write('<script src="../jquery/jquery.min.js"><\/script>')</script>
       <script src="../jquery/bootstrap.min.js"></script>


       <a href="../minhaVaga.php" class="btn btn-danger" >
           Voltar
       </a>

       <?php
 mysqli_close($conn);
       break;

       case 'alterar':
       $id= isset($_POST ["id"])?$_POST ["id"]:"Erro"; 


       $result_visitantes = "UPDATE `visitantes` SET `nome`='$nome', `sobre_nome`='$sobrenome',`bloco`='$bloco' , `apartamento`='$apartamento', `cpf`='$cpf', `rg`='$rg', `data_nascimento`='$dataNascimento', `ddd`='$ddd', `celular`='$celular', `telefone_residencial`='$telefoneResidencial' WHERE `id` = '$id' ";


       $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

       if($resultado){

        $_SESSION["alteraÃ§Ã£oRealizada"] = "AlteraÃ§Ã£o Realizada Com Sucesso ";
        header("Location: ../consultarNovoVisitante.php ");
        mysqli_close($conn);
    }else{
        mysqli_close($conn); 
    }
    break;

    case 'excluir':
    $id= isset($_POST ["id"])?$_POST ["id"]:"Erro"; 


    $result_visitantes = "DELETE FROM `visitantes` WHERE `id`='$id'";


    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

    if($resultado){

        $_SESSION["dadosDeletado"] = "Visitante excluido com sucesso ";
        header("Location: ../consultarNovoVisitante.php ");
        mysqli_close($conn);
    }else{
        header("Location: ../menu.php"); 
        mysqli_close($conn); 
    }

    ;
    break;
}
?>
<?php
}else{
    $_SESSION["fazerLogin"] = "Fazer login";
    header("Location: index.php");
}
?>
