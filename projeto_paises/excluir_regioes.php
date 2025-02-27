<?php

    include "conexao_paises.php";

    $id = $_GET['id'];

   
    $sql = "delete from regioes where id=$id";

    $sql = $con->query($sql);
    
?>
<script>
    alert('EXCLUÍDO')
    location.href = "lista_regioes.php"
</script>