<? 
  require_once "validador_acesso.php" 
?>

<?php

  //chamados
  $chamados = array();

  //abrir o arquivo.hd
  $arquivo = fopen('../../help_desk/hd/arquivo.hd', 'r');

  //enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas  
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  //fechar o arquivo aberto
  fclose($arquivo);
  
?>

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
    <title> Help Desk - Consultar Chamado </title>

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

        <div class="card-consultar-chamado"> <!-- card consulta chamado -->
          <div class="card"> <!-- card -->

            <div class="card-header"> <!-- card header -->
              Consulta de chamado
            </div>
            
            <div class="card-body"> <!-- card body -->

              <? foreach($chamados as $chamado) { ?>             
                <?php

                  $chamado_dados = explode('#', $chamado);

                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $chamado_dados[0]) {
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3) {
                    continue;
                  }
                ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">

                    <h5 class="card-title">
                      <?=$chamado_dados[1]?>
                    </h5>
                    
                    <h6 class="card-subtitle mb-2 text-muted">
                      <?=$chamado_dados[2]?>
                    </h6>

                    <p class="card-text">
                      <?=$chamado_dados[3]?>
                    </p>

                  </div>
                </div>

              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">
                    Voltar
                  </a>
                </div>
              </div>

            </div> <!-- fim card body -->
          </div> <!-- fim card -->
        </div> <!-- fim card consulta chamado -->
    
      </div> <!-- fim row -->
    </div> <!-- fim container -->

  </body>
</html>