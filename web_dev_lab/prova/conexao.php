<?php
    $hostname = "localhost";
    $bancodedados = "banco_php";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
   if($mysqli -> error){
       die("Falha ao conectar ao banco de dados: " . $mysqli->error);
   }

   $sql_code = "SELECT * FROM aluno WHERE usuario = '$usuario' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
?>