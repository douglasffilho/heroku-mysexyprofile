<?php
    require('../../../classloader.php');
    
    header('Content-type: application/json; charset=UTF-8');

    ClassLoader::load();
    
    $service = new PerfilService();

    $logado = $service->retrievePerfil();
    
    echo $logado;
?>