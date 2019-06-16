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

<?php require 'assets/html/header.php'; ?>

  <div class="tabela-clientes">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"> </th>
          <th scope="col">Nome</th>
          <th scope="col" class="fix">
            <button class="btn btn-primary botaoAdd" data-toggle="modal" data-target="#addDepModal"
                type="submit">Adicionar</button>
        </th>
        </tr>
      </thead>
      <tbody>

       <?php foreach($departamentos as $departamento) : ?>

        <tr>
          <th scope="row">
          
          <?= $departamento->id; ?>
          
          </th>
          <td>
          
          <?= $departamento->nome; ?>
          
          </td>
          <td>
            <button type="button" class="btn btn-outline-primary botao" data-toggle="modal"
              data-target="#editarDep">Editar</button>
            <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
              data-target="#excluirDep">Excluir</button>
          </td>
        </tr>
        
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>

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
              <input name="nome">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
          </form>    
        </div>
      </div>
    </div>
</div>
  


  <div class="modal fade" id="editarDep" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarDepModal">Editar Departamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form>
            <div class="form-group">
              <label for="nomeDep">Nome</label>
              <input type="name" class="form-control" id="nomeCliente" placeholder="Nome do Departamento">
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



  <div class="modal fade" id="excluirDep" tabindex="-1" role="dialog">
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
              <label for="nomeCliente">Nome</label>
              <input type="name" class="form-control" id="nomeCliente" placeholder="Nome do Departamento" readonly>
              <h5 class="centralizado">Deseja Realmente excluir esse Departamento?</h5>
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
             <button type="submit" class="btn btn-danger">Excluir</button>
          </form>
          

        </div>
        
      </div>
    </div>
  </div>

  <!--JS-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>



<footer class="page-footer font-small blue card-tabela">

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://codejr.com.br/"> codejr.com.br</a>
  </div>

</footer>

</html>