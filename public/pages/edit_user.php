<?php
    $user = find('users', 'id', $_GET['id']);
?>
<form action="/pages/forms/update_user.php" method="POST" role="form">
    <div class="form-group">
    <label for="">Nome</label>
    <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="<?=$user->name?>">
    <small id="helpId" class="form-text text-muted"></small>
    </div>

    <input type="hidden" name="id" value="<?=$user->id?>">

    <div class="form-group">
      <label for="">Sobrenome</label>
      <input type="text"
        class="form-control" name="sobrenome" id="" aria-describedby="helpId" placeholder="" value="<?=$user->sobrenome?>">
      <small id="helpId" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="">email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="" value="<?=$user->email?>">
      <small id="emailHelpId" class="form-text text-muted"></small>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
<br>
<?=get('message'); ?>