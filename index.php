<?php include 'template_assets.php' ?>

<?php include 'template_header.php' ?>

<?php include 'db.php' ?>

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
                    <h5 class="pt-3 font-shippori-bold">&ensp;Cadastrar</h5>
                    <form class="p-4" method="POST" action="registrar.php">
                        <div class="mb-3">
                            <i class="fas fa-user-alt"></i>
                            <label class="form-label font-shippori">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome" autofocus required>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone"></i>
                            <label class="form-label font-shippori">Telefone:</label>
                            <input type="number" class="form-control" name="telefone" autofocus required>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-at"></i>
                            <label class="form-label font-shippori">Email:</label>
                            <input type="email" class="form-control" name="email" autofocus required>
                        </div>
                        <div class="botao">
                            <input type="hidden" name="oculto" value="1"> 
                            <input type="submit" class="btn btn-primary " value="Registrar"> 
                        </div>
                    </form>
                </div>
            </div>

            <!-- Alertas -->
            <div class="row">

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

                <!-- Tabela CRUD -->
                <div class="card">
                    <h5 class="pt-3 pb-3 font-shippori-bold">&ensp;Lista de Pessoas</h5>
                    <div class="p-1">
                        <table class="table table-borderless align-middle">
                            <thead>
                                <tr class="table-dark">
                                    <!-- <th scope="col" colspan="">#</th> -->
                                    <th scope="col" colspan="">Nome</th>
                                    <th scope="col" colspan="">Telefone</th>
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
                                    <td><?php echo $dados->nome; ?></td>
                                    <td><?php echo $dados->telefone; ?></td>
                                    <td><?php echo $dados->email; ?></td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $dados->id; ?>"><i class="fas fa-user-edit"></i></a></td>
                                    <td><a onclick="return confirm('Você esta certo disso?');" class="text-danger" href="apagar.php?id=<?php echo $dados->id; ?>"><i class="fas fa-user-minus"></i></a></td>
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
    </div>
</body>