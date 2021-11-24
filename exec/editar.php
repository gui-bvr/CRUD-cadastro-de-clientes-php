<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: ../index.php?alerta=erro');
    }

    include 'conectar.php';
    $input_id = $_POST['id'];
    $input_nome = $_POST['nome'];
    $input_telefone = $_POST['telefone'];
    $input_email = $_POST['email'];

    $selecionar = $db -> prepare("UPDATE pessoas SET nome = '$input_nome', telefone = '$input_telefone', email = '$input_email' WHERE id = '$input_id';");
    $resultado = $selecionar -> execute([$input_nome, $input_telefone, $input_email, $input_id]);

    if ($resultado === TRUE) {
        header('Location: ../index.php?alerta=atualizado');
    } else {
        header('Location: ../index.php?alerta=erro');
        exit();
    }
?>