<?php

    include "conexao_paises.php";

    $id = $_GET['id'];

    //echo $id; é só um teste

    //exit(); executa o de cima e ignore o de baixo
   
    $sql = "delete from regioes where id=$id";

    $sql = $con->query($sql);
    
?>
<script>
    alert('EXCLUÍDO')
    location.href = "lista_regioes.php"
</script>