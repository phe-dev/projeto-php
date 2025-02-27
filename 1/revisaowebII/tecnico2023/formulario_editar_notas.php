<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<?php
  include "menu.php";
  include "conexao.php"; 
  ?>

    <div class="container">

    <h1>Formulário de edição de notas</h1>
    <!--actipon - arquivo para onde os dados do formulario vão
        method - metodo de envio: POST - vai escondido-->

        <?php 
        //recuperando os dados do aluno que cliclamos no botão editar

        $sql = "select * from notas where id = $_GET[id]";
        
        $sql = $con->query($sql);
        $linha = $sql->fetch_assoc();

        ?>
    <form action="editar_notas.php" method="post">
      <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" >
      Alunos
     <input type="text" name="alunos" class="form-control" value="<?php echo $linha['alunos']?>" required autocomplete="off">
      Nota1 
     <input type="text" name="nota1" class="form-control" value="<?php echo $linha['nota1']?>" required autocomplete="off" placeholder="Somente dígitos ex:999885522">
     Nota2
     <input type="text" name="nota2" class="form-control" value="<?php echo $linha['nota2']?>" autocomplete="off">
      Nota3
     <input type="text" name="nota3" class="form-control" value="<?php echo $linha['nota3']?>" autocomplete="off">
     Nota4
     <input type="text" name="nota4" class="form-control" value="<?php echo $linha['nota4']?>" autocomplete="off">

     <input type="submit" value="editar" class="btn btn-primary mt-3">
    </form>

</div> <!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


