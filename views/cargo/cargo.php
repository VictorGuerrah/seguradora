<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD Cargo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href="assets/css/cargo.css" rel="stylesheet" type="text/css">
  
</head>

<body>
    
    <?php require 'assets/html/header.php'; ?>

    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="th-lg"> </th>
                    <th scope="col" class="th-lg">Nome</th>
                    <th scope="col" class="th-lg">Departamento</th>
                    <th scope="col" class="fix">
                        <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addCargo"
                            type="submit">Adicionar</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                
               <?php  foreach($cargos as $cargo) : ?>
               
                
                <tr>
                    <th scope="row"> 
                    
                    <?= $cargo->id; ?> 
                    
                    </th>
                    
                    <td>

                    <?= $cargo->nome; ?> 
                    
                    </td>
                    <td><?= $cargo->departamento_nome; ?> </td>
                    <td>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarCargo">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirCargo">Excluir</button>
                    </td>
                </tr>
                
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>






    <div class="modal fade" id="addCargo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Adicionar Novo Cargo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="processos.php" method='POST'>
                        <div class="form-group">
                            <label for="nomeSeguro">Nome do cargo</label>
                            <input type="text" name="nome" class="form-control" placeholder="# insira o cargo #">
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Departamento
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Departamentos</a>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" name="salvar">Salvar</button>
                </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editarCargo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cargo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="nomeSeguro">Cargo</label>
                            <input type="name" class="form-control"placeholder="Cargo #">
                        </div>
                        <div class="form-group">
                            <label for="nomeSeguro">Salário</label>
                            <input type="name" class="form-control"placeholder="Salário #">
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Descrição</label>
                            <input type="tipo" class="form-control" placeholder="Descrição #">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="excluirCargo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir">Excluir Cargo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nomeSeguro">Cargo</label>
                            <input type="name" class="form-control" placeholder="Cargo #" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomeSeguro">Salário</label>
                            <input type="name" class="form-control" placeholder="Salário #" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Descrição</label>
                            <input type="" class="form-control" placeholder="Descrição #" readonly>
                        </div>
                    </form>
                    <h5 class="centralizado">Deseja Realmente excluir o cargo?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($cargos as $cargo) { ?>

    <div class="modal fade" id="exibirCargo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p><b>Cargo:</b> <?= $cargo->nome ?></p>
                    <hr>
                    <p><b>Departamento:</b><?= $cargo->departamento_nome; ?> </p>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <!--JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>

<?php require 'assets/html/footer.php'; ?>

</html>