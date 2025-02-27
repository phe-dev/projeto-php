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
    ?>
    

    <DIV class="container">
        <h1>FORMULÁRIO DE CADASTRO DE PAÍS</h1>
        <form action="inserir_pais.php" method="post">
            Nome
            <input type="text" name="pais" class="form-control" required autocomplete="off">

            Idioma
            <input type="text" name="idioma" class="form-control" required autocomplete="off">

            População
            <input type="number" class="form-control" name="populacao" autocomplete="off" placeholder="Digite somente números">

            Religião
            <input type="text" name="religiao" class="form-control" autocomplete="off">

            Espaço Geográfico
            <input type="number" name="espaco_geografico" class="form-control" autocomplete="off" placeholder="Digite somente números">

            <input type="submit" class="btn btn-warning" style="margin-top: 20px" value="salvar">
        </form>
       

        
    </DIV>

        

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


