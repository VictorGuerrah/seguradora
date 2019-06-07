<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CRUD clientes</title>
  <link href="../../assets/css/vendas.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>

<?php require '../../assets/html/header.php'; ?>



  <div class="tabela-seguros">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="th-lg"> </th>
                <th scope="col" class="th-lg">Cliente</th>
                <th scope="col" class="th-lg">Funcionário</th>
                <th scope="col" class="th-lg">Quantidade</th>
                <th scope="col" class="th-lg">Seguro</th>
                <th scope="col" class="th-lg">Preço</th>
                <th scope="col" class="th-lg">Desconto</th>
                <th scope="col" class="th-lg">Preço Final</th>
                <th scope="col" class="th-lg">Anotações</th>
                <th scope="col" class="fix">
                    <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addTipo"
                        type="submit">Adicionar</button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>João</td>
                <td>Bia</td>
                <td>1</td>
                <td>Saúde</td>
                <td>R$550,00</td>
                <td>R$50,00</td>
                <td>R$500,00</td>
                <td></td>
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
                <th scope="row">2</th>
                <td>Margarida</td>
                <td>Ana</td>
                <td>1</td>
                <td>Automóvel</td>
                <td>R$2500,00</td>
                <td>R$500,00</td>
                <td>R$2000,00</td>
                <td></td>
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
                <th scope="row">3</th>
                <td>Joana</td>
                <td>Carla</td>
                <td>2</td>
                <td>Rural</td>
                <td>R$3000,00</td>
                <td>R$400,00</td>
                <td>R$5200,00</td>
                <td></td>
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
                <th scope="row">4</th>
                <td>Cleiton</td>
                <td>Débora</td>
                <td>1</td>
                <td>Risco Financeiro</td>
                <td>R$500,00</td>
                <td>R$0,00</td>
                <td>R$500,00</td>
                <td></td>
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
                <th scope="row">5</th>
                <td>Joaquim</td>
                <td>Fábia</td>
                <td>1</td>
                <td>Responsabilidades</td>
                <td>R$550,00</td>
                <td>R$50,00</td>
                <td>R$500,00</td>
                <td></td>
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
                <th scope="row">6</th>
                <td>Pedro</td>
                <td>Erica</td>
                <td>3</td>
                <td>Patrimonial</td>
                <td>R$1000,00</td>
                <td>R$100,00</td>
                <td>R$2700,00</td>
                <td></td>
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






    <div class="modal fade" id="addClienteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addClienteModalTitulo">Adicionar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form>
              <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="name" class="form-control" id="nomeCliente">
              </div>
              <div class="form-group">
                <label for="emailCliente">E-mail</label>
                <input type="email" class="form-control" id="emailCliente">
              </div>
              <div class="form-group">
                <label for="cpfCliente">CPF</label>
                <input type="" class="form-control" id="cpfCliente">
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-5">
                    <label for="ruaCliente">Rua</label>
                    <input type="" class="form-control" id="ruaCliente">
                  </div>
                  <div class="col-md-5">
                    <label for="bairroCliente">Bairro</label>
                    <input type="" class="form-control" id="bairroCliente">
                  </div>
                  <div class="col-md-2">
                    <label for="numeroCliente">Número</label>
                    <input type="" class="form-control" id="numeroCliente">
                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="cidadeCliente">Cidade</label>
                <input type="" class="form-control" id="cidadeCliente">
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


    <div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editarClienteModal">Editar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form>
              <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="name" class="form-control" id="nomeCliente" placeholder="Joao da Silva">
              </div>
              <div class="form-group">
                <label for="emailCliente">E-mail</label>
                <input type="email" class="form-control" id="emailCliente" placeholder="joao@joao.com.br">
              </div>
              <div class="form-group">
                <label for="cpfCliente">CPF</label>
                <input type="" class="form-control" id="cpfCliente" placeholder="111.111.111-11">
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-5">
                    <label for="ruaCliente">Rua</label>
                    <input type="" class="form-control" id="ruaCliente" placeholder="Av.Rio Branco">
                  </div>
                  <div class="col-md-5">
                    <label for="bairroCliente">Bairro</label>
                    <input type="" class="form-control" id="bairroCliente" placeholder="Centro">
                  </div>
                  <div class="col-md-2">
                    <label for="numeroCliente">Número</label>
                    <input type="" class="form-control" id="numeroCliente" placeholder="111">
                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="cidadeCliente">Cidade</label>
                <input type="" class="form-control" id="cidadeCliente" placeholder="Juiz de Fora">
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



    <div class="modal fade" id="excluirCliente" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modalEcluir" id="excluirModal">Excluir Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="name" class="form-control" id="nomeCliente" placeholder="Joao da Silva" readonly>
              </div>
              <div class="form-group">
                <label for="cpfCliente">CPF</label>
                <input type="" class="form-control" id="cpfCliente" placeholder="111.111.111-11" readonly>
              </div>
            </form>
            <h5 class="centralizado">Deseja Realmente excluir esse cliente?</h5>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
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