

<div class="row mt-5">

<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
<div class="alert alert-primary" role="alert">
   cadastrar usuário
</div>
<form method ="post" action="../controler/Cusuario.php">
  <div class="form-group">
    <input type="text" name="acao" value="adicionar" style="display: none;">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name ="nome" id="nome" placeholder="*seu nome" required>
    <small id="nome" class="form-text text-muted">é importante ter um nome caro cidadão , respeita o campo !</small>
  </div>
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" name="login"  id="login"  placeholder="*seu nome de usuário" required>
  </div>
  <div class="form-group">
    <label for="senha">Password</label>
    <input type="password" class="form-control" name="senha" id="senha" placeholder="*sua senha" required>
  </div>
  <div class="form-group">
  <label class="text-white">Permissão</label>
    <select name="permissao" id="permissao" class ="form-control">

    <option value="<?php echo $linha['idpermissao'] ?>"><?php echo $linha['descricao'] ?></option>

    </select>
    </div>

  <button type="submit" name="bt_s" class="btn btn-success btn-sm">
  <i class="fa fa-dot-circle-o"></i>
  Salvar</button>
  <a href="" class="btn btn-primary btn-sm">ver registros</a>




</form>

</div>


</div>
