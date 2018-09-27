<?php

    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'metosltda');
   
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    
if(!$conn){
    die("Falha na conexão:" . mysqli_connect_error());
}else{
    
}
    

   
?>