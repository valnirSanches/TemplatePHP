<form action="/pages/forms/creater_user.php" method="POST" role="form">
    <div class="form-group">
    <label for="">Nome</label>
    <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">Sobrenome</label>
      <input type="text"
        class="form-control" name="sobrenome" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
      <small id="emailHelpId" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">senha</label>
      <input type="password" class="form-control" name="password" id="" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>
<?=get('message'); ?>