 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguradora - Funcionário</title>
    <link href="assets/css/funcionario.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>
<body>

  
<?php require 'views/partial/header.php'; ?>

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

                
              <form method='POST' action="/addFuncionarios">
                <div class="form-group">
                    <label for="pwd">Imagem:</label>
                    <input name="url_imagem">
                  </div>
                <div class="form-group">
                  <label for="email">Nome :</label>
                  <input class="form-control" placeholder="Enter nome" name="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input class="form-control" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input class="form-control" placeholder="Enter password" name="password">
                </div>
               
                <select name = "cargo_id">     
                  <label for="pwd">Cargo:</label>
                  <?php foreach($cargos as $cargo) : ?>
                    <option value = "<?= $cargo->id;?>">
                      <?= $cargo->nome; ?> 
                    </option>
                  
                  <?php endforeach; ?> 

                </select>

                

                
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
  


</div>


<div class="modal fade" id="editarFuncionario<?=$funcionario->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <label for="nome">Nome :</label>
                  <input name='id' type='hidden' value='<?= $funcionario->id ; ?>'>
                  <input name="nome" class="form-control" placeholder="<?= $departamento->nome ; ?>">

                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input name='id' type='hidden' value='<?= $funcionario->id ; ?>'>
                  <input name="email" class="form-control" placeholder="<?= $funcionario->email ; ?>">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input name='id' type='hidden' value='<?= $funcionario->id ; ?>'>
                  <input name="password" class="form-control" placeholder="<?= $funcionario->password ; ?>">
                </div>
               
                <div class="form-group">
                  <label for="pwd">Cargo</label>
                  <input name='id' type='hidden' value='<?= $funcionario->id ; ?>'>
                  <input name="cargo" class="form-control" placeholder="<?= $funcionario->cargo ; ?>">
                </div>
                
               
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Salvar</button>
          </div>
    </div>
  </div>


  
  <div class="modal fade" id="excluirSeguro<?= $funcionario->id; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modalEcluir" id="excluirModal">Excluir Funcionario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form method='POST' action='/deleteFuncionario'>
                    <input name="id" type="hidden" value="<?= $funcionario->id; ?>">
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