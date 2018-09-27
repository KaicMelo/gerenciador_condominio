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
    width: 90%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome= isset($_POST ["nome"])?$_POST ["nome"]:"Erro";
$sobrenome= isset($_POST ["sobrenome"])?$_POST ["sobrenome"]:"Erro";
$bloco= isset($_POST ["bloco"])?$_POST ["bloco"]:"Erro";
$apartamento= isset($_POST ["apartamento"])?$_POST ["apartamento"]:"Erro";
$proprietario= isset($_POST ["proprietarioLocatario"])?$_POST ["proprietarioLocatario"]:"Erro";
$cpf= isset($_POST ["cpf"])?$_POST ["cpf"]:"Erro";
$rg= isset($_POST ["rg"])?$_POST ["rg"]:"Erro";
$ddd= isset($_POST ["ddd"])?$_POST ["ddd"]:"Erro";$ddd= isset($_POST ["ddd"])?$_POST ["ddd"]:"Erro";
$celular= isset($_POST ["celular"])?$_POST ["celular"]:"Erro";
$email= isset($_POST ["email"])?$_POST ["email"]:"Erro";     
$telefoneResidencial= isset($_POST ["telefoneResidencial"])?$_POST ["telefoneResidencial"]:"Erro";
$telefoneComercial= isset($_POST ["telefoneComercial"])?$_POST ["telefoneComercial"]:"Erro";
$cidade= isset($_POST ["cidade"])?$_POST ["cidade"]:"Erro";
$profissao= isset($_POST ["profissao"])?$_POST ["profissao"]:"Erro";
$dataNascimento= isset($_POST ["dataNascimento"])?$_POST ["dataNascimento"]:"Erro";

$nomeUrgencia= isset($_POST ["nomeUrgencia"])?$_POST ["nomeUrgencia"]:"Erro";
$parentescoUrgencia= isset($_POST ["parentescoUrgencia"])?$_POST ["parentescoUrgencia"]:"Erro";
$celularUrgencia= isset($_POST ["celularUrgencia"])?$_POST ["celularUrgencia"]:"Erro";
$telefoneFixoUrgencia= isset($_POST ["telefoneFixoUrgencia"])?$_POST ["telefoneFixoUrgencia"]:"Erro";
$nomeUrgencia1= isset($_POST ["nomeUrgencia1"])?$_POST ["nomeUrgencia1"]:"Erro";
$parentescoUrgencia1= isset($_POST ["parentescoUrgencia1"])?$_POST ["parentescoUrgencia1"]:"Erro";
$celularUrgencia1= isset($_POST ["celularUrgencia1"])?$_POST ["celularUrgencia1"]:"Erro";
$telefoneFixoUrgencia1= isset($_POST ["telefoneFixoUrgencia1"])?$_POST ["telefoneFixoUrgencia1"]:"Erro";

$nomeMoradoresResidencia= isset($_POST ["nomeMoradoresResidencia"])?$_POST ["nomeMoradoresResidencia"]:"Erro";    
$parentescoMoradoresResidencia= isset($_POST ["parentescoMoradoresResidencia"])?$_POST ["parentescoMoradoresResidencia"]:"Erro";    
$nascimentoMoradoresResidencia= isset($_POST ["nascimentoMoradoresResidencia"])?$_POST ["nascimentoMoradoresResidencia"]:"Erro";    
$nomeMoradoresResidencia1= isset($_POST ["nomeMoradoresResidencia1"])?$_POST ["nomeMoradoresResidencia"]:"Erro";    
$parentescoMoradoresResidencia1= isset($_POST ["parentescoMoradoresResidencia1"])?$_POST ["parentescoMoradoresResidencia1"]:"Erro";    
$nascimentoMoradoresResidencia1= isset($_POST ["nascimentoMoradoresResidencia1"])?$_POST ["nascimentoMoradoresResidencia1"]:"Erro";       $nomeMoradoresResidencia2= isset($_POST ["nomeMoradoresResidencia2"])?$_POST ["nomeMoradoresResidencia2"]:"Erro";    
$parentescoMoradoresResidencia2= isset($_POST ["parentescoMoradoresResidencia2"])?$_POST ["parentescoMoradoresResidencia2"]:"Erro";    
$nascimentoMoradoresResidencia2= isset($_POST ["nascimentoMoradoresResidencia2"])?$_POST ["nascimentoMoradoresResidencia2"]:"Erro";   
$nomeMoradoresResidencia3= isset($_POST ["nomeMoradoresResidencia3"])?$_POST ["nomeMoradoresResidencia3"]:"Erro";    
$parentescoMoradoresResidencia3= isset($_POST ["parentescoMoradoresResidencia3"])?$_POST ["parentescoMoradoresResidencia3"]:"Erro";    
$nascimentoMoradoresResidencia3= isset($_POST ["nascimentoMoradoresResidencia3"])?$_POST ["nascimentoMoradoresResidencia3"]:"Erro"; 
$nomeMoradoresResidencia4= isset($_POST ["nomeMoradoresResidencia4"])?$_POST ["nomeMoradoresResidencia4"]:"Erro";    
$parentescoMoradoresResidencia4= isset($_POST ["parentescoMoradoresResidencia4"])?$_POST ["parentescoMoradoresResidencia4"]:"Erro";    
$nascimentoMoradoresResidencia4= isset($_POST ["nascimentoMoradoresResidencia4"])?$_POST ["nascimentoMoradoresResidencia4"]:"Erro";

