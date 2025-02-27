<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de cidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    include "menu.php";
    include "conexao.php";
    ?>

    <div class="container">

        <h1>Formulário de cadastro de cidade</h1>
        <!--
        action -> arquivo pra onde os dados do formulário vão
        method -> método de envio: POST - vai escondido
        -->
        <form action="inserir_aluno.php" method="post">
            Nome
            <input type="text" name="nome" class="form-control" required autocomplete="off">
            CPF
            <input type="text" name="cpf" class="form-control" required autocomplete="off" placeholder="Somente dígitos Ex: 99999999999">
            Matrícula
            <input type="text" name="matricula" class="form-control" autocomplete="off">
            Curso
            <!--input type="text" name="curso" class="form-control" autocomplete="off"-->
            <select name="id_curso" class="form-select" required>
                <option value="">--Selecione o seu curso--</option>
                <?php
                    // consulta para retornar todos os curso
                    $sql = "select * from cursos";
                    // executando a consulta acima
                    $sql = $con->query($sql);
                    // montando o laço de repetição para extrair os dados
                    while ( $linha = $sql->fetch_assoc() ){
                        echo "<option value='$linha[id]'>$linha[descricao]</option>";
                    }
                ?>

            </select>
            <input type="submit" value="salvar" class="btn btn-primary mt-3">

    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>