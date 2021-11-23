<?php 
    include_once "conectar.php";
    $selecionar = $db -> query("SELECT * FROM pessoas");
    $pessoas = $selecionar -> fetchAll(PDO::FETCH_OBJ);
?>