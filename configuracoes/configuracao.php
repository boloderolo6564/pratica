<?php
session_start();
setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');


// var_dump($_SERVER['DOCUMENT_ROOT']);
$enviroment['local'] = "http://localhost/pratica/";


/**
 * Definindo constante URL_LOCAL
 * Caminho absoluto
 */
define("URL_LOCAL_BASE",$enviroment['local']);
define(constant_name:"URL_LOCAL_PAGINA",value:constant("URL_LOCAL_BASE").'?pratica=');
define("URL_LOCAL_IMG",constant("URL_LOCAL_BASE")."assets/img/");
define(constant_name:"URL_LOCAL_CSS",value:constant(name:"URL_LOCAL_BASE")."assets/css/");
define("URL_LOCAL_SITE",constant("URL_LOCAL_BASE")."site/view/");
define("URL_LOCAL_ADM",constant("URL_LOCAL_BASE")."adm/");
define("URL_LOCAL_FORMS",constant("URL_LOCAL_BASE")."site/controller/");
define("URL_LOCAL_UPLOAD_IMG",constant("URL_LOCAL_SITE")."controller/upload/");


define("URL_LOCAL_EMAIL_ACESSO",constant("URL_LOCAL_SITE")."view/templateEmail/alertaAcessoAluno.html");
define("URL_LOCAL_EMAIL_LOGO",constant("URL_LOCAL_IMG")."tela/logoEmail.png");
?>