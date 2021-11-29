<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Pessoas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
</head>

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

<?php include 'template/header.php' ?>

<?php 
    include_once "exec/conectar.php";
    $selecionar = $db -> query("SELECT * FROM pessoas");
    $pessoas = $selecionar -> fetchAll(PDO::FETCH_OBJ);
?>

<body>
    <div class="container">

        <!-- Alertas -->
        <div class="row">

            <div class="container pt-4 pb-1">

                <!-- Registrado com Sucesso -->
                <?php 
                    if(isset($_GET['alerta']) and $_GET['alerta'] == 'registrado'){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Os dados foram Registrados com Sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
                    }
                ?>   

                <!-- Atualizado com Sucesso -->
                <?php 
                    if(isset($_GET['alerta']) and $_GET['alerta'] == 'atualizado'){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Os dados foram Atualizados com Sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
                    }
                ?> 

                <!-- Apagado com Sucesso -->
                <?php 
                    if(isset($_GET['alerta']) and $_GET['alerta'] == 'apagado'){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Os dados foram Apagados com Sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
                    }
                ?>
                
                <!-- Erro -->
                <?php 
                    if(isset($_GET['alerta']) and $_GET['alerta'] == 'erro'){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Algo deu Errado, Tente Novamente!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php 
                    }
                ?>

            </div>

            <!-- Tabela CRUD -->
            <div class="card">
                <div class="row">
                    <h5 class="col pt-3 pb-3 font-shippori-bold">&ensp;Lista de Pessoas</h5>
                    <div class="col-auto">
                        <a href="pages/cadastrar.php">
                            <button type="button" class="mt-3 me-1 col btn btn-success d-block align-self-end">Cadastrar</button>
                        </a>
                    </div>
                </div>
                <div class="p-1">
                    <table class="table table-borderless align-middle">
                        <thead>
                            <tr class="table-dark">
                                <!-- <th scope="col" colspan="">#</th> -->
                                <th scope="col" colspan="">Nome</th>
                                <th scope="col" colspan="">Telefone</th>
                                <th scope="col" colspan="">Idade</th>
                                <th scope="col" colspan="">Email</th>
                                <th scope="col" colspan="2">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($pessoas as $dados){
                            ?>

                            <tr>
                                <!-- <td scope="row"><?php echo $dados->id; ?></td> -->
                                <td><?php echo $dados -> nome; ?></td>
                                <td><?php echo $dados -> telefone; ?></td>
                                <td><?php echo $dados -> idade; ?></td>
                                <td><?php echo $dados -> email; ?></td>
                                <td><a class="text-success" href="pages/editar.php?id=<?php echo $dados->id; ?>"><i class="fas fa-user-edit"></i></a></td>
                                <td><a onclick="return confirm('Você deseja mesmo apagar?');" class="text-danger" href="exec/apagar.php?id=<?php echo $dados -> id; ?>"><i class="fas fa-user-minus"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/079c8de8d4.js" crossorigin="anonymous"></script>

</html>