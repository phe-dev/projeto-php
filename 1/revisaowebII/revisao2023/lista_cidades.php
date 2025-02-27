<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Cidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    

    <div class="container">

        <h1>Lista de cidades</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th class='text-center'>Operações</th>
            </tr>
            <?php
            //incluindo o arquivo de conexão com o Banco de Dados
            include "conexao.php";
            include "menu.php";
            //variável que armazena a consulta de alunos
            $sql = "SELECT a.id, a.nome, sigla FROM cidades a 
            JOIN estados b ON a.id_estado=b.id;";
            //executando a consulta
            $sql = $con->query($sql);
            // laço de repetição para extrair os dados da consulta
            while ($linha = $sql->fetch_assoc()) {
                echo "
                <tr>
                    <td>$linha[id]</td>
                    <td>$linha[nome]</td> 
                    <td>$linha[sigla]</td> 
                    <td class='text-center'> 
                        <a href=\"excluir_cidade.php?id=$linha[id]\" class='btn btn-danger' onclick=\"return confirm('Deseja mesmo excluir?')\">Excluir</a>
                        <a href=\"formulario_editar_cidade.php?id=$linha[id]\" class='btn btn-warning'>Editar</a>
                    </td>
                </tr> ";
            }
            ?>
        </table>

        <a href="formulario_inserir_cidade.php" class="btn btn-primary">Cadastrar novo</a>    

    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>