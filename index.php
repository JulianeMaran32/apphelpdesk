<!-- Indica ao navegador que este é um documento html -->
<!DOCTYPE html>

<html lang="pt-br"> <!-- Idioma -->

  	<head> <!-- Cabeçalho: informações específicas como página, título, estido, condição... -->
    
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
	    <title> Help Desk - Index </title>
	
	</head>

  	<body>

	    <nav class="navbar navbar-dark bg-dark"> <!-- nav -->
	    	<a class="navbar-brand" href="index.php">
	    	<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    		App Help Desk
	    	</a>
	    </nav> <!-- fim nav -->

    	<div class="container"> <!-- container -->     
    		<div class="row"> <!-- row -->
		    	<div class="card-login"> <!-- card login -->
        			<div class="card"> <!-- card -->

            			<div class="card-header"> <!-- card header -->
	            			Login
	            		</div>

		            	<div class="card-body"> <!-- card body -->
		              		<form action="valida_login.php" method="post"> <!-- formulário -->

		                		<div class="form-group">
		                  			<input name="email" type="email" class="form-control" placeholder="E-mail">
		                		</div>
		                		<div class="form-group">
		                  			<input name="senha" type="password" class="form-control" placeholder="Senha">
	                			</div>

				                <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

				                <div class="text-danger">
				                	Usuário ou senha inválido(s)
				                </div>

				                <? } ?>

				                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

		                  		<div class="text-danger">
		                    		Faça login antes de acessar as páginas protegidas
		                  		</div>
		                  
		                		<? } ?>

		                		<button class="btn btn-lg btn-info btn-block" type="submit">
		                			Entrar
		                		</button>

	              			</form> <!-- fim formulário -->
		            	</div> <!-- fim card body -->
		        	</div> <!-- fim card -->
		    	</div> <!-- fim card login -->
			</div> <!-- fim row -->
		</div> <!-- fim container -->
  	</body>
</html>