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
        include "menu_regioes.php";
    ?>
    

    <DIV class="container">
        <h1>FORMULÁRIO DE CADASTRO DE REGIOES</h1>
        <form action="inserir_regioes.php" method="post">

            NOME REGIÃO
            <input type="text" name="nome_regiao" class="form-control" required autocomplete="off">
            
            <input type="submit" class="btn btn-warning" style="margin-top: 20px" value="salvar">
        </form>
       

        
    </DIV>

        

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