$nomeEmpregada= isset($_POST ["nomeEmpregada"])?$_POST ["nomeEmpregada"]:"Erro";     
$rgEmpregada= isset($_POST ["rgEmpregada"])?$_POST ["rgEmpregada"]:"Erro";  
$nomeEmpregada1= isset($_POST ["nomeEmpregada1"])?$_POST ["nomeEmpregada1"]:"Erro";     
$rgEmpregada1= isset($_POST ["rgEmpregada1"])?$_POST ["rgEmpregada1"]:"Erro";  

$tipoVeiculo= isset($_POST ["tipoVeiculo"])?$_POST ["tipoVeiculo"]:"Erro";     
$marcaModeloVeiculo= isset($_POST ["marcaModeloVeiculo"])?$_POST ["marcaModeloVeiculo"]:"Erro";     
$vagaVeiculo= isset($_POST ["vagaVeiculo"])?$_POST ["vagaVeiculo"]:"Erro"; 
$digVeiculo= isset($_POST ["digVeiculo"])?$_POST ["digVeiculo"]:"Erro";
$numVeiculo= isset($_POST ["numVeiculo"])?$_POST ["numVeiculo"]:"Erro";
$tipoVeiculo1= isset($_POST ["tipoVeiculo1"])?$_POST ["tipoVeiculo1"]:"Erro";     
$marcaModeloVeiculo1= isset($_POST ["marcaModeloVeiculo1"])?$_POST ["marcaModeloVeiculo1"]:"Erro";     
$vagaVeiculo1= isset($_POST ["vagaVeiculo1"])?$_POST ["vagaVeiculo1"]:"Erro"; 
$digVeiculo1= isset($_POST ["digVeiculo1"])?$_POST ["digVeiculo1"]:"Erro";
$numVeiculo1= isset($_POST ["numVeiculo1"])?$_POST ["numVeiculo1"]:"Erro";
$tipoVeiculo2= isset($_POST ["tipoVeiculo2"])?$_POST ["tipoVeiculo2"]:"Erro";  
$marcaModeloVeiculo2= isset($_POST ["marcaModeloVeiculo2"])?$_POST ["marcaModeloVeiculo2"]:"Erro";     
$vagaVeiculo2= isset($_POST ["vagaVeiculo2"])?$_POST ["vagaVeiculo2"]:"Erro"; 
$digVeiculo2= isset($_POST ["digVeiculo2"])?$_POST ["digVeiculo2"]:"Erro";
$numVeiculo2= isset($_POST ["numVeiculo2"])?$_POST ["numVeiculo2"]:"Erro";

$quantidadeAnimais= isset($_POST ["quantidadeAnimais"])?$_POST ["quantidadeAnimais"]:"Erro";  
$especieAnimais= isset($_POST ["especieAnimais"])?$_POST ["especieAnimais"]:"Erro";  

