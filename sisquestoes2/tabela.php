<?php

	include 'conexao.php';
	include 'listar.php';
  include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 
<title>Tabela</title>
</head>
<body>
	<br><br><br>
 <div class="container table-responsive">
  <h3>Lista de gabaritos cadastrados</h3>
  <table class="table table-hover ">
  	<thead >
	    <tr >
	      <td>Id</td>
        <td>Alternativa</td>
	      <td>Nome</td>
	      <td>Curso</td>
	      <td>Data de Cadastro</td>
        <td>Ações</td>
	    </tr>
    </thead>
    <?php while($questoes = mysqli_fetch_assoc($sql)) { ?>
    <tr>
      <td><?php echo $questoes['id']; ?></td>
      <td><?php echo $questoes['alternativa']; ?></td>
      <td><?php echo $questoes['nome']; ?></td>
      <td><?php echo $questoes['curso']; ?></td>
      <td><?php echo $questoes['data']; ?></td>
      <td>
       
        <a href="editar.php?id=<?php echo $questoes['id']; ?>" class="btn btn-sm btn-warning ">Editar</a>

        <a href="deletar.php?id=<?php echo $questoes['id']; ?>" class="btn btn-sm btn-danger " >Excluir</a>
        
        <!-- <img src="icons/icons/trash-fill.svg"> -->
      </td>
    </tr>
    <?php } ?>
  </table>


 <a class="btn btn-sm btn-primary" href="index.php">Voltar</a> 

</div>
</body>
</html>