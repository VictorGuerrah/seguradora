<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CRUD departamento</title>
  <link href="assets/css/departamento.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>



<body>

  <?php require 'views/partial/header.php'; ?>

  <hr>
  <h1 class="titulo">Departamentos</h1>
  <hr>

  <div class="tabela-clientes">
    <table class="table table-striped">
      <thead>

        <tr>
          <th scope="col"> </th>
          <th scope="col">Nome</th>
          <th scope="col" class="fix">
            <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addDepModal" type="submit">Adicionar</button>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($departamentos as $departamento) : ?>
          <tr>
            <th scope="row">

              <?= $departamento->id; ?>

            </th>
            <td>

              <?= $departamento->nome; ?>

            </td>
            <td>
              <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#edit<?= $departamento->id; ?>">Editar</button>
              <button type="button" class="btn btn-outline-danger botao" data-toggle="modal" data-target="#del<?= $departamento->id; ?>">Excluir</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <?php foreach ($departamentos as $departamento) : ?>

    <div class="modal fade" id="addDepModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addClienteModalTitulo">Adicionar Departamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method='POST' action='/addDepartamento'>
              <div class="form-group">
                <label>Departamento:</label>
                <input class="form-control"placeholder="Enter departamento" name="nome">
              </div>

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>



    <div class="modal fade" id="edit<?= $departamento->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="editarDepModal">Editar Departamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method="POST" action="/updateDepartamento">
              <div class="form-group">
                <label for="nomeSeguro">Departamento</label>
                <input name='id' type='hidden' value='<?= $departamento->id; ?>'>
                <input name="nome" class="form-control" value="<?= $departamento->nome; ?> ">
                                
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="sunmit" class="btn btn-primary">Salvar</button>
            </form>
          </div>
        </div>
      </div>



      <div class="modal fade" id="del<?= $departamento->id; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modalEcluir" id="excluirModal">Excluir Departamento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method='POST' action='/deleteDepartamento'>
                <input name="id" type="hidden" value="<?= $departamento->id; ?>">
                <br>
                <h5 class="centralizado">Deseja Realmente excluir esse Departamento?</h5>
                <br>
                <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </div>
          </div>
        </div>
      </div>


    <?php endforeach; ?>

    <!--JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>



<?php require 'views/partial/footer.php'; ?>

</html>