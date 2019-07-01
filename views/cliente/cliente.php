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

  <?php require 'views/partial/header.php'; ?>

  <hr>
  <h1 class="titulo">Clientes</h1>
  <hr>

  <div class="tabela-clientes">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"> </th>
          <th scope="col">Nome</th>
          <th scope="col" class="centralizado">E-mail</th>
          <th scope="col" class="centralizado">CPF</th>
          <th scope="col" class="fix">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal" type="submit">Adicionar</button>
          </th>
        </tr>
      </thead>

      <?php foreach ($clientes as $cliente) : ?>

        <tbody>
          <tr>
            <th scope="row">

              <?= $cliente->id; ?>

            </th>
            <td>

              <?= $cliente->nome; ?>

            </td>
            <td>

              <?= $cliente->email; ?>

            </td>
            <td>

              <?= $cliente->cpf; ?>

            </td>

            <td>
            <button type="button" class="btn btn-outline-success botao" data-toggle="modal" data-target="#exibirCliente<?= $cliente->id; ?>">Exibir</button>
              <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#edit<?=$cliente->id; ?>">Editar</button>
              <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#excluir<?= $cliente->id; ?>">Excluir</button>
            </td>
          </tr>

        <?php endforeach; ?>
      </tbody>
    </table>
  </div>






  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClienteModalTitulo">Adicionar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method='POST' action="/addCliente">
            <div class="form-group">
              <label for="name">Nome :</label>
              <input class="form-control" placeholder="Enter nome" name="nome">
            </div>

            <div class="form-group">
              <label for="email">Email :</label>
              <input class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
              <label for="email">CPF :</label>
              <input class="form-control" placeholder="Enter CPF" name="cpf">
            </div>

            <div class="form-group">
              <label for="email">Cidade :</label>
              <input class="form-control" placeholder="Enter cidade" name="cidade">
            </div>

            <div class="form-group">
              <label for="email">Bairro :</label>
              <input class="form-control" placeholder="Enter bairro" name="bairro">
            </div>

            <div class="form-group">
              <label for="email">Rua :</label>
              <input class="form-control" placeholder="Enter rua" name="rua">
            </div>

            <div class="form-group">
              <label for="email">Numero :</label>
              <input class="form-control" placeholder="Enter numero" name="numero">
            </div>

            



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

        </form>

      </div>
    </div>
  </div>

  <?php foreach ($clientes as $cliente) : ?>

    <div class="modal fade" id="edit<?=$cliente->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editarClienteModal">Editar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method='POST' action='/updateCliente'>

              <div class="form-group">
                <label for="nome">Nome :</label>
                <input name='id' type='hidden' value='<?= $cliente->id; ?>'>
                <input name="nome" class="form-control" value="<?= $cliente->nome; ?>">
              </div>

              <div class="form-group">
                <label for="email">Email :</label>
                <input name="email" class="form-control" value="<?= $cliente->email; ?>">
              </div>

              <div class="form-group">
                <label for="cpf">CPF :</label>
                <input name="cpf" class="form-control" value="<?= $cliente->cpf; ?>">
              </div>

              <div class="form-group">
                <label for="cidade">Cidade :</label>
                <input name="cidade" class="form-control" value="<?= $cliente->cidade; ?>">
              </div>

              <div class="form-group">
                <label for="bairro">Bairro :</label>
                <input name="bairro" class="form-control" value="<?= $cliente->bairro; ?>">
              </div>

              <div class="form-group">
                <label for="rua">Rua :</label>
                <input name="rua" class="form-control" value="<?= $cliente->rua; ?>">
              </div>      

              <div class="form-group">
                <label for="numero">Numero :</label>
                <input name="numero" class="form-control" value="<?= $cliente->numero; ?>">
              </div>

              


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>


</div>
</div>
    <div class="modal fade" id="excluir<?= $cliente->id; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir" id="excluirModal">Excluir Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form method='POST' action='/deleteCliente'>
                    <input name="id" type="hidden" value="<?= $cliente->id; ?>">
                    <br>
                      <h5 class="centralizado">Deseja Realmente excluir esse Cliente?</h5>
                    <br>
                    <hr>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exibirCliente<?= $cliente->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exibirSeguroModal">Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 
                    <p><b>Id: </b> <?= $cliente->id ?> </p>
                    <hr>
                    <p><b>Nome: </b> <?= $cliente->nome ?> </p>
                    <hr>
                    <p><b>Email: </b> <?= $cliente->email ?> </p>
                    <hr>
                    <p><b>CPF: </b> <?= $cliente->cpf ?> </p>
                    <hr>
                    <p><b>Cidade: </b><?= $cliente->cidade ?></p>
                    <hr>
                    <p><b>Bairro :</b> <?= $cliente->bairro ?></p>
                    <hr>
                    <p><b>Rua: </b> <?= $cliente->rua ?></p>
                    <hr>
                    <p><b>Número: </b> <?= $cliente->numero ?></p>
                    <hr>
                   
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>



    <!--JS-->
  <?php endforeach; ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>



<?php require 'views/partial/footer.php'; ?>

</html>