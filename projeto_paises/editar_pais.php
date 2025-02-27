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
    


    $sql = "update paises set pais='$pais', idioma='$idioma', populacao='$populacao', religiao='$religiao', espaco_geografico='$espaco_geografico', id_regiao='$id_regiao'   where id= $_POST[id];";
    $sql = $con->query($sql);


?>
<script>
    alert('alteração realizado com sucesso!')
    location.href = "lista_paises.php"
</script>