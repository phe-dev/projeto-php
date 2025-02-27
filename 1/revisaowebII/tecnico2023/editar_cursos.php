<?php

    include "conexao.php";
    //neste arquivo os dados de formulario_editar_aluno.php são recebidos e processados

    //receber cada valor em uma variavel  
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $cordenador = $_POST['cordenador'];
    $vagas = $_POST['vagas'];
    

    //criando variavel de consulta SQL
    $sql = "update cursos set descricao='$descricao',cordenador='$cordenador', vagas='$vagas' where id=$id ";
    //comando que executa a consulta
    $sql = $con->query($sql);
?>
<script>
    alert("Cadastro editado com sucesso!")
    location.href = "lista_cursos.php"
</script>