<?php include 'template_assets.php' ?>

<?php include 'template_header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?alerta=erro');
        exit();
    }

    include_once 'conectar.php';
    $input_id = $_GET['id'];

    $selecionar = $db -> prepare("SELECT * FROM pessoas WHERE id = '$input_id';");
    $selecionar -> execute([$input_id]);
    $db_pessoas = $selecionar -> fetch(PDO::FETCH_OBJ);
?>

<style>
    .font-shippori {
        font-family: 'Shippori Antique', sans-serif;
    }
    .font-shippori-bold {
        font-family: 'Shippori Antique', sans-serif;
        font-weight: bold;
    }
    /* body {
        background-color: #fff;
        background-image:
        linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
        linear-gradient(#eee .1em, transparent .1em);
        background-size: 100% 1.2em;
    } */
</style>

<body>
    <!-- Formulario -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="row pt-4 pb-4">
                <div class="card">
                    <h5 class="pt-3 font-shippori-bold">&ensp;Editar</h5>
                    <form class="p-4" method="POST" action="editar-processo.php">
                        <div class="mb-3">
                            <i class="fas fa-user-alt"></i>
                            <label class="form-label font-shippori">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome" required 
                            value="<?php echo $db_pessoas -> nome; ?>">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone"></i>
                            <label class="form-label font-shippori">Telefone:</label>
                            <input type="number" class="form-control" name="telefone" autofocus required
                            value="<?php echo $db_pessoas -> telefone; ?>">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-at"></i>
                            <label class="form-label font-shippori">Email:</label>
                            <input type="email" class="form-control" name="email" autofocus required
                            value="<?php echo $db_pessoas -> email; ?>">
                        </div>
                        <div class="botao">
                            <input type="hidden" name="id" value="<?php echo $db_pessoas -> id; ?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>