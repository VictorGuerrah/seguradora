 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguradora - Funcionário</title>
    <link href="assets/css/funcionario.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>
<body>

  
<?php require 'assets/html/header.php'; ?>

  <div class="tabela-seguros">
        <table class="table table-striped">
            <thead>
                <tr>
          <tr>
            <th scope="col"> </th>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Cargo</th>
            <th scope="col">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modal"
                type="submit">Adicionar</button>
            </th>
          </tr>
        </thead>
        <tbody>

          <?php foreach($funcionarios as $funcionario) : ?>

            <tr>
              <th scope="row">
              
              <?= $funcionario->id; ?>
              
              </th>
              
              <td><div class="foto">

              <?= $funcionario->url_imagem; ?>

              </div></td>
              <td>
              
              <?= $funcionario->nome; ?>
              
              </td>
              <td>
              
              <?= $funcionario->email; ?>
              
              </td>
              
            
              <td>
              
              <?= $funcionario->cargo_nome; ?> </td>
              
              </td>
              <td>
                <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                <button type="button" class="btn btn-outline-danger botao" data-toggle="modal"
                            data-target="#excluirSeguro">Excluir</button>
              </td>
            </tr>
            <?php endforeach; ?>  
        </tbody>
        </table>
      </div>



    
      
       
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addClienteModalTitulo">Adicionar Novo Funcionário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
              <form action="/action_page.php">
                <div class="form-group">
                    <label for="pwd">Imagem:</label>
                    <img src="img/sombra.png">
                  </div>
                <div class="form-group">
                  <label for="email">Nome :</label>
                  <input type="nome" class="form-control" id="email" placeholder="Enter nome" name="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
               
                <div class="form-group">
                  <label for="pwd">Cargo</label>
                  <input type="cargo" class="form-control" id="pwd" placeholder="Enter cargo" name="pwd">
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

  
</div>
  


</div>

<div class="modal fade" id="editarFuncionario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClienteModalTitulo">Editar Funcionário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <form action="/action_page.php">
                <div class="form-group">
                    <label for="pwd">Imagem:</label>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaacinxhnYcBnhULvPCpYB1rgJfcaj1MjLAAXagZi2qkSafv42">
                  </div>
                <div class="form-group">
                  <label for="email">Nome :</label>
                  <input type="nome" class="form-control" id="email" placeholder="Enter nome" name="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
               
                <div class="form-group">
                  <label for="pwd">Cargo</label>
                  <input type="cargo" class="form-control" id="pwd" placeholder="Enter cargo" name="pwd">
                </div>
                
               
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
          </div>
    </div>
  </div>

  <div class="modal fade" id="excluirSeguro" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir" id="excluirModal">Excluir Funcionario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="centralizado">Deseja Realmente excluir o funcionário?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
    </div>



</div>
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