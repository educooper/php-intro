<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Inscrição</title>
<meta author="">
<meta description="">
<meta viewport="width=device-width, initial-scale-1">
</head>

<body>
<p>Formulário de Inscrição</p>
<form action="script.php" method="post">
<?php
    $mensagemDeSucesso = obterMensagemSucesso();
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
    $mensagemDeErro = obterMensagemErro();
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
?>
<p>Seu nome: <input type="text" name="Nome" /></p>
<p>Sua idade: <input type="text" name="Idade" /></p>
<p><input type="submit" value="submit" value="Enviar dados do competidor"/></p>
</form>
</body>
</html>