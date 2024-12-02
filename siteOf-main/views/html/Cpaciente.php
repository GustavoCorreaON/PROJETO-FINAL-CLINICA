<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical group</title>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../views/css/cadastroP.css">
    <style>
      @font-face {
          font-family: 'anticslab';
          src: url(../outros/MonoSpatial[1]\ \(1\).ttf)
          format('truetype');
        }</style>

<div id="bola1">
    </div>
        <a href="/Projeto_SP_Medical_Group_Final/siteOf-main/public/CadasG"><div id="voltar"><p>voltar</p></div></a>
        <div id="P"><p> Paciente </p> </div>
        
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>
</head>
<body>
    <form action="/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente" method= "POST" >
        <input type="submit" value="Salvar" id="salvar"> 
        
       <h1 id="infp" name = "" >Informação do paciente</h1>
       <h1 id="infr">Informação do responsavel</h1>

       <p id="np"  >Nome do paciente:</p>
       <input id="npin" name="nome_completo_crianca" type="text">

       <p id="ncrm" name = "cpfdopaciente" >Numero do CPF:</p>
       <input id="ncrmi" name="cpf_crianca" type="text" placeholder="Apenas números">

       <p id="ncon" name = "numeroparacontato" >Numero para contato:</p>
       <input id="nconi" name="contato_responsavel" type="text">

       <p id="email" name = "email" >Email:</p>
       <input id="emaili" name="email_responsavel" type="text">

       <p id="senha" name = "senhaclinica" >Senha:</p>
       <input id="senhai" name="senha_responsavel" type="password">

       <p id="dtna" name = "datanascimentopaciente" >Data de nascimento:</p>
        <input id="dtnai" name="data_nascimento_crianca" type="date">

        <p id="noco" name = "nomecompleto" >Nome completo:</p>
        <input id="nocoi" name="nome_responsavel" type="text">

        <p id="cpf" name = "cpf" >CPF:</p>
        <input id="cpfi"  type="text" name="cpf_responsavel" placeholder="Apenas números">

        <p id="datana" name = "datanascimento" >Data de nascimento:</p>
        <input id="datanai" name="data_nascimento_responsavel"  type="date">

        <p id="grau" name = "graudeparentesco" > Grau de parentesco com o responsável:</p>
       <input id="graui" name="grau_parentesco" type="text">

        <p id="s" >Seu sexo:</p>
        <select name="sexo_crianca" id="sexo" style="position: absolute; top: 275px; margin-left: 165px;">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
            <option value="Prefiro não dizer">Prefiro não dizer</option>
          </select>
    
       <p id="ncar">Numero da carteirinha Medical Group:</p>
        <input id="ncari" type="text" name="numero_carteirinha" placeholder="Apenas números">

        <p id="sim">Se sim, qual:</p>
        <input id="simi" name="qual_plano" type="text">

        <p id="p">Você tem nosso plano:</p>
        <select name="plano_crianca" id="plano" style="position: absolute; top: 155px; margin-left: 485px;">
            <option value="Tenho">Tenho</option>
            <option value="Não tenho">Não tenho</option>
        </select>
        
</form>

</body>
</html>