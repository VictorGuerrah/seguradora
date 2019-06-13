<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD Seguro</title>
    <link href="assets/css/seguro.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>
<?php require 'assets/html/header.php'; ?>


    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>

            <?php foreach($seguros as $seguro) : ?>

                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Preço</th>
                    <th scope="col" class="fix">
                        <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addSeguroModal"
                            type="submit">Adicionar</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $seguro->id; ?></th>
                    <td><?= $seguro->nome; ?></td>
                    <td><?= $seguro->tipo_nome; ?></td>
                    <td><?= $seguro->preco; ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="addSeguroModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Adicionar Novo Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="processos.php" method='POST'>
                        <div class="form-group">
                            <label for="nomeSeguro">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="# insira o seguro #">
                        </div>
                        <div class="form-group">
                            <label for="nomeSeguro">Valor</label>
                            <input type="text" name="nome" class="form-control" placeholder="# insira o preço #">
                        </div>
                        <div class="form-group">
                            <label for="nomeSeguro">Descrição</label>
                            <input type="text" name="nome" class="form-control" placeholder="# insira a descrição #">
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tipo
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tipos</a>
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


    <div class="modal fade" id="editarSeguro" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarSeguroModal">Editar Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="nomeSeguro">Seguro</label>
                            <input type="name" class="form-control" id="nomeSeguro" placeholder="<?= $seguro->nome; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Tipo</label>
                            <input type="tipo" class="form-control" id="tipoSeguro" placeholder="<?= $seguro->tipo_nome; ?>">
                        </div>
                        <div class="form-group">
                            <label for="valorSeguro">Valor</label>
                            <input type="" class="form-control" id="valorSeguro" placeholder="R$<?= $seguro->preco; ?>">
                        </div>
                        <div class="form-group">
                            <label for="valorSeguro">Descrição</label>
                            <input type="" class="form-control" id="valorSeguro" placeholder="<?= $seguro->descricao; ?>">
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



    <div class="modal fade" id="excluirSeguro" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir" id="excluirModal">Excluir Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nomeSeguro">Seguro</label>
                            <input type="name" class="form-control" id="nomeCliente" placeholder="<?= $seguro->nome; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Tipo</label>
                            <input type="" class="form-control" id="tipoSeguro" placeholder="<?= $seguro->tipo_nome; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Valor</label>
                            <input type="" class="form-control" id="tipoSeguro" placeholder="R$<?= $seguro->preco; ?>" readonly>
                        </div>
                    </form>
                    <h5 class="centralizado">Deseja realmente excluir esse seguro?</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exibirSeguro" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exibirSeguroModal">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p><b>Seguro: </b> <?= $seguro->nome; ?></p>
                    <hr>
                    <p><b>Tipo: </b> <?= $seguro->tipo_nome; ?></p>
                    <hr>
                    <p><b>Valor: </b>R$<?= $seguro->preco; ?></p>
                    <hr>
                    <p><b>Descrição: </b><?= $seguro->descricao; ?></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>



    <!--JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>



<footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://codejr.com.br/"> codejr.com.br</a>
    </div>

</footer>

</html>