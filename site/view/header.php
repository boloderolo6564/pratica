<!DOCTYPE html>
<html lang="pt-br">

<head>
<!--o comando php abaixo cria um caminho absoluto até i arquivo -->
    <?php  include_once $_SERVER['DOCUMENT_ROOT'] . "/pratica/configuracoes/configuracao.php";?>
    <?php if($paginaUrl=="login"):?>
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>header.css">
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>login.css">
    <?php endif;?>
    <?php if($paginaUrl=="principal"):?>
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>header.css">
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>principal.css">
    <?php endif;?>
    <?php if($paginaUrl=="principal"):?>
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>header.css">
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>principal.css">
    <?php endif;?>
    <?php if($paginaUrl=="cadastrar-responsa"):?>
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>header.css">
        <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>cadastrar-responsa.css">
    <?php endif;?>
    <link rel="stylesheet" href="<?=constant(name:"URL_LOCAL_CSS")?>header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>teste</title>
    
    
</head>
<header >
        <a href="<?= constant("URL_LOCAL_PAGINA")?>principal"><h6>ETE</h6></a>
        <nav>
        <button class="botao" type="button"><a href="<?=constant("URL_LOCAL_PAGINA")?>login">Login</a></button>
        <button class="botao" type="button"><a href="">Registro</a></button>
        </nav>
</header>

    
