<?php
    include_once 'conectar.php';
    $input_nome = $_POST['nome'];
    $input_telefone = $_POST['telefone'];
    $input_email = $_POST['email'];
    
    $selecionar = $db -> prepare("INSERT INTO pessoas(nome,telefone,email) VALUES ('$input_nome','$input_telefone','$input_email');");
    $resultado = $selecionar -> execute([$input_nome,$input_telefone,$input_email]);

    if ($resultado === TRUE) {
        header('Location: ../index.php?alerta=registrado');
    } else {
        header('Location: ../index.php?alerta=erro');
        exit();
    }
?>
