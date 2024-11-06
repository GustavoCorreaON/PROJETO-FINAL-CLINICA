<?php

require_once '../model/modelCM.php';

class CmedicoController {
    public function showCM() {
        // Exibe o formulário de cadastro de médicos
        require_once '../views/html/Cmedico.php';
    }

    public function saveMedico() {
        // Recebe dados do formulário
        $nome_completo = $_POST['nome_completo'];
        $crm = $_POST['crm'];
        $especializacao = $_POST['especializacao'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST['data_nascimento'];
        $email_clinica = $_POST['email_clinica'];
        $senha_clinica = $_POST['senha_clinica'];

        // Cria um novo médico
        $medico = new Medico();
        $medico->nome_completo = $nome_completo;
        $medico->crm = $crm;
        $medico->especializacao = $especializacao;
        $medico->cpf = $cpf;
        $medico->email = $email;
        $medico->senha = $senha;
        $medico->data_nascimento = $data_nascimento;
        $medico->email_clinica = $email_clinica;
        $medico->senha_clinica = $senha_clinica;

        if ($medico->cadastrar()) {
            // Redireciona para a página de listagem de médicos
            header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cmedico/list');
        } else {
            echo "Erro ao cadastrar o médico!";
        }
    }

    public function listMedicos() {
        // Pega todos os médicos do banco de dados
        $medico = new Medico();
        $medicos = $medico->getAll(); // O método getAll precisa estar implementado no modelo

        // Exibe a lista de médicos
        require_once '../views/html/Cmedico_list.php'; // Crie essa view para listar os médicos
    }
}