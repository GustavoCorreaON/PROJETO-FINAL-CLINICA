<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical group</title>
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../views/css/cadastroA.css">
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
        <div id="M"><p> Atualizar admistrador </p> </div>
    <div id="bola2"></h5></div>
    <div id="informa"><table>
       </table></div>

</head>        
<body>
    
<form action="/Projeto_SP_Medical_Group_Final/siteOf-main/Cadmistrador_update" method= "POST" >

    

<input type="hidden" name="id" value="<?php echo $admistradorInfo['id_admistrador']; ?>">

<p id="nc" name="nomecompleto">Nome Completo:</p>
<input id="nci" name="nome_completo" type="text" value="<?php echo $admistradorInfo['nome_completo']; ?>" placeholder="" required>

<p id="cpf" name="cpf">CPF:</p>
<input id="cpfi" type="text" name="cpf" value="<?php echo $admistradorInfo['cpf']; ?>" placeholder="Apenas números" required>

<p id="email" name="email">Email:</p>
<input id="emaili" name="email" type="text" value="<?php echo $admistradorInfo['email']; ?>" placeholder="" required>

<p id="cremail" name="emailclinica">Email para Clínica:</p>
<input id="cremaili" name="email_clinica" type="text" value="<?php echo $admistradorInfo['email_clinica']; ?>" placeholder="" required>

<p id="coema" name="confirmeemailclinica">Senha para Clínica:</p>
<input id="coemai" name="senha_clinica" type="password" value="<?php echo $admistradorInfo['senha_clinica']; ?>" placeholder="" required>

<p id="dtna" name="datanascimento">Data de Nascimento:</p>
<input id="dtnai" name="data_nascimento" type="date" value="<?php echo $admistradorInfo['data_nascimento']; ?>" required>

<input type="submit" value="Salvar" id="salvar"> 

       </form>
       
</body>
</html>