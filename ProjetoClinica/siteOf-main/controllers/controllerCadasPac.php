<?php

require_once '../models/Book.php';

class CadastroPac {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/html/Cadministrador.html';
    }



    public function dados() {
        // Recebe dados do formulário
        $plano = $_POST['planosimounao'];
        $qual = $_POST['qualplano'];
        $sexo = $_POST['femoumasc'];
        $numerocart = $_POST['numerocarteirinha'];
        $datanascimento = $_POST['datanascimento'];
        $nome = $_POST['nomecompleto'];
        $cpf = $_POST['cpf'];
        $grauparentes = $_POST['graudeparentesco'];
        $nomepaciente = $_POST['nomedopaciente'];
        $cpfpaciente = $_POST['cpfdopaciente'];
        $numerocontat = $_POST['numeroparacontato'];
        $email = $_POST['email'];
        $senhaclinica = $_POST['senhaclinica'];
        $datanascimentopac = $_POST['datanascimentopaciente'];
    }
}