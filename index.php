<!DOCTYPE html>
<?php
session_start();

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
    <div class="wrapper" role="main">
        <div class="container">

            <div class="form-box">
                <form action="php/login.php" method="post">
                    <figure class="logar"> 
                        <img src="img/logo.jpg" class="img-thumbnail" alt="Cinque Terre" >
                        <br />
                        <figcaption>
                            <input id="userName" name="userName" type="text" placeholder="Usuário" autofocus>
                            <div class="password">
                                <input type="password" id="password" name="password" placeholder="Senha"> </div>
                                <button class="btn btn-custom btn-block" type="submit">ENTRAR</button>
                            </figcaption>
                        </figure>
                        <br /> </form>
                        <p class="text-center text-danger">
                            <?php
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset ($_SESSION['loginErro']);
                            }
                            if(isset($_SESSION['fazerLogin'])){
                                echo $_SESSION['fazerLogin'];
                                unset ($_SESSION['fazerLogin']);
                            }
                            
                            ?>
                        </p>
                    </div>
                </div><!-- div container -->
                <div class="copyright"> <span class="pull-left">&copy; <b>Todos os direitos reservados</b></span> <span class="pull-right">
                    <a style="color:#3c228b;" href="https://suporteboole.freshdesk.com/support/solutions/articles/36000021638-notas-da-vers%C3%A3o-1-0-1" target="_blank">
                        &nbsp; versão 1.0
                    </a>

                </span> </div>
            </div>
            
        </body>

        </html>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery.min.js"></script>
    <script src="jquery/ie10-viewport-bug-workaround.js"></script>
    <script src="jquery/ie-emulation-modes-warning.js.js"></script>
    <script>window.jQuery || document.write('<script src="jquery/jquery.min.js"><\/script>')</script>
    <script src="jquery/bootstrap.min.js"></script>