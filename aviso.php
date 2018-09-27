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
    <!-- Static navbar -->
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
      <div class="aviso">
        <div class="container" style=" box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.46); width: 85%;">
            <tr>
                <td>
                    <p><img src="img/andarai.png" class="img-responsive" alt="" width="30%"></p>
                </td>
                <td>
                    <h3 class="pull">Aviso aos Moradores</h3>
                    <p class="pull-right"><sub><u>26/04/2018</u></sub></p>
                </td>
                <td>
                    <p>OBS: Não serão mais cobrado os comprevantes de pagamento em atraso. Lembramos que a PLANET AGUA tem 24 horas para fazer a religação</p>
                </td>
              
            </tr>
        </div>
        <div class="container" style=" box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.46); width: 85%;">
            <tr>
                <td>
                    <h3 class="pull">Prezados Condôminos</h3>
                    <p class="pull-right"><sub><u>04/04/2018</u></sub></p>
                </td>
                <td>
                    <p>Infelismente no dia de ontem novamente o Condominio foi vítima de vandalismo ocorrio no Bloco C, onde foram esvaziados dois extintores, um de agua e outro de pó quimico, nas escadarias no conjunto.</p>
                </td>
                <td>
                    <p>O Condomínio identificou os autores através de imagens do CFTV (Circuitos Fechado de TV) e já tomou providências no sentido de chamar os Pais para uma conversa, bem como de aplicar a multa pela infração cometida e o ressarcimento dos danos.</p>
                </td>
                <td>
                    <p>Na última reunião já havia sido comentado que este tipo de ocorrência e pequenos furtos de lâmpadas, bicos de mangueira, etc.,estão sendo cometidos nas áreas comuns e haverá um empenho muito grande para que os envolvidos recebam a punição adequada e para que o Condomínio e consequentemente os seus Condôminos não tenham que arcar com estes prejuízos. </p>
                </td>
                <td>
                    <p>Pedimos a colaboração de todos em alertar atitudes suspeitas nas áreas comuns do Condomínio, contamos com sua ajuda.</p>
                </td>
                <td>
                    <p>Atenciosamente</p>
                </td>
            </tr>
        </div>
        <div class="container" style=" box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.46); width: 85%;">
            <tr>
                <td>
                    <p><img src="img/andarai.png" class="img-responsive" alt="" width="30%"></p>
                </td>
                <td>
                    <h3 class="pull">Aos Moradores</h3>
                    <p class="pull-right"><sub><u>29/03/2018</u></sub></p>
                </td>
                <td>
                    <p>Comunicamos que o boleto para pagamento do condomínio com vencimento em 06/04/2018 está na portaria</p>
                </td>
                <td>
                    <p><strong>OBS: Não serão mais cobrados os comprovantes de pagamento em atraso. Lembramos que a PLANET AGUA tem 24 horas para fazer a religação</strong></p>
                </td>
            </tr>
        </div>
        <div class="container" style=" box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.46); width: 85%;">
            <tr>
                <td>
                    <p><img src="img/andarai.png" class="img-responsive" alt="" width="30%"></p>
                </td>
                <td>
                    <h3 class="pull">Prezados Condôminos</h3>
                    <p class="pull-right"><sub><u>22/02/2018</u></sub></p>
                </td>
                <td>
                    <p>Por alguns alertas que recebemos de carros entrando em prédios para assaltar, informamos que a partir de 22/02/2018 os porteiros não abrirão o portão de carros, ficando a responsabilidade de cada morador usar seu controle para acessar o estabelecimento.</p>
                </td>
                <td>
                    <p>Os moradores que não tiverem controle favor solicitar na portaria</p>
                </td>
                <td>
                    <p>Desde já agradecemos a colaboração e compreenção de todos.</p>
                </td>
            </tr>
        </div>
        <div class="container" style=" box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.46);width: 85%;">
            <tr>
                <td>
                    <p><img src="img/andarai.png" class="img-responsive" alt="" width="30%"></p>
                </td>
                <td>
                    <h3 class="pull">Prezados Condôminos</h3>
                    <p class="pull-right"><sub><u>14/02/2018</u></sub></p>
                </td>
                <td>
                    <p>Informamos que é <strong>extremamente proibido</strong> colocar móveis, vassouras, rodos, roupas dependuradas, varais, etc. nas sacadas, que ultrapassem a mureta da mesma e causem algum tipo de poluição visual</p>
                </td>
                <td>
                    <p><strong>Lembramos tambem que é extremamente proibido crianças brincarem no estacionamento.</strong></p>
                </td>
                <td>
                    <p>Caso sejam identificados, os mesmos serão multados.</p>
                </td>
            </tr>
        </div>
        
    </div>
</body>
        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="jquery/jquery.min.js"></script>
            <script src="jquery/ie10-viewport-bug-workaround.js"></script>
            <script src="jquery/ie-emulation-modes-warning.js.js"></script>
            <script>window.jQuery || document.write('<script src="jquery/jquery.min.js"><\/script>')</script>
            <script src="jquery/bootstrap.min.js"></script>
            </html>
            <?php
        }else{
            $_SESSION["fazerLogin"] = "Fazer login";
            header("Location: index.php");
        }
        ?>