<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
  <?php
  include "menu.php";
  ?>
  
    <div class="container">

    <h1>Lista de cursos</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Cordenador</th>
        <th>Vagas</th>
    </tr>

    <?php
//incluindo o arquivo de conexao com o banco de dados
include "conexao.php";

// variavel que armazena a consulta de alunos
$sql = "SELECT * FROM cursos";
//execultando a consulta
$sql = $con->query($sql);
//laço de repetição para extrair os dados da consulta

while ($linha = $sql->fetch_assoc()){
    echo "
    <tr>
    <td>$linha[id]</td>
    <td>$linha[descricao]</td>
    <td>$linha[cordenador]</td>
    <td>$linha[vagas]</td>
    <td class='text-center'> <a href=\"excluir_aluno.php?id=$linha[id]\" class='btn btn-danger' 
    onclick=\"return confirm('Deseja mesmo excluir?')\">Excluir</td>

    <td> <a href=\"formulario_editar_cursos.php?id=$linha[id]\" class='btn btn-warning'>Editar</td>
 </tr> ";
}

?>

</table>

<a href="formulario_inserir_aluno.php" class="btn btn-primary">Cadastrar novo</a>

</div> <!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


