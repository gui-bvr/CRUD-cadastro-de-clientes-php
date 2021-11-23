<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?alerta=erro');
        exit();
    }

    include 'conectar.php';
    $id = $_GET['id'];

    $selecionar = $db -> prepare("DELETE FROM pessoas WHERE id = ?;");
    $resultado = $selecionar -> execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?alerta=apagado');
    } else {
        header('Location: index.php?alerta=erro');
    }
    
?>