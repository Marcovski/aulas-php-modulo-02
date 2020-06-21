<?php

$nome = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'txtTel', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
$assuntos = filter_input(INPUT_POST, 'slAssunto', FILTER_SANITIZE_NUMBER_INT);
$mensagem = filter_input(INPUT_POST, 'txtMensagem', FILTER_SANITIZE_STRING);

$valido = validar($nome, $telefone, $email, $mensagem);

$nome2=$nome;
if($valido){
    $ex =explode(' ',$nome);
    $nome2 = $ex[0];
}

function validar($nome, $telefone, $email, $mensagem)
{
    if (strlen($nome) < 2) {
        return false;
    }

    if (strlen($telefone) < 10) {
        return false;
    }

    if (!preg_match('/.+?\@.+?\..+/', $email)) {
        return false;
    } 

    if (strlen($mensagem) < 10) {
        return false;
    } 

    return true;
}

    switch ($assuntos) {
        case 1:
            $assuntos = 'Comercial';
            break;
        case 2:
            $assuntos = 'Dúvidas';
            break;
        case 3:
            $assuntos = 'Parceria';
            break;
        case 4:
            $assuntos = 'Outros';
            break;
        default:
            return false;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="unsemantic-grid-responsive.css">
    <style>
        * {
            margin: 15px 0 0 0 auto;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        body {
            background-color: rgba(147, 206, 222, 1);
            background-color: -moz-linear-gradient(top, rgba(147, 206, 222, 1) 0%, rgba(117, 189, 209, 1) 41%, rgba(73, 165, 191, 1) 100%);
            background-color: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(147, 206, 222, 1)), color-stop(41%, rgba(117, 189, 209, 1)), color-stop(100%, rgba(73, 165, 191, 1)));
            background-color: -webkit-linear-gradient(top, rgba(147, 206, 222, 1) 0%, rgba(117, 189, 209, 1) 41%, rgba(73, 165, 191, 1) 100%);
            background-color: -o-linear-gradient(top, rgba(147, 206, 222, 1) 0%, rgba(117, 189, 209, 1) 41%, rgba(73, 165, 191, 1) 100%);
            background-color: -ms-linear-gradient(top, rgba(147, 206, 222, 1) 0%, rgba(117, 189, 209, 1) 41%, rgba(73, 165, 191, 1) 100%);
            background-color: linear-gradient(to bottom, rgba(147, 206, 222, 1) 0%, rgba(117, 189, 209, 1) 41%, rgba(73, 165, 191, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#93cede', endColorstr='#49a5bf', GradientType=0);
        }

        ul li{
            text-decoration: none;
            list-style-type: none;
        }
        div {
            
            word-wrap: break-word;
            margin: 40px auto;
            max-width: 1200px;
            width: 100%;
            background: rgba(252, 236, 252, 1);
            background: -moz-linear-gradient(top, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 17%, rgba(253, 137, 215, 1) 51%, rgba(255, 124, 216, 1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(252, 236, 252, 1)), color-stop(17%, rgba(251, 166, 225, 1)), color-stop(51%, rgba(253, 137, 215, 1)), color-stop(100%, rgba(255, 124, 216, 1)));
            background: -webkit-linear-gradient(top, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 17%, rgba(253, 137, 215, 1) 51%, rgba(255, 124, 216, 1) 100%);
            background: -o-linear-gradient(top, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 17%, rgba(253, 137, 215, 1) 51%, rgba(255, 124, 216, 1) 100%);
            background: -ms-linear-gradient(top, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 17%, rgba(253, 137, 215, 1) 51%, rgba(255, 124, 216, 1) 100%);
            background: linear-gradient(to bottom, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 17%, rgba(253, 137, 215, 1) 51%, rgba(255, 124, 216, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fcecfc', endColorstr='#ff7cd8', GradientType=0);
        }
    </style>
</head>

<body>
    <div class="grid-100 mobile-grid-100">
        <h1>Contato</h1><br>
        <hr>
        <?php if ($valido) : ?>
            <p>Olá <?= $nome2?>, recebemos sua mensagem, em breve, um de nossos atendentes irá responde-lo.</p>
            <p><strong>Nome: </strong><?= $nome ?></p>
            <p><strong>Email: </strong><?= $email ?></p>
            <p><strong>Telefone: </strong><?= $telefone ?></p>
            <p><strong>Assunto: </strong><?= $assuntos ?></p>
            <p><strong>Mensagem: </strong><?= $mensagem ?></p><br>
            <hr>
        <?php elseif(!$valido): ?>
            <p>Campo(s) preenchido(s) incorretamente , por favor preencha os campos do formulário corretamente.</p>
            <ul>
                <li>O campo "nome" deve conter mais de 2 caracteres.</li>
                <li>O campo "email" deve conter um conteúdo similar a: Exemplo@Contato.com</li>
                <li>O campo "Telefone" deve conter somente números.</li>
            </ul>
            <p><a href="index.html">Clique aqui</a> para voltar e preencher novamente o formulário.</p>
        <?php endif; ?>
    </div>
</body>

</html>