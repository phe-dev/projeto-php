<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de disciplinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<?php
  include "menu.php";
  ?>

    <div class="container">

    <h1>Formulário de cadastro de disciplinas</h1>
    <!--actipon - arquivo para onde os dados do formulario vão
        method - metodo de envio: POST - vai escondido-->
    <form action="inserir_disciplina.php" method="post">
      Descrição
     <input type="text" name="descricao" class="form-control" required autocomplete="off">
      Carga_horaria
     <input type="text" name="carga_horaria" class="form-control" required autocomplete="off">
      Periodo
     <input type="text" name="periodo" class="form-control" autocomplete="off">
      Cursos
     <input type="text" name="cursos" class="form-control" autocomplete="off">
     
     <input type="submit" value="Salvar" class="btn btn-primary mt-3">

    </form>
    



</div> <!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
?>