<?php

require_once '../model/modelLOGP.php';

class LpacienteController {
    public function showLP() {
        require_once '../views/html/Lpaciente.php';
    }
    

    public function logarPaciente() {
        // Recebe dados do formulário
        $nomecompleto = $_POST ['nomepaciente'];
        $cpf = $_POST['cpf'];
        $senha = $_POST ['senha'];

        $paciente = new LogP();
        $paciente->nomecompleto = $nomecompleto;
        $paciente->cpf = $cpf;
        $paciente->senha = $senha;

        if ($paciente->logar()) {
            // Redireciona para a página de listagem (você pode implementar isso)
            header('Location: /Projeto_SP_Medical_Group_Final/siteOf-main/homePaciente.php');
            // header('Location: /meu_projeto/listar-pacientes'); // Exemplo de redirecionamento
        } else {
            echo "Erro ao logar o paciente!";
        }
}}