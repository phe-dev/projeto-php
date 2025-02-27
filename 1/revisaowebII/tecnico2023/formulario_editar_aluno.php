<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<?php
  include "menu.php";
  include "conexao.php"; 
  ?>

    <div class="container">

    <h1>Formulário de edição de alunos</h1>
    <!--actipon - arquivo para onde os dados do formulario vão
        method - metodo de envio: POST - vai escondido-->

        <?php 
        //recuperando os dados do aluno que cliclamos no botão editar

        //Selecionando linha no mysql se id do aluno for igual ao id recebido por GET
        $sql = "select * from alunos where id = $_GET[id]";
        
        $sql = $con->query($sql);
        $linha = $sql->fetch_assoc();

        ?>
    <form action="editar_aluno.php" method="post">
      <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" >
      Nome
     <input type="text" name="nome" class="form-control" value="<?php echo $linha['nome']?>" required autocomplete="off">
      CPF 
     <input type="text" name="cpf" class="form-control" value="<?php echo $linha['cpf']?>" required autocomplete="off" placeholder="Somente dígitos ex:999885522">
     Matricula
     <input type="text" name="matricula" class="form-control" value="<?php echo $linha['matricula']?>" autocomplete="off">
      Curso 
      <select class="form-select" name="id_curso">
        <option value=""> --Selecione o seu curso--</option>
          <?php
      
      //atribuo de <option> selected
      //Armazenando o id do curso do aluno 
       $id_curso = $linha['id_curso']; //id curso do aluno
       
       //consulta para retorna todos os cursos
       //Listando todos os cursos
        $sql = "select * from cursos";
        //execultando a consulta acima
        $sql = $con->query($sql);
        //montando o laço de repetição para extrair os dados
        while($linha = $sql->fetch_assoc()){
          //Se id_curso de aluno for igual a id do linha cursos, deixa selecionado
          //Caso não apenas cria um select sem o "selected"
          if ($id_curso == $linha['id']){
            
            echo "<option value='$linha[id]' selected>$linha[descricao]</option>";
          }
            
          else {
            echo "<option value='$linha[id]'>$linha[descricao]</option>";
          }
        
        }
       
      ?>
      </select>
     <input type="submit" value="editar" class="btn btn-primary mt-3">
    </form>

</div> <!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


