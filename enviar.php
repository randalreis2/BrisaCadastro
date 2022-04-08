<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
//if($telefone == ""){
//    include 'erro.php';
//    exit();
//}
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];
$assunto = 'Informações cadastro de cliente';
$remetente = 'maxwellsaulo2510@gmail.com';

$conteudo = 'Nome: ' .$nome ."\r\n"."\r\n" .'Email: ' .$email ."\r\n"."\r\n" .'Cidade: ' .$cidade ."\r\n"."\r\n" .'Telefone: ' .$telefone ."\r\n"."\r\n" .'Mensagem: ' .$mensagem ."\r\n"."\r\n";

$cabecalhos = "From: ".$email;

mail($remetente, $assunto, $conteudo, $cabecalhos);

echo "<pre>";
    print_r($conteudo);
    echo "</pre>";
    exit;

?>
<script>alert('Enviado com Sucesso');</script>
<meta http-equiv="refresh" content="0; url=index.php">