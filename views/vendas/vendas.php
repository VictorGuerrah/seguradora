<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CRUD Vendas</title>
  <link href="assets/css/vendas.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>

  <?php require 'views/partial/header.php'; ?>

  <hr>
  <h1 class="titulo">Vendas</h1>
  <hr>

  <div class="tabela-seguros">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="th-lg"> </th>
          <th scope="col" class="th-lg">Cliente</th>
          <th scope="col" class="th-lg">Funcionário</th>
          <th scope="col" class="th-lg">Seguro</th>
          <th scope="col" class="th-lg">Preço Final</th>
          <th scope="col" class="fix">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal" type="submit">Adicionar</button>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($vendas as $venda) : ?>
          <tr>
            <th scope="row"><?= $venda->id; ?> </th>
            <td><?= $venda->cliente_nome; ?></td>
            <td><?= $venda->funcionario_nome; ?></td>
            <td><?= $venda->seguro_nome; ?></td>
            <td><?= $venda->preco_final; ?></td>
            <td>
              <button type="button" class="btn btn-outline-success botao" data-toggle="modal" data-target="#exibirSeguro">Exibir</button>
              <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#edit<?= $venda->id; ?>">Editar</button>
              <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#excluir<?= $venda->id; ?>">Excluir</button>
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
          <h5 class="modal-title" id="addClienteModalTitulo">Adicionar Venda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method='POST' action="/addVendas">

            
            <div class="form-group">
              <label for="nome">Quantidade :</label>
              <input class="form-control" placeholder="Enter quantidade" name="quantidade">
            </div>
            <div class="form-group">
              <label>Cliente:</label>
              <select name="cliente_id" class="form-control">
                <label for="pwd">Cliente:</label>
                <?php foreach ($clientes as $cliente) : ?>
                  <option value="<?= $cliente->id; ?>">
                    <?= $cliente->nome; ?>
                  </option>

                <?php endforeach; ?>

              </select>
            </div>

            <div class="form-group">
              <label>Funcionario:</label>
              <select name="funcionario_id" class="form-control">
                <label for="pwd">Funcionario:</label>
                <?php foreach ($funcionarios as $funcionario) : ?>
                  <option value="<?= $funcionario->id; ?>">
                    <?= $funcionario->nome; ?>
                  </option>

                <?php endforeach; ?>

              </select>
            </div>

            <div class="form-group">
              <label>Seguro:</label>
              <select name="seguro_id" class="form-control">
                <label for="pwd">Seguro:</label>
                <?php foreach ($seguros as $seguro) : ?>
                  <option value="<?= $seguro->id; ?>">
                    <?= $seguro->nome; ?>
                  </option>


                <?php endforeach; ?>

              </select>
            </div>

            <div class="form-group">
              <label for="nome">Desconto :</label>
              <input class="form-control" placeholder="Enter desconto" name="desconto">
            </div>

            
            <div class="form-group">
              <label for="nome">Preço Final :</label>
              <input class="form-control" placeholder="Enter preço final" name="preco_final">
            </div>

           
            <div class="form-group">
              <label for="nome">Anotações :</label>
              <input class="form-control" placeholder="Enter anotacoes" name="anotacoes">

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


  <?php foreach ($vendas as $venda) : ?>

    <div class="modal fade" id="edit<?= $venda->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editarVendaModal">Editar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <form method='POST' action='/updateVendas'>
            <div class="form-group">
                <label for="pwd">Quantidade:</label>
                <input name='id' type='hidden' value='<?= $venda->id; ?>'>
                <input name="password" class="form-control" value="<?= $venda->quantidade; ?>">
              </div>

              <div class="form-group">
                <label>Cliente:</label>
                <select name="cliente_id" class="form-control">
                  <?php foreach ($clientes as $cliente) : ?>

                    <option value="<?= $cliente->id; ?>">
                      <?= $cliente->nome; ?>
                    </option>

                  <?php endforeach; ?>

                </select>
              </div>

              <div class="form-group">
                <label>Funcionario:</label>
                <select name="funcionario_id" class="form-control">
                  <?php foreach ($funcionarios as $funcionario) : ?>

                    <option value="<?= $funcionario->id; ?>">
                      <?= $funcionario->nome; ?>
                    </option>

                  <?php endforeach; ?>

                </select>
              </div>

              <div class="form-group">
                <label>Seguro:</label>
                <select name="seguro_id" class="form-control">
                  <?php foreach ($seguros as $seguro) : ?>

                    <option value="<?= $seguro->id; ?>">
                      <?= $seguro->nome; ?>
                    </option>

                  <?php endforeach; ?>

                </select>
              </div>

              <div class="form-group">
                <label for="email">Desconto:</label>
                <input name='id' type='hidden' value="<?php $venda->id; ?>">
                <input name="email" class="form-control" value="<?= $venda->desconto; ?>">
              </div>

              
              <div class="form-group">
                <label for="pwd">Preço Final:</label>
                <input name='id' type='hidden' value='<?= $venda->id; ?>'>
                <input name="password" class="form-control" value="<?= $venda->preco_final; ?>">
              </div>
  

              <div class="form-group">
                <label for="nome">Anotações :</label>
                <input name='id' type='hidden' value='<?= $venda->id; ?>'>
                <input name="nome" class="form-control" value="<?= $venda->anotacoes; ?>">

              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>



    <div class="modal fade" id="excluir<?= $venda->id; ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modalEcluir" id="excluirModal">Excluir Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method='POST' action='/deleteVendas'>
              <input name="id" type="hidden" value="<?= $venda->id; ?>">
              <br>
              <h5 class="centralizado">Deseja Realmente excluir essa Venda?</h5>
              <br>
              <hr>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
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

            <p><b>Quantidade: </b> <?= $venda->quantidade ?></p>
            <hr>
            <p><b>Cliente: </b> <?= $venda->cliente_nome ?> </p>
            <hr>
            <p><b>Funcionario: </b> <?= $venda->funcionario_nome ?> </p>
            <hr>
            <p><b>Seguro: </b> <?= $venda->seguro_nome ?> </p>
            <hr>
            <p><b>Desconto: </b><?= $venda->desconto ?></p>
            <hr>
            <p><b>Preço Final:</b> <?= $venda->preco_final ?></p>
            <hr>
            <p><b>Anotações: </b> <?= $venda->anotacoes ?></p>
            <hr>

            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
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



<footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://codejr.com.br/"> codejr.com.br</a>
  </div>

</footer>

</html>