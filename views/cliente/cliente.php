<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CRUD clientes</title>
  <link href="assets/css/cliente.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>

<?php require 'assets/html/header.php'; ?>



    <div class="tabela-clientes">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"> </th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col" class="fix">
              <button class="btn btn-primary btn-sm botaoAdd" data-toggle="modal" data-target="#addClienteModal"
                type="submit">Adicionar</button>
            </th>
          </tr>
        </thead>

        <?php foreach($clientes as $cliente) : ?>

        <tbody>
          <tr>
            <th scope="row">

            <?=$cliente->id;?>

            </th>
            <td>
            
            <?=$cliente->nome;?>
            
            </td>
            <td>
            
            <?=$cliente->email;?>
            
            </td>
            <td>
            
            <?=$cliente->cpf;?>
            
            </td>
            <td>
            
            <?=$cliente->cidade;?>
            
            </td>
            <td>
            
            <?=$cliente->bairro;?>
            
            </td>
            <td>
            
            <?=$cliente->rua;?>
            
            </td>
            <td>
            
            <?=$cliente->numero;?>
            
            </td>
            <td>
              <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
                data-target="#editarCliente">Editar</button>
              <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                data-target="#excluirCliente">Excluir</button>
            </td>
          </tr>
          
          <?php endforeach; ?>
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