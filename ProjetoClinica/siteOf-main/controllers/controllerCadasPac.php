<?php

require_once '../models/Book.php';

class CadastroAdm {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/html/Cadministrador.html';
    }



    public function dados() {
        // Recebe dados do formulário
        $plano = $_POST['planosimounao'];
        $qual = $_POST['qualplano'];
        $sexo = $_POST['femoumasc'];
        $nome = $_POST['nomecompleto'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $datanascimento = $_POST['datanascimento'];
        $emailclinica = $_POST['emailclinica'];
        $confirmeemailclinica = $_POST['confirmeemailclinica'];
        $senhaclinica = $_POST['senhaclinica'];
        $confirmesenhaclinica = $_POST['confirmesenhaclinica'];
    }
}