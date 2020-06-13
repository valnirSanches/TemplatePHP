<?php

require_once "../../../bootstrap.php";

/**Comentários Gerais
 * dd($_POST);
 * dd($_SERVER['REQUEST_METHOD']); serve para descobrir qual o tipo de método esta sendo passado
 */



if (isEmpty()){
  //dd('Preencha todos os campos!!');
  flash('message', 'Preencha todos os campos');

  //header("location:/?page=contato");  redireciona através do header não é muito bom

  return redirect("contato");
}



 $validate = validate([
   'name'  => 's',
   'email' => 'e',
   'subject' => 's',
   'message' => 's'
 ]);

 //dd($validate->name); teste
$data = [
  'quem'=> $validate->email,
  'para'=> 'vnilsanches@gmail.com',
  'mensagem' => $validate->message,
  'assunto' =>$validate->subject,

];

 if (send($data)){
   flash('message', 'Email enviado com sucesso', 'success');

   return redirect("contato");
 }