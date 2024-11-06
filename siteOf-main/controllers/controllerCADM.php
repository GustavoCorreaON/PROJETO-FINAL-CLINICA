<?php

require_once '../model/modelCADM.php';

class CadmistradorController {
    public function showCADM() {
        // Exibe o formulário de cadastro de medicos
        require_once '../views/html/Cadmistrador.php';
    }

    public function saveAdmistrador() {
        // Recebe dados do formulário
        $nome_completo = $_POST['nome_completo'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $email_clinica = $_POST['email_clinica'];
        $senha_clinica = $_POST['senha_clinica'];
        // Cria um novo médico
        $admistrador = new Admistrador();
        $admistrador->nome_completo = $nome_completo;
        $admistrador->cpf = $cpf;
        $admistrador->email = $email;
        $admistrador->data_nascimento = $data_nascimento;
        $admistrador->email_clinica = $email_clinica;
        $admistrador->senha_clinica = $senha_clinica;

        if ($admistrador->cadastrar()) {
            // Redireciona para a página de listagem de médicos
            header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador/list');
        } else {
            echo "Erro ao cadastrar o admistrador!";
        }
    }

    public function listAdmistradores() {
        // Pega todos os médicos do banco de dados
        $admistrador = new Admistrador();
        $admistradores = $admistrador->getAll(); // O método getAll precisa estar implementado no modelo

        // Exibe a lista de médicos
        require_once '../views/html/Cadmistrador_list.php'; // Crie essa view para listar os médicos
    }
}