<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> 
</head>
<body>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
  function modalConfirmacao()
  {
 	?>
 	<div class="modal" tabindex="-1" role="dialog" id="telaModal" data-backdrop="static"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $_SESSION['mensagem']; ?></h5>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="<?php echo $_SESSION['local'];?>">OK</a>
      </div>
    </div>
  </div>
</div>
<script>
	$('#telaModal').modal('show')
</script>

 <?php
 }
 function modalDesejaExcluir($codigoEstoque)
 {
 	?>
 	<div class="modal" tabindex="-1" role="dialog" id="telaModalExcluir" data-backdrop="static"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deseja realmente excluir?</h5>
      </div>
      <div class="modal-footer">
      	<form method="post" action="../control/controleEstoque.php">
        	<input type="hidden" name="codigo" value="<?php echo $codigoEstoque; ?>">
        	<button type="submit" name="opcao" value="excluirSim" class="btn btn-danger">Sim</button>
        	<a class="btn btn-primary" href=../view/editarEstoque.php?codigoEstoque=<?php echo $codigoEstoque ?>>Não</a> 
    	</form>
      </div>
    </div>
  </div>
</div>
<script>
	$('#telaModalExcluir').modal('show')
</script>

 <?php
}
?>
</body>

</html>