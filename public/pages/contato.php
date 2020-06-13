<h2>Contato:</h2>
<?=get('message')?>
<form action="/pages/forms/contato.php" method="POST" role="form">
    <br />
    <div class="form-group">
        <label for="">Nome:</label>
        <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">
        <small id="helpId" class="text-muted">*campo obrigatório</small>
    </div>

    <div class="form-group">
          <label for="">Email:</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="email">
          <small id="emailHelpId" class="form-text text-muted">*Email</small>
    </div>

    <div class="form-group">
    <label for="">Assunto</label>
    <input type="text"
        class="form-control" name="subject" id="" aria-describedby="helpId" placeholder="Assunto">
    <small id="helpId" class="form-text text-muted">*assunto</small>
    </div>

    <div class="form-group">
      <label for="">Mensagem:</label>
      <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

    
</form>