<?php
include("conexao.php");

session_start();

$id = $_SESSION['id'];

$sql_code = "SELECT * FROM aluno WHERE id = '$id'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

$nota = 0;
$questao1 = 0;
$questao2 = 0;
$questao3 = 0;
$questao4 = 0;
$questao5 = 0;
$questao6 = 0;
$questao7 = 0;
$questao8 = 0;
$questao9 = 0;
$questao10 = 0;

if($_POST['quest1'] == "correta"){
    $nota++;
} else {
    $questao1++;
}
if($_POST['quest2'] == "correta"){
    $nota++;
} else {
    $questao2++;
}
if($_POST['quest3'] == "correta"){
    $nota++;
} else {
    $questao3++;
}
if($_POST['quest4'] == "correta"){
    $nota++;
} else {
    $questao4++;
}
if($_POST['quest5'] == "correta"){
    $nota++;
} else {
    $questao5++;
}
if($_POST['quest6'] == "correta"){
    $nota++;
} else {
    $questao6++;
}
if($_POST['quest7'] == "correta"){
    $nota++;
} else {
    $questao7++;
}
if($_POST['quest8'] == "correta"){
    $nota++;
} else {
    $questao8++;
}
if($_POST['quest9'] == "correta"){
    $nota++;
} else {
    $questao9++;
}
if($_POST['quest10'] == "correta"){
    $nota++;
} else {
    $questao10++;
}

$quantidade = $sql_query->num_rows;

if($quantidade == 1) {
    $usuario = $sql_query->fetch_assoc();

    $sql_code = "UPDATE aluno SET acertos = $nota WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    $usuario = $usuario['acertos'];
    
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota final</title>
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
    <h1 style="text-align: center;">Nota final prova</h1>
    </div>
        <div class="boxForm">
            <div>
            <?php
            if($nota >= 7){
                echo "<h3><b>Parabéns, você foi APROVADO</b></h3>";
                echo "<h4>Nota final: ".$nota."</h4>";
            } else {
                echo "<h3><b>Dessa vez não deu. Você foi REPROVADO</b></h3>";
                echo "<h4>Nota final: ".$nota."</h4>";
            } 
            if($questao1 != 0){
                echo "<p><b>Questão 1 correta: O Moodle é um sistema de Internet que concentra um conjunto de ferramentas de gerência pedagógica e administrativa de cursos, bem como um Ambiente Virtual de Aprendizagem (AVA).</b></p> <br>";
            }
            if($questao2 != 0){
                echo "<p><b>Questão 2 correta: O Moodle foi criado em 2001 pelo educador e cientista computacional Martin Dougiamas e é uma plataforma de aprendizagem de código aberto utilizada mundialmente.</b></p> <br>";
            }
            if($questao3 != 0){
                echo "<p><b>Questão 3 correta: Ambiente Virtual de Aprendizagem é um espaço caracterizado por uma interface que reúne diversas ferramentas computacionais que proporcionam a disponibilização de conteúdo, realização de atividades e interação entre as pessoas.</b></p> <br>";
            }
            if($questao4 != 0){
                echo "<p><b>Questão 4 correta: Modular Object-Oriented Dynamic Learning Environment</b></p> <br>";
            }
            if($questao5 != 0){
                echo "<p><b>Questão 5 correta: A atividade 'questionário' permite ao professor criar e configurar testes de múltipla escolha, verdadeiro ou falso, correspondência e outros tipos de perguntas. Cada tentativa é corrigida automaticamente e o professor pode optar por fornecer feedback e / ou mostrar as respostas corretas.</b></p> <br>";
            }
            if($questao6 != 0){
                echo "<p><b>Questão 6 correta: Educadores, estudantes, representantes de escolas e universidades.</b></p> <br>";
            }
            if($questao7 != 0){
                echo "<p><b>Questão 7 correta: Os dados são armazenados em
                bancos de dados MySQL e PostgreSQL, mas também podem ser usados Oracle,
                Access, Interbase, ODBC e outros.</b></p> <br>";
            }
            if($questao8 != 0){
                echo "<p><b>Questão 8 correta: Professor/Tutor</b></p> <br>";
            }
            if($questao9 != 0){
                echo "<p><b>Questão 9 correta: Tem acesso a todas as instâncias da instalação e pode modificá-las.</b></p> <br>";
            }
            if($questao10 != 0){
                echo "<p><b>Questão 10 correta: O Moodle permite criar três formatos de cursos: Social, Semanal e Modular (ou
                Tópicos).</b></p> <br>";
            }
            ?>
            </div>
        </div>
    </body>
    </html>
<?php
    }

?>


