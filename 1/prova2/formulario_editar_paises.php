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

        $sql = "select * from paises where id=$_GET[id]";
        $sql = $con -> query($sql);
        $linha = $sql -> fetch_assoc();

        $id_regiao = $linha["id_regiao"];
    ?>
    

    <DIV class="container">
        <h1>FORMULÁRIO DE EDIÇÃO DE PAISES</h1>
        
        <form action="editar_pais.php" method="post">
        <input type="hidden" name="id" value="<?php echo $linha['id']?>"> 
            Nome
            <input type="text" name="pais" class="form-control" value="<?php echo $linha['pais']?>" required autocomplete="on">

            Idioma
            <input type="text" name="idioma" class="form-control" value="<?php echo $linha['idioma']?>" required autocomplete="off">

            População
            <input type="number" class="form-control" name="populacao" value="<?php echo $linha['populacao']?>" autocomplete="off" placeholder="Digite somente números">

            Religião
            <input type="text" name="religiao" class="form-control" value="<?php echo $linha['religiao']?>" autocomplete="off">

            Espaço Geográfico
            <input type="number" name="espaco_geografico" class="form-control" value="<?php echo $linha['espaco_geografico']?>" autocomplete="off" placeholder="Digite somente números">
            
            Região
            <select class="form-select" name="id_regiao" required>
              <option value="" selected>Selecione a região</option>
              
              <?php
              $sql = "select * from regioes";
              $sql = $con -> query($sql);

              while ($linha = $sql->fetch_assoc()){
                if ($id_regiao == $linha["id"]){
                  echo "<option value='$linha[id]' selected>$linha[nome_regiao]</option>";
                } else{
                  echo "<option value='$linha[id]'>$linha[nome_regiao]</option>";
                }
                
              }
              ?>

            </select>
            <input type="submit" class="btn btn-warning" style="margin-top: 20px" value="editar">
        </form>
       

        
    </DIV>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


