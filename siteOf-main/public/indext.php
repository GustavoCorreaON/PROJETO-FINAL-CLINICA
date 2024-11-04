<?php
//cadastro ADM
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../siteOf-main/controllers/controllerCadasAdm.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case 'PROJETO-FINAL-CLINICA/ProjetoClinica/siteOf-main/public':
        $controller = new CadastroAdm();
        $controller->showForm();
        break;
    case 'PROJETO-FINAL-CLINICA/saveAdm':
        $controller = new CadastroAdm();
        $controller->listAdm();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}