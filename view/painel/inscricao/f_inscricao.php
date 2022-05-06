<?php 
   include_once ("../controler/Csala.php");
?>
<link rel="stylesheet" href="css/motorista.css">
<div class="row mt-5">

<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
<div class="alert alert-primary" role="alert">
   cadastrar inscrição
</div>
<form method ="post" action="../controler/Csala.php">
  <div class="form-group">
    <input type="text" name="acao" value="adicionar" style="display: none;">
    <label for="descricao">Nome do Aluno</label>
    <input type="text" class="form-control" name ="descricao" id="descricao" placeholder="*Miguelito Miguel" required>
  </div>
  <div class="form-group">
    <label for="descricao">Pai</label>
    <input type="text" class="form-control" name ="descricao" id="descricao" placeholder="*Tio João" required>
  </div>
  <div class="form-group">
    
    <label for="descricao">Mãe</label>
    <input type="text" class="form-control" name ="descricao" id="descricao" placeholder="*Tia Silvia" required>
  </div>
  <div class="form-group">
  
    <label for="descricao">Data de nascimento</label>
    <input type="date" class="form-control" name ="descricao" id="descricao" placeholder="*sua sala" required>
  </div>
  <div class="form-group">
  <label class="text-white">Aluno</label>
    <select name="aluno" id="aluno" class ="form-control">
     <?php foreach ($aluno as $linha){?>
    <option value="<?php echo $linha['idaluno'] ?>"><?php echo $linha['nome'] ?></option>
    <?php }?>
    </select>
    </div>
  
  <button type="submit" name="bt_s" class="btn btn-success btn-sm">
  <i class="fa fa-dot-circle-o"></i>   
  Salvar</button>
  <a href="?pagina=l_sala" class="btn btn-primary btn-sm">ver registros</a>

  
  

</form>

</div>


</div>