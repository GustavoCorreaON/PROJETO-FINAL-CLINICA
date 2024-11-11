<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclui o controlador dos cadastros
require_once '../controllers/controllerCP.php';
require_once '../controllers/controllerCM.php';
require_once '../controllers/controllerCADM.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];
echo $request;

switch ($request) {
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasP': // Rota para exibir o formulário de cadastro de paciente
        $controller = new CpacienteController();
        $controller->showCP();
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente': // Rota para salvar um novo paciente
        $controller = new CpacienteController();
        $controller->savePaciente();
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/list': // Rota para listar pacientes cadastrados
        $controller = new CpacienteController();
        $controller->listPacientes();
        break;
        
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/home': // Rota para listar pacientes cadastrados
        $controller = new CpacienteController();
        $controller->homePacientes();
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasM':
        $controller = new CmedicoController();
        $controller->showCM();
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cmedico': 
        $controller = new CmedicoController();
        $controller->saveMedico();
        break;
        
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cmedico/list': 
        $controller = new CmedicoController();
        $controller->listMedicos();
        break;


    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasADM':
        $controller = new CadmistradorController();
        $controller->showCADM();
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador': 
        $controller = new CadmistradorController();
        $controller->saveAdmistrador();
        break;
            
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador/list': 
        $controller = new CadmistradorController();
        $controller->listAdmistradores();
        break;
    
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
    
}