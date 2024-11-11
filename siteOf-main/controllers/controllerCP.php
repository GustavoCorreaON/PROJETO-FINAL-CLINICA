<?php

require_once '../model/modelCP.php';

class CpacienteController {
    public function showCP() {
        // Exibe o formulário de cadastro de pacientes
        require_once '../views/html/Cpaciente.php';
    }

    public function savePaciente() {
        // Recebe dados do formulário
        $nome_responsavel = $_POST ['nome_responsavel'];
        $cpf_responsavel = $_POST['cpf_responsavel'];
        $contato_responsavel = $_POST ['contato_responsavel'];
        $email_responsavel = $_POST['email_responsavel'];
        $senha_responsavel = $_POST['senha_responsavel'];
        $data_nascimento_responsavel = $_POST ['data_nascimento_responsavel'];
        $nome_completo_crianca = $_POST[ 'nome_completo_crianca'];
        $cpf_crianca = $_POST ['cpf_crianca'];
        $data_nascimento_crianca = $_POST ['data_nascimento_crianca'];
        $sexo_crianca = $_POST ['sexo_crianca'];
        $numero_carteirinha = $_POST['numero_carteirinha'];
        $plano_crianca = $_POST['plano_crianca'];
        $grau_parentesco = $_POST['grau_parentesco'];
        $qual_plano = $_POST ['qual_plano'];

        // Cria um novo paciente
        $paciente = new Paciente();
        $paciente->nome_responsavel = $nome_responsavel;
        $paciente->cpf_responsavel = $cpf_responsavel;
        $paciente->contato_responsavel = $contato_responsavel;
        $paciente->email_responsavel = $email_responsavel;
        $paciente->senha_responsavel = $senha_responsavel;
        $paciente->data_nascimento_responsavel = $data_nascimento_responsavel;
        $paciente->nome_completo_crianca = $nome_completo_crianca;
        $paciente->cpf_crianca = $cpf_crianca;
        $paciente->data_nascimento_crianca = $data_nascimento_crianca;
        $paciente->sexo_crianca = $sexo_crianca;
        $paciente->numero_carteirinha = $numero_carteirinha;
        $paciente->plano_crianca = $plano_crianca; 
        $paciente->grau_parentesco = $grau_parentesco; 
        $paciente->qual_plano = $qual_plano;

        if ($paciente->cadastrar()) {
            // Redireciona para a página de listagem (você pode implementar isso)
            header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente/home');
            // header('Location: /meu_projeto/listar-pacientes'); // Exemplo de redirecionamento
        } else {
            echo "Erro ao cadastrar o paciente!";
        }
}
    public function listPacientes() {
    // Pega todos os pacientes do banco de dados
    $paciente = new Paciente();
    $pacientes = $paciente->getAll(); // Você precisará implementar o método getAll no modelo

    // Exibe a lista de pacientes (implemente a view correspondente)
    require_once '../views/html/Cpaciente_list.php'; // Crie essa view para listar os pacientes
}
public function homePacientes() {

        // Exibe a lista de pacientes (implemente a view correspondente)
    require_once '../views/html/homePaciente.html'; // Crie essa view para listar os pacientes
}
}