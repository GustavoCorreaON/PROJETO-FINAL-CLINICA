<?php

require_once '../model/modelCADM.php';

class CadmistradorController {
    // Exibe o formulário de cadastro de administradores
    public function showCADM() {
        require_once '../views/html/Cadmistrador.php';
    }

    // Salva um administrador no banco de dados
    public function saveAdmistrador() {
        $nome_completo = $_POST['nome_completo'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $email_clinica = $_POST['email_clinica'];
        $senha_clinica = $_POST['senha_clinica'];

        $admistrador = new Admistrador();
        $admistrador->nome_completo = $nome_completo;
        $admistrador->cpf = $cpf;
        $admistrador->email = $email;
        $admistrador->data_nascimento = $data_nascimento;
        $admistrador->email_clinica = $email_clinica;
        $admistrador->senha_clinica = $senha_clinica;

        if ($admistrador->cadastrar()) {
            header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/homeA');
        } else {
            echo "Erro ao cadastrar o administrador!";
        }
    }

    
    public function homeAdministrador() {

        // Exibe a lista de pacientes (implemente a view correspondente)
    require_once '../views/html/homeA.html'; // Crie essa view para listar
}

    // Lista todos os administradores
    public function listAdmistradores() {
        $admistrador = new Admistrador();
        $admistradores = $admistrador->getAll();

        require_once '../views/html/Cadmistrador_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $admistrador = new Admistrador();
        $admistradorInfo = $admistrador->getById($id);
        require_once '../views/html/Cadmistrador_update.php';
    }

    // Atualiza um administrador
    public function updateAdmistrador() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admistrador = new Admistrador();
            $admistrador->id = $_POST['id'];
            $admistrador->nome_completo = $_POST['nome_completo'];
            $admistrador->cpf = $_POST['cpf'];
            $admistrador->email = $_POST['email'];
            $admistrador->data_nascimento = $_POST['data_nascimento'];
            $admistrador->email_clinica = $_POST['email_clinica'];
            $admistrador->senha_clinica = $_POST['senha_clinica'];

            if ($admistrador->update()) {
                header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador/list');
            } else {
                echo "Erro ao atualizar o administrador!";
            }
        }
    }

    // Exclui um administrador pelo ID
    public function deleteAdmistrador() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admistrador = new Admistrador();
            $admistrador->id = $_POST['id_admistrador'];

            if ($admistrador->deleteById()) {
                header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador/list');
            } else {
                echo "Erro ao excluir o administrador!";
            }
        }
    }
}
