<?php 
   include_once ("../controler/Ccurso.php");
?>
<link rel="stylesheet" href="css/motorista.css">
<div class="row mt-5">

<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
<div class="alert alert-primary" role="alert">
   cadastrar Cursos
</div>
<form method ="post" action="../controler/Ccurso.php">
  <div class="form-group">
    <input type="text" name="acao" value="adicionar" style="display: none;">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" name ="descricao" id="descricao" placeholder="*seu curso" required>
  </div>
  
  <button type="submit" name="bt_s" class="btn btn-success btn-sm">
  <i class="fa fa-dot-circle-o"></i>   
  Salvar</button>
  <a href="?pagina=l_curso" class="btn btn-primary btn-sm">ver registros</a>

  
  

</form>

</div>


</div>