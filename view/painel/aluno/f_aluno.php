


<div class="row mt-5">

<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
<div class="alert alert-primary" role="alert">
   cadastrar Alunos
</div>
<form method ="post" action="../controler/Cusuario.php">
  <div class="form-group">
    <input type="text" name="acao" value="adicionar" style="display: none;">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name ="nome" id="nome" placeholder="*seu nome" required>
    <small id="nome" class="form-text text-muted">é importante ter um nome caro cidadão , respeita o campo !</small>
  </div>
  <div class="form-group col-md-5 ">
    <label for="pai">Pai</label>
    <input type="text" class="form-control" name="login"  id="pai"  placeholder="*nome do pai" required>
  </div>
  <div class="form-group">
    <label for="mae">Mãe</label>
    <input type="text" class="form-control" name="login"  id="mae"  placeholder="*nome da mãe" required>
  </div>
  <div class="form-group">
  <label class="text-white col-md-5">Turma</label>
    <select name="turma" id="turma" class ="form-control">
     <?php foreach ($turma as $linha){?>
    <option value="<?php echo $linha['idturma'] ?>"><?php echo $linha['descricao'] ?></option>
    <?php }?>
    </select>
    </div>


  <button type="submit" name="bt_s" class="btn btn-success btn-sm">
  <i class="fa fa-dot-circle-o"></i>
  Salvar</button>
  <a href="?pagina=l_aluno" class="btn btn-primary btn-sm">ver registros</a>




</form>

</div>


</div>
