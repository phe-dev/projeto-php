<?php

    include "conexao.php";
    //neste arquivo os dados de formulario_editar_aluno.php são recebidos e processados

    //receber cada valor em uma variavel  
    $id = $_POST['id'];
    $alunos = $_POST['alunos'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    //criando variavel de consulta SQL
    $sql = "update notas set alunos='$alunos',nota1='$nota1', nota2='$nota2', nota3='$nota3', nota4='$nota4' where id=$id ";
    //comando que executa a consulta
    $sql = $con->query($sql);
?>
<script>
    alert("Cadastro editado com sucesso!")
    location.href = "lista_notas.php"
</script>