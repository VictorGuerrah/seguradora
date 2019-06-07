<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CRUD Seguro</title>
    <link href="../../assets/css/seguro.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>
<?php require '../../assets/html/header.php'; ?>


    <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Seguro</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col" class="fix">
                        <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addSeguroModal"
                            type="submit">Adicionar</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Seguro 01</td>
                    <td>Tipo 01</td>
                    <td>Valor 01</td>
                    <td>
                        <button type="button" class="btn btn-outline-success botao" data-toggle="modal"
                            data-target="#exibirSeguro">Exibir</button>
                        <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                            data-target="#editarSeguro">Editar</button>
                        <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="addSeguroModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSeguroModalTitulo">Adicionar Seguro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="nomeSeguro">Seguro</label>
                            <input type="name" class="form-control" id="nomeSeguro">
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Tipo</label>
                            <input type="tipo" class="form-control" id="tipoSeguro">
                        </div>
                        <div class="form-group">
                            <label for="valorSeguro">Valor</label>
                            <input type="" class="form-control" id="valorSeguro">
                        </div>

                        <div class="form-group">
                            <label for="descSeguro">Descrição</label>
                            <input type="" class="form-control" id="descSeguro">
                        </div>
                </div>
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
                            <input type="name" class="form-control" id="nomeSeguro" placeholder="Seguro 01">
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Tipo</label>
                            <input type="tipo" class="form-control" id="tipoSeguro" placeholder="Tipo 01">
                        </div>
                        <div class="form-group">
                            <label for="valorSeguro">Valor</label>
                            <input type="" class="form-control" id="valorSeguro" placeholder="Valor 01">
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
                            <input type="name" class="form-control" id="nomeCliente" placeholder="Seguro 01" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tipoSeguro">Tipo</label>
                            <input type="" class="form-control" id="tipoSeguro" placeholder="Tipo 01" readonly>
                        </div>
                    </form>
                    <h5 class="centralizado">Deseja Realmente excluir esse seguro?</h5>

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

                    <p><b>Seguro:</b> Seguro 01</p>
                    <hr>
                    <p><b>Tipo:</b> Tipo 01</p>
                    <hr>
                    <p><b>Valor:</b> R$00,00</p>
                    <hr>
                    <p><b>Descrição:</b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam
                        vero atque at libero iste voluptatem molestiae aliquid quas, tenetur vel et blanditiis. Maiores
                        tenetur facere quidem nostrum corporis eaque. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Esse, quo voluptatibus! Repellendus quos voluptatum corrupti, eius blanditiis cupiditate
                        facilis neque maxime, accusamus error aliquam accusantium! Voluptates impedit assumenda optio
                        commodi?</p>

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