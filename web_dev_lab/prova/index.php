<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: login.php");
    session_destroy();
}

if(isset($_GET['sair'])){
    header("location: login.php");
    session_destroy();
}

$usuarioNovo = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prova</title>
<link rel="stylesheet" href="estiloProva.css">
<script src="verificacao.js"></script> 
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<script src="js/bootstrap-select.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4yfaTqgFtohetphbbj0="crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>


<!-- Deixar background pontilhado -->
<body id="corpo" style="
  background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  background-image: repeating-radial-gradient(center center, rgba(0,0,0,.1), rgba(0,0,0,.1) 1px, transparent 1px, transparent 100%);
  -webkit-background-size: 3px 3px;
  -moz-background-size: 3px 3px;
  background-size: 3px 3px;">

<div id="legend">
<h1 style="text-align: center;">Sistema escolar de notas</h1>
</div>

<!-- Div para input das notas -->
<main style=" background-color: #ffff; width: 50%; height: 80%; border-radius: 15px; margin: auto; padding: 15px; margin-top: 1%"> 

<form action="enviar.php" method="POST" id="formDelegado">



<a href="?sair" style="position: absolute;">Encerrar sessão</a>

<!-- Inicio questão  -->
<div id="questao1" class="col-sm-10">
  <h4>Questão 1.</h4>
  <p>O que é o moodle?</p>
    <div class="form-check">
      <label for="opcao1">O Moodle é um sistema de Internet que concentra um conjunto de ferramentas de gerência pedagógica e administrativa de cursos, bem como um Ambiente Virtual de Aprendizagem (AVA).</label>
      <input type="radio" name="quest1" id="opcao1" value="correta" required>
    </div>
    <br>
    <div class="form-check">
      <label for="opcao2">O Moodle é uma linguagem de programação usada por quase todos os bancos de dados relacionais para consultar, manipular e definir dados e fornecer controle de acesso.</label>
      <input type="radio" name="quest1" id="opcao2" value="opcao2">
    </div>
    <br>
    <div class="form-check">
      <label for="opcao3">O Moodle é uma linguagem-padrão para a elaboração da estrutura de projetos de software. Ele poderá ser empregado para a visualização, a especificação, a construção e a documentação de artefatos que façam uso de sistemas complexos de software.</label>
      <input type="radio" name="quest1" id="opcao3" value="opcao3">
    </div>
    <br>
    <div class="form-check">
      <label for="opcao4">O Moodle é um sistema onde você pode buscar escolas e cursos de graduação, pós-graduação, idiomas e técnico em qualquer região, pesquisar e comparar os preços das mensalidades, ver informações sobre as instituições e ainda garantir uma bolsa de estudo.</label>
      <input type="radio" name="quest1" id="opcao4" value="opcao4">
    </div>
    <br>
    <div class="form-check">
      <label for="opcao5">O Moodle é um ambiente de desenvolvimento integrado da Microsoft para desenvolvimento de software especialmente dedicado ao .NET Framework e às linguagens Visual Basic, C, C++, C# e F#.</label>
      <input type="radio" name="quest1" id="opcao5" value="opcao5">
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 2.</h4> 
  <p>Qual é a origem do Moodle?</p>
  <div class="form-check">
      <input type="radio" name="quest2" id="opcao1" value="opcao1" required>
      <label for="opcao1">O Moodle foi criado em 2001 pelo educador e cientista computacional Rasmus Lerdorf e é uma plataforma de aprendizagem de código fechado adquirida através de licenças.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest2" id="opcao2" value="correta">
      <label for="opcao2">O Moodle foi criado em 2001 pelo educador e cientista computacional Martin Dougiamas e é uma plataforma de aprendizagem de código aberto utilizada mundialmente.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest2" id="opcao3" value="opcao3">
      <label for="opcao3">O Moodle foi criado em 1995, no Canadá, por Martin Dougiamas.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest2" id="opcao4" value="opcao4">
      <label for="opcao4">O Moodle foi criado no começo dos anos 70 por pesquisadores da IBM, Raymond Boyce e Donald Chamberlin.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest2" id="opcao5" value="opcao5">
      <label for="opcao5">O Moodle é uma empresa fundada em 4 de setembro de 1998 em Menlo Park, na Califórnia, costa oeste dos Estados Unidos. Os criadores são Larry Page e Sergey Brin, dois estudantes do curso de doutorado da Universidade de Stanford.</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 3.</h4> 
  <p>O que é Ambiente Virtual de Aprendizagem?</p>
  <div class="form-check">
      <input type="radio" name="quest3" id="opcao1" value="opcao1" required>
      <label for="opcao1">Ambiente Virtual de Aprendizagem é um espaço caracterizado pela ausência de interface gráfica onde o aluno utiliza de um console para realizar contas complexas e até mesmo algorítmos.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest3" id="opcao2" value="opcao2">
      <label for="opcao2">Ambiente Virtual de Aprendizagem refere-se ao processo de coleta, organização, análise, compartilhamento e monitoramento de informações que oferecem suporte a gestão de negócios.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest3" id="opcao3" value="opcao3">
      <label for="opcao3">Ambiente Virtual de Aprendizagem é um termo popularmente empregado para se referir a sistemas operativos ou sistemas operacionais que utilizam o núcleo Linux. O núcleo foi desenvolvido pelo programador finlandês Linus Torvalds, inspirado no sistema Minix.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest3" id="opcao4" value="opcao4">
      <label for="opcao4">Ambiente Virtual de Aprendizagem é um termo popularmente empregado para se referir a sistemas operativos de código fechado.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest3" id="opcao5" value="correta">
      <label for="opcao5">Ambiente Virtual de Aprendizagem é um espaço caracterizado por uma interface que reúne diversas ferramentas computacionais que proporcionam a disponibilização de conteúdo, realização de atividades e interação entre as pessoas.</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 4.</h4> 
  <p>Qual o significado do acrônimo "Moodle"?</p>
  <div class="form-check">
      <input type="radio" name="quest4" id="opcao1" value="opcao1" required>
      <label for="opcao1">Modular Output-Object Dynamic Learning Environment</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest4" id="opcao2" value="opcao2">
      <label for="opcao2">Modular Object-Oriented Dimension Learning Environment</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest4" id="opcao3" value="correta">
      <label for="opcao3">Modular Object-Oriented Dynamic Learning Environment</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest4" id="opcao4" value="opcao4">
      <label for="opcao4">Mount Of Objects Dynamic Learned Environment</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest4" id="opcao5" value="opcao5">
      <label for="opcao5">Modular Object-Oriented Dynamic Launcher Environment</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 5.</h4> 
  <p>Para que serve a atividade "Questionário"?</p>
  <div class="form-check">
      <input type="radio" name="quest5" id="opcao1" value="correta" required>
      <label for="opcao1">A atividade "questionário" permite ao professor criar e configurar testes de múltipla escolha, verdadeiro ou falso, correspondência e outros tipos de perguntas. Cada tentativa é corrigida automaticamente e o professor pode optar por fornecer feedback e / ou mostrar as respostas corretas.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest5" id="opcao2" value="opcao2">
      <label for="opcao2">A atividade "questionário" permite ao aluno contatar os professores de sua universidade para tirar dúvidas.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest5" id="opcao3" value="opcao3">
      <label for="opcao3">A atividade "questionário" permite ao professor contatar a direção da universidade para relatar notas e comportamentos de alunos.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest5" id="opcao4" value="opcao4">
      <label for="opcao4">A atividade "questionário" permite ao professor criar jogos interativos para os alunos.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest5" id="opcao5" value="opcao5">
      <label for="opcao5">A atividade "questionário" permite ao professor criar e configurar testes de múltipla escolha, verdadeiro ou falso, correspondência e outros tipos de perguntas. Esta atividade não pode ser corrigida, apenas impactará na nota final do aluno.</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 6.</h4> 
  <p>Quais tipos de usuários mais utilizam a plataforma Moodle?</p>
  <div class="form-check">
      <input type="radio" name="quest6" id="opcao1" value="opcao1" required>
      <label for="opcao1">Educadores, estudantes e universidades.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest6" id="opcao2" value="opcao2">
      <label for="opcao2">Apenas estudantes.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest6" id="opcao3" value="correta">
      <label for="opcao3">Educadores, estudantes, representantes de escolas e universidades.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest6" id="opcao4" value="opcao4">
      <label for="opcao4">Apenas educadores.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest6" id="opcao5" value="opcao5">
      <label for="opcao5">Representantes de escolas privadas.</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 7.</h4> 
  <p>Onde podem ser armazenados os dados do sistema moodle?</p>
  <div class="form-check">
      <input type="radio" name="quest7" id="opcao1" value="opcao1" required>
      <label for="opcao1">Os dados são armazenados apenas em
