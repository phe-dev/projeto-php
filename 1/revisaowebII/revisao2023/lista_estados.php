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
    ?>

    <div class="container">

        <h1>Lista de estados</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>Sigla</th>
            </tr>
            <?php
            //incluindo o arquivo de conexão com o Banco de Dados
            include "conexao.php";
            //variável que armazena a consulta de cursos
            $sql = "SELECT * FROM estados";
            //executando a consulta
            $sql = $con->query($sql);
            // laço de repetição para extrair os dados da consulta
            while ($linha = $sql->fetch_assoc()) {
                echo "
                <tr>
                    <td>$linha[id]</td>
                    <td>$linha[nome]</td> 
                    <td>$linha[sigla]</td> 
                </tr> ";
            }
            ?>
        </table>
    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>