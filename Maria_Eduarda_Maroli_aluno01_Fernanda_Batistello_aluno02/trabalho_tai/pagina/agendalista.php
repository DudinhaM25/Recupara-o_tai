<?php
include "../database/bdagenda.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <html>
    <title>Sis Agenda</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
 <style>
 body{
  font-family: "Arial", Helvetica, sans-serif;
font-size: medium;
}
.inputBox{

  width: 100%; 
    margin-left: 30px;
    margin-right: 50px;
   padding-left: 5px;

}
#buscar{
  margin-left: 10px; 
}
#cads{
margin-left: 10px;
}
#serachr1{
  display: inline-block;
  width: 30%;
}
#exampleFormControlSelect2{
  width:30%;
  float:left;
  margin-right: 15px;
}
</style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/Maria_Eduarda_Maroli_aluno01_Fernanda_Batistello_aluno02/trabalho_tai/index.php">Sis Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Maria_Eduarda_Maroli_aluno01_Fernanda_Batistello_aluno02/trabalho_tai/index.php">Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Maria_Eduarda_Maroli_aluno01_Fernanda_Batistello_aluno02/trabalho_tai/pagina/contatolista.php">Minha Agenda</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Maria_Eduarda_Maroli_aluno01_Fernanda_Batistello_aluno02/trabalho_tai/pagina/agendalista.php">Meus Contatos<span class="sr-only">(página atual)</span></a>
       </li>
       
      </div>  
    </nav>
    <div class="box">
    <div class="inputBox">
    <fieldset>  
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Dia</th>
      <th scope="col">Hora que Começa</th>
      <th scope="col">Dia que Termina</th>
      <th scope="col">Hora que Termina</th>
      <th scope="col">Local</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>
    </tr>
<body>
    <h2>Lista Agenda</h2>
    <form action="./agendalista.php" method="post">
        <input type="search" name="titulo" placeholder="Pesquisar titulo">
        <input type="submit" value="Pesquisar">
    </form>
    <a href="./agendaformulario.php">Cadastrar</a> <br>
    <?php
    $objBD = new BD();
    $objBD->conn();

    if (!empty($_POST['nome'])) {
        $result = $objBD->pesquisar($_POST);
    } else {
        $result = $objBD->select();
    }

    if (!empty($_GET['id'])) {
        $objBD->remover($_GET['id']);
        header("location: agendalista.php");
    }
    
    foreach ($result as $item) {
        echo "
        <tr>
            <td>" . $item['id'] . "</td>
            <td>" . $item['titulo'] . "</td>
            <td>" . $item['data_inicio'] . "</td>
            <td>" . $item['hora_inicio'] . "</td>
            <td>" . $item['data_fim'] . "</td>
            <td>" . $item['hora_fim'] . "</td>
            <td>" . $item['local'] . "</td>
            <td>" . $item['descricao'] . "</td>
            <td><a href='./agendaformulario.php?id=" . $item['id'] . "'>Editar</a></td>
            <td><a href='./agendalista.php?id=" . $item['id'] . "'
                   onclick=\"return confirm('Deseja remover o registro?') \" >Deletar</a></td>
        </tr>";
    }
    echo "</table>";
    ?>

    <a href="../index.php">Voltar</a>
</body>

</html>