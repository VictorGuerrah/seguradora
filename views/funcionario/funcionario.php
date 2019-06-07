 <!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguradora - Funcionário</title>
    <link href="../../assets/css/funcionario.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
</head>
<body>

  
<?php require '../../assets/html/header.php'; ?>

    <div class="intro">
        
      </div>
       <div class="card" style="border-radius :3%">
        <div class="tabela">
        <table class="table table-striped  " >
        <thead>
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
            
            <tr>
              <th scope="row">1</th>
              <td><div class="foto"><img src="img/menina1.jpg"></div></td>
              <td>Ana</td>
              <td>ana.sem@email.br</td>
              
            
              <td>Agente de seguros</td>
              <td>
                <button type="button" class="btn btn-outline-primary botao" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
              </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img src="img/menina2.jpg"></td>
                <td>Bia</td>
                <td>bia.sem@email.br</td>
               
               
                <td>Agente de seguros</td>
                <td>
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><img src="img/menina3.jpg"></td>
                <td>Carla</td>
                <td>carla.sem@email.br</td>
              
               
                <td>Secretária</td>
                <td>
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><img src="img/menina5.png"></td>
                <td>Debora</td>
                <td>debora.sem@email.br</td>
              
                <td>Gerente de finanças</td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td><img src="img/menina11.jpg."></td>
                <td>Erica</td>
                <td>erica.sem@email.br</td>
              
               
                <td>Gerente de Gestão de Pessoa</td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td><img src="img/menina10.jpg"></td>
                <td>Fabia</td>
                <td>fabia.sem@email.br</td>
                <td>Técnica em TI</td>
                <td>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editarFuncionario">Editar</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#excluirCliente">Excluir</button>
                </td>
            </tr>
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