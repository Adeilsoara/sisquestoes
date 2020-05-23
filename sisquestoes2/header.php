<!DOCTYPE html>
<html>
<head>
	<title>Sistema Questões</title>
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">

	<script type="text/javascript" src="jqueryui/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="funcoes.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="tabela.php">Gabaritos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#meuModal">Sair</a>
      </li>
    </ul>
  </div>
</nav>

<div id="meuModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> Deseja sair do sistema?</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">
				<p>Cique em Sair para deslogar</p>	
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<a class="navbar-brand" href="../index_login.html">
					<button type="button" class="btn btn-primary">Sair</button>
				</a>
			</div>

		</div>
	</div>

</div>