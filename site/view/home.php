<?php
include_once("header.php");?>
<body>
<div class = "buttons">
    <a href="<?=constant(name:"URL_LOCAL_PAGINA")?>cadastro-aluno">
        <button id="buttons" type="button" >Cadastro de aluno</button>
    </a>
    <a href="<?=constant(name:"URL_LOCAL_PAGINA")?>lista-alunos">
        <button id="buttons" type="button">Lista de alunos</button>
    </a>
    <a href="<?=constant(name:"URL_LOCAL_PAGINA")?>cadastrar-responsa">
        <button id="buttons" type="button" >Cadastrar responsavel</button>
    </a><br>
    <a href="<?=constant(name:"URL_LOCAL_PAGINA")?>login">
        <button id="buttons" type="button" >Cadastrar secretaria</button>
    </a><br>
</div>
</body>

<?= include_once("footer.php");
?>