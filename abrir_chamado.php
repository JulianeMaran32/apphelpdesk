<? require_once "validador_acesso.php" ?>

<html>
  <head>
    <!-- condição de caracteres -->
    <meta charset="utf-8"> 

    <!-- Descrição do documento -->
    <meta name="description" content="texto">

    <!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome - icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <!-- Arquivo JQuery 3.5.1 -->
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    
    <!-- Função JS -->
    <script type="text/javascript" src="js/funcao.js"></script>
    
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- PHP -->

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->

    <!-- Título da página (aba do navegador) -->
    <title> Help Desk - Abrir Chamado</title>

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark"> <!-- nav -->

      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">
            SAIR
          </a>
        </li>
      </ul>

    </nav> <!-- fim nav -->

    <div class="container"> <!-- container -->    
      <div class="row"> <!-- row -->

        <div class="card-abrir-chamado"> <!-- card abrir chamado -->
          <div class="card"> <!-- card -->

            <div class="card-header"> <!-- card header -->
              Abertura de chamado
            </div>

            <div class="card-body"> <!-- card body -->
              <div class="row"> <!-- row -->
                <div class="col"> <!-- col -->
                  
                  <form method="post" action="registra_chamado.php"> <!-- formulário -->

                    <div class="form-group">
                      <label> Título </label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group"> <!-- form group Categoria -->
                      <label>
                        Categoria
                      </label>
                      <select name="categoria" class="form-control">
                        <option> Criação Usuário</option>
                        <option> Impressora     </option>
                        <option> Hardware       </option>
                        <option> Software       </option>
                        <option> Rede           </option>
                      </select>
                    </div> <!-- fim form group -->
                    
                    <div class="form-group"> <!-- form group Descrição -->
                      <label>
                        Descrição
                      </label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">
                          Voltar
                        </a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">
                          Abrir
                        </button>
                      </div>
                    </div>

                  </form> <!-- fim formulário -->

                </div> <!-- fim col -->
              </div> <!-- fim col -->
            </div> <!-- fim card body -->

          </div> <!-- fim card -->
        </div> <!-- fim card abrir chamado -->

      </div> <!-- fim row -->
    </div> <!-- fim container -->

  </body>
</html>