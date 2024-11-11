<?php

require_once '../model/modelLOGP.php';

class LpacienteController {
    public function showCP() {
        require_once '../views/html/Lpaciente.php';
    }
    

    public function logarPaciente() {
        // Recebe dados do formulário
        $nomepaciente = $_POST ['nomepaciente'];
        $cpf = $_POST['cpf'];
        $senha = $_POST ['senha'];
}}