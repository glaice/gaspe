<?php

/* Enviar E-mail com Resposta Automática
* Desenvolvido por: Gabriel Pinheiro
* Data: 04/12/2007
*/


// Recebendo os dados passados pela página "form_contato.php"

$recebenome = $_POST["nome"];
$recebemail = $_POST["email"];
$recebemsg  = $_POST["mensagem"];

// Definindo os cabeçalhos do e-mail
$headers = "Content-type:text/html; charset=UTF8;". "\r\n";
$headers .= 'From: GASPE <contato@gaspe.com.br>' . "\r\n";

// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE

$para = "contato@gaspe.com.br";

// Definindo o aspecto da mensagem

$mensagem   = "<h3>De:</h3> ";
$mensagem  .= $recebenome . ": " . $recebemail;
$mensagem  .= "<h3>Assunto:</h3>";
$mensagem  .= "Mensagem do Site";
$mensagem  .= "<h3>Mensagem:</h3>";
$mensagem  .= "<p>";
$mensagem  .= $recebemsg;
$mensagem  .= "</p>";

// Enviando a mensagem para o destinatário

$envia =  mail($para,"E-mail do Site",$mensagem,$headers);
  
// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.

$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>! <br><br>Agradecemos sua visita e a oportunidade de recebermos o seu contato. Em até 48 horas você receberá no e-mail fornecido a resposta para sua questão.<br><br> Fique com Deus! <br><br></p>";
$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";
$mensagem2 .= "<p> <br> <strong> GASPE</strong> - Grupo de Amigos Semeando a Paz e o Evangelho. <br> <i> A humanidade necessita imperiosamente do testemunho de jovens livres e valentes, que se atrevam a caminhar contra a corrente e a proclamar com força e entusiasmo a própria fé em Deus, Senhor e Salvador.</i> (João Paulo II)</p>"; 

$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);


// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.
  
echo "Mensagem Recebida com Sucesso!";
echo "<meta http-equiv='refresh' content='2;URL=contatos.php'>";

?>
