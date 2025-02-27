<?php

    include "conexao_paises.php";
    //testar
    //var_dump($_POST);  
    
    $pais = $_POST['pais'];
    $idioma = $_POST['idioma'];
    $populacao = $_POST['populacao'];
    $religiao = $_POST['religiao'];
    $espaco_geografico = $_POST['espaco_geografico'];
    $id_regiao = $_POST['id_regiao'];

    $sql = "insert into paises(pais, idioma, populacao, religiao, espaco_geografico, id_regiao) values ('$pais', '$idioma', '$populacao', '$religiao', '$espaco_geografico', '$id_regiao' )";

    $sql = $con->query($sql);
    
?>
<script>
    alert('cadastro realizado com sucesso!')
    location.href = "lista_paises.php"
</script>