bancos de dados MySQL </label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest7" id="opcao2" value="correta">
      <label for="opcao2">Os dados são armazenados em
bancos de dados MySQL e PostgreSQL, mas também podem ser usados Oracle,
Access, Interbase, ODBC e outros.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest7" id="opcao3" value="opcao3">
      <label for="opcao3">Os dados são armazenados em
bancos de dados Oracle, Access, Interbase e ODBC</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest7" id="opcao4" value="opcao4">
      <label for="opcao4">Os dados são armazenados em
bancos de dados MySQL e PostgreSQL.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest7" id="opcao5" value="opcao5">
      <label for="opcao5">Os dados são armazenados no Google Drive.</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 8.</h4> 
  <p>Qual perfil tem acesso aos cursos em que está designado e pode promover alterações na tela de abertura além de incluir ou
remover atividades e materiais?</p>
  <div class="form-check">
      <input type="radio" name="quest8" id="opcao1" value="opcao1" required>
      <label for="opcao1">Monitor</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest8" id="opcao2" value="opcao2">
      <label for="opcao2">Aluno</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest8" id="opcao3" value="opcao3">
      <label for="opcao3">Usuário</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest8" id="opcao4" value="correta">
      <label for="opcao4">Professor/Tutor</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest8" id="opcao5" value="opcao5">
      <label for="opcao5">Visitante</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 9.</h4> 
  <p>O que faz um Administrador?</p>
  <div class="form-check">
      <input type="radio" name="quest9" id="opcao1" value="correta" required>
      <label for="opcao1">Tem acesso a todas as instâncias da instalação e pode modificá-las.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest9" id="opcao2" value="opcao2">
      <label for="opcao2">Pode criar novos cursos no ambiente.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest9" id="opcao3" value="opcao3">
      <label for="opcao3">Tem permissão para adicionar e remover alunos.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest9" id="opcao4" value="opcao4">
      <label for="opcao4">Tem acesso a todas as atividades e
