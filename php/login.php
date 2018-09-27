<?php
session_start();

include_once("conexao.php");

$_SESSION["login"] = "";


if(!empty($_POST["userName"]) && !empty($_POST["password"])){

    $usuario= $_POST["userName"];
    $senha = $_POST["password"];
    
    $user = mysqli_real_escape_string($conn,$usuario);
    $password = mysqli_real_escape_string($conn,$senha);
    //$password = md5($password); 
    
    //Instrucao para selecionar os arquivos do banco
    $query = "SELECT * FROM `loginvalidate`  WHERE user = '$usuario' and senha = '$senha' and status = '1' ";
    
    //Conecta no banco para realizar a seleção da query
    $result = mysqli_query($conn,$query)or die(mysql_error());
    
    //Retorna verdadeiro ou falso para a consulta de user e senha
    $resultado =mysqli_num_rows($result);

    //retorna os campos da tabela do banco
    

    $_SESSION["login"] = "$resultado";

    

    while($row = mysqli_fetch_array($result)){ 

        if($row["cod_permissions"]== '1'){
            if($_SESSION["login"]){
                header("Location: ../menu.php"); 
                mysqli_close($dbc);
                
            }
        }else if($row["cod_permissions"]== '2'){
          if($_SESSION["login"]){
             header("Location: ../minhaVaga.php");
             mysqli_close($dbc);  

         }
     }

 }
 if(empty($resultado)){
    $_SESSION["loginErro"] = "Usuário ou senha inválida";
 header("Location: ../index.php");
 mysqli_close($dbc);}
}else {

    $_SESSION["loginErro"] = "Usuário ou senha inválida";
    header("Location: ../index.php");


}



?>