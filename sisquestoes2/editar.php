<?php 
	include 'conexao.php';
	
	if(isset($_POST['done'])){
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$curso = $_POST["curso"];
		$data = $_POST["data"];
		$alternativa = $_POST['alternativa'];
		$alternativa_implode = implode(",", $_POST['alternativa']);
		$query = "UPDATE questoes SET alternativa = '$alternativa_implode', nome = '$nome', curso= '$curso', data = '$data' WHERE id = $id ";
	    //echo $query;
	    $consulta = mysqli_query($connection, $query);

	    header('location: tabela.php');
	}

?>


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

<nav class="navbar fixed-top navbar-light bg-light">
    
   <img src="../img/logomm.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
   
   <a href="tabela.php">
		<button type="button" class="btn btn-primary">Gabaritos</button>
	</a>

   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#meuModal">Sair</button>

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

<div class="container col-md-6 offset-md-3">

<br><br><br>

<h2 align="center">"Sistema" de Questões</h2>
<form method="POST">

 <div class="row">
    <div class="col">
      <input name="nome" type="text" class="form-control" placeholder="Nome" ></input>
    </div>
    <div class="col">
    <select class="form-control" id="cursos" name="curso" required="">
      <option></option>
      <option>Informática</option>
      <option>Comércio</option>
      <option>Enfermagem</option>
      <option>Administração</option>
    </select>
    </div>
    <div class="col">
      <input name="data" type="date" class="form-control" placeholder="Data">
    </div>
 </div>

<div id="accordion">
  <h3>Questão 1</h3>
  <div>
    <p>
   	<h2>Questão 1</h2>
		    <legend>Marque uma alternativa: </legend>
		    <label>Letra A</label>
		    <input type="radio" name="alternativa[0]" value="letra-a"> <br>
		    <label>Letra B</label>
		    <input type="radio" name="alternativa[1]" value="letra-b"> <br>
		    <label>Letra C</label>
		    <input type="radio" name="alternativa[2]" value="letra-c">
    </p>
  </div>
  <h3>Questão 2</h3>
  <div>
    <p>
    <h2>Questão 2</h2>
		    <legend>Marque uma alternativa: </legend>
		  <label>Letra A</label>
	      <input type="radio" name="alternativa[3]" value="letra-a"> <br>
	      <label>Letra B</label>
	      <input type="radio" name="alternativa[4]" value="letra-b"> <br>
	      <label>Letra C</label>
	      <input type="radio" name="alternativa[5]" value="letra-c">
    </p>
  </div>
  <h3>Questão 3</h3>
  <div>
    <p>
    <h2>Questão 3</h2>
		    <legend>Marque uma alternativa: </legend>
		    <label>Letra A</label>
		      <input type="radio" name="alternativa[6]" value="letra-a"> <br>
		      <label>Letra B</label>
		      <input type="radio" name="alternativa[7]" value="letra-b"> <br>
		      <label>Letra C</label>
		      <input type="radio" name="alternativa[8]" value="letra-c">
    </p>
  </div>
  <h3>Questão 4</h3>
  <div>
    <p>
   <h2>Questão 4</h2>
		    <legend>Marque uma alternativa: </legend>
		   <label>Letra A</label>
	      <input type="radio" name="alternativa[9]" value="letra-a"> <br>
	      <label>Letra B</label>
	      <input type="radio" name="alternativa[10]" value="letra-b"> <br>
	      <label>Letra C</label>
	      <input type="radio" name="alternativa[11]" value="letra-c">
    </p>
  </div>
</div> 
<br>
	<button name="done" type="submit" class="btn btn-primary col-md-6 offset-md-3 " class="">Atualizar</button>
</form>
<br>

<a href="tabela.php">
	<button name="done" type="submit" class="btn btn-danger col-md-6 offset-md-3 ">Cancelar</button>
</a>
</div>

</div>

</body>
</html>
