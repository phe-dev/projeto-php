<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de edição de cidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    include "menu.php";
    include "conexao.php";
    ?>

    <div class="container">

        <h1>Formulário de edição de cidade</h1>
        <!--
        action -> arquivo pra onde os dados do formulário vão
        method -> método de envio: POST - vai escondido
        -->
        <?php
        //recuperando os dados do aluno que clicamos no botão editar
        $sql = "select * from cidades where id = $_GET[id]";
        $sql = $con->query($sql);
        $linha = $sql->fetch_assoc();
        $id_curso = $linha["id_estado"]; 
        ?>
        <form action="editar_cidade.php" method="post">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            Nome
            <input type="text" name="nome" class="form-control" value="<?php echo $linha['nome'] ?>" required autocomplete="off">
            
            Estado
            <select name="id_estado" class="form-select" required>
                <option value="">--Selecione o estado--</option>
                <?php
                // consulta para retornar todos os curso
                $sql = "select * from estados";
                // executando a consulta acima
                $sql = $con->query($sql);
                // montando o laço de repetição para extrair os dados
                while ($linha = $sql->fetch_assoc()) {
                    if ($id_estado == $linha["id"]) {
                        echo "<option value='$linha[id]' selected>$linha[nome]</option>";
                    }
                    else{
                        echo "<option value='$linha[id]'>$linha[nome]</option>";
                    }
                }
                ?>

            </select>
            <input type="submit" value="editar" class="btn btn-primary mt-3">
        </form>



    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>