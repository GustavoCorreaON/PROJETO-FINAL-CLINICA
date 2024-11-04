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


        $adm = new Salvar();
        $adm->nomecompleto = $nomecompleto;
        $adm->cpf = $cpf;
        $adm->email = $email;
        $adm->datanascimento = $datanascimento;
        $adm->emailclinica = $emailclinica;
        $adm->confirmeemailclinica = $confirmeemailclinica;
        $adm->senhaclinica = $senhaclinica;
        $adm->confirmesenhaclinica = $confirmesenhaclinica;


        if($adm->save()){
            header(header: 'Location /');//redireciona para a página de listagem
        }else{
            echo "Erro";
        }

}

public function listAdm(){
    $adm = new Salvar();
    $adm = $adm->getAll();

    require_once '../views/';
}
}