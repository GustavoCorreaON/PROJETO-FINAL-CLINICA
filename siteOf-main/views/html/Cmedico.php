<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical group</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../views/css/cadastroM.css">
    <style>
      @font-face {
          font-family: 'anticslab';
          src: url(../outros/MonoSpatial[1]\ \(1\).ttf)
          format('truetype');
        }</style>
        
<div id="bola1">
    </div>
        <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasG"><div id="voltar">
            <p>voltar</p>
        </div></a>
        <div id="M"><p> Médico </p> </div>
        
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>
</head>
<body>
<form action="/Projeto_SP_Medical_Group_Final/siteOf-main/Cmedico" method= "POST" >

    <input type="submit" value="Salvar" id="salvar">

        <p id="np" name = "nomecompleto" >Nome completo:</p>
       <input id="npi" name="nome_completo" type="text">

       <p id="ncrm" name = "numerocrm" >Numero do CRM:</p>
       <input id="ncrmi"type="text" name="crm" placeholder="Apenas números">

       <p id="esp" name = "especializacao" >Especialização:</p>
       <input id="espi" name="especializacao" type="text">

       <p id="cpf" name = "cpf" >CPF:</p>
       <input id="cpfi" name="cpf" type="text">

       <p id="email" name = "email" >Email:</p>
       <input id="emaili" name="email"  type="email" >

       <p id="senha" name = "senha" >Senha:</p>
       <input id="senhai" name="senha"  type="password">
       
       <p id="dtna" name = "datanascimento" >Data de nascimento:</p>
       <input id="dtnai" name="data_nascimento" type="date">
       
       <p id="cremail" name = "emailclinica" >Crie um email para clínica:</p>
       <input id="cremaili" name="email_clinica" type="email">

       <p id="coemail" name = "senha" >Crie uma senha para clinica:</p>
       <input id="coemaili" name="senha_clinica" type="password">


</form>
</body>
</html>