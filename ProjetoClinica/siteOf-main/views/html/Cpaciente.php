<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical group</title>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cadastroP.css">
    <style>
      @font-face {
          font-family: 'anticslab';
          src: url(../outros/MonoSpatial[1]\ \(1\).ttf)
          format('truetype');
        }</style>

<div id="bola1">
    </div>
        <a href="cadastro-g.html"><div id="voltar">
            <p>voltar</p>
        </div></a>
        <div id="P"><p> Paciente </p> </div>
        
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>
</head>
<body>
    <form action="/PROJETO-FINAL-CLINICA/ProjetoClinica/Cpaciente" method= "POST" >
        <input type="submit" value="Salvar" id="salvar">
       <h1 id="infp" name = "" >Informação do paciente</h1>
       <h1 id="infr">Informação do responsavel</h1>

       <p id="np" name = "nomedopaciente" >Nome do paciente:</p>
       <input id="npin" type="text">

       <p id="ncrm">Numero do CPF:</p>

       <p id="ncrm" name = "cpfdopaciente" >Numero do CPF:</p>
       <input id="ncrmi" type="text" placeholder="Apenas números">

       <p id="ncon" name = "numeroparacontato" >Numero para contato:</p>
       <input id="nconi" type="text">

       <p id="email" name = "email" >Email:</p>
       <input id="emaili"type="text">

       <p id="senha" name = "senhaclinica" >Senha:</p>
       <input id="senhai" type="password">

       <p id="dtna" name = "datanascimentopaciente" >Data de nascimento:</p>
        <input id="dtnai" type="date">

        <p id="noco" name = "nomecompleto" >Nome completo:</p>
        <input id="nocoi" type="text">

        <p id="cpf" name = "cpf" >CPF:</p>
        <input id="cpfi"  type="text" placeholder="Apenas números">

        <p id="datana" name = "datanascimento" >Data de nascimento:</p>
        <input id="datanai"  type="date">

        <p id="grau" name = "graudeparentesco" > Grau de parentesco com o responsável:</p>
       <input id="graui" type="text">

        <p id="s" >Seu sexo:</p>
        <select name="select" id="sexo" style="position: absolute; top: 275px; margin-left: 165px;">
            <option value="valor1">Masculino</option>
            <option value="valor2">Feminino</option>
            <option value="valor3">Outros</option>
            <option value="valor3">Prefiro não dizer</option>
          </select>
    
       <p id="ncar">Numero da carteirinha Medical Group:</p>
        <input id="ncari" type="text" placeholder="Apenas números">

        <p id="sim">Se sim, qual:</p>
        <input id="simi" type="text">

        <p id="p">Você tem nosso plano:</p>
        <select name="select" id="plano" style="position: absolute; top: 155px; margin-left: 485px;">
            <option value="valor1">Tenho</option>
            <option value="valor2">Não tenho</option>
        </select>
        
</form>

</body>
</html>