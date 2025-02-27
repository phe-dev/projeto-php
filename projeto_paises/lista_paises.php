<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Países</title>
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
                <th>Nome</th>
                <th>Idioma</th>
                <th>População</th>
                <th>religião</th>
                <th>Espaço Demografico</th>
                <th>Região</th>
                <th class='text-center'>Operações</th>
            </thead>
            <?php
                
                include "conexao_paises.php";

                echo "<h1 class='text-center'>Lista País</h1>";

                $sql = "SELECT a.id, a.pais, a.idioma, a.populacao, a.religiao, a.espaco_geografico, a.id_regiao, b.nome_regiao FROM paises a JOIN regioes b ON a.id_regiao=b.id;";

                $sql = $con->query($sql);

                while ($linha =  $sql->fetch_assoc()){
                    echo "<tr><td>$linha[id]</td>
                    <td>$linha[pais]</td>
                    <td>$linha[idioma]</td>
                    <td>$linha[populacao]</td> 
                    <td>$linha[religiao]</td>
                    <td>$linha[espaco_geografico]</td>
                    <td>$linha[nome_regiao]</td>
                    <td class='text-center'><a href='excluir_pais.php?id=$linha[id]' class='btn btn-danger' onclick=\"return confirm('Você realmente quer isso?')\">Excluir</a>  <a href=\"formulario_editar_paises.php?id=$linha[id]\" class='btn btn-warning'>Editar</a></td></tr> ";
                }
            ?>
        </table>
       
        <a href="formulario_inserir_pais.php" class="btn btn-primary">Cadastrar novo</a>
    </DIV>

        
    
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


