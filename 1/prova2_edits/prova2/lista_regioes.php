<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Regiao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="background-color: #a5d8ff;">

    <?php
        include "menu_paises.php";
    ?>
    

    <DIV class="container">

        <table class="table table-bordered">
            <thead class="thead-dark">
                <th>Id</th>
                <th>nome_regiao</th>
               
                <th class='text-center'>Operações</th>   
            </thead>
            <?php
                
                include "conexao_paises.php";

                echo "<h1 class='text-center'>Lista Regioes</h1>";

                $sql = "SELECT * FROM regioes";

                $sql = $con->query($sql);

                while ($linha =  $sql->fetch_assoc()){
                    echo "<tr><td>$linha[id]</td>
                    <td>$linha[nome_regiao]</td>                   
                    <td class='text-center'><a href='excluir_regioes.php?id=$linha[id]' class='btn btn-danger' onclick=\"return confirm('Você realmente quer isso?')\">Excluir</a>  <a href=\"formulario_editar_regioes.php?id=$linha[id]\" class='btn btn-warning'>Editar</a></td></tr> ";
                }
            ?>
        </table>
       
        <a href="formulario_inserir_regioes.php" class="btn btn-primary">Cadastrar novo</a>
    </DIV>

        
    
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


