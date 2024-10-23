<?php

require_once '../models/model.php';

class CadastroAdm {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/html/Cadministrador.html';
    }



    public function dados() {
        // Recebe dados do formulário
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