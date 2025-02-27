<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: #a5d8ff;">

    <?php
        include "menu_paises.php";
        include "conexao_paises.php";
    ?>
    

    <DIV class="container">
        <h1>FORMULÁRIO DE EDIÇÃO DE ALUNO</h1>

        <?php
          $sql = "SELECT * FROM paises where id = $_GET[id];";

          $sql = $con->query($sql);

          $linha = $sql->fetch_assoc();
        ?>
        <form action="editar_pais.php?id=<?php echo $linha['id']?>" method="post">
          <input type="hidden" name="id" class="form-control" value="<?php echo $linha['id'] ?>" >
            Nome
            <input type="text" name="pais" value="<?php echo $linha['pais'] ?>" class="form-control" required autocomplete="off">

            Idioma
            <input type="text" name="idioma" value="<?php echo $linha['idioma'] ?>" class="form-control" required autocomplete="off">

            População
            <input type="number" class="form-control" value="<?php echo $linha['populacao'] ?>" name="populacao" autocomplete="off" placeholder="Digite somente números">

            Religião
            <input type="text" name="religiao" value="<?php echo $linha['religiao'] ?>" class="form-control" autocomplete="off">

            Espaço Geográfico
            <input type="text" name="espaco_geografico" value="<?php echo $linha['espaco_geografico'] ?>" class="form-control" autocomplete="off" placeholder="Digite somente números">

          <input type="submit" class="btn btn-primary" style="margin-top: 20px" value="editar">
        </form>
       

        
    </DIV>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


