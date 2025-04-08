<?php
include_once("header.php");?>
<body>
<div class = "aba" >
    <forms class = "login" method= "POST" action = "#"></br>
    <label >Usuario</label>
    <input id = "Usuario" style="margin-bottom: 2%;" type="text" name = "Usuario">
    <label>Senha</label>
    <input  id = "Senha" type = "password" name = "Senha">
    <button  id = "button" type="submit"  >Entrar</button>
    <a style="color: white;" href="">Esqueci a senha</a>
    </forms>
</div>

</body>








<?= include_once("footer.php");
?>