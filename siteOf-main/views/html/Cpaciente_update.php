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
        <a href="cadastro-g.html"><div id="voltar">
            <p>voltar</p>
        </div></a>
        <div id="P"><p> Paciente </p> </div>
        
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>
</head>
<body>
    <form action="/Projeto_SP_Medical_Group_Final/siteOf-main/Cpaciente_update" method= "POST" >
    <input type="hidden" name="id" value="<?php echo $pacienteInfo['id']; ?>">
        
    <h1 id="infp">Informação do paciente</h1>
    <h1 id="infr">Informação do responsável</h1>

    <p id="np">Nome do paciente:</p>
    <input id="npin" name="nome_completo_crianca" type="text" value="<?php echo $pacienteInfo['nome_completo_crianca']; ?>">

    <p id="ncrm">Número do CPF:</p>
    <input id="ncrmi" name="cpf_crianca" type="text" placeholder="Apenas números" value="<?php echo $pacienteInfo['cpf_crianca']; ?>">

    <p id="ncon">Número para contato:</p>
    <input id="nconi" name="contato_responsavel" type="text" value="<?php echo $pacienteInfo['contato_responsavel']; ?>">

    <p id="email">Email:</p>
    <input id="emaili" name="email_responsavel" type="text" value="<?php echo $pacienteInfo['email_responsavel']; ?>">

    <p id="senha">Senha:</p>
    <input id="senhai" name="senha_responsavel" type="password" value="<?php echo $pacienteInfo['senha_responsavel']; ?>">

    <p id="dtna">Data de nascimento:</p>
    <input id="dtnai" name="data_nascimento_crianca" type="date" value="<?php echo $pacienteInfo['data_nascimento_crianca']; ?>">

    <p id="noco">Nome completo:</p>
    <input id="nocoi" name="nome_responsavel" type="text" value="<?php echo $pacienteInfo['nome_responsavel']; ?>">

    <p id="cpf">CPF:</p>
    <input id="cpfi" name="cpf_responsavel" type="text" placeholder="Apenas números" value="<?php echo $pacienteInfo['cpf_responsavel']; ?>">

    <p id="datana">Data de nascimento:</p>
    <input id="datanai" name="data_nascimento_responsavel" type="date" value="<?php echo $pacienteInfo['data_nascimento_responsavel']; ?>">

    <p id="grau">Grau de parentesco com o responsável:</p>
    <input id="graui" name="grau_parentesco" type="text" value="<?php echo $pacienteInfo['grau_parentesco']; ?>">

    <p id="s">Seu sexo:</p>
    <select name="sexo_crianca" id="sexo" style="position: absolute; top: 275px; margin-left: 165px;">
        <option value="Masculino" <?php echo $pacienteInfo['sexo_crianca'] == 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
        <option value="Feminino" <?php echo $pacienteInfo['sexo_crianca'] == 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
        <option value="Outros" <?php echo $pacienteInfo['sexo_crianca'] == 'Outros' ? 'selected' : ''; ?>>Outros</option>
        <option value="Prefiro não dizer" <?php echo $pacienteInfo['sexo_crianca'] == 'Prefiro não dizer' ? 'selected' : ''; ?>>Prefiro não dizer</option>
    </select>

    <p id="ncar">Número da carteirinha Medical Group:</p>
    <input id="ncari" type="text" name="numero_carteirinha" placeholder="Apenas números" value="<?php echo $pacienteInfo['numero_carteirinha']; ?>">

    <p id="sim">Se sim, qual:</p>
    <input id="simi" name="qual_plano" type="text" value="<?php echo $pacienteInfo['qual_plano']; ?>">

    <p id="p">Você tem nosso plano:</p>
    <select name="plano_crianca" id="plano" style="position: absolute; top: 155px; margin-left: 485px;">
        <option value="Tenho" <?php echo $pacienteInfo['plano_crianca'] == 'Tenho' ? 'selected' : ''; ?>>Tenho</option>
        <option value="Não tenho" <?php echo $pacienteInfo['plano_crianca'] == 'Não tenho' ? 'selected' : ''; ?>>Não tenho</option>
    </select>
    
        <input type="submit" value="Salvar" id="salvar">
        
</form>

</body>
</html>