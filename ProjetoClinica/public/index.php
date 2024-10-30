<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../PROJETO-FINAL-CLINICA/ProjetoClinica/siteOf-main/controllers/controllerCadasAdm.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/':
    case '/index':
    case '/index.php':
        $controller = new CadastroAdm();
        $controller->showForm();
        break;
    case '/saveAdm':
        $controller = new CadastroAdm();
        $controller->saveAdm();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}