materiais do curso.
</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest9" id="opcao5" value="opcao5">
      <label for="opcao5">Pode acessar o ambiente e as informações constantes da tela de
abertura do ambiente</label>
    </div>
    <br>
</div>
<!-- Fim questão  -->

<!-- Inicio questão  -->
<div id="questao2" class="col-sm-10">
  <h4>Questão 10.</h4> 
  <p>Quais os Formatos de Curso existentes?</p>
  <div class="form-check">
      <input type="radio" name="quest10" id="opcao1" value="opcao1" required>
      <label for="opcao1">O Moodle permite criar um formato de curso: Social.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest10" id="opcao2" value="opcao2">
      <label for="opcao2">O Moodle permite criar dois formatos de cursos: Social e Modular.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest10" id="opcao3" value="opcao3">
      <label for="opcao3">O Moodle não permite criar formatos de cursos.</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest10" id="opcao4" value="opcao4">
      <label for="opcao4">O Moodle permite criar quatro formatos de cursos: Social, Semestral, Semanal e Modular (ou
Tópicos).</label>
    </div>
    <br>
    <div class="form-check">
      <input type="radio" name="quest10" id="opcao5" value="correta">
      <label for="opcao5">O Moodle permite criar três formatos de cursos: Social, Semanal e Modular (ou
Tópicos).</label>
    </div>
</div>
<!-- Fim questão  -->


<input type='submit' id="enviarProva" style="margin-left: 85%;" class="btn btn-success" value="Enviar"></input>
</form>
</main>
    
</body>
</html>