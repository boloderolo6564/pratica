<?php



if ($_GET && isset($_GET['pratica'])) {
    $paginaUrl = $_GET['pratica'];
}else {
    $paginaUrl = null;
}



if ($paginaUrl === 'login') {
    include_once './site/view/header.php';
    include_once './site/view/login.php';
    include_once './site/view/footer.php';
}elseif($paginaUrl==='principal'){
    include_once './site/view/header.php';
    include_once './site/view/home.php';
    include_once './site/view/footer.php';
}elseif($paginaUrl==='nada'){
    include_once './site/view/header.php';
    include_once './site/view/nada.php';
    include_once './site/view/footer.php';
}

?>