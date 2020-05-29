<?php 

 //Carrega as classes do PHPMailer
 include("phpmailer/class.phpmailer.php"); 
 include("phpmailer/class.smtp.php"); 
 
 //Verificar o nome
if (empty($_POST['nome'])) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu nome!');
    echo json_encode($retorno);
    exit();
}

if (empty($_POST['email'])) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu e-mail!');
    echo json_encode($retorno);
    exit();
}


if (empty($_POST['mensagem'])) {
    $retorno = array('codigo' => 0, 'mensagem' => 'Preencha o campo mensagem!');
    echo json_encode($retorno);
    exit();
}

//envia o e-mail para o visitante do site
 $mailDestino = $_POST['email']; 
 $nome = $_POST['nome']; 
 $mensagem = "Obrigado pelo seu contato, com o CovidSolidario!";
 $assunto = "Obrigado pelo seu contato!";
 include("envio.php");
 
 //envia o e-mail para o administrador do site
 $mailDestino = 'contato@covidsolidario.net.br'; 
 $nome = $_POST['nome']; 
 $assunto = "Mensagem recebida do site";
 $mensagem = "Recebemos uma mensagem no site <br/>
 <strong>Nome:</strong> $_POST[nome]<br/>
 <strong>e-mail:</strong> $_POST[email]<br/>
 <strong>mensagem:</strong> $_POST[mensagem]";
 include("envio.php");
  $retorno = array('codigo' => 1, 'mensagem' => 'Mensagem Enviada com sucesso!');
    echo json_encode($retorno);
    exit()


?>