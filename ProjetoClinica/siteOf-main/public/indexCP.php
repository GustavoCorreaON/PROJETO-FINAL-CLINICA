<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclui o controlador de pacientes
require_once '../controllers/controllerCP.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];
echo $request;

switch ($request) {
    case '/siteOf-main/public/': // Rota para exibir o formulário de cadastro de paciente
        $controller = new CpacienteController();
        $controller->showForm();
        break;
    
    case '/siteOf-main/savePaciente/': // Rota para salvar um novo paciente
        $controller = new CpacienteController();
        $controller->savePaciente();
        break;
    
    case '/siteOf-main/listPacientes/': // Rota para listar pacientes cadastrados
        $controller = new CpacienteController();
        $controller->listPacientes();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}