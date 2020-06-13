<h2>Home</h2>
<br />
<div class="card border-primary">
  <div class="card-body">

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
            <tbody>

                <?php
                    $users = all('users');
                    foreach ($users as $user):
                ?>
                <tr>
                    <td><?=$user->id;?></td>
                    <td><?=$user->name;?></td>
                    <td><?=$user->email;?></td>
                    <td>
                        <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
                    </td>
                    <td>
                        <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
                    <?php endforeach;?>
            </tbody>
    </table>
    
    <h4 class="card-title">Cadastrar:</h4>
    <p class="card-text"><a href="?page=create_user">Novo Usuário </a></p>
  </div>
</div>
<?=get('message'); ?>