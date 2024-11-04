<?php

require_once '../models/Book.php';

class CadastroMed {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/book_form.php';
    }



    public function dados() {
        // Recebe dados do formulário
        $nome = $_POST['nomecompleto'];
        $numcrm = $_POST['numerocrm'];
        $espec = $_POST['especializacao'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $datanascimento = $_POST['datanascimento'];
        $emailclinica = $_POST['emailclinica'];
        $confirmeemailclinica = $_POST['confiremailclinica'];
        $senhaclinica = $_POST['senhaclinica'];
        $confirmesenhaclinica = $_POST['confirsenhaclinica'];
    }}