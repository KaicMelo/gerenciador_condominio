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
            <h1>Novo Andarai</h1>
            <h2>Ficha Cadastro Morador</h2>
            <?php
            if(isset($_SESSION['cadastroRealizado'])){
                ?>

                <span class="badge badge-success col-md-12" style="background-color:rgba(0, 128, 0, 0.56);">
                  <?php
                  echo $_SESSION['cadastroRealizado'];

                  unset ($_SESSION['cadastroRealizado']);
                  ?>
              </span>
              <br>
              <?php
          }
          ?>
          <form action="php/CadastraMorador.php" method="POST">
            
            <div class="form-grup col-md-12  " >

                <div class="form-grup col-md-3 " >
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="70">
                </div>
                <div class="form-grup col-md-3  ">
                    <label for="nome">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" maxlength="70">
                </div>
                <div class="form-group col-md-1 ">
                    <label for="bloco">Bloco</label>
                    <input type="text" class="form-control" name="bloco" id="bloco" maxlength="1">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="apartamento">Apartemento</label>
                    <input type="text" class="form-control" name="apartamento" id="apartamento">
                </div>
                <div class="form-group col-md-2 ">
                    <input name="proprietarioLocatario" type="radio" value="Proprietario" checked="checked" />Proprietário<br>
                    <input name="proprietarioLocatario" type="radio" value="Locatario" />Locatário
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <div class="form-group col-md-3">
                    <label for="cpf">CPF&nbsp;<sub>Somente numeros</sub></label>
                    <input class="form-control" name="cpf" type="number" maxlength="11">
                </div>
                <div class="form-group col-md-3">
                    <label for="rg">RG:</label>
                    <input class="form-control" name="rg" type="number" maxlength="9">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="ddd">DDD</label>
                    <input type="number" class="form-control " name="ddd" id="ddd">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="celular">Celular</label>
                    <input type="number" class="form-control " name="celular" id="celular" maxlength="9">
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <div class="form-group col-md-4">
                    <label for="email">E-mail:</label>
                    <input class="form-control " name="email" type="email" placeholder="mail@example.com" maxlength="50">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefoneResidencial">Telefone residencia</label>
                    <input type="number" class="form-control" name="telefoneResidencial" id="telefoneResidencial">
                </div>
                <div class="form-group col-md-4">
                    <label for="telefoneComercial">Telefone comercial&nbsp;<sub>opcional</sub></label>

                    <input type="number" class="form-control" name="telefoneComercial" id="telefoneComercial">
                </div>
            </div>
            <div class="form-grup col-md-12  ">
                <div class="form-group col-md-3">
                    <label for="cidade">Cidade</label>
                    <input class="form-control" name="cidade" type="text">
                </div>

                <div class="form-group col-md-3">
                    <label for="profissao">Profissao</label>
                    <input class="form-control" name="profissao" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="dataNascimento">Data Nascimento</label>
                    <input class="form-control" name="dataNascimento" type="date">
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <h1 class="form-group col-md-12 ">Em caso de urgência</h1>
                <div class="form-group col-md-3">
                    <label for="nomeUrgencia">Nome</label>
                    <input class="form-control" name="nomeUrgencia" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="parentescoUrgencia">Grau de Parentesco</label>
                    <input class="form-control" name="parentescoUrgencia" type="text">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="celularUrgencia">Celular</label>
                    <input type="number" class="form-control " name="celularUrgencia" id="celular" maxlength="9">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="telefoneFixoUrgencia">Telefone Fixo</label>
                    <input type="number" class="form-control " name="telefoneFixoUrgencia   " id="celular" maxlength="9">
                </div>
                <div class="form-group col-md-3">
                    <label for="nomeUrgencia1">Nome</label>
                    <input class="form-control" name="nomeUrgencia1" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="parentescoUrgencia1">Grau de Parentesco</label>
                    <input class="form-control" name="parentescoUrgencia1" type="text">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="celularUrgencia1">Celular</label>
                    <input type="number" class="form-control " name="celularUrgencia1" id="celular" maxlength="9">
                </div>
                <div class="form-group col-md-3 ">
                    <label for="telefoneFixoUrgencia1">Telefone Fixo</label>
                    <input type="number" class="form-control " name="telefoneFixoUrgencia1" id="celular" maxlength="9">
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <h1>Moradores da residencias</h1>
                <div class="form-group col-md-4">
                    <label for="nomeMoradoresResidencia">Nome</label>
                    <input class="form-control" name="nomeMoradoresResidencia" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="parentescoMoradoresResidencia">Parentesco</label>
                    <input class="form-control" name="parentescoMoradoresResidencia" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimentoMoradoresResidencia">Nascimento</label>
                    <input class="form-control" name="nascimentoMoradoresResidencia" type="date">
                </div>
                <div class="form-group col-md-4">
                    <label for="nomeMoradoresResidencia1">Nome</label>
                    <input class="form-control" name="nomeMoradoresResidencia1" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="parentescoMoradoresResidencia1">Parentesco</label>
                    <input class="form-control" name="parentescoMoradoresResidencia1" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimentoMoradoresResidencia1">Nascimento</label>
                    <input class="form-control" name="nascimentoMoradoresResidencia1" type="date">
                </div>
                <div class="form-group col-md-4">
                    <label for="nomeMoradoresResidencia2">Nome</label>
                    <input class="form-control" name="nomeMoradoresResidencia2" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="parentescoMoradoresResidencia2">Parentesco</label>
                    <input class="form-control" name="parentescoMoradoresResidencia2" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimentoMoradoresResidencia2">Nascimento</label>
                    <input class="form-control" name="nascimentoMoradoresResidencia2" type="date">
                </div>
                <div class="form-group col-md-4">
                    <label for="nomeMoradoresResidencia3">Nome</label>
                    <input class="form-control" name="nomeMoradoresResidencia3" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="parentescoMoradoresResidencia3">Parentesco</label>
                    <input class="form-control" name="parentescoMoradoresResidencia3" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimentoMoradoresResidencia3">Nascimento</label>
                    <input class="form-control" name="nascimentoMoradoresResidencia3" type="date">
                </div>
                <div class="form-group col-md-4">
                    <label for="nomeMoradoresResidencia4">Nome</label>
                    <input class="form-control" name="nomeMoradoresResidencia4" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="parentescoMoradoresResidencia4">Parentesco</label>
                    <input class="form-control" name="parentescoMoradoresResidencia4" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimentoMoradoresResidencia4">Nascimento</label>
                    <input class="form-control" name="nascimentoMoradoresResidencia4" type="date">
                </div>
                <h1>Empregados</h1>
                <div class="form-group col-md-6">
                    <label for="nomeEmpregada">Nome</label>
                    <input class="form-control" name="nomeEmpregada" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="rgEmpregada">RG</label>
                    <input class="form-control" name="rgEmpregada" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="nomeEmpregada1">Nome</label>
                    <input class="form-control" name="nomeEmpregada1" type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="rgEmpregada1">RG</label>
                    <input class="form-control" name="rgEmpregada1" type="text">
                </div>
            </div>
            <div class="form-grup col-md-12  ">
                <h1>Veículos &nbsp; <sub>Moto,Carro,Bicicleta,etc</sub></h1>
                <div class="form-group col-md-3">
                    <label for="tipoVeiculo">Tipo</label>
                    <input class="form-control" name="tipoVeiculo" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="marcaModeloVeiculo">Marca/Modelo</label>
                    <input class="form-control" name="marcaModeloVeiculo" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Vaga</label>
                    <input class="form-control" name="vagaVeiculo" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                    <input class="form-control" name="digVeiculo" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                    <input class="form-control" name="numVeiculo" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="tipoVeiculo">Tipo</label>
                    <input class="form-control" name="tipoVeiculo1" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="marcaModeloVeiculo">Marca/Modelo</label>
                    <input class="form-control" name="marcaModeloVeiculo1" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Vaga</label>
                    <input class="form-control" name="vagaVeiculo1" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                    <input class="form-control" name="digVeiculo1" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                    <input class="form-control" name="numVeiculo1" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="tipoVeiculo">Tipo</label>
                    <input class="form-control" name="tipoVeiculo2" type="text">
                </div>
                <div class="form-group col-md-3">
                    <label for="marcaModeloVeiculo">Marca/Modelo</label>
                    <input class="form-control" name="marcaModeloVeiculo2" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Vaga</label>
                    <input class="form-control" name="vagaVeiculo2" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Digito <sub>placa</sub></label>
                    <input class="form-control" name="digVeiculo2" type="text">
                </div>
                <div class="form-group col-md-2">
                    <label for="vagaVeiculo">Numero <sub>placa</sub></label>
                    <input class="form-control" name="numVeiculo2" type="text">
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <h1>Animais</h1>
                <div class="form-group col-md-6">
                    <label for="quantidadeAnimais">Quantidade</label>
                    <input class="form-control" name="quantidadeAnimais" type="text">
                </div>

                <div class="form-group col-md-6">
                    <label for="especieAnimais">Espécie</label>
                    <input class="form-control" name="especieAnimais" type="text">
                </div>
            </div>
            <div class="form-grup col-md-12  " >
                <div class="form-group col-md-3">

                    <input class="form-control" type="submit" value="Cadastrar" name="cadastrar">
                </div>
                <div class="form-group col-md-3">

                    <a href="menu.php" class="btn btn-danger">
                       Voltar
                   </a>
               </div>
           </div>
           
       </form>
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
