<?php
include_once("header.php");?>
<body>
<div class = "aba" >

    <form class = "login" method= "POST" action = "#"><br>
    <label>Nome</label>
    <input style = "margin-bottom:%;" type="text" name = "Usuario">
    <label>Email</label>
    <input type = "text" name = "Senha">
    <label>Teleforne</label>
    <input type = "text" name = "telefone">
    <label>CPF</label>
    <input type = "text" name = "CPF"><br>
    
    <button id = "button" type = "submit" >Enviar</button>

    </form>
</div>

</body>








<?= include_once("footer.php");
?>