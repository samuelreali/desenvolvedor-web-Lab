<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="estiloLogin.css">
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<script src="js/bootstrap-select.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> 
</head>

<body id="corpo" style="
  background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  -webkit-background-size: 3px 3px;
  -moz-background-size: 3px 3px;
  background-size: 3px 3px;">
<div id="legend">
<h1 style="text-align: center;">Login aluno prova</h1>
</div>

    <div class="boxForm">
    <form action="" method="POST">
    <h2>Login aluno</h2>

    <?php
    if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha seu usuário.";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha.";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM aluno WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];

            header("Location: index.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

    }
?>
        <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário">
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">

        <!-- <div class="alert alert-success div_sucesso" style="display: none; "role="alert" id="div_sucesso" >
        </div>
        <div class="alert alert-danger div_erro" style="display: none; "role="alert" id="div_erro" >
        </div> -->
        <input type="submit" id="login">
    </form>
</div>
   
    </div>

</body>
</html>