function get_post_action($name) 
{ 
    $params = func_get_args(); 

    foreach ($params as $name) { 
        if (isset($_POST[$name])) { 
            return $name; 
        } 
    } 
} 
switch (get_post_action('cadastrar', 'buscar', 'alterar', 'excluir', 'alteraMorador')) {

    case 'cadastrar':
    $result_visitantes = "INSERT INTO `morador` (`nome`, `sobre_nome`, `bloco`, `apartamento`,`proprietarioLocatario`, `cpf`, `rg`,  `ddd`, `celular`, `email`, `telefoneResidencial`, `telefoneComercial`, `cidade`, `profissao`, `dataNascimento`, 
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
    `quantidadeAnimais`, `especieAnimais`) VALUES (
    '$nome', '$sobrenome', '$bloco', '$apartamento', '$proprietario', '$cpf', '$rg', '$ddd', '$celular', '$email', '$telefoneResidencial', '$telefoneComercial', '$cidade', '$profissao', '$dataNascimento', 
    '$nomeUrgencia', '$parentescoUrgencia', '$celularUrgencia', '$telefoneFixoUrgencia', 
    '$nomeUrgencia1', '$parentescoUrgencia1', '$celularUrgencia1', '$telefoneFixoUrgencia1', 
    '$nomeMoradoresResidencia', '$parentescoMoradoresResidencia', '$nascimentoMoradoresResidencia', 
    '$nomeMoradoresResidencia1', '$parentescoMoradoresResidencia1', '$nascimentoMoradoresResidencia1', 
    '$nomeMoradoresResidencia2', '$parentescoMoradoresResidencia2', '$nascimentoMoradoresResidencia2', 
    '$nomeMoradoresResidencia3', '$parentescoMoradoresResidencia3', '$nascimentoMoradoresResidencia3', 
    '$nomeMoradoresResidencia4', '$parentescoMoradoresResidencia4', '$nascimentoMoradoresResidencia4',
    '$nomeEmpregada', '$rgEmpregada', 
    '$nomeEmpregada1', '$rgEmpregada1', 
    '$tipoVeiculo', '$marcaModeloVeiculo', '$vagaVeiculo', '$digVeiculo', '$numVeiculo',
    '$tipoVeiculo1', '$marcaModeloVeiculo1', '$vagaVeiculo1', '$digVeiculo1', '$numVeiculo1',
    '$tipoVeiculo2', '$marcaModeloVeiculo2', '$vagaVeiculo2', '$digVeiculo2', '$numVeiculo2', 
    '$quantidadeAnimais', '$especieAnimais')";
    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());
    if($resultado){
        $_SESSION["cadastroRealizado"] = "Cadastro Realizado Com Sucesso ";
        header("Location: ../cadastraMoradorOuLocatario.php");
        mysqli_close($conn);
    }else{
        header("Location: ../menu.php");  
        mysqli_close($conn);
    }


    break;

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
    `quantidadeAnimais`, `especieAnimais` FROM `morador` WHERE rg = '$rg' or (bloco = '$bloco' and apartamento = '$apartamento') ";
    $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());


    ?>

    <html>
    <head>

     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
  <form action="CadastraMorador.php" method="POST">
    <table class="form-inline" role="form">
        <?php
        while($row = mysqli_fetch_array( $resultado)){   
            ?>

            <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
                <div class="row" >
                    <div class="consulta col-md-12">
                        <!--<input  type="hidden" class="form-contol" name="id" maxlength="70" value="<?php echo $row["id"] ?>">-->
                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" ><?php echo $row["nome"] ?></h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Sobrenome:</strong> <?php echo $row["sobre_nome"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Bloco:</strong> <?php echo $row["bloco"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Apartamento:</strong> <?php echo $row["apartamento"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Proprietario/Locatario:</strong> <?php echo $row["proprietarioLocatario"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>CPF:</strong> <?php echo $row["cpf"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>RG:</strong> <?php echo $row["rg"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php echo $row["celular"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>E-mail:</strong> <?php echo $row["email"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Residencial:</strong> <?php echo $row["telefoneResidencial"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Comercial:</strong> <?php echo $row["telefoneComercial"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Cidade:</strong> <?php echo $row["cidade"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Profissão:</strong> <?php echo $row["profissao"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nascimento:</strong> <?php echo $row["dataNascimento"] ?></p>



                    </div>

                </div>
                <hr>

                <div class="row" >
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Urgência</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeUrgencia"]))echo "Não Cadastrado"; else echo $row["nomeUrgencia"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php echo $row["parentescoUrgencia"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php echo $row["celularUrgencia"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Residencia:</strong> <?php echo $row["telefoneFixoUrgencia"] ?></p>



                    </div>
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Urgência</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeUrgencia1"]))echo "Não Cadastrado"; else echo $row["nomeUrgencia"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoUrgencia1"]))echo "Não Cadastrado"; else echo $row["parentescoUrgencia1"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["celularUrgencia1"]))echo "Não Cadastrado"; else echo $row["celularUrgencia1"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tel.Residencia:</strong> <?php if (empty($row["telefoneFixoUrgencia1"]))echo "Não Cadastrado"; else echo $row["telefoneFixoUrgencia1"] ?></p>



                    </div>

                </div>
                <hr>
                <div class="row" >
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Moradores</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["nascimentoMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia"] ?></p>

                    </div>
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Moradores</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia1"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia1"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["nascimentoMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia1"] ?></p>

                    </div>


                </div>
                <hr>
                <div class="row" >
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Moradores</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia2"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia2"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["nascimentoMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia2"] ?></p>

                    </div>
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Moradores</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia3"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia3"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["nascimentoMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia3"] ?></p>

                    </div>
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Moradores</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia4"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Parentesco:</strong> <?php if (empty($row["parentescoMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia4"] ?></p>
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Celular:</strong> <?php if (empty($row["nascimentoMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia4"] ?></p>

                    </div>

                </div>
                <hr>
                <div class="row" >
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Empregada</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeEmpregada"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>RG:</strong> <?php if (empty($row["rgEmpregada"]))echo "Não Cadastrado"; else echo $row["rgEmpregada"] ?></p>


                    </div>
                    <div class="consulta col-md-6 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Empregada</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Nome:</strong> <?php if (empty($row["nomeEmpregada1"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada1"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>RG:</strong> <?php if (empty($row["rgEmpregada1"]))echo "Não Cadastrado"; else echo $row["rgEmpregada1"] ?></p>

                    </div>

                </div>
                <hr>
                <div class="row" >
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Veiculo</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tipo:</strong> <?php if (empty($row["tipoVeiculo"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Fabricante:</strong> <?php if (empty($row["marcaModeloVeiculo"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Vaga:</strong> <?php if (empty($row["vagaVeiculo"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Digito:</strong> <?php if (empty($row["digVeiculo"]))echo "Não Cadastrado"; else echo $row["digVeiculo"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Número:</strong> <?php if (empty($row["numVeiculo"]))echo "Não Cadastrado"; else echo $row["numVeiculo"] ?></p>


                    </div>
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Veiculo</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tipo:</strong> <?php if (empty($row["tipoVeiculo1"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo1"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Fabricante:</strong> <?php if (empty($row["marcaModeloVeiculo1"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo1"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Vaga:</strong> <?php if (empty($row["vagaVeiculo1"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo1"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Digito:</strong> <?php if (empty($row["digVeiculo1"]))echo "Não Cadastrado"; else echo $row["digVeiculo1"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Número:</strong> <?php if (empty($row["numVeiculo1"]))echo "Não Cadastrado"; else echo $row["numVeiculo1"] ?></p>


                    </div>
                    <div class="consulta col-md-4 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Veiculo</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Tipo:</strong> <?php if (empty($row["tipoVeiculo2"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo2"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Fabricante:</strong> <?php if (empty($row["marcaModeloVeiculo2"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo2"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Vaga:</strong> <?php if (empty($row["vagaVeiculo2"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo2"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Digito:</strong> <?php if (empty($row["digVeiculo2"]))echo "Não Cadastrado"; else echo $row["digVeiculo2"] ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Número:</strong> <?php if (empty($row["numVeiculo2"]))echo "Não Cadastrado"; else echo $row["numVeiculo2"] ?></p>


                    </div>
                </div>
                <hr>
                <div class="row" >
                    <div class="consulta col-md-12 ">

                        <h1 class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;" >Animais</h1> 
                        <p class=" col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Espécie:</strong> <?php if (empty($row["especieAnimais"]))echo "Não Cadastrado"; else echo $row["especieAnimais"]   ?></p>
                        <p class="col-md-12 " style="background-color:rgba(192,192,192,0.2); border-radius: 10px;"><strong>Quantidade:</strong> <?php if (empty($row["quantidadeAnimais"]))echo "Não Cadastrado"; else echo $row["quantidadeAnimais"] ?></p>


                    </div>


                </div>
            </div>


            <?php } ?>
            <div class="container">
                <a href="../consultarMoradorOuLocatario.php" class="btn btn-danger">
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

 $result_visitantes = "UPDATE `morador` SET `nome`='$nome', `sobre_nome`='$sobrenome', `bloco`='$bloco', `apartamento`='$apartamento', `proprietarioLocatario`='$proprietario', `cpf`='$cpf', `rg`='$rg', `ddd`='$ddd', `celular`='$celular', `email`='$email', `telefoneResidencial`='$telefoneResidencial', `telefoneComercial`='$telefoneComercial', `cidade`='$cidade', `profissao`='$profissao', `dataNascimento`='$dataNascimento', `nomeUrgencia`='$nomeUrgencia', `parentescoUrgencia`='$parentescoUrgencia', `celularUrgencia`='$celularUrgencia', `telefoneFixoUrgencia`='$telefoneFixoUrgencia', `nomeUrgencia1`='$nomeUrgencia1', `parentescoUrgencia1`='$parentescoUrgencia1', `celularUrgencia1`='$celularUrgencia1', `telefoneFixoUrgencia1`='$telefoneFixoUrgencia1', `nomeMoradoresResidencia`='$nomeMoradoresResidencia', `parentescoMoradoresResidencia`='$parentescoMoradoresResidencia', `nascimentoMoradoresResidencia`='$nascimentoMoradoresResidencia', `nomeMoradoresResidencia1`='$nomeMoradoresResidencia1', `parentescoMoradoresResidencia1`='$parentescoMoradoresResidencia1', `nascimentoMoradoresResidencia1`='$nascimentoMoradoresResidencia1', `nomeMoradoresResidencia2`='$nomeMoradoresResidencia2', `parentescoMoradoresResidencia2`='$parentescoMoradoresResidencia2', `nascimentoMoradoresResidencia2`='$nascimentoMoradoresResidencia2', `nomeMoradoresResidencia3`='$nomeMoradoresResidencia3', `parentescoMoradoresResidencia3`='$parentescoMoradoresResidencia3', `nascimentoMoradoresResidencia3`='$nascimentoMoradoresResidencia3', `nomeMoradoresResidencia4`='$nomeMoradoresResidencia4', `parentescoMoradoresResidencia4`='$parentescoMoradoresResidencia4', `nascimentoMoradoresResidencia4`='$nascimentoMoradoresResidencia4', `nomeEmpregada`='$nomeEmpregada', `rgEmpregada`='$rgEmpregada', `nomeEmpregada1`='$nomeEmpregada1', `rgEmpregada1`='$rgEmpregada1', `tipoVeiculo`='$tipoVeiculo', `marcaModeloVeiculo`='$marcaModeloVeiculo', `vagaVeiculo`='$vagaVeiculo', `digVeiculo`='$digVeiculo', `numVeiculo`='$numVeiculo', `tipoVeiculo1`='$tipoVeiculo1', `marcaModeloVeiculo1`='$marcaModeloVeiculo1', `vagaVeiculo1`='$vagaVeiculo1', `digVeiculo1`='$digVeiculo1', `numVeiculo1`='$numVeiculo1', `tipoVeiculo2`='$tipoVeiculo2', `marcaModeloVeiculo2`='$marcaModeloVeiculo2', `vagaVeiculo2`='$vagaVeiculo2', `digVeiculo2`='$digVeiculo2', `numVeiculo2`='$numVeiculo2', `especieAnimais`='$quantidadeAnimais', `quantidadeAnimais`='$especieAnimais' WHERE `id` = '$id' ";


 $resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

 if($resultado){

    $_SESSION["alteraçãoRealizada"] = "Alteração Realizada Com Sucesso ";
    header("Location: ../consultarMoradorOuLocatario.php ");
    mysqli_close($conn);
}else{
    header("Location: ../menu.php");  
    mysqli_close($conn);
}
break;

case 'excluir':
$id= isset($_POST ["id"])?$_POST ["id"]:"Erro"; 


$result_visitantes = "DELETE FROM `morador` WHERE `id`='$id'";


$resultado = mysqli_query($conn,$result_visitantes)or die(mysql_error());

if($resultado){

    $_SESSION["dadosDeletado"] = "Cadastro excluido com sucesso ";
    header("Location: ../consultarMoradorOuLocatario.php ");
    mysqli_close($conn);
}else{
    header("Location: ../menu.php");  
    mysqli_close($conn);
}


break;
case 'alteraMorador':

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
`quantidadeAnimais`, `especieAnimais` FROM `morador` WHERE rg = '$rg' or (bloco = '$bloco' and apartamento = '$apartamento') ";
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
                        <li><a href="../alterar.php">Alterar Cadastro</a></li>
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
      <form action="CadastraMorador.php" method="POST">
        <table class="form-inline" role="form">

          <?php
          while($row = mysqli_fetch_array( $resultado)){   
            ?>
            <div class="container" style="background-color:rgba(192,192,192,0.2); border-radius: 10px; ">
              <div class="cadastro">

                <input type="hidden" class="form-contol" name="id" maxlength="70" value="<?php echo $row["id"] ?>">

                <div class="form-grup col-md-12  " >

                    <div class="form-grup col-md-3 " >
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" maxlength="70" value="<?php if (empty($row["nome"]))echo "Não Cadastrado"; else echo $row["nome"]  ?>">
                    </div>
                    <div class="form-grup col-md-3  ">
                        <label for="nome">Sobrenome:</label>
                        <input type="text" class="form-control" name="sobrenome" maxlength="70" value="<?php if (empty($row["sobre_nome"]))echo "Não Cadastrado"; else echo $row["sobre_nome"]?>">
                    </div>
                    <div class="form-group col-md-1 ">
                        <label for="bloco">Bloco</label>
                        <input type="text" class="form-control" name="bloco" id="bloco" maxlength="1" value="<?php if (empty($row["bloco"]))echo "Não Cadastrado"; else echo $row["bloco"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="apartamento">Apartemento</label>
                        <input type="text" class="form-control" name="apartamento" id="apartamento" value="<?php if (empty($row["apartamento"]))echo "Não Cadastrado"; else echo $row["apartamento"]?>">
                    </div>
                    <div class="form-group col-md-2 ">
                        <input name="proprietarioLocatario" type="radio" value="<?php if (empty($row["proprietarioLocatario"]))echo "Não Cadastrado"; else echo $row["sobre_nome"]?>" checked="checked" />Proprietário<br>
                        <input name="proprietarioLocatario" type="radio" value="<?php if (empty($row["proprietarioLocatario"]))echo "Não Cadastrado"; else echo $row["sobre_nome"]?>" />Locatário
                    </div>
                </div>
                <div class="form-grup col-md-12  " >
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF&nbsp;<sub>Somente numeros</sub></label>
                        <input class="form-control" name="cpf" type="number" maxlength="11" value="<?php if (empty($row["cpf"]))echo "Não Cadastrado"; else echo $row["cpf"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="rg">RG:</label>
                        <input class="form-control" name="rg" type="number" maxlength="9" value="<?php if (empty($row["rg"]))echo "Não Cadastrado"; else echo $row["rg"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="ddd">DDD</label>
                        <input type="number" class="form-control " name="ddd" id="ddd" value="<?php if (empty($row["ddd"]))echo "Não Cadastrado"; else echo $row["ddd"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="celular">Celular</label>
                        <input type="number" class="form-control " name="celular" id="celular" maxlength="9" value="<?php if (empty($row["sobre_nome"]))echo "Não Cadastrado"; else echo $row["celular"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  " >
                    <div class="form-group col-md-4">
                        <label for="email">E-mail:</label>
                        <input class="form-control " name="email" type="email" placeholder="mail@example.com" maxlength="50" value="<?php if (empty($row["email"]))echo "Não Cadastrado"; else echo $row["email"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefoneResidencial">Telefone residencia</label>
                        <input type="number" class="form-control" name="telefoneResidencial" id="telefoneResidencial" value="<?php if (empty($row["telefoneResidencial"]))echo "Não Cadastrado"; else echo $row["telefoneResidencial"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefoneComercial">Telefone comercial&nbsp;<sub>opcional</sub></label>

                        <input type="number" class="form-control" name="telefoneComercial" id="telefoneComercial" value="<?php if (empty($row["telefoneComercial"]))echo "Não Cadastrado"; else echo $row["telefoneComercial"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  ">
                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" name="cidade" type="text" value="<?php if (empty($row["cidade"]))echo "Não Cadastrado"; else echo $row["cidade"]?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="profissao">Profissao</label>
                        <input class="form-control" name="profissao" type="text" value="<?php if (empty($row["profissao"]))echo "Não Cadastrado"; else echo $row["profissao"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="dataNascimento">Data Nascimento</label>
                        <input class="form-control" name="dataNascimento" type="date" value="<?php if (empty($row["dataNascimento"]))echo "Não Cadastrado"; else echo $row["dataNascimento"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  " >
                    <h1 class="form-group col-md-12 ">Em caso de urgência</h1>
                    <div class="form-group col-md-3">
                        <label for="nomeUrgencia">Nome</label>
                        <input class="form-control" name="nomeUrgencia" type="text" value="<?php if (empty($row["nomeUrgencia"]))echo "Não Cadastrado"; else echo $row["nomeUrgencia"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="parentescoUrgencia">Grau de Parentesco</label>
                        <input class="form-control" name="parentescoUrgencia" type="text" value="<?php if (empty($row["parentescoUrgencia"]))echo "Não Cadastrado"; else echo $row["parentescoUrgencia"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="celularUrgencia">Celular</label>
                        <input type="number" class="form-control " name="celularUrgencia" id="celular" maxlength="9" value="<?php if (empty($row["celularUrgencia"]))echo "Não Cadastrado"; else echo $row["celularUrgencia"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="telefoneFixoUrgencia">Telefone Fixo</label>
                        <input type="number" class="form-control " name="telefoneFixoUrgencia   " id="celular" maxlength="9" value="<?php if (empty($row["telefoneFixoUrgencia"]))echo "Não Cadastrado"; else echo $row["telefoneFixoUrgencia"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nomeUrgencia1">Nome</label>
                        <input class="form-control" name="nomeUrgencia1" type="text" value="<?php if (empty($row["nomeUrgencia1"]))echo "Não Cadastrado"; else echo $row["nomeUrgencia1"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="parentescoUrgencia1">Grau de Parentesco</label>
                        <input class="form-control" name="parentescoUrgencia1" type="text" value="<?php if (empty($row["parentescoUrgencia1"]))echo "Não Cadastrado"; else echo $row["parentescoUrgencia1"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="celularUrgencia1">Celular</label>
                        <input type="number" class="form-control " name="celularUrgencia1" id="celular" maxlength="9" value="<?php if (empty($row["celularUrgencia1"]))echo "Não Cadastrado"; else echo $row["celularUrgencia1"]?>">
                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="telefoneFixoUrgencia1">Telefone Fixo</label>
                        <input type="number" class="form-control " name="telefoneFixoUrgencia1" id="celular" maxlength="9" value="<?php if (empty($row["telefoneFixoUrgencia1"]))echo "Não Cadastrado"; else echo $row["telefoneFixoUrgencia1"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  " >
                    <h1>Moradores da residencias</h1>
                    <div class="form-group col-md-4">
                        <label for="nomeMoradoresResidencia">Nome</label>
                        <input class="form-control" name="nomeMoradoresResidencia" type="text" value="<?php if (empty($row["nomeMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="parentescoMoradoresResidencia">Parentesco</label>
                        <input class="form-control" name="parentescoMoradoresResidencia" type="text" value="<?php if (empty($row["parentescoMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimentoMoradoresResidencia">Nascimento</label>
                        <input class="form-control" name="nascimentoMoradoresResidencia" type="date" value="<?php if (empty($row["nascimentoMoradoresResidencia"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nomeMoradoresResidencia1">Nome</label>
                        <input class="form-control" name="nomeMoradoresResidencia1" type="text" value="<?php if (empty($row["nomeMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia1"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="parentescoMoradoresResidencia1">Parentesco</label>
                        <input class="form-control" name="parentescoMoradoresResidencia1" type="text" value="<?php if (empty($row["parentescoMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia1"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimentoMoradoresResidencia1">Nascimento</label>
                        <input class="form-control" name="nascimentoMoradoresResidencia1" type="date" value="<?php if (empty($row["nascimentoMoradoresResidencia1"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia1"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nomeMoradoresResidencia2">Nome</label>
                        <input class="form-control" name="nomeMoradoresResidencia2" type="text" value="<?php if (empty($row["nomeMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia2"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="parentescoMoradoresResidencia2">Parentesco</label>
                        <input class="form-control" name="parentescoMoradoresResidencia2" type="text" value="<?php if (empty($row["parentescoMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia2"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimentoMoradoresResidencia2">Nascimento</label>
                        <input class="form-control" name="nascimentoMoradoresResidencia2" type="date" value="<?php if (empty($row["nascimentoMoradoresResidencia2"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia2"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nomeMoradoresResidencia3">Nome</label>
                        <input class="form-control" name="nomeMoradoresResidencia3" type="text" value="<?php if (empty($row["nomeMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia3"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="parentescoMoradoresResidencia3">Parentesco</label>
                        <input class="form-control" name="parentescoMoradoresResidencia3" type="text" value="<?php if (empty($row["parentescoMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia3"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimentoMoradoresResidencia3">Nascimento</label>
                        <input class="form-control" name="nascimentoMoradoresResidencia3" type="date" value="<?php if (empty($row["nascimentoMoradoresResidencia3"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia3"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nomeMoradoresResidencia4">Nome</label>
                        <input class="form-control" name="nomeMoradoresResidencia4" type="text" value="<?php if (empty($row["nomeMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["nomeMoradoresResidencia4"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="parentescoMoradoresResidencia4">Parentesco</label>
                        <input class="form-control" name="parentescoMoradoresResidencia4" type="text" value="<?php if (empty($row["parentescoMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["parentescoMoradoresResidencia4"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimentoMoradoresResidencia4">Nascimento</label>
                        <input class="form-control" name="nascimentoMoradoresResidencia4" type="date" value="<?php if (empty($row["nascimentoMoradoresResidencia4"]))echo "Não Cadastrado"; else echo $row["nascimentoMoradoresResidencia4"]?>">
                    </div>
                    <h1>Empregados</h1>
                    <div class="form-group col-md-6">
                        <label for="nomeEmpregada">Nome</label>
                        <input class="form-control" name="nomeEmpregada" type="text" value="<?php if (empty($row["nomeEmpregada"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rgEmpregada">RG</label>
                        <input class="form-control" name="rgEmpregada" type="text" value="<?php if (empty($row["rgEmpregada"]))echo "Não Cadastrado"; else echo $row["rgEmpregada"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nomeEmpregada1">Nome</label>
                        <input class="form-control" name="nomeEmpregada1" type="text" value="<?php if (empty($row["nomeEmpregada1"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada1"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rgEmpregada1">RG</label>
                        <input class="form-control" name="rgEmpregada1" type="text" value="<?php if (empty($row["rgEmpregada1"]))echo "Não Cadastrado"; else echo $row["rgEmpregada1"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  ">
                    <h1>Veículos &nbsp; <sub>Moto,Carro,Bicicleta,etc</sub></h1>
                    <div class="form-group col-md-3">
                        <label for="tipoVeiculo">Tipo</label>
                        <input class="form-control" name="tipoVeiculo" type="text" value="<?php if (empty($row["tipoVeiculo"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="marcaModeloVeiculo">Marca/Modelo</label>
                        <input class="form-control" name="marcaModeloVeiculo" type="text" value="<?php if (empty($row["marcaModeloVeiculo"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Vaga</label>
                        <input class="form-control" name="vagaVeiculo" type="text" value="<?php if (empty($row["vagaVeiculo"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo"]?>"> 
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                        <input class="form-control" name="digVeiculo" type="text" value="<?php if (empty($row["digVeiculo"]))echo "Não Cadastrado"; else echo $row["digVeiculo"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                        <input class="form-control" name="numVeiculo" type="text" value="<?php if (empty($row["nomeEmpregada"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tipoVeiculo">Tipo</label>
                        <input class="form-control" name="tipoVeiculo1" type="text" value="<?php if (empty($row["tipoVeiculo1"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo1"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="marcaModeloVeiculo">Marca/Modelo</label>
                        <input class="form-control" name="marcaModeloVeiculo1" type="text" value="<?php if (empty($row["marcaModeloVeiculo1"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo1"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Vaga</label>
                        <input class="form-control" name="vagaVeiculo1" type="text" value="<?php if (empty($row["vagaVeiculo1"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo1"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                        <input class="form-control" name="digVeiculo1" type="text" value="<?php if (empty($row["digVeiculo1"]))echo "Não Cadastrado"; else echo $row["digVeiculo1"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                        <input class="form-control" name="numVeiculo1" type="text" value="<?php if (empty($row["nomeEmpregada1"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada1"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tipoVeiculo">Tipo</label>
                        <input class="form-control" name="tipoVeiculo2" type="text" value="<?php if (empty($row["tipoVeiculo2"]))echo "Não Cadastrado"; else echo $row["tipoVeiculo2"]?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="marcaModeloVeiculo">Marca/Modelo</label>
                        <input class="form-control" name="marcaModeloVeiculo2" type="text" value="<?php if (empty($row["marcaModeloVeiculo2"]))echo "Não Cadastrado"; else echo $row["marcaModeloVeiculo2"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Vaga</label>
                        <input class="form-control" name="vagaVeiculo2" type="text" value="<?php if (empty($row["vagaVeiculo2"]))echo "Não Cadastrado"; else echo $row["vagaVeiculo2"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                        <input class="form-control" name="digVeiculo2" type="text" value="<?php if (empty($row["digVeiculo2"]))echo "Não Cadastrado"; else echo $row["digVeiculo2"]?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                        <input class="form-control" name="numVeiculo2" type="text" value="<?php if (empty($row["nomeEmpregada2"]))echo "Não Cadastrado"; else echo $row["nomeEmpregada2"]?>">
                    </div>
                </div>
                <div class="form-grup col-md-12  " >
                    <h1>Animais</h1>
                    <div class="form-group col-md-6">
                        <label for="quantidadeAnimais">Quantidade</label>
                        <input class="form-control" name="quantidadeAnimais" type="text" value="<?php if (empty($row["quantidadeAnimais"]))echo "Não Cadastrado"; else echo $row["quantidadeAnimais"]?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="especieAnimais">Espécie</label>
                        <input class="form-control" name="especieAnimais" type="text" value="<?php if (empty($row["especieAnimais"]))echo "Não Cadastrado"; else echo $row["especieAnimais"]?>">
                    </div>
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
   <a href="../alterarMorador.php" class="btn btn-danger">
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
}}else{
    $_SESSION["fazerLogin"] = "Fazer login";
    header("Location: index.php");
}



?>