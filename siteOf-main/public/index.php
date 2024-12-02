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

//cadastros

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

        case '/Projeto_SP_Medical_Group_Final/siteOf-main/delete-paciente':
            require_once '../controllers/controllerCP.php';
            $controller = new CpacienteController();
            $controller->deletePaciente();
            break;
    
        case (preg_match('/\/Projeto_SP_Medical_Group_Final\/siteOf-main\/Cpaciente_update\/(\d+)/', $request, $matches) ? true : false):
            $id = $matches[1];
            require_once '../controllers/controllerCP.php';
            $controller = new CpacienteController();
            $controller->showUpdateForm($id);
            break;
    
        case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente_update':
            require_once '../controllers/controllerCP.php';
            $controller = new CpacienteController();
            $controller->updatePaciente();
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

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/homeM':
        $controller = new CmedicoController();
        $controller->homeMedicos();
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador': 
        $controller = new CadmistradorController();
        $controller->saveAdmistrador();
        break;
            
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador/list': 
        $controller = new CadmistradorController();
        $controller->listAdmistradores();
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/delete-adm':
        require_once '../controllers/controllerCADM.php';
        $controller = new CadmistradorController();
        $controller->deleteAdmistrador();
        break;

    case (preg_match('/\/Projeto_SP_Medical_Group_Final\/siteOf-main\/Cadmistrador_update\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        require_once '../controllers/controllerCADM.php';
        $controller = new CadmistradorController();
        $controller->showUpdateForm($id);
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador_update':
        require_once '../controllers/controllerCADM.php';
        $controller = new CadmistradorController();
        $controller->updateAdmistrador();
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/homeA':
        $controller = new CadmistradorController();
        $controller->homeAdministrador();
        break;

// tudo para cima é cadastro

// rotas do login e dos cadastro

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasG':
        require_once '../views/html/cadastro-g.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/LoginG':
        require_once '../views/html/loginG.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Lpaciente':
        require_once '../views/html/Lpaciente.html';
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Ladimisnistrador':
        require_once '../views/html/Ladmistrador.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Lmedico':
        require_once '../views/html/Lmedico.html';
        break;

// esqueci as senhas

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/esqueciasenha':
        require_once '../views/html/esquecisenha.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/esqueciasenhaM':
        require_once '../views/html/esquecisenham.html';
        break;
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/esqueciasenhaA':
        require_once '../views/html/esquecisenhaA.html';
        break;
    
    
    
    //rotas para homes
    
    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomeG':
        require_once '../views/html/homeGeral.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomeAdministrador':
        require_once '../views/html/homeA.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomeMedico':
        require_once '../views/html/homeMedico.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/HomePaciente':
        require_once '../views/html/homePaciente.html';
        break;

    //rotas da home geral

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Planos':
        require_once '../views/html/planos.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Contatos':
        require_once '../views/html/contatos.html';
        break;

    case '/Projeto_SP_Medical_Group_Final/siteOf-main/public/Profissionais':
        require_once '../views/html/homeMedico.html';
        break;

 default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;    
}