<?php

require_once '../PROJETO-FINAL-CLINICA/ProjetoClinica/siteOf-main/model/modelCP.php';

class CpacienteController {
    public function showForm() {
        // Exibe o formulário de cadastro de pacientes
        require_once '../views/html/Cpaciente.php';
    }

}