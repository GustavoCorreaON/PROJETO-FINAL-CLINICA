<?php

require_once '../model/model.php';

class CadastroAdm {

    public function showForm() {
        require_once '../views/html/Cadministrador.html';
    }



    public function saveAdm() {
        $nomecompleto = $_POST['nomecompleto'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $datanascimento = $_POST['datanascimento'];
        $emailclinica = $_POST['emailclinica'];
        $confirmeemailclinica = $_POST['confirmeemailclinica'];
        $senhaclinica = $_POST['senhaclinica'];
        $confirmesenhaclinica = $_POST['confirmesenhaclinica'];


        $salvar = new Salvar();
        $salvar->nomecompleto = $nomecompleto;
        $salvar->cpf = $cpf;
        $salvar->email = $email;
        $salvar->datanascimento = $datanascimento;
        $salvar->emailclinica = $emailclinica;
        $salvar->confirmeemailclinica = $confirmeemailclinica;
        $salvar->senhaclinica = $senhaclinica;
        $salvar->confirmesenhaclinica = $confirmesenhaclinica;

    